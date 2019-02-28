<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('my_model');
        $this->load->helper('template_helper');        
    }

    public function login($param=null){
        $post = $this->input->post();

        if($param == 'kirim'){
            $where = array(
                'username'  => $post['username'],
                'password'  => $post['password'],
                
            );

            $cek = $this->db->get_where('tb_user',$where)->num_rows();
            if($cek > 0){
                $data = array(
                    'username'  => $post['username'],
                    'status'    => true
                );
                $this->session->set_userdata($data);
                redirect(base_url('admin/'));
            }else{
                $status = array('status' => 'success', 'message' => 'Username atau password salah');
			    $this->session->set_flashdata($status);
                redirect(base_url('admin/login'));
            }
        }
        $this->load->view('login');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }

    
}