<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_desain_detail extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_desain_detail_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tbl_desain_detail/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tbl_desain_detail/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tbl_desain_detail/index.html';
            $config['first_url'] = base_url() . 'tbl_desain_detail/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tbl_desain_detail_model->total_rows($q);
        $tbl_desain_detail = $this->Tbl_desain_detail_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_desain_detail_data' => $tbl_desain_detail,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tbl_desain_detail_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_desain_detail_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'uuid' => $row->uuid,
		'id_tbl_desain' => $row->id_tbl_desain,
		'uuid_tbl_desain' => $row->uuid_tbl_desain,
		'posisi' => $row->posisi,
		'deskripsi' => $row->deskripsi,
		'poto' => $row->poto,
	    );
            $this->template->load('template','tbl_desain_detail_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_desain_detail'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_desain_detail/create_action'),
	    'id' => set_value('id'),
	    'uuid' => set_value('uuid'),
	    'id_tbl_desain' => set_value('id_tbl_desain'),
	    'uuid_tbl_desain' => set_value('uuid_tbl_desain'),
	    'posisi' => set_value('posisi'),
	    'deskripsi' => set_value('deskripsi'),
	    'poto' => set_value('poto'),
	);
        $this->template->load('template','tbl_desain_detail_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'uuid' => $this->input->post('uuid',TRUE),
		'id_tbl_desain' => $this->input->post('id_tbl_desain',TRUE),
		'uuid_tbl_desain' => $this->input->post('uuid_tbl_desain',TRUE),
		'posisi' => $this->input->post('posisi',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'poto' => $this->input->post('poto',TRUE),
	    );

            $this->Tbl_desain_detail_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_desain_detail'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_desain_detail_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_desain_detail/update_action'),
		'id' => set_value('id', $row->id),
		'uuid' => set_value('uuid', $row->uuid),
		'id_tbl_desain' => set_value('id_tbl_desain', $row->id_tbl_desain),
		'uuid_tbl_desain' => set_value('uuid_tbl_desain', $row->uuid_tbl_desain),
		'posisi' => set_value('posisi', $row->posisi),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'poto' => set_value('poto', $row->poto),
	    );
            $this->template->load('template','tbl_desain_detail_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_desain_detail'));
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
		'id_tbl_desain' => $this->input->post('id_tbl_desain',TRUE),
		'uuid_tbl_desain' => $this->input->post('uuid_tbl_desain',TRUE),
		'posisi' => $this->input->post('posisi',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'poto' => $this->input->post('poto',TRUE),
	    );

            $this->Tbl_desain_detail_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_desain_detail'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_desain_detail_model->get_by_id($id);

        if ($row) {
            $this->Tbl_desain_detail_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_desain_detail'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_desain_detail'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('uuid', 'uuid', 'trim|required');
	$this->form_validation->set_rules('id_tbl_desain', 'id tbl desain', 'trim|required');
	$this->form_validation->set_rules('uuid_tbl_desain', 'uuid tbl desain', 'trim|required');
	$this->form_validation->set_rules('posisi', 'posisi', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('poto', 'poto', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_desain_detail.xls";
        $judul = "tbl_desain_detail";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Tbl Desain");
	xlsWriteLabel($tablehead, $kolomhead++, "Uuid Tbl Desain");
	xlsWriteLabel($tablehead, $kolomhead++, "Posisi");
	xlsWriteLabel($tablehead, $kolomhead++, "Deskripsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Poto");

	foreach ($this->Tbl_desain_detail_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uuid);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_tbl_desain);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uuid_tbl_desain);
	    xlsWriteLabel($tablebody, $kolombody++, $data->posisi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deskripsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->poto);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_desain_detail.doc");

        $data = array(
            'tbl_desain_detail_data' => $this->Tbl_desain_detail_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tbl_desain_detail_doc',$data);
    }

}

/* End of file Tbl_desain_detail.php */
/* Location: ./application/controllers/Tbl_desain_detail.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-05-30 07:35:54 */
/* http://harviacode.com */