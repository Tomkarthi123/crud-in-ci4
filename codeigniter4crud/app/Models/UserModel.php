<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['user_name','user_email','gender','user_contact','user_address','user_password','user_created_at','picture','type'];

    
}