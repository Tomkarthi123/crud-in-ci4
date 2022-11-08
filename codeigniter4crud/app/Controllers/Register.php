<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller
{
	public function index()
	{
		//include helper form
		helper(['form']);
		$data = [];
		echo view('register', $data);
	}

	public function save()
	{
		//include helper form
		helper(['form']);
		//set rules validation form
		$rules = [
			'name' 			=> 'required|min_length[3]|max_length[20]',
			'email' 		=> 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
			'gender' 		=> 'required[select gender]',
			'address' 		=> 'required|min_length[6]|max_length[70]',
			'contact' 		=> 'required|max_length[10]',
			'password' 		=> 'required|min_length[3]|max_length[200]',
			'confpassword' 	=> 'matches[password]'
		];

		if($this->validate($rules)){
			$model = new UserModel();
			$this->data['request'] = $this->request;
			$img = $this->request->getFile('picture');
        $img->move(ROOTPATH.'tests/picture'); //WRITEPATH
			$data = [
				'user_name' 	=> $this->request->getVar('name'),
				'user_email' 	=> $this->request->getVar('email'),
				'gender' 	    => $this->request->getVar('gender'),
				'user_address' 	=> $this->request->getVar('address'),
				'user_contact' 	=> $this->request->getVar('contact'),
				'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
				'picture' =>  $img->getName(),
				'type'  => $img->getClientMimeType()
			];
			//$model->save($data);
            $save = $model->insert($data);
			if($save){
			echo ('added sucessfully');
			return redirect()->to('/login');
			}else{
				echo ('failed');
			}
			
		}else{
			$data['validation'] = $this->validator;
			echo view('register', $data);
		}
		
	}

	

}