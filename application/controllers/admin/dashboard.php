<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        
          /*session checks */ 

    if($this->session->userdata('is_logged_in')=='')
    {
     $this->session->set_flashdata('msg','Please Login to Continue');
     redirect('login');
   }

    }

    Public function index()
    {
        $this->load->view('admin/header');
    	$this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
}
           
