<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModelo;
class Panel extends CI_Controller
{

	public function __construct() {
     	//helper(['form', 'url']);
       	parent::__construct();    	            	
       $this->very_sesion();
    }

    public function index()
    {
    	echo "Hola usuario:".$this->session->userdata('usuario');

    }
    
    function very_sesion()
    {
     if(!$this->session->userdata('usuario'))
     {
     	redirect(base_url().'login');
     }
    }