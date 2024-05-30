<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Table_sys_jam_running extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Table_sys_jam_running_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','table_sys_jam_running/table_sys_jam_running_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Table_sys_jam_running_model->json();
    }

    public function read($id) 
    {
        $row = $this->Table_sys_jam_running_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'jam' => $row->jam,
		'menit' => $row->menit,
// 		'detik' => $row->detik,
// 		'status' => $row->status,
	    );
            $this->template->load('template','table_sys_jam_running/table_sys_jam_running_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('table_sys_jam_running'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('table_sys_jam_running/create_action'),
	    'id' => set_value('id'),
	    'jam' => set_value('jam'),
	    'menit' => set_value('menit'),
	    'detik' => set_value('detik'),
	    'status' => set_value('status'),
	);
        $this->template->load('template','table_sys_jam_running/table_sys_jam_running_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jam' => $this->input->post('jam',TRUE),
		'menit' => $this->input->post('menit',TRUE),
// 		'detik' => $this->input->post('detik',TRUE),
// 		'status' => $this->input->post('status',TRUE),
	    );

            $this->Table_sys_jam_running_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('table_sys_jam_running'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Table_sys_jam_running_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('table_sys_jam_running/update_action'),
		'id' => set_value('id', $row->id),
		'jam' => set_value('jam', $row->jam),
		'menit' => set_value('menit', $row->menit),
		'detik' => set_value('detik', $row->detik),
		'status' => set_value('status', $row->status),
	    );
            $this->template->load('template','table_sys_jam_running/table_sys_jam_running_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('table_sys_jam_running'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'jam' => $this->input->post('jam',TRUE),
		'menit' => $this->input->post('menit',TRUE),
// 		'detik' => $this->input->post('detik',TRUE),
// 		'status' => $this->input->post('status',TRUE),
	    );

            $this->Table_sys_jam_running_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('table_sys_jam_running'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Table_sys_jam_running_model->get_by_id($id);

        if ($row) {
            $this->Table_sys_jam_running_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('table_sys_jam_running'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('table_sys_jam_running'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jam', 'jam', 'trim|required');
	$this->form_validation->set_rules('menit', 'menit', 'trim|required');
	// $this->form_validation->set_rules('detik', 'detik', 'trim|required');
	// $this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "table_sys_jam_running.xls";
        $judul = "table_sys_jam_running";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Jam");
	xlsWriteLabel($tablehead, $kolomhead++, "Menit");
	xlsWriteLabel($tablehead, $kolomhead++, "Detik");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Table_sys_jam_running_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jam);
	    xlsWriteNumber($tablebody, $kolombody++, $data->menit);
	    xlsWriteNumber($tablebody, $kolombody++, $data->detik);
	    xlsWriteNumber($tablebody, $kolombody++, $data->status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Table_sys_jam_running.php */
/* Location: ./application/controllers/Table_sys_jam_running.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-06-22 13:39:22 */
/* http://harviacode.com */