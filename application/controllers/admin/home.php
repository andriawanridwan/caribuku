<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('status') != true){
            redirect('admin/login');
        }
        $this->load->helper('template_helper');
        $this->load->view('home');
    }

}

/* End of file home.php */
?>