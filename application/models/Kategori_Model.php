<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_Model extends CI_Model 
{

	public function index()
	{	
		$this->db->where('deleted_at is null', null);
		return $this->db->get('kategori');
	}

	public function create($data)	
	{
		if($this->db->insert('kategori', $data))
		{
			return true;
		}else{
			return false;
		}
	}

	public function edit($id)
	{
		$this->db->where('id_kategori', $id);
		return $this->db->get('kategori');	
	}

	public function update($data, $id)
	{
		$this->db->set($data);
		$this->db->where('id_kategori', $id);
		$this->db->update('kategori');
	}

	public function delete($id)
	{
		$this->db->where('id_kategori', $id);
		if($this->db->delete('kategori'))
		{
			return true;
		}else
		{
			return false;
		}
	}

	public function soft_delete($data, $id)
	{
		$this->db->set($data);
		$this->db->where('id_kategori', $id);
		$this->db->update('kategori');
	}
}





























