<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_toko extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_toko_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tbl_toko/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tbl_toko/index/';
            $config['first_url'] = base_url() . 'index.php/tbl_toko/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_toko_model->total_rows($q);
        $tbl_toko = $this->Tbl_toko_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_toko_data' => $tbl_toko,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tbl_toko/tbl_toko_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_toko_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idtoko' => $row->idtoko,
		'namatoko' => $row->namatoko,
		'lattitude' => $row->lattitude,
		'longitude' => $row->longitude,
		'kalurahan' => $row->kalurahan,
		'kecamatan' => $row->kecamatan,
		'kabupaten' => $row->kabupaten,
	    );
            $this->template->load('template','tbl_toko/tbl_toko_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_toko'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_toko/create_action'),
	    'idtoko' => set_value('idtoko'),
	    'namatoko' => set_value('namatoko'),
	    'lattitude' => set_value('lattitude'),
	    'longitude' => set_value('longitude'),
	    'kalurahan' => set_value('kalurahan'),
	    'kecamatan' => set_value('kecamatan'),
	    'kabupaten' => set_value('kabupaten'),
	);
        $this->template->load('template','tbl_toko/tbl_toko_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'namatoko' => $this->input->post('namatoko',TRUE),
		'lattitude' => $this->input->post('lattitude',TRUE),
		'longitude' => $this->input->post('longitude',TRUE),
		'kalurahan' => $this->input->post('kalurahan',TRUE),
		'kecamatan' => $this->input->post('kecamatan',TRUE),
		'kabupaten' => $this->input->post('kabupaten',TRUE),
	    );

            $this->Tbl_toko_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('tbl_toko'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_toko_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_toko/update_action'),
		'idtoko' => set_value('idtoko', $row->idtoko),
		'namatoko' => set_value('namatoko', $row->namatoko),
		'lattitude' => set_value('lattitude', $row->lattitude),
		'longitude' => set_value('longitude', $row->longitude),
		'kalurahan' => set_value('kalurahan', $row->kalurahan),
		'kecamatan' => set_value('kecamatan', $row->kecamatan),
		'kabupaten' => set_value('kabupaten', $row->kabupaten),
	    );
            $this->template->load('template','tbl_toko/tbl_toko_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_toko'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idtoko', TRUE));
        } else {
            $data = array(
		'namatoko' => $this->input->post('namatoko',TRUE),
		'lattitude' => $this->input->post('lattitude',TRUE),
		'longitude' => $this->input->post('longitude',TRUE),
		'kalurahan' => $this->input->post('kalurahan',TRUE),
		'kecamatan' => $this->input->post('kecamatan',TRUE),
		'kabupaten' => $this->input->post('kabupaten',TRUE),
	    );

            $this->Tbl_toko_model->update($this->input->post('idtoko', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_toko'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_toko_model->get_by_id($id);

        if ($row) {
            $this->Tbl_toko_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_toko'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_toko'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namatoko', 'namatoko', 'trim|required');

	$this->form_validation->set_rules('idtoko', 'idtoko', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_toko.xls";
        $judul = "tbl_toko";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Namatoko");

	foreach ($this->Tbl_toko_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namatoko);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_toko.doc");

        $data = array(
            'tbl_toko_data' => $this->Tbl_toko_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tbl_toko/tbl_toko_doc',$data);
    }

}

/* End of file Tbl_toko.php */
/* Location: ./application/controllers/Tbl_toko.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-06-03 06:16:42 */
/* http://harviacode.com */