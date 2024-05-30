<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_gocikotime extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model(array('Tbl_gocikotime_model','Tbl_toko_model'));
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','tbl_gocikotime/tbl_gocikotime_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_gocikotime_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_gocikotime_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'idtoko' => $row->idtoko,
		'namatoko' => $row->namatoko,
// 		'waktugociko' => $row->waktugociko,
// 		'tahun' => $row->tahun,
// 		'bulan' => $row->bulan,
// 		'hari' => $row->hari,
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
	   // 'waktugociko' => set_value('waktugociko'),
	   // 'tahun' => set_value('tahun'),
	   // 'bulan' => set_value('bulan'),
	   // 'hari' => set_value('hari'),
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


            $row = $this->Tbl_toko_model->get_by_id($this->input->post('idtoko',TRUE));


            $data = array(
		'idtoko' => $this->input->post('idtoko',TRUE),
		'namatoko' => $row->namatoko,
		'jam' => $this->input->post('jam',TRUE),
		'menit' => $this->input->post('menit',TRUE),
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
// 		'waktugociko' => set_value('waktugociko', $row->waktugociko),
// 		'tahun' => set_value('tahun', $row->tahun),
// 		'bulan' => set_value('bulan', $row->bulan),
// 		'hari' => set_value('hari', $row->hari),
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
	// $this->form_validation->set_rules('namatoko', 'namatoko', 'trim|required');
// 	$this->form_validation->set_rules('waktugociko', 'waktugociko', 'trim|required');
// 	$this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
// 	$this->form_validation->set_rules('bulan', 'bulan', 'trim|required');
// 	$this->form_validation->set_rules('hari', 'hari', 'trim|required');
	$this->form_validation->set_rules('jam', 'jam', 'trim|required');
	$this->form_validation->set_rules('menit', 'menit', 'trim|required');
// 	$this->form_validation->set_rules('detik', 'detik', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_gocikotime.xls";
        $judul = "tbl_gocikotime";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Idtoko");
	xlsWriteLabel($tablehead, $kolomhead++, "Namatoko");
// 	xlsWriteLabel($tablehead, $kolomhead++, "Waktugociko");
// 	xlsWriteLabel($tablehead, $kolomhead++, "Tahun");
// 	xlsWriteLabel($tablehead, $kolomhead++, "Bulan");
// 	xlsWriteLabel($tablehead, $kolomhead++, "Hari");
	xlsWriteLabel($tablehead, $kolomhead++, "Jam");
	xlsWriteLabel($tablehead, $kolomhead++, "Menit");
	xlsWriteLabel($tablehead, $kolomhead++, "Detik");

	foreach ($this->Tbl_gocikotime_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->idtoko);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namatoko);
	   // xlsWriteLabel($tablebody, $kolombody++, $data->waktugociko);
	   // xlsWriteNumber($tablebody, $kolombody++, $data->tahun);
	   // xlsWriteNumber($tablebody, $kolombody++, $data->bulan);
	   // xlsWriteNumber($tablebody, $kolombody++, $data->hari);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jam);
	    xlsWriteNumber($tablebody, $kolombody++, $data->menit);
	    xlsWriteNumber($tablebody, $kolombody++, $data->detik);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_gocikotime.doc");

        $data = array(
            'tbl_gocikotime_data' => $this->Tbl_gocikotime_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tbl_gocikotime/tbl_gocikotime_doc',$data);
    }

}

/* End of file Tbl_gocikotime.php */
/* Location: ./application/controllers/Tbl_gocikotime.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-02-11 12:24:55 */
/* http://harviacode.com */