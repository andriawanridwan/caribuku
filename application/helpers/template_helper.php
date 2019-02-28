<?php
    function get_template_directory($path,$dir_file){

		$Replace_path 		= str_replace('\\', '/', $path);
		$get_digit_doc_root = strlen("C:/xampp/htdocs/eskul");
		$full_path			= substr($Replace_path, $get_digit_doc_root);
		return "http://localhost/eskul/".$full_path.'/'.$dir_file;
	}

	function get_template($view){
		$_this =& get_instance();
		return $_this->load->view($view);
	}

	function is_active_page_print($page,$class){
		$_this =& get_instance();
		if($page == $_this->uri->segment(1)){
			return $class;
		}
	}

	function active($page,$class){
		$_this =& get_instance();
		if($_this->uri->segment(1) == 'admin' && $page == $_this->uri->segment(2)){
			return $class;
		}
	}

	function kode($kd,$table,$new_kd)
	{
    // BR001
    $CI=& get_instance();
    $chek=$CI->db->query("select $kd from $table order by $kd DESC");
    if($chek->num_rows()>0){
        $chek=$chek->row_array();
        $lastKode=$chek[$kd];
        $ambil=  substr($lastKode, 3)+1;
        $newCode=  $new_kd.'-'.sprintf("%06s",$ambil);
        return $newCode;
    }
    else{
        return $new_kd.'-000001';
    }
	}

	function admin(){
		$_this =& get_instance();
		return $_this->session->userdata('level') == 'admin' ;
	}


	function notif($tag_open=NULL,$field=NULL,$tag_close=NULL){
		$_this =& get_instance();		
		$message = $_this->session->flashdata();
		$display = NULL;
		if(array_key_exists($field, $message)){
			$display = $tag_open.@$message[$field].$tag_close;
		}
		
		return $display;
	}
?>