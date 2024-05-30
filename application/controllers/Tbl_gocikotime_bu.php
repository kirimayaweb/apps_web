<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_gocikotime extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_gocikotime_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tbl_gocikotime/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tbl_gocikotime/index/';
            $config['first_url'] = base_url() . 'index.php/tbl_gocikotime/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_gocikotime_model->total_rows($q);
        $tbl_gocikotime = $this->Tbl_gocikotime_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_gocikotime_data' => $tbl_gocikotime,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tbl_gocikotime/tbl_gocikotime_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_gocikotime_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'idtoko' => $row->idtoko,
		'namatoko' => $row->namatoko,
		'waktugociko' => $row->waktugociko,
		'tahun' => $row->tahun,
		'bulan' => $row->bulan,
		'hari' => $row->hari,
		'jam' => $row->jam,
		'menit' => $row->menit,
		'detik' => $row->detik,
	    );
            $this->template->load('template','tbl_gocikotime/tbl_gocikotime_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_gocikotime'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_gocikotime/create_action'),
	    'id' => set_value('id'),
	    'idtoko' => set_value('idtoko'),
	    'namatoko' => set_value('namatoko'),
	    'waktugociko' => set_value('waktugociko'),
	    'tahun' => set_value('tahun'),
	    'bulan' => set_value('bulan'),
	    'hari' => set_value('hari'),
	    'jam' => set_value('jam'),
	    'menit' => set_value('menit'),
	    'detik' => set_value('detik'),
	);
        $this->template->load('template','tbl_gocikotime/tbl_gocikotime_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {

            // $date_data_waktu_mulai = DateTime::createFromFormat("Y-m-d H:i:s",$this->input->post('waktugociko',TRUE));
            // $get_jam_mulai = $date_data_waktu_mulai->format("H");
            // $get_menit_mulai = $date_data_waktu_mulai->format("i");



            $data = array(
		'idtoko' => $this->input->post('idtoko',TRUE),
		'namatoko' => $this->input->post('namatoko',TRUE),
		'waktugociko' => $this->input->post('waktugociko',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'bulan' => $this->input->post('bulan',TRUE),
		'hari' => $this->input->post('hari',TRUE),
		'jam' => $this->input->post('jam',TRUE),
		'menit' => $this->input->post('menit',TRUE),
		'detik' => $this->input->post('detik',TRUE),
	    );

            $this->Tbl_gocikotime_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('tbl_gocikotime'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_gocikotime_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_gocikotime/update_action'),
		'id' => set_value('id', $row->id),
		'idtoko' => set_value('idtoko', $row->idtoko),
		'namatoko' => set_value('namatoko', $row->namatoko),
		'waktugociko' => set_value('waktugociko', $row->waktugociko),
		'tahun' => set_value('tahun', $row->tahun),
		'bulan' => set_value('bulan', $row->bulan),
		'hari' => set_value('hari', $row->hari),
		'jam' => set_value('jam', $row->jam),
		'menit' => set_value('menit', $row->menit),
		'detik' => set_value('detik', $row->detik),
	    );
            $this->template->load('template','tbl_gocikotime/tbl_gocikotime_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_gocikotime'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'idtoko' => $this->input->post('idtoko',TRUE),
		'namatoko' => $this->input->post('namatoko',TRUE),
		'waktugociko' => $this->input->post('waktugociko',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'bulan' => $this->input->post('bulan',TRUE),
		'hari' => $this->input->post('hari',TRUE),
		'jam' => $this->input->post('jam',TRUE),
		'menit' => $this->input->post('menit',TRUE),
		'detik' => $this->input->post('detik',TRUE),
	    );

            $this->Tbl_gocikotime_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_gocikotime'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_gocikotime_model->get_by_id($id);

        if ($row) {
            $this->Tbl_gocikotime_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_gocikotime'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_gocikotime'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idtoko', 'idtoko', 'trim|required');
	$this->form_validation->set_rules('namatoko', 'namatoko', 'trim|required');
	// $this->form_validation->set_rules('waktugociko', 'waktugociko', 'trim|required');
	// $this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
	// $this->form_validation->set_rules('bulan', 'bulan', 'trim|required');
	// $this->form_validation->set_rules('hari', 'hari', 'trim|required');
	$this->form_validation->set_rules('jam', 'jam', 'trim|required');
	$this->form_validation->set_rules('menit', 'menit', 'trim|required');
	// $this->form_validation->set_rules('detik', 'detik', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_gocikotime.php */
/* Location: ./application/controllers/Tbl_gocikotime.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-02-09 05:43:53 */
/* http://harviacode.com */