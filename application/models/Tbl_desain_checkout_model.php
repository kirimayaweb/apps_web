<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_desain_checkout_model extends CI_Model
{

    public $table = 'tbl_desain_checkout';
    public $id = 'id';
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
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('uuid_checkout', $q);
	$this->db->or_like('group_desain', $q);
	$this->db->or_like('nama_desain', $q);
	$this->db->or_like('model', $q);
	$this->db->or_like('paket', $q);
	$this->db->or_like('jumlah_lantai', $q);
	$this->db->or_like('uuid_property', $q);
	$this->db->or_like('nama_property', $q);
	$this->db->or_like('tipe_property', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('kota', $q);
	$this->db->or_like('nama_komplek', $q);
	$this->db->or_like('lokasi', $q);
	$this->db->or_like('luas_tanah', $q);
	$this->db->or_like('luas_bangunan', $q);
	$this->db->or_like('jumlah_kamar', $q);
	$this->db->or_like('jumlah_kamar_mandi', $q);
	$this->db->or_like('harga', $q);
	$this->db->or_like('nama_pemesan', $q);
	$this->db->or_like('nmr_wa', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('uuid_checkout', $q);
	$this->db->or_like('group_desain', $q);
	$this->db->or_like('nama_desain', $q);
	$this->db->or_like('model', $q);
	$this->db->or_like('paket', $q);
	$this->db->or_like('jumlah_lantai', $q);
	$this->db->or_like('uuid_property', $q);
	$this->db->or_like('nama_property', $q);
	$this->db->or_like('tipe_property', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('kota', $q);
	$this->db->or_like('nama_komplek', $q);
	$this->db->or_like('lokasi', $q);
	$this->db->or_like('luas_tanah', $q);
	$this->db->or_like('luas_bangunan', $q);
	$this->db->or_like('jumlah_kamar', $q);
	$this->db->or_like('jumlah_kamar_mandi', $q);
	$this->db->or_like('harga', $q);
	$this->db->or_like('nama_pemesan', $q);
	$this->db->or_like('nmr_wa', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->set('uuid_checkout', "replace(uuid(),'-','')", FALSE);
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

/* End of file Tbl_desain_checkout_model.php */
/* Location: ./application/models/Tbl_desain_checkout_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-05-30 07:36:00 */
/* http://harviacode.com */