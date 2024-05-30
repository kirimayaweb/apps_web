<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_property_detail_model extends CI_Model
{

    public $table = 'tbl_property_detail';
    public $id = 'id';
    public $id_tbl_property = 'id_tbl_property';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    function get_by_id_tbl_property($id_tbl_property)
    {
        $this->db->where($this->id_tbl_property, $id_tbl_property);
        return $this->db->get($this->table)->result();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('id_tbl_property', $q);
	$this->db->or_like('posisi', $q);
	$this->db->or_like('deskripsi', $q);
	$this->db->or_like('poto', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('id_tbl_property', $q);
	$this->db->or_like('posisi', $q);
	$this->db->or_like('deskripsi', $q);
	$this->db->or_like('poto', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Tbl_property_detail_model.php */
/* Location: ./application/models/Tbl_property_detail_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-05-08 08:17:05 */
/* http://harviacode.com */