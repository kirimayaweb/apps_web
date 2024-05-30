<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Property_proses extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        // is_login();
        // $this->load->model(array('Sys_cover_model', 'Trans_penjualan_model', 'Tbl_stok_barang_detail_model', 'Tbl_produk_model', 'Tbl_stok_barang_model', 'Tbl_sales_model', 'Tbl_produk_mapel_referensi_model', 'Trans_penjualan_detail_model', 'Trans_retur_detail_model'));

        $this->load->model(array('Tbl_property_checkout_model','KirimWa_model','Tbl_user_model'));
        
        // $this->load->library('form_validation');
        // $this->load->library('Pdf');
        $this->load->helper(array('nominal'));
    }
    
    public function index() {

        $status_dijual = "Dijual";
        $kota = "Solo";
        $this->db->where('status',$status_dijual);
        $this->db->where('kota',$kota);

        $data_property_dijual_solo       = $this->db->get('tbl_property')->result();
        

        $status_dijual = "Dijual";
        $kota = "Semarang";
        $this->db->where('status',$status_dijual);
        $this->db->where('kota',$kota);

        $data_property_dijual_semarang       = $this->db->get('tbl_property')->result();
        

        $status_dijual = "Dijual";
        $kota = "Surabaya";
        $this->db->where('status',$status_dijual);
        $this->db->where('kota',$kota);

        $data_property_dijual_Surabaya       = $this->db->get('tbl_property')->result();


        // ALL ================ KIRIMAYA       
            // $data_property_all       = $this->db->get('tbl_property')->result();
                $kode_kirimaya = 0;
                $sql = "select * from tbl_property where id_users_pemilik < 1";  // == 0 atau < 1 ---> Kirimaya ( INT = 11  , default = 0 )
                $data_property_all_kirimaya = $this->db->query($sql)->result();

            // ALL group kota
                // $this->db->group_by('kota');
                // $data_property_all_group_kota       = $this->db->get('tbl_property')->result();

            $sql = "select * from tbl_property where id_users_pemilik < 1 group by kota";  // == 0 atau < 1---> Kirimaya ( INT = 11  , default = 0 )
            $data_property_all_kirimaya_group_kota = $this->db->query($sql)->result();


        // ALL ============== PARTNER

            $sql = "select * from tbl_property where id_users_pemilik > 0";  // == 0 atau < 1 ---> Kirimaya ( INT = 11  , default = 0 )
            $data_property_all_partner = $this->db->query($sql)->result();

            // print_r($data_property_all_partner);
            // print_r("<br/>");
            // print_r("<br/>");
            // print_r("<br/>");
            // die;

            // ALL group kota
            $sql = "select * from tbl_property where id_users_pemilik > 0 group by kota";  // == 0 atau < 1---> Kirimaya ( INT = 11  , default = 0 )
            $data_property_all_partner_group_kota = $this->db->query($sql)->result();

            // print_r($data_property_all_partner_group_kota);
            // die;


        $data = array(
            'data_property_all_kirimaya' => $data_property_all_kirimaya,
            'data_property_all_kirimaya_group_kota' => $data_property_all_kirimaya_group_kota,
            
            'data_property_all_partner' => $data_property_all_partner,
            'data_property_all_partner_group_kota' => $data_property_all_partner_group_kota,

            'data_property_dijual_solo' => $data_property_dijual_solo,
            'data_property_dijual_semarang' => $data_property_dijual_semarang,
            'data_property_dijual_Surabaya' => $data_property_dijual_Surabaya,
            'id_hunian' => set_value('id_hunian'),
        );

        // print_r($data['data_property_dijual_solo']);
   
        $this->load->view("PROPERTY_PROSES/property_list_pemilihan",$data);
    }


    public function Proses_beli_pilih($uuid_hunian=null) 
    {

        $this->db->where('uuid',$uuid_hunian);
        $data_property       = $this->db->get('tbl_property')->row();
        $id_hunian=$data_property->id;

        // print_r($id_hunian);
        // print_r("<br/>");

        $this->db->where('id_tbl_property',$id_hunian);
        $data_property_terpilih       = $this->db->get('tbl_property_detail')->result();

        $data = array(
            'data_property_terpilih' => $data_property_terpilih,
            'id_hunian' => $id_hunian,
            'uuid_hunian' => $uuid_hunian,

            'button' => 'Checkout',
            // 'action' => site_url('Property_proses/Checkout_action/'.$uuid_hunian),
            'harga' => set_value('harga'),
        );

        // print_r($data['data_property_terpilih']);
   
        $this->load->view("PROPERTY_PROSES/Proses_beli_pilih",$data);  
    }


    function random_str(
        int $length = 64,
        string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
    ): string {
        if ($length < 1) {
            throw new \RangeException("Length must be a positive integer");
        }
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $pieces []= $keyspace[random_int(0, $max)];
        }
        return implode('', $pieces);
    }
    


    public function Checkout_action($uuid_hunian=null) {
        // print_r($uuid_hunian);
        // print_r("<br/>");
        // print_r($this->input->post('nama',TRUE));
        // print_r("<br/>");
        // print_r($this->input->post('nmrwhatsapp',TRUE));
		
        // die;

        $this->db->where('uuid',$uuid_hunian);
        $data_property       = $this->db->get('tbl_property')->row();

        $data = array(
            'uuid_property' => $uuid_hunian,
            'nama_property' => $data_property->nama_property,
            'tipe_property' => $data_property->tipe_property,
            'status' => $data_property->status,
            'kota' => $data_property->kota,
            'nama_komplek' => $data_property->nama_komplek,
            'lokasi' => $data_property->lokasi,
            'luas_tanah' => $data_property->luas_tanah,
            'luas_bangunan' => $data_property->luas_bangunan,
            'jumlah_kamar' => $data_property->jumlah_kamar,
            'jumlah_kamar_mandi' => $data_property->jumlah_kamar_mandi,
            'harga' => $data_property->harga,
            'nama_pemesan' => $this->input->post('nama',TRUE),
            'nmr_wa' => $this->input->post('nmrwhatsapp',TRUE),

        );

        $this->Tbl_property_checkout_model->insert($data);
        $this->session->set_flashdata('message', 'Create Record Success');

        $this->db->where('uuid_property',$uuid_hunian);
        $this->db->where('nama_pemesan',$this->input->post('nama',TRUE));
        $this->db->where('nmr_wa',$this->input->post('nmrwhatsapp',TRUE));
        $data_checkout       = $this->db->get('tbl_property_checkout')->row();

        // PROSES BUAT AKUN / USER

        $whatsappnumber      =$this->input->post('nmrwhatsapp',TRUE);

        $a = $this->random_str(32);
        $get_password_angka = $this->random_str(5, '1234567890');
        $c = $this->random_str();
        // var_dump($a, $get_password_angka, $c);

        //cek nomor apakah ada di tabel user, jika tidak ada kirim pesan informasi terimakasih sudah menghubungi
        // untuk yang ada nomor, dikirimkan 5 digit ke nomor dan berlaku selama 5 menit untuk request yang terakhir

        $this->db->where('no_hp', $whatsappnumber);
        $users = $this->db->get('tbl_user');  
        
        $date_request = date('Y-m-d H:i:s');


        $get_client = $this->get_client_ip();
        $get_client_browser = $this->get_client_browser();
        $date_login = date('Y-m-d H:i:s');

        $sett_email = $this->input->post('nmrwhatsapp',TRUE)."@griyaku.com";

        if ($users->num_rows() > 0) {
            //SUDAH ADA USER TERSIMPAN UNTUK NOMOR WA INI, LANJUT UNTUK SIMPAN TRANSAKSI SELANJUTNYA
                //TIDAK SIMPAN DATA KE TBL_USER

            //kirim kode $user['no_hp'] ==> ke nomor whatsapp $user['no_hp']
            // $get_client = $this->get_client_ip();
            // $get_client_browser = $this->get_client_browser();
            // $date_login = $date_request;

            // $pesan = "griyaku.com ,  \r\n *CheckOut* : " . $whatsappnumber . "\r\n\r\n dari: " . $get_client . " \r\n browser: " . $get_client_browser . " \r\n pada: " . $date_request . " \r\n\r\n Terimakasih";
            // $nomorhp = "08157045860";
            // $this->KirimWa_model->kirimwa($nomorhp, $pesan);

            // $nomorhp = $whatsappnumber;
            // $this->KirimWa_model->kirimwa($nomorhp, $pesan); 

        }else{
                       //convert 5 code angkan menjadi hash dan simpan ke tbl_user
                    //    $password       = $this->input->post('password',TRUE);
                    //    $options        = array("cost"=>4);
                    //    $hashPassword   = password_hash($password,PASSWORD_BCRYPT,$options);
                       
                       $data = array(
                                'full_name'     => $this->input->post('nama',TRUE),
                                'email'         => $sett_email,
                                //    'password'      => $hashPassword,
                                'password'      => password_hash($get_password_angka, PASSWORD_DEFAULT),
                                'no_hp'      => $this->input->post('nmrwhatsapp',TRUE),
                                'images'        => "user2-160x1601.jpg",
                                'id_user_level' => 100,
                                'is_aktif'      => "1",
                                );
                        
                       $this->Tbl_user_model->insert($data);
                    //    $this->session->set_flashdata('message', 'Create Record Success');
                    //    redirect(site_url('user'));
        
                    //kirim kode $user['no_hp'] ==> ke nomor whatsapp $user['no_hp']
                    // $get_client = $this->get_client_ip();
                    // $get_client_browser = $this->get_client_browser();
                    // $date_login = date('Y-m-d H:i:s');

                    // $pesan = "griyaku.com ,  \r\n *CheckOut* : " . $whatsappnumber . "\r\n\r\n dari: " . $get_client . " \r\n browser: " . $get_client_browser . " \r\n pada: " . $date_request . " \r\n\r\n Terimakasih";
                    // $nomorhp = "08157045860";
                    // $this->KirimWa_model->kirimwa($nomorhp, $pesan);
                    
                    // $pesan = "Thanks for visiting. \r\n\r\n Cheers";
                    // $nomorhp = $whatsappnumber;
                    // $this->KirimWa_model->kirimwa($nomorhp, $pesan);
        
    
        }


        // PROSES KIRIM WA KONFIRMASI CHECKOUT KE NOMOR WA TERTULIS

        $pesan =  "Selamat " . $this->input->post('nama',TRUE)  . " [ " . $this->input->post('nmrwhatsapp',TRUE)  . " ]  \r\n\r\n Dari:". base_url() . " \r\n\r\n Terimakasih Sudah Memesan Hunian nyaman dari Produk Kami  \r\n\r\n  Untuk informasi produk kami yang lain Via Wa ketik: produk kirim ke nomor pengirim ini. \r\n\r\n Untuk mengelola data transaksi anda bisa akses: \r\n " . base_url('login') . " \r\n username: ". $sett_email ."\r\n Password:". $get_password_angka ." \r\n\r\n atau \r\n ketik: Transaksi \r\n Kirim ke nmor pengirim ini";

        $nomorhp = $this->input->post('nmrwhatsapp',TRUE);
        $this->KirimWa_model->kirimwa($nomorhp, $pesan);

        $pesan= "*DIKIRIM JUGA KE 08157045860* \r\n\r\n". $pesan;
        $nomorhp = "08157045860";
        $this->KirimWa_model->kirimwa($nomorhp, $pesan);

        redirect(site_url('Property_proses/Proses_beli_pilih_checkout/'.$data_checkout->uuid_checkout));
    }

    public function Proses_beli_pilih_checkout($uuid_checkout=null) {
        $this->db->where('uuid_checkout',$uuid_checkout);
        $data_checkout       = $this->db->get('tbl_property_checkout')->row();

        // print_r($data_checkout );
        // die;

        $data = array(
            'data_checkout' => $data_checkout,
            'uuid_checkout' => $uuid_checkout,
            'button' => 'Lanjut',
            // 'action' => base_url(),
        );

        // print_r($data['data_property_terpilih']);
   
        $this->load->view("PROPERTY_PROSES/Proses_beli_pilih_checkout",$data);  


    }
    public function propertylist() {
        $this->load->view("PROPERTY_PROSES/property_list_pemilihan");
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

    // Mengetahui IP Pengunjung
    function get_client_ip()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'IP tidak dikenali';
        return $ipaddress;
    }

    // Mengetahui web browser yang digunakan pengunjung
    function get_client_browser()
    {
        $browser = '';
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
            $browser = 'Netscape';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
            $browser = 'Firefox';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
            $browser = 'Chrome';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
            $browser = 'Opera';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
            $browser = 'Internet Explorer';
        else
            $browser = 'Other';
        return $browser;
    }



}
