<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_desain extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_desain_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $tbl_desain = $this->Tbl_desain_model->get_all();

        $data = array(
            'tbl_desain_data' => $tbl_desain
        );

        $this->template->load('template','tbl_desain_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_desain_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'uuid' => $row->uuid,
		'id_users_pemilik' => $row->id_users_pemilik,
		'group_desain' => $row->group_desain,
		'nama_desain' => $row->nama_desain,
		'model' => $row->model,
		'paket' => $row->paket,
		'harga' => $row->harga,
		'deskripsi' => $row->deskripsi,
	    );
            $this->template->load('template','tbl_desain_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_desain'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_desain/create_action'),
	    'id' => set_value('id'),
	    'uuid' => set_value('uuid'),
	    'id_users_pemilik' => set_value('id_users_pemilik'),
	    'group_desain' => set_value('group_desain'),
	    'nama_desain' => set_value('nama_desain'),
	    'model' => set_value('model'),
	    'paket' => set_value('paket'),
	    'harga' => set_value('harga'),
	    'deskripsi' => set_value('deskripsi'),
	);
        $this->template->load('template','tbl_desain_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'uuid' => $this->input->post('uuid',TRUE),
		'id_users_pemilik' => $this->input->post('id_users_pemilik',TRUE),
		'group_desain' => $this->input->post('group_desain',TRUE),
		'nama_desain' => $this->input->post('nama_desain',TRUE),
		'model' => $this->input->post('model',TRUE),
		'paket' => $this->input->post('paket',TRUE),
		'harga' => $this->input->post('harga',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
	    );

            $this->Tbl_desain_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_desain'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_desain_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_desain/update_action'),
		'id' => set_value('id', $row->id),
		'uuid' => set_value('uuid', $row->uuid),
		'id_users_pemilik' => set_value('id_users_pemilik', $row->id_users_pemilik),
		'group_desain' => set_value('group_desain', $row->group_desain),
		'nama_desain' => set_value('nama_desain', $row->nama_desain),
		'model' => set_value('model', $row->model),
		'paket' => set_value('paket', $row->paket),
		'harga' => set_value('harga', $row->harga),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
	    );
            $this->template->load('template','tbl_desain_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_desain'));
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
		'id_users_pemilik' => $this->input->post('id_users_pemilik',TRUE),
		'group_desain' => $this->input->post('group_desain',TRUE),
		'nama_desain' => $this->input->post('nama_desain',TRUE),
		'model' => $this->input->post('model',TRUE),
		'paket' => $this->input->post('paket',TRUE),
		'harga' => $this->input->post('harga',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
	    );

            $this->Tbl_desain_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_desain'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_desain_model->get_by_id($id);

        if ($row) {
            $this->Tbl_desain_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_desain'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_desain'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('uuid', 'uuid', 'trim|required');
	$this->form_validation->set_rules('id_users_pemilik', 'id users pemilik', 'trim|required');
	$this->form_validation->set_rules('group_desain', 'group desain', 'trim|required');
	$this->form_validation->set_rules('nama_desain', 'nama desain', 'trim|required');
	$this->form_validation->set_rules('model', 'model', 'trim|required');
	$this->form_validation->set_rules('paket', 'paket', 'trim|required');
	$this->form_validation->set_rules('harga', 'harga', 'trim|required|numeric');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_desain.xls";
        $judul = "tbl_desain";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Users Pemilik");
	xlsWriteLabel($tablehead, $kolomhead++, "Group Desain");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Desain");
	xlsWriteLabel($tablehead, $kolomhead++, "Model");
	xlsWriteLabel($tablehead, $kolomhead++, "Paket");
	xlsWriteLabel($tablehead, $kolomhead++, "Harga");
	xlsWriteLabel($tablehead, $kolomhead++, "Deskripsi");

	foreach ($this->Tbl_desain_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uuid);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_users_pemilik);
	    xlsWriteLabel($tablebody, $kolombody++, $data->group_desain);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_desain);
	    xlsWriteLabel($tablebody, $kolombody++, $data->model);
	    xlsWriteLabel($tablebody, $kolombody++, $data->paket);
	    xlsWriteNumber($tablebody, $kolombody++, $data->harga);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deskripsi);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_desain.doc");

        $data = array(
            'tbl_desain_data' => $this->Tbl_desain_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tbl_desain_doc',$data);
    }

}

/* End of file Tbl_desain.php */
/* Location: ./application/controllers/Tbl_desain.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-05-30 04:11:38 */
/* http://harviacode.com */