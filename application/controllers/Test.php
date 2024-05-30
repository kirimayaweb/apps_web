<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Test_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $test = $this->Test_model->get_all();

        $data = array(
            'test_data' => $test
        );

        $this->template->load('template','test_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Test_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'uuid' => $row->uuid,
		'nama_property' => $row->nama_property,
		'nama_komplek' => $row->nama_komplek,
	    );
            $this->template->load('template','test_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('test'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('test/create_action'),
	    'id' => set_value('id'),
	    'uuid' => set_value('uuid'),
	    'nama_property' => set_value('nama_property'),
	    'nama_komplek' => set_value('nama_komplek'),
	);
        $this->template->load('template','test_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'uuid' => $this->input->post('uuid',TRUE),
		'nama_property' => $this->input->post('nama_property',TRUE),
		'nama_komplek' => $this->input->post('nama_komplek',TRUE),
	    );

            $this->Test_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('test'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Test_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('test/update_action'),
		'id' => set_value('id', $row->id),
		'uuid' => set_value('uuid', $row->uuid),
		'nama_property' => set_value('nama_property', $row->nama_property),
		'nama_komplek' => set_value('nama_komplek', $row->nama_komplek),
	    );
            $this->template->load('template','test_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('test'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'uuid' => $this->input->post('uuid',TRUE),
		'nama_property' => $this->input->post('nama_property',TRUE),
		'nama_komplek' => $this->input->post('nama_komplek',TRUE),
	    );

            $this->Test_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('test'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Test_model->get_by_id($id);

        if ($row) {
            $this->Test_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('test'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('test'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('uuid', 'uuid', 'trim|required');
	$this->form_validation->set_rules('nama_property', 'nama property', 'trim|required');
	$this->form_validation->set_rules('nama_komplek', 'nama komplek', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "test.xls";
        $judul = "test";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Uuid");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Property");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Komplek");

	foreach ($this->Test_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->uuid);
	    xlsWriteNumber($tablebody, $kolombody++, $data->nama_property);
	    xlsWriteNumber($tablebody, $kolombody++, $data->nama_komplek);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=test.doc");

        $data = array(
            'test_data' => $this->Test_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('test_doc',$data);
    }

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-05-05 06:31:25 */
/* http://harviacode.com */