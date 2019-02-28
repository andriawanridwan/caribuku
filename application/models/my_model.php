<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class my_model extends CI_Model {
    public function read($table,$order){
		/* $query = $this->db->query("SELECT * FROM $table order by ID Desc"); */
		$this->db->from($table);
		$this->db->order_by($order, 'DESC');
		$query = $this->db->get();
		if($query->num_rows()>0){
			foreach($query->result_array() as $row){
				$data[] = $row;
			}
			$query->free_result();
		}

		else
		{
			$data = null;
		}
		return $data;
		}
		public function lihat($table){
			return $this->db->get($table);
		}
    
    public function create($table,$data){
		$this->db->insert($table,$data);
		}
		
		public function join(){
				$sql = "select tr.*, tl.*,tb.* 
				from tb_rak as tr, tb_letakbuku as tl, tb_buku as tb
				where tl.id_buku = tb.id_buku and tl.id_rak = tr.id_rak";

				return $this->db->query($sql);
		}
    
    public function edit($id,$table,$where){
		$this->db->where($where,$id);
		$query = $this->db->get($table);
		if($query->num_rows()>0){
			$data = $query->row();
			$query->free_result();
		}
		else{
			$data = null;
		}
		return $data;
	}


	public function update($id,$data,$table,$where){
		$this->db->where($where,$id);
		$this->db->update($table,$data);
	}


	public function delete($id,$table,$where){
		$this->db->where($where, $id);
		$this->db->delete($table);
	}

	public function total_field($field,$value,$table){
		$query = $this->db->where($field, $value)->get($table);
		return $query->num_rows();
	}


	public function total_rows($table){
		return $this->db->count_all_results($table);
	}
}