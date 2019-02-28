<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class front extends CI_Controller {

    public function index()
    {
        $this->load->model('my_model');
        $data['record'] = $this->my_model->join();
        $this->load->view('cari',$data);
    }

    public function tambah(){
        $this->load->model('my_model');
        $post = $this->input->post('cari_buku');
        
        $this->my_model->cari('');
    }

}

/* End of file front.php */
?>