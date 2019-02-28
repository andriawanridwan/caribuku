<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class letakbuku extends CI_Controller {

    function __construct(){
		 parent::__construct();
		 $this->load->model('my_model');
         $this->load->helper('template_helper');
         if($this->session->userdata('status') != true){
            redirect('admin/login');
        }
	 }

    public function index()
    {
        $data['record'] = $this->my_model->join();
        $data['buku'] = $this->my_model->lihat('tb_buku');
        $data['rak'] = $this->my_model->lihat('tb_rak');
        $this->load->view('letak_buku',$data);   
    }

    public function tambah(){
        $post = $this->input->post();

        $data = array(
            'id_buku' => $post['buku'],
            'id_rak'    => $post['rak']
        );
        $this->db->insert('tb_letakbuku',$data);
        echo "<script>alert('Berhasil Tambah Data')</script>";
        redirect('admin/letakbuku');
    }

    public function hapus($id=0){
		$this->my_model->delete($id,'tb_letakbuku','id_letakbuku');
		redirect(base_url('admin/letakbuku'));
	}

}

/* End of file rakbuku.php */
?>