<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Table_history_connected extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Table_history_connected_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/table_history_connected/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/table_history_connected/index/';
            $config['first_url'] = base_url() . 'index.php/table_history_connected/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Table_history_connected_model->total_rows($q);
        $table_history_connected = $this->Table_history_connected_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'table_history_connected_data' => $table_history_connected,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','table_history_connected/table_history_connected_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Table_history_connected_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'uuid_summary' => $row->uuid_summary,
		'idtoko' => $row->idtoko,
		'namatoko' => $row->namatoko,
		'jam_play' => $row->jam_play,
		'menit_play' => $row->menit_play,
		'date_input' => $row->date_input,
	    );
            $this->template->load('template','table_history_connected/table_history_connected_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('table_history_connected'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('table_history_connected/create_action'),
	    'id' => set_value('id'),
	    'uuid_summary' => set_value('uuid_summary'),
	    'idtoko' => set_value('idtoko'),
	    'namatoko' => set_value('namatoko'),
	    'jam_play' => set_value('jam_play'),
	    'menit_play' => set_value('menit_play'),
	    'date_input' => set_value('date_input'),
	);
        $this->template->load('template','table_history_connected/table_history_connected_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'uuid_summary' => $this->input->post('uuid_summary',TRUE),
		'idtoko' => $this->input->post('idtoko',TRUE),
		'namatoko' => $this->input->post('namatoko',TRUE),
		'jam_play' => $this->input->post('jam_play',TRUE),
		'menit_play' => $this->input->post('menit_play',TRUE),
		'date_input' => $this->input->post('date_input',TRUE),
	    );

            $this->Table_history_connected_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('table_history_connected'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Table_history_connected_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('table_history_connected/update_action'),
		'id' => set_value('id', $row->id),
		'uuid_summary' => set_value('uuid_summary', $row->uuid_summary),
		'idtoko' => set_value('idtoko', $row->idtoko),
		'namatoko' => set_value('namatoko', $row->namatoko),
		'jam_play' => set_value('jam_play', $row->jam_play),
		'menit_play' => set_value('menit_play', $row->menit_play),
		'date_input' => set_value('date_input', $row->date_input),
	    );
            $this->template->load('template','table_history_connected/table_history_connected_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('table_history_connected'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'uuid_summary' => $this->input->post('uuid_summary',TRUE),
		'idtoko' => $this->input->post('idtoko',TRUE),
		'namatoko' => $this->input->post('namatoko',TRUE),
		'jam_play' => $this->input->post('jam_play',TRUE),
		'menit_play' => $this->input->post('menit_play',TRUE),
		'date_input' => $this->input->post('date_input',TRUE),
	    );

            $this->Table_history_connected_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('table_history_connected'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Table_history_connected_model->get_by_id($id);

        if ($row) {
            $this->Table_history_connected_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('table_history_connected'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('table_history_connected'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('uuid_summary', 'uuid summary', 'trim|required');
	$this->form_validation->set_rules('idtoko', 'idtoko', 'trim|required');
	$this->form_validation->set_rules('namatoko', 'namatoko', 'trim|required');
	$this->form_validation->set_rules('jam_play', 'jam play', 'trim|required');
	$this->form_validation->set_rules('menit_play', 'menit play', 'trim|required');
	$this->form_validation->set_rules('date_input', 'date input', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "table_history_connected.xls";
        $judul = "table_history_connected";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Uuid Summary");
	xlsWriteLabel($tablehead, $kolomhead++, "Idtoko");
	xlsWriteLabel($tablehead, $kolomhead++, "Namatoko");
	xlsWriteLabel($tablehead, $kolomhead++, "Jam Play");
	xlsWriteLabel($tablehead, $kolomhead++, "Menit Play");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Input");

	foreach ($this->Table_history_connected_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uuid_summary);
	    xlsWriteNumber($tablebody, $kolombody++, $data->idtoko);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namatoko);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jam_play);
	    xlsWriteNumber($tablebody, $kolombody++, $data->menit_play);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_input);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Table_history_connected.php */
/* Location: ./application/controllers/Table_history_connected.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-06-21 11:44:20 */
/* http://harviacode.com */