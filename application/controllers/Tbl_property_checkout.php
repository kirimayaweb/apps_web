<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_property_checkout extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_property_checkout_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $tbl_property_checkout = $this->Tbl_property_checkout_model->get_all();

        $data = array(
            'tbl_property_checkout_data' => $tbl_property_checkout
        );

        $this->template->load('template','tbl_property_checkout_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_property_checkout_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'uuid' => $row->uuid,
		'nama_property' => $row->nama_property,
		'tipe_property' => $row->tipe_property,
		'status' => $row->status,
		'kota' => $row->kota,
		'nama_komplek' => $row->nama_komplek,
		'lokasi' => $row->lokasi,
		'luas_tanah' => $row->luas_tanah,
		'luas_bangunan' => $row->luas_bangunan,
		'jumlah_kamar' => $row->jumlah_kamar,
		'jumlah_kamar_mandi' => $row->jumlah_kamar_mandi,
		'harga' => $row->harga,
	    );
            $this->template->load('template','tbl_property_checkout_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_property_checkout'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_property_checkout/create_action'),
	    'id' => set_value('id'),
	    'uuid' => set_value('uuid'),
	    'nama_property' => set_value('nama_property'),
	    'tipe_property' => set_value('tipe_property'),
	    'status' => set_value('status'),
	    'kota' => set_value('kota'),
	    'nama_komplek' => set_value('nama_komplek'),
	    'lokasi' => set_value('lokasi'),
	    'luas_tanah' => set_value('luas_tanah'),
	    'luas_bangunan' => set_value('luas_bangunan'),
	    'jumlah_kamar' => set_value('jumlah_kamar'),
	    'jumlah_kamar_mandi' => set_value('jumlah_kamar_mandi'),
	    'harga' => set_value('harga'),
	);
        $this->template->load('template','tbl_property_checkout_form', $data);
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
		'tipe_property' => $this->input->post('tipe_property',TRUE),
		'status' => $this->input->post('status',TRUE),
		'kota' => $this->input->post('kota',TRUE),
		'nama_komplek' => $this->input->post('nama_komplek',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'luas_tanah' => $this->input->post('luas_tanah',TRUE),
		'luas_bangunan' => $this->input->post('luas_bangunan',TRUE),
		'jumlah_kamar' => $this->input->post('jumlah_kamar',TRUE),
		'jumlah_kamar_mandi' => $this->input->post('jumlah_kamar_mandi',TRUE),
		'harga' => $this->input->post('harga',TRUE),
	    );

            $this->Tbl_property_checkout_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_property_checkout'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_property_checkout_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_property_checkout/update_action'),
		'id' => set_value('id', $row->id),
		'uuid' => set_value('uuid', $row->uuid),
		'nama_property' => set_value('nama_property', $row->nama_property),
		'tipe_property' => set_value('tipe_property', $row->tipe_property),
		'status' => set_value('status', $row->status),
		'kota' => set_value('kota', $row->kota),
		'nama_komplek' => set_value('nama_komplek', $row->nama_komplek),
		'lokasi' => set_value('lokasi', $row->lokasi),
		'luas_tanah' => set_value('luas_tanah', $row->luas_tanah),
		'luas_bangunan' => set_value('luas_bangunan', $row->luas_bangunan),
		'jumlah_kamar' => set_value('jumlah_kamar', $row->jumlah_kamar),
		'jumlah_kamar_mandi' => set_value('jumlah_kamar_mandi', $row->jumlah_kamar_mandi),
		'harga' => set_value('harga', $row->harga),
	    );
            $this->template->load('template','tbl_property_checkout_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_property_checkout'));
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
		'kota' => $this->input->post('kota',TRUE),
		'nama_komplek' => $this->input->post('nama_komplek',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'luas_tanah' => $this->input->post('luas_tanah',TRUE),
		'luas_bangunan' => $this->input->post('luas_bangunan',TRUE),
		'jumlah_kamar' => $this->input->post('jumlah_kamar',TRUE),
		'jumlah_kamar_mandi' => $this->input->post('jumlah_kamar_mandi',TRUE),
		'harga' => $this->input->post('harga',TRUE),
	    );

            $this->Tbl_property_checkout_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_property_checkout'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_property_checkout_model->get_by_id($id);

        if ($row) {
            $this->Tbl_property_checkout_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_property_checkout'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_property_checkout'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('uuid', 'uuid', 'trim|required');
	$this->form_validation->set_rules('nama_property', 'nama property', 'trim|required');
	$this->form_validation->set_rules('tipe_property', 'tipe property', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('kota', 'kota', 'trim|required');
	$this->form_validation->set_rules('nama_komplek', 'nama komplek', 'trim|required');
	$this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
	$this->form_validation->set_rules('luas_tanah', 'luas tanah', 'trim|required|numeric');
	$this->form_validation->set_rules('luas_bangunan', 'luas bangunan', 'trim|required');
	$this->form_validation->set_rules('jumlah_kamar', 'jumlah kamar', 'trim|required');
	$this->form_validation->set_rules('jumlah_kamar_mandi', 'jumlah kamar mandi', 'trim|required');
	$this->form_validation->set_rules('harga', 'harga', 'trim|required|numeric');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_property_checkout.xls";
        $judul = "tbl_property_checkout";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Kota");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Komplek");
	xlsWriteLabel($tablehead, $kolomhead++, "Lokasi");
	xlsWriteLabel($tablehead, $kolomhead++, "Luas Tanah");
	xlsWriteLabel($tablehead, $kolomhead++, "Luas Bangunan");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Kamar");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Kamar Mandi");
	xlsWriteLabel($tablehead, $kolomhead++, "Harga");

	foreach ($this->Tbl_property_checkout_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uuid);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_property);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tipe_property);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kota);
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

}

/* End of file Tbl_property_checkout.php */
/* Location: ./application/controllers/Tbl_property_checkout.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-05-08 04:58:57 */
/* http://harviacode.com */