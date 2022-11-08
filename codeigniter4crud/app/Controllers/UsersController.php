<?php namespace App\Controllers;

use App\Models\Users;

class UsersController extends BaseController{

  public function index(){
    return redirect()->route('loadRecord');
  }

  public function loadRecord(){
    $request = service('request');
    $searchData = $request->getGet();

    $search = "";
    if(isset($searchData) && isset($searchData['search'])){
       $search = $searchData['search'];
    }

    // Get data 
    $users = new Users();

    if($search == ''){
      $paginateData = $users->paginate(3);
    }else{
      $paginateData = $users->select('*')
          ->orLike('user_name', $search)
          ->orLike('user_email', $search)
          ->orLike('gender', $search)
          ->paginate(3);
    }

    $data = [
      'users' => $paginateData,
      'pager' => $users->pager,
      'search' => $search
    ];

    return view('index',$data); 
  }
   // show single user
   public function singleUser($id = null){
    $Users = new Users();
    $data['user_obj'] = $Users->where('user_id', $id)->first();
    return view('edit_view', $data);
}
  //update
  public function update(){
    $Users = new Users();
    $id = $this->request->getVar('user_id');
    $data = [
        'user_name' => $this->request->getVar('user_name'),
        'user_email'  => $this->request->getVar('user_email'),
    ];
    $Users->update($id, $data);
    return $this->response->redirect(site_url('/loadRecord'));
}
//delete
  public function delete($id = null){
    $Users = new Users();
    $data['user'] = $Users->where('user_id', $id)->delete($id);
    return $this->response->redirect(site_url('/loadRecord'));
}  

}