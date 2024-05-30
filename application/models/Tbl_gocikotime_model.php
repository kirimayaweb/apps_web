<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_gocikotime_model extends CI_Model
{

    public $table = 'tbl_gocikotime';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        // $this->datatables->select('id,idtoko,namatoko,waktugociko,kode_mp3,tahun,bulan,hari,jam,menit,detik');
        $this->datatables->select('id,idtoko,namatoko,waktugociko,kode_mp3,judul_mp3,playtime_mp3,jam,menit,detik');
        $this->datatables->from('tbl_gocikotime');
        //add this line for join
        //$this->datatables->join('table2', 'tbl_gocikotime.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('tbl_gocikotime/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true">Ubah</i>', array('class' => 'btn btn-warning btn-sm'))." 
                ".anchor(site_url('tbl_gocikotime/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true">Hapus</i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id');
        return $this->datatables->generate();
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
	$this->db->or_like('idtoko', $q);
	$this->db->or_like('namatoko', $q);
	$this->db->or_like('waktugociko', $q);
	$this->db->or_like('tahun', $q);
	$this->db->or_like('bulan', $q);
	$this->db->or_like('hari', $q);
	$this->db->or_like('jam', $q);
	$this->db->or_like('menit', $q);
	$this->db->or_like('detik', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('idtoko', $q);
	$this->db->or_like('namatoko', $q);
	$this->db->or_like('waktugociko', $q);
	$this->db->or_like('tahun', $q);
	$this->db->or_like('bulan', $q);
	$this->db->or_like('hari', $q);
	$this->db->or_like('jam', $q);
	$this->db->or_like('menit', $q);
	$this->db->or_like('detik', $q);
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

/* End of file Tbl_gocikotime_model.php */
/* Location: ./application/models/Tbl_gocikotime_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-02-11 12:24:55 */
/* http://harviacode.com */