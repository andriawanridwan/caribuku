<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class rakbuku extends CI_Controller {

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
        $data['record'] = $this->my_model->lihat('tb_rak');
        $this->load->view('rak_buku',$data);   
    }

    public function tambah(){
        $post = $this->input->post();

        $data = array(
            'nama_rak'  => $post['nama_rak']
        );
        $this->db->insert('tb_rak',$data);
        echo "<script>alert('Berhasil Tambah Data')</script>";
        redirect('admin/rakbuku');
    }

    public function hapus($id=0){
		$this->my_model->delete($id,'tb_rak','id_rak');
		redirect(base_url('admin/rakbuku'));
	}

}

/* End of file rakbuku.php */
?>