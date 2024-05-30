<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Template5 extends CI_Controller {


    public function index() {
        //$this->load->view('table');
        // $this->template->load('template', 'welcome');
        $this->load->view("template_real-estate-html-template/index");
    }

    public function kegiatan() {


        // $status_dijual = "Dijual";
        // $kota = "Solo";
        // $this->db->where('status',$status_dijual);
        // $this->db->where('kota',$kota);

        $data_kegiatan       = $this->db->get('kegiatan')->result();

        $data = array(
            'data_kegiatan' => $data_kegiatan,
        );

        $this->load->view("template_real-estate-html-template/kegiatan",$data);
    }


    public function produkkirimaya() {
        $this->load->view("template_real-estate-html-template/produkkirimaya");
    }

    public function about() {
        $this->load->view("template_real-estate-html-template/about");
    }

    public function propertyagent() {
        $this->load->view("template_real-estate-html-template/property-agent");
    }

    public function propertylist() {
        $this->load->view("template_real-estate-html-template/property-list");
    }




    public function property_list_pemilihan() {
        $this->load->view("template_real-estate-html-template/property-list_pemilihan");
    }



    public function propertytype() {
        $this->load->view("template_real-estate-html-template/property-type");
    }



    public function service() {
        $this->load->view("template_real-estate-html-template/service");
    }


    public function contact() {
        $this->load->view("template_real-estate-html-template/contact");
    }


    public function appointment() {
        $this->load->view("template_real-estate-html-template/appointment");
    }



    public function feature() {
        $this->load->view("template_real-estate-html-template/feature");
    }


    public function project() {
        $this->load->view("template_real-estate-html-template/project");
    }

    public function team() {
        $this->load->view("template_real-estate-html-template/team");
    }

    public function testimonial() {
        $this->load->view("template_real-estate-html-template/testimonial");
    }





    public function x404() {
        $this->load->view("template_real-estate-html-template/404");
    }





    
    public function form() {
        //$this->load->view('table');
        $this->template->load('template', 'form');
    }
    
    function autocomplate(){
        autocomplate_json('tbl_user', 'full_name');
    }

    function __autocomplate() {
        $this->db->like('nama_lengkap', $_GET['term']);
        $this->db->select('nama_lengkap');
        $products = $this->db->get('pegawai')->result();
        foreach ($products as $product) {
            $return_arr[] = $product->nama_lengkap;
        }

        echo json_encode($return_arr);
    }

    function pdf() {
        $this->load->library('pdf');
        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(190, 7, 'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK', 0, 1, 'C');
        $pdf->Output();
    }

}
