<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_property_detail extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model(Array('Tbl_property_model','Tbl_property_detail_model'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $tbl_property_detail = $this->Tbl_property_detail_model->get_all();

        $data = array(
            'tbl_property_detail_data' => $tbl_property_detail
        );

        $this->template->load('template','tbl_property_detail_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_property_detail_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_tbl_property' => $row->id_tbl_property,
		'posisi' => $row->posisi,
		'deskripsi' => $row->deskripsi,
		'poto' => $row->poto,
	    );
            $this->template->load('template','tbl_property_detail_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_property_detail'));
        }
    }

    public function create_detail($uuid=null) 
    {
     
        $get_row_data = $this->Tbl_property_model->get_by_uuid($uuid);

        $data = array(
            'button' => 'Simpan',
            'action' => site_url('tbl_property_detail/create_detail_action/'.$uuid),
            'id' => $get_row_data->id,
            'id_tbl_property' => $get_row_data->id,
            'nama_property' => $get_row_data->nama_property,
            'kota' => $get_row_data->kota,
            'posisi' => set_value('posisi'),
            'deskripsi' => set_value('deskripsi'),
            'poto' => set_value('poto'),
        );
        $this->template->load('template','tbl_property_detail_form', $data);
    }


    public function create_detail_action($uuid=null) 
    {
        $this->_rules();

        $get_row_data = $this->Tbl_property_model->get_by_uuid($uuid);

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'id_tbl_property' => $get_row_data->id,
                'posisi' => $this->input->post('posisi',TRUE),
                'deskripsi' => $this->input->post('deskripsi',TRUE),
                'poto' => $this->input->post('poto',TRUE),
                );

            $this->Tbl_property_detail_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_property'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_property_detail/create_action'),
	    'id' => set_value('id'),
	    'id_tbl_property' => set_value('id_tbl_property'),
	    'posisi' => set_value('posisi'),
	    'deskripsi' => set_value('deskripsi'),
	    'poto' => set_value('poto'),
	);
        $this->template->load('template','tbl_property_detail_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_tbl_property' => $this->input->post('id_tbl_property',TRUE),
		'posisi' => $this->input->post('posisi',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'poto' => $this->input->post('poto',TRUE),
	    );

            $this->Tbl_property_detail_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_property_detail'));
        }
    }
    

    public function update_upload($id) 
    {
        print_r($id);
        print_r("<br/>");
        $config['upload_path'] = FCPATH.'/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
  
  
        $this->load->library('upload', $config);
  
        if (!$this->upload->do_upload('profile_pic')) 
        {
            $error = array('error' => $this->upload->display_errors());
  
            $this->load->view('imageupload_form', $error);
        } 
        else
        {
            $data = array('image_metadata' => $this->upload->data());
  
            $this->load->view('imageupload_success', $data);
        }
    }

    public function update($id) 
    {
        $row = $this->Tbl_property_detail_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_property_detail/update_action'),
                'id' => set_value('id', $row->id),
                'id_tbl_property' => set_value('id_tbl_property', $row->id_tbl_property),
                'posisi' => set_value('posisi', $row->posisi),
                'deskripsi' => set_value('deskripsi', $row->deskripsi),
                'poto' => set_value('poto', $row->poto),
                );
            $this->template->load('template','tbl_property_detail_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_property_detail'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_tbl_property' => $this->input->post('id_tbl_property',TRUE),
		'posisi' => $this->input->post('posisi',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'poto' => $this->input->post('poto',TRUE),
	    );

            $this->Tbl_property_detail_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_property_detail'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_property_detail_model->get_by_id($id);

        if ($row) {
            $this->Tbl_property_detail_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_property_detail'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_property_detail'));
        }
    }

    public function _rules() 
    {
	// $this->form_validation->set_rules('id_tbl_property', 'id tbl property', 'trim|required');
	$this->form_validation->set_rules('posisi', 'posisi', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('poto', 'poto', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_property_detail.xls";
        $judul = "tbl_property_detail";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Tbl Property");
	xlsWriteLabel($tablehead, $kolomhead++, "Posisi");
	xlsWriteLabel($tablehead, $kolomhead++, "Deskripsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Poto");

	foreach ($this->Tbl_property_detail_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_tbl_property);
	    xlsWriteLabel($tablebody, $kolombody++, $data->posisi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deskripsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->poto);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Tbl_property_detail.php */
/* Location: ./application/controllers/Tbl_property_detail.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-05-08 08:17:05 */
/* http://harviacode.com */