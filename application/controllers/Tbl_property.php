<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_property extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_property_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $tbl_property = $this->Tbl_property_model->get_all();

        $data = array(
            'tbl_property_data' => $tbl_property
        );

        $this->template->load('template','tbl_property_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_property_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'uuid' => $row->uuid,
		'nama_property' => $row->nama_property,
		'tipe_property' => $row->tipe_property,
		'status' => $row->status,
		'nama_komplek' => $row->nama_komplek,
		'lokasi' => $row->lokasi,
		'luas_tanah' => $row->luas_tanah,
		'luas_bangunan' => $row->luas_bangunan,
		'jumlah_kamar' => $row->jumlah_kamar,
		'jumlah_kamar_mandi' => $row->jumlah_kamar_mandi,
		'harga' => $row->harga,
	    );
            $this->template->load('template','tbl_property_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_property'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_property/create_action'),
	    'id' => set_value('id'),
	    'uuid' => set_value('uuid'),
	    'nama_property' => set_value('nama_property'),
	    'tipe_property' => set_value('tipe_property'),
	    'status' => set_value('status'),
	    'nama_komplek' => set_value('nama_komplek'),
	    'lokasi' => set_value('lokasi'),
	    'luas_tanah' => set_value('luas_tanah'),
	    'luas_bangunan' => set_value('luas_bangunan'),
	    'jumlah_kamar' => set_value('jumlah_kamar'),
	    'jumlah_kamar_mandi' => set_value('jumlah_kamar_mandi'),
	    'harga' => set_value('harga'),
	);
        $this->template->load('template','tbl_property_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		// 'uuid' => $this->input->post('uuid',TRUE),
		'nama_property' => $this->input->post('nama_property',TRUE),
		'tipe_property' => $this->input->post('tipe_property',TRUE),
		'status' => $this->input->post('status',TRUE),
		'nama_komplek' => $this->input->post('nama_komplek',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'luas_tanah' => $this->input->post('luas_tanah',TRUE),
		'luas_bangunan' => $this->input->post('luas_bangunan',TRUE),
		'jumlah_kamar' => $this->input->post('jumlah_kamar',TRUE),
		'jumlah_kamar_mandi' => $this->input->post('jumlah_kamar_mandi',TRUE),
		'harga' => $this->input->post('harga',TRUE),
	    );

            $this->Tbl_property_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_property'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_property_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_property/update_action'),
		'id' => set_value('id', $row->id),
		'uuid' => set_value('uuid', $row->uuid),
		'nama_property' => set_value('nama_property', $row->nama_property),
		'tipe_property' => set_value('tipe_property', $row->tipe_property),
		'status' => set_value('status', $row->status),
		'nama_komplek' => set_value('nama_komplek', $row->nama_komplek),
		'lokasi' => set_value('lokasi', $row->lokasi),
		'luas_tanah' => set_value('luas_tanah', $row->luas_tanah),
		'luas_bangunan' => set_value('luas_bangunan', $row->luas_bangunan),
		'jumlah_kamar' => set_value('jumlah_kamar', $row->jumlah_kamar),
		'jumlah_kamar_mandi' => set_value('jumlah_kamar_mandi', $row->jumlah_kamar_mandi),
		'harga' => set_value('harga', $row->harga),
	    );
            $this->template->load('template','tbl_property_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_property'));
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
		'tipe_property' => $this->input->post('tipe_property',TRUE),
		'status' => $this->input->post('status',TRUE),
		'nama_komplek' => $this->input->post('nama_komplek',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'luas_tanah' => $this->input->post('luas_tanah',TRUE),
		'luas_bangunan' => $this->input->post('luas_bangunan',TRUE),
		'jumlah_kamar' => $this->input->post('jumlah_kamar',TRUE),
		'jumlah_kamar_mandi' => $this->input->post('jumlah_kamar_mandi',TRUE),
		'harga' => $this->input->post('harga',TRUE),
	    );

            $this->Tbl_property_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_property'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_property_model->get_by_id($id);

        if ($row) {
            $this->Tbl_property_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_property'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_property'));
        }
    }

    public function _rules() 
    {
	// $this->form_validation->set_rules('uuid', 'uuid', 'trim|required');
	$this->form_validation->set_rules('nama_property', 'nama property', 'trim|required');
	// $this->form_validation->set_rules('tipe_property', 'tipe property', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('nama_komplek', 'nama komplek', 'trim|required');
	$this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
	$this->form_validation->set_rules('luas_tanah', 'luas tanah', 'trim|required|numeric');
	$this->form_validation->set_rules('luas_bangunan', 'luas bangunan', 'trim|required');
	// $this->form_validation->set_rules('jumlah_kamar', 'jumlah kamar', 'trim|required');
	// $this->form_validation->set_rules('jumlah_kamar_mandi', 'jumlah kamar mandi', 'trim|required');
	$this->form_validation->set_rules('harga', 'harga', 'trim|required|numeric');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_property.xls";
        $judul = "tbl_property";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Tipe Property");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Komplek");
	xlsWriteLabel($tablehead, $kolomhead++, "Lokasi");
	xlsWriteLabel($tablehead, $kolomhead++, "Luas Tanah");
	xlsWriteLabel($tablehead, $kolomhead++, "Luas Bangunan");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Kamar");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Kamar Mandi");
	xlsWriteLabel($tablehead, $kolomhead++, "Harga");

	foreach ($this->Tbl_property_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uuid);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_property);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tipe_property);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_komplek);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lokasi);
	    xlsWriteNumber($tablebody, $kolombody++, $data->luas_tanah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->luas_bangunan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jumlah_kamar);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jumlah_kamar_mandi);
	    xlsWriteNumber($tablebody, $kolombody++, $data->harga);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_property.doc");

        $data = array(
            'tbl_property_data' => $this->Tbl_property_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tbl_property_doc',$data);
    }

}

/* End of file Tbl_property.php */
/* Location: ./application/controllers/Tbl_property.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-05-05 06:30:28 */
/* http://harviacode.com */