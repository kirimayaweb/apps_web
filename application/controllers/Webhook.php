<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Webhook extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        // is_login();
        $this->load->model(array('Property_proses_model','KirimWa_model','Tbl_property_checkout_model'));
        // $this->load->library('form_validation');        
	    // $this->load->library('datatables');
        $this->load->helper(array('nominal'));
    }

        
    // function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Test_model');
    //     $this->load->library('form_validation');
    // }

    public function index()
    {
        
        header('Content-Type: application/json; charset=utf-8');
        
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        $device = $data['device'];
        $sender = $data['sender'];
        $message = $data['message'];
        $text= $data['text']; //button text
        $member= $data['member']; //group member who send the message
        $name = $data['name'];
        $location = $data['location'];
        $pollname= $data['pollname'];
        $choices= $data['choices'];
        
        //data below will only received by device with all feature package
        //start
        $url =  $data['url'];
        $filename =  $data['filename'];
        $extension=  $data['extension'];
        //end
        
        function sendFonnte($target, $data) {
            $curl = curl_init();
        
            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.fonnte.com/send",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => array(
                    'target' => $target,
                    'message' => $data['message'],
                    'url' => $data['url'],
                    'filename' => $data['filename'],
                ),
              CURLOPT_HTTPHEADER => array(
                "Authorization: GK#6@uPd5GvvA#xa_6z@"
              ),
            ));
        
            $response = curl_exec($curl);
        
            curl_close($curl);
        
            return $response;
        }
        
        if ( $message == "produk" ) {
            $reply = [
                "message" => $this->get_produk(),
            ];
        } elseif ( $message == "transaksi" ) {
            $reply = [
                "message" => "transaksi working great!",
            ];
        } elseif ( $message == "nomorhp" ) {
            $reply = [
                "message" => $sender,
            ];
        } elseif ( $message == "test" ) {
            $reply = [
                "message" => "working great!",
            ];
        } elseif ( $message == "image" ) {
            $reply = [
                "message" => "image message",
                "url" => "https://filesamples.com/samples/image/jpg/sample_640%C3%97426.jpg",
            ];
        } elseif ( $message == "audio" ) {
            $reply = [
                    "message" => "audio message",
                "url" => "https://filesamples.com/samples/audio/mp3/sample3.mp3",
                "filename" => "music",
            ];
        } elseif ( $message == "video" ) {
            $reply = [
                "message" => "video message",
                "url" => "https://filesamples.com/samples/video/mp4/sample_640x360.mp4",
            ];
        } elseif ( $message == "file" ) {
            $reply = [
                "message" => "file message",
                "url" => "https://filesamples.com/samples/document/docx/sample3.docx",
                "filename" => "document",
            ];
        } else {
            $reply = [
                "message" => "Sorry, i don't understand. Please use one of the following keyword :
                    
        Test
        Audio
        Video
        Image
        File",
        ];
        }
        
        sendFonnte($sender, $reply);
    }

    public function test_getkirim_produk(){
        // $this->get_client_browser()
        // print_r($this->get_produk());

        $pesan= $this->get_produk();
        $nomorhp = "08157045860";
        $this->KirimWa_model->kirimwa($nomorhp, $pesan);

    }


    public function get_produk(){
        // $all_produk = $this->Property_proses_model->get_all();
        // print_r($this->Property_proses_model->get_all());

        $get_produk="Produk *Hunian Griyaku* \r\n  Terimakasih sudah menghubungi sistem publikasi griyaku.com \r\n\r\n Selamat Memilih, \r\n *Berikut Hunian Impian:* \r\n\r\n";

        // $Produk_list="";
        $start=0;
        foreach ($this->Property_proses_model->get_all() as $data_property_dijual_list)
        {
            $x_nmr=++$start;
            $X_produk="";
            // print_r($x_nmr);
            // print_r("<br/>");
            // print_r("Hunian: ");
            // print_r($data_property_dijual_list->nama_property);
            // print_r("<br/>");        
            // print_r("Tipe: ");
            // print_r($data_property_dijual_list->tipe_property);
            // print_r("<br/>");
            // print_r("Status: ");
            // print_r($data_property_dijual_list->status);
            // print_r("<br/>");
            // print_r("Kota: ");
            // print_r($data_property_dijual_list->kota);
            // print_r("<br/>");
            // print_r("Komplek: ");
            // print_r($data_property_dijual_list->nama_komplek);
            // print_r("<br/>");
            // print_r("Lokasi: ");
            // print_r($data_property_dijual_list->lokasi);
            // print_r("<br/>");
            // print_r("Luas Tanah: ");
            // print_r($data_property_dijual_list->luas_tanah);
            // print_r("<br/>");
            // print_r("Luas Bangunan: ");
            // print_r($data_property_dijual_list->luas_bangunan);
            // print_r("<br/>");
            // print_r("Jumlah Kamar: ");
            // print_r($data_property_dijual_list->jumlah_kamar);
            // print_r("<br/>");
            // print_r("Jumlah Kamar Mandi: ");
            // print_r($data_property_dijual_list->jumlah_kamar_mandi);
            // print_r("<br/>");
            // print_r("Harga: ");
            // print_r($data_property_dijual_list->harga);
            // print_r("<br/>");
            // print_r("<br/>");

            $X_produk= $x_nmr . ". *" . $data_property_dijual_list->nama_property . "*  \r\n";
            $X_produk= $X_produk . "      Tipe: " . $data_property_dijual_list->tipe_property . "  \r\n";
            $X_produk= $X_produk . "      Status: " . $data_property_dijual_list->status . "  \r\n";
            $X_produk= $X_produk . "      Kota: " . $data_property_dijual_list->kota . "  \r\n";
            $X_produk= $X_produk . "      Komplek: " . $data_property_dijual_list->nama_komplek . "  \r\n";
            $X_produk= $X_produk . "      Lokasi: " . $data_property_dijual_list->lokasi . "  \r\n";
            $X_produk= $X_produk . "      Luas Tanah: " . $data_property_dijual_list->luas_tanah . " m2 \r\n";
            $X_produk= $X_produk . "      Luas Bangunan: " . $data_property_dijual_list->luas_bangunan . " m2  \r\n";
            $X_produk= $X_produk . "      Jumlah Kamar: " . $data_property_dijual_list->jumlah_kamar . "  \r\n";
            $X_produk= $X_produk . "      Jumlah Kamar Mandi: " . $data_property_dijual_list->jumlah_kamar_mandi . "  \r\n";
            $X_produk= $X_produk . "      Harga: Rp." . nominal($data_property_dijual_list->harga) . "  \r\n";



            $get_produk = $get_produk . $X_produk . " \r\n ";

        }

        return $get_produk;
        // print_r($get_produk);

        // $pesan= $get_produk;
        // $nomorhp = "08157045860";
        // $this->KirimWa_model->kirimwa($nomorhp, $pesan);

    }


    public function test_getkirim_transaksi($nmr_wa){
        // $this->get_client_browser()
        // print_r($this->get_produk());

        $pesan= $this->get_transaksi($nmr_wa);
        // $nomorhp = "08157045860";
        $this->KirimWa_model->kirimwa($nmr_wa, $pesan);

    }

    public function get_transaksi($nmr_wa){
        // $all_produk = $this->Property_proses_model->get_all();
        // print_r($this->Property_proses_model->get_all());

        $nmr_wa=substr($nmr_wa,2);

        $get_produk="Terimakasih sudah bertransaksi di griyaku.com \r\n\r\n *Berikut Hunian pilihan Anda:* \r\n\r\n";

        // $Produk_list="";
        $start=0;
        foreach ($this->Tbl_property_checkout_model->get_by_nmr_wa($nmr_wa) as $data_property_dijual_list)
        {
            $x_nmr=++$start;
            $X_produk="";

            $X_produk= $x_nmr . ". *" . $data_property_dijual_list->nama_property . "*  \r\n";
            $X_produk= $X_produk . "      Tipe: " . $data_property_dijual_list->tipe_property . "  \r\n";
            $X_produk= $X_produk . "      Status: " . $data_property_dijual_list->status . "  \r\n";
            $X_produk= $X_produk . "      Kota: " . $data_property_dijual_list->kota . "  \r\n";
            $X_produk= $X_produk . "      Komplek: " . $data_property_dijual_list->nama_komplek . "  \r\n";
            $X_produk= $X_produk . "      Lokasi: " . $data_property_dijual_list->lokasi . "  \r\n";
            $X_produk= $X_produk . "      Luas Tanah: " . $data_property_dijual_list->luas_tanah . " m2 \r\n";
            $X_produk= $X_produk . "      Luas Bangunan: " . $data_property_dijual_list->luas_bangunan . " m2  \r\n";
            $X_produk= $X_produk . "      Jumlah Kamar: " . $data_property_dijual_list->jumlah_kamar . "  \r\n";
            $X_produk= $X_produk . "      Jumlah Kamar Mandi: " . $data_property_dijual_list->jumlah_kamar_mandi . "  \r\n";
            $X_produk= $X_produk . "      Harga: Rp." . nominal($data_property_dijual_list->harga) . "  \r\n";

            $get_produk = $get_produk . $X_produk . " \r\n ";

        }

        return $get_produk;

    }

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-05-05 06:31:25 */
/* http://harviacode.com */