<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Table_wa_penerima extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Table_wa_penerima_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $table_wa_penerima = $this->Table_wa_penerima_model->get_all();

        $data = array(
            'table_wa_penerima_data' => $table_wa_penerima
        );

        // $this->template->load('template','table_wa_penerima_list', $data);

        // $data['setting'] = $this->db->get_where('tbl_setting',array('id_setting'=>1))->row_array();
        $this->template->load('template','table_wa_penerima/table_wa_penerima_list',$data);
    }

    public function read($id) 
    {
        $row = $this->Table_wa_penerima_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'uuid_wa' => $row->uuid_wa,
		'waktu' => $row->waktu,
		'nomorwa' => $row->nomorwa,
		'nama' => $row->nama,
		'pesan' => $row->pesan,
	    );
            $this->template->load('template','table_wa_penerima_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('table_wa_penerima'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('table_wa_penerima/create_action'),
	    'id' => set_value('id'),
	    'uuid_wa' => set_value('uuid_wa'),
	    'waktu' => set_value('waktu'),
	    'nomorwa' => set_value('nomorwa'),
	    'nama' => set_value('nama'),
	    'pesan' => set_value('pesan'),
	);
        $this->template->load('template','table_wa_penerima_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'uuid_wa' => $this->input->post('uuid_wa',TRUE),
		'waktu' => $this->input->post('waktu',TRUE),
		'nomorwa' => $this->input->post('nomorwa',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'pesan' => $this->input->post('pesan',TRUE),
	    );

            $this->Table_wa_penerima_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('table_wa_penerima'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Table_wa_penerima_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('table_wa_penerima/update_action'),
		'id' => set_value('id', $row->id),
		'uuid_wa' => set_value('uuid_wa', $row->uuid_wa),
		'waktu' => set_value('waktu', $row->waktu),
		'nomorwa' => set_value('nomorwa', $row->nomorwa),
		'nama' => set_value('nama', $row->nama),
		'pesan' => set_value('pesan', $row->pesan),
	    );
            $this->template->load('template','table_wa_penerima_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('table_wa_penerima'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'uuid_wa' => $this->input->post('uuid_wa',TRUE),
		'waktu' => $this->input->post('waktu',TRUE),
		'nomorwa' => $this->input->post('nomorwa',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'pesan' => $this->input->post('pesan',TRUE),
	    );

            $this->Table_wa_penerima_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('table_wa_penerima'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Table_wa_penerima_model->get_by_id($id);

        if ($row) {
            $this->Table_wa_penerima_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('table_wa_penerima'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('table_wa_penerima'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('uuid_wa', 'uuid wa', 'trim|required');
	$this->form_validation->set_rules('waktu', 'waktu', 'trim|required');
	$this->form_validation->set_rules('nomorwa', 'nomorwa', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('pesan', 'pesan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "table_wa_penerima.xls";
        $judul = "table_wa_penerima";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Uuid Wa");
	xlsWriteLabel($tablehead, $kolomhead++, "Waktu");
	xlsWriteLabel($tablehead, $kolomhead++, "Nomorwa");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Pesan");

	foreach ($this->Table_wa_penerima_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uuid_wa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->waktu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nomorwa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pesan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=table_wa_penerima.doc");

        $data = array(
            'table_wa_penerima_data' => $this->Table_wa_penerima_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('table_wa_penerima_doc',$data);
    }

}

/* End of file Table_wa_penerima.php */
/* Location: ./application/controllers/Table_wa_penerima.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-03-23 14:50:07 */
/* http://harviacode.com */