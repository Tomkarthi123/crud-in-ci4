<?php 
namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table = 'users'; 
    protected $primaryKey = 'user_id';

    protected $returnType = 'array';

    protected $allowedFields = ['user_name','user_email','gender','user_contact'];
    protected $useTimestamps = false;

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}