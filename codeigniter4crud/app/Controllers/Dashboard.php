<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {   
        
        $session = session();
         echo view('crud/home'),("Welcome back, ".$session->get('user_name'));
        
    }
}