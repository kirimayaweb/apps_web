<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class KirimWa_model extends CI_Model
{

    public $table = 'tbl_menu';
    public $id = 'id_menu';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    public function kirimwa($nomorwa = null, $pesantext = null){


        // $pesantext = $pesantext . " Working Great!!! ";

        if (!($nomorwa)) {
            $nomorwa = "628157045860";
        }
        if (!($pesantext)) {
            $pesantext = "ada akses masuk";
        }


        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.fonnte.com/send',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
        // 'target' => '08123456789|Fonnte|Admin,08123456789|Lili|User',
        'target' => $nomorwa,
        'message' => $pesantext,
        
        ),
          CURLOPT_HTTPHEADER => array(
            // 'Authorization: 1BFYxDnYcsZjm9nahfEG' // 0858 0377 3981
            'Authorization: GK#6@uPd5GvvA#xa_6z@'  // 0858 7725 7503
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        // echo $response;

    }

    public function kirimwa_OLD_1($nomorwa = null, $pesantext = null)
    {

        if (!($nomorwa)) {
            $nomorwa = "628157045860";
        }
        if (!($pesantext)) {
            $pesantext = "ada akses masuk";
        }



        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://md.fonnte.com/api/send_message.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'phone' => $nomorwa,
                'type' => 'text',
                'text' => $pesantext,
                'delay' => '1',
                'schedule' => '0'
            ),
            CURLOPT_HTTPHEADER => array(
                "Authorization: 1BFYxDnYcsZjm9nahfEG"
            ),
        ));

        $response = curl_exec($curl);


        curl_close($curl);
        // echo $response;
        // sleep(1);
    }


    public function kirimwa_OLD($nomorwa = null, $pesantext = null)
    {

        if (!($nomorwa)) {
            $nomorwa = "628157045860";
        }
        if (!($pesantext)) {
            $pesantext = "ada akses masuk";
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://fonnte.com/api/send_message.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array('phone' => $nomorwa, 'type' => 'text', 'text' => $pesantext, 'delay' => '1', 'delay_req' => '1', 'schedule' => '0'),
            CURLOPT_HTTPHEADER => array(
                "Authorization: K1mzoiD4FwEVub8duMKY"
            ),
        ));

        $response = curl_exec($curl);

        // curl_close($curl);
        // echo $response;
    }
}

/* End of file Menu_model.php */
/* Location: ./application/models/Menu_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-10-04 10:50:27 */
/* http://harviacode.com */