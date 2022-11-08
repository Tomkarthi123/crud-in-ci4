<?php

namespace App\Models;

use CodeIgniter\Model;

class Ajaxform extends Model
{
	protected $DBGroup            = 	'default';
	protected $table              = 	'ajaxForms';
	protected $primaryKey         = 	'id';
	protected $useAutoIncrement   = 	true;
	protected $protectFields      = 	true;
	protected $allowedFields      = 	['name', 'email', 'password', 'address'];

	// Dates
	protected $useTimestamps      = 	false;
	protected $dateFormat         = 	'timestamp';
	protected $createdField       = 	'created_at';
	protected $updatedField       = 	'updated_at';
}