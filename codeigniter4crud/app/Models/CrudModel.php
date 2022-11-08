<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class CrudModel extends Model
{
    
    protected $table = 'contact_details';

    protected $primarykey = 'id';
   
    protected $allowedFields = ['firstname','lastname', 'gender', 'contact', 'email', 'address','picture','type'];
}