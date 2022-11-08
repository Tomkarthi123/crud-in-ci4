<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Ajaxform;

class AjaxController extends BaseController
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		helper(['form', 'url']);
		$this->Ajaxform = new Ajaxform();
	}

	/**
	 * Show Ajax Form
	 * @param NA
	 * @return view
	 */
	public function index()
	{
		return view('ajax-form');
	}

	/**
	 * Ajax Form Store Data
	 * @param NA
	 * @return response
	 */
	public function store()
	{
		$data = [
			'name' => $this->request->getVar('name'),
			'email' => $this->request->getVar('email'),
			'password' => $this->request->getVar('password'),
			'phone' => $this->request->getVar('phone'),
			'address' => $this->request->getVar('address'),
		];

		$result = $this->Ajaxform->save($data);
		if ($result) {
			return $this->response->setJSON(['status' => 'success', 'message' => 'User registered successfully']);
		}
		return $this->response->setJSON(['status' => 'failed', 'message' => 'Failed to register']);
	}
}