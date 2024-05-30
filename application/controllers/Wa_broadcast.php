<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Wa_broadcast extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Wa_broadcast_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $wa_broadcast = $this->Wa_broadcast_model->get_all();

        $data = array(
            'wa_broadcast_data' => $wa_broadcast
        );

        $this->template->load('template','wa_broadcast_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Wa_broadcast_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'uuid' => $row->uuid,
		'proses' => $row->proses,
		'nomor_pengirim' => $row->nomor_pengirim,
		'pesan' => $row->pesan,
		'nomor_tujuan' => $row->nomor_tujuan,
	    );
            $this->template->load('template','wa_broadcast_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('wa_broadcast'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('wa_broadcast/create_action'),
	    'id' => set_value('id'),
	    'uuid' => set_value('uuid'),
	    'proses' => set_value('proses'),
	    'nomor_pengirim' => set_value('nomor_pengirim'),
	    'pesan' => set_value('pesan'),
	    'nomor_tujuan' => set_value('nomor_tujuan'),
	);
        $this->template->load('template','wa_broadcast_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'uuid' => $this->input->post('uuid',TRUE),
		'proses' => $this->input->post('proses',TRUE),
		'nomor_pengirim' => $this->input->post('nomor_pengirim',TRUE),
		'pesan' => $this->input->post('pesan',TRUE),
		'nomor_tujuan' => $this->input->post('nomor_tujuan',TRUE),
	    );

            $this->Wa_broadcast_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('wa_broadcast'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Wa_broadcast_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('wa_broadcast/update_action'),
		'id' => set_value('id', $row->id),
		'uuid' => set_value('uuid', $row->uuid),
		'proses' => set_value('proses', $row->proses),
		'nomor_pengirim' => set_value('nomor_pengirim', $row->nomor_pengirim),
		'pesan' => set_value('pesan', $row->pesan),
		'nomor_tujuan' => set_value('nomor_tujuan', $row->nomor_tujuan),
	    );
            $this->template->load('template','wa_broadcast_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('wa_broadcast'));
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
		'proses' => $this->input->post('proses',TRUE),
		'nomor_pengirim' => $this->input->post('nomor_pengirim',TRUE),
		'pesan' => $this->input->post('pesan',TRUE),
		'nomor_tujuan' => $this->input->post('nomor_tujuan',TRUE),
	    );

            $this->Wa_broadcast_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('wa_broadcast'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Wa_broadcast_model->get_by_id($id);

        if ($row) {
            $this->Wa_broadcast_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('wa_broadcast'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('wa_broadcast'));
        }
    }

    public function _rules() 
    {
	// $this->form_validation->set_rules('uuid', 'uuid', 'trim|required');
	// $this->form_validation->set_rules('proses', 'proses', 'trim|required');
	// $this->form_validation->set_rules('nomor_pengirim', 'nomor pengirim', 'trim|required');
	$this->form_validation->set_rules('pesan', 'pesan', 'trim|required');
	$this->form_validation->set_rules('nomor_tujuan', 'nomor tujuan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "wa_broadcast.xls";
        $judul = "wa_broadcast";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Proses");
	xlsWriteLabel($tablehead, $kolomhead++, "Nomor Pengirim");
	xlsWriteLabel($tablehead, $kolomhead++, "Pesan");
	xlsWriteLabel($tablehead, $kolomhead++, "Nomor Tujuan");

	foreach ($this->Wa_broadcast_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uuid);
	    xlsWriteLabel($tablebody, $kolombody++, $data->proses);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nomor_pengirim);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pesan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nomor_tujuan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Wa_broadcast.php */
/* Location: ./application/controllers/Wa_broadcast.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-05-11 15:18:22 */
/* http://harviacode.com */