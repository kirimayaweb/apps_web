<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_mp3 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // is_login();
        $this->load->model('Tbl_mp3_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tbl_mp3/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tbl_mp3/index/';
            $config['first_url'] = base_url() . 'index.php/tbl_mp3/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_mp3_model->total_rows($q);
        $tbl_mp3 = $this->Tbl_mp3_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_mp3_data' => $tbl_mp3,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tbl_mp3/tbl_mp3_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_mp3_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'kode_mp3' => $row->kode_mp3,
		'judul' => $row->judul,
		'keterangan' => $row->keterangan,
	    );
            $this->template->load('template','tbl_mp3/tbl_mp3_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_mp3'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_mp3/create_action'),
	    'id' => set_value('id'),
	    'kode_mp3' => set_value('kode_mp3'),
	    'judul' => set_value('judul'),
	    'keterangan' => set_value('keterangan'),
	);
        $this->template->load('template','tbl_mp3/tbl_mp3_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_mp3' => $this->input->post('kode_mp3',TRUE),
		'judul' => $this->input->post('judul',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
	    );

            $this->Tbl_mp3_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('tbl_mp3'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_mp3_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_mp3/update_action'),
		'id' => set_value('id', $row->id),
		'kode_mp3' => set_value('kode_mp3', $row->kode_mp3),
		'judul' => set_value('judul', $row->judul),
		'keterangan' => set_value('keterangan', $row->keterangan),
	    );
            $this->template->load('template','tbl_mp3/tbl_mp3_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_mp3'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'kode_mp3' => $this->input->post('kode_mp3',TRUE),
		'judul' => $this->input->post('judul',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
	    );

            $this->Tbl_mp3_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_mp3'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_mp3_model->get_by_id($id);

        if ($row) {
            $this->Tbl_mp3_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_mp3'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_mp3'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_mp3', 'kode mp3', 'trim|required');
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_mp3.xls";
        $judul = "tbl_mp3";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Mp3");
	xlsWriteLabel($tablehead, $kolomhead++, "Judul");
	xlsWriteLabel($tablehead, $kolomhead++, "Keterangan");

	foreach ($this->Tbl_mp3_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kode_mp3);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keterangan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_mp3.doc");

        $data = array(
            'tbl_mp3_data' => $this->Tbl_mp3_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tbl_mp3/tbl_mp3_doc',$data);
    }

}

/* End of file Tbl_mp3.php */
/* Location: ./application/controllers/Tbl_mp3.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-10-29 01:23:53 */
/* http://harviacode.com */