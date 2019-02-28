<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct(){
		 parent::__construct();
		 if($this->session->userdata('status') != true){
            redirect('admin/login');
        }
		 $this->load->model('my_model');
		 $this->load->helper('template_helper');
	 }
	public function index()
	{
		$data['record'] = $this->my_model->lihat('tb_buku');
		$this->load->view('welcome_message',$data);
	}
	public function tambah($param=null){
        $post = $this->input->post();
        
        if($param=='kirim'){
                $data = array(
                    'id_buku'       => $post['id_buku'],
                    'judul'         => ucwords($post['judul']),
                    'penulis'       => ucwords($post['penulis']),
                    'penerbit'      => ucwords($post['penerbit']),
                    'tahun'         => $post['tahun'],
                );
                    if($post['kd']){
                    $this->my_model->update($post['kd'],$data,'tb_buku','id_buku');
                    }else{
                        $this->db->insert('tb_buku',$data);
                    }
                    redirect(base_url('admin/buku'));                
                
        }else{
                $this->load->view('tambah_buku');
        }
    }
        public function edit($id=null){
        
        if(!empty($id)){
            $data['record'] = $this->my_model->edit($id,'tb_buku','id_buku');
            $this->load->view('edit_buku',$data); 
        }else{
            redirect(base_url('buku'));
        }

    }
    
    public function hapus($id=0){
		$this->my_model->delete($id,'tb_buku','id_buku');
		redirect(base_url('admin/buku'));
	}
}
