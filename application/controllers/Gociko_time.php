<?php

require APPPATH . '/libraries/REST_Controller.php';

class Gociko_time extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    function index_get() {
            //   print_r("test 1");
        $namatoko = $this->get('namatoko');
        if ($namatoko == '') {
            //print_r("tidak ada nama toko");
            $data_time = $this->db->get('tbl_gocikotime')->result();
        } else {
            // $this->db->where('namatoko', $namatoko);
            // $data_time = $this->db->get('tbl_gocikotime')->result();

            //SIMPAN TOKO YANG ONLINE AKSES APLIKASI
            $data = array(
                'date_input' => date('Y-m-d H:i:s'),
                // 'idtoko'          => $this->db->query($sql)->row()->idtoko,
                'namatoko'          => $namatoko,
            );

            // print_r($data);
            $this->db->set('uuid_summary', "replace(uuid(),'-','')", FALSE);
            // $insert = $this->db->insert('mahasiswa', $data);
            $this->db->insert('table_history_accessing', $data);


            $jam_sekarang = date("H");
            $get_menit_sekarang = date("i");
            $menit_sekarang_kurang_2 = date("i")-2;
            $menit_sekarang_plus_2 = date("i")+2;
            
            $sql = "SELECT * FROM tbl_gocikotime WHERE namatoko = '$namatoko' AND jam >= $jam_sekarang AND ( menit >= $menit_sekarang_kurang_2 AND menit <= $menit_sekarang_plus_2 ) ";
            $data_time=$this->db->query($sql)->result();

            // print_r($data_time);

            if($this->db->query($sql)->num_rows()>0){
                $data = array(
                    'date_input' => date('Y-m-d H:i:s'),
                    'idtoko'          => $this->db->query($sql)->row()->idtoko,
                    'namatoko'          => $namatoko,
                    'jam_play'    => $jam_sekarang,
                    'menit_play'        => $get_menit_sekarang);
    
                $this->db->set('uuid_summary', "replace(uuid(),'-','')", FALSE);
                $this->db->insert('table_history_connected', $data);
            }
      
        }




        $sql = "SELECT jam,menit FROM table_sys_jam_running where status<>1 order by jam asc, menit asc limit 1";
        $data_jam = $this->db->query($sql)->row()->jam;
        $data_menit = $this->db->query($sql)->row()->menit;


        $data_waktu_yang_baru = date('Y-m-d', strtotime('+0 day', strtotime(date('Y-m-d H:i:s'))));
        $date = DateTime::createFromFormat("Y-m-d",$data_waktu_yang_baru);
        $yearX = $date->format("Y");
        $monthX = $date->format("m");
        $dayX = $date->format("d");
        $jamX = $data_jam;
        $menitX = $data_menit;

        $waktu_cekX = $yearX . "-" . $monthX . "-" . $dayX . " " . $jamX . ":" . $menitX . ":00";
        $date_waktu_cekX = date('Y-m-d H:i:s',strtotime($waktu_cekX));


        // print_r(date('Y-m-d H:i:s'));
        // print_r("<br/>");

        // print_r($date_waktu_cekX);
        // print_r("<br/>");


        if(date('Y-m-d H:i:s') > $date_waktu_cekX){
            // print_r("Proses kirim wa, karena data jam belum berstatus kirim ke wa dan jam sudah lebih dari target runninh");
            // print_r("<br/>");
            // hapus data table_history_connected_tmp (truncate tabel)
            $this->db->query('TRUNCATE table_history_connected_tmp');

          
            // proses cek data record dari table_history_connected (where pada jam yang belum di kirim wa) di copy ke table_history_connected_tmp
        
                //==> LOOPING data  table_history_connected ke table_history_connected_tmp filter idtoko dan date_input terakhir


                $start = 0;
     
                $pesan ="*GOCIKO*  \r\n";

                $sql = "select idtoko,namatoko from tbl_toko group by idtoko";
                foreach ($this->db->query($sql)->result() as $m) {
                    // echo $m->idtoko; echo "<br/>"; echo $m->namatoko; echo "<br/>";

                    $sql = "SELECT idtoko,namatoko,date_input FROM table_history_connected where idtoko = $m->idtoko order by date_input DESC limit 1";
                    $get_idtoko = $this->db->query($sql)->row()->idtoko;
                    // echo $get_idtoko;echo "<br/>"; echo $this->db->query($sql)->row()->namatoko;echo "<br/>";echo $this->db->query($sql)->row()->date_input;echo "<br/>";

                    // cek data apakah ada record running per toko
                    // $this->db->where('email',$email);
                    // //$this->db->where('password',  $test);
                    // $users       = $this->db->get('tbl_user');
                    if($this->db->query($sql)->num_rows()>0){
                        // echo $m->idtoko; echo "<br/>"; echo $m->namatoko; echo "<br/>";echo $this->db->query($sql)->row()->date_input;echo "<br/>";
                        // echo "ADA DATA";echo "<br/>";

                        $pesan= $pesan . " " . ++$start . "  *" . $m->namatoko . "* ==> " .$this->db->query($sql)->row()->date_input . " \r\n";

                    }else{
                        // echo $m->idtoko; echo "<br/>"; echo $m->namatoko; echo "<br/>";
                        // echo "TIDAK ADA DATA";echo "<br/>";

                        $pesan= $pesan . " " . ++$start . "  _" . $m->namatoko . "_ \r\n";
                    }


                    
                }


                // print_r($pesan);
                // print_r("<br/>");
                // print_r("========================================");


                $sql = "select id,nomorwa from table_wa_penerima";
                foreach ($this->db->query($sql)->result() as $m) {
                    $no_wa_pendaftar=$m->nomorwa;
                    $this->KirimWa_model->kirimwa($no_wa_pendaftar, $pesan);
                }





                $sql = "SELECT id,jam,menit FROM table_sys_jam_running where status<>1 order by jam asc, menit asc limit 1";
                // $get_id_jam = $this->db->query($sql)->row()->id;

                // print_r($this->db->query($sql)->row()->id);
                // print_r("<br/>");
                // print_r($this->db->query($sql)->row()->jam);
                // print_r("<br/>");
                // print_r($this->db->query($sql)->row()->menit);
                // print_r("<br/>");

                $get_id = $this->db->query($sql)->row()->id;
                $data = array(
                            'status'       => 1);
                $this->db->where('id', $get_id);
                $update = $this->db->update('table_sys_jam_running', $data);


                // die;

                // update table_sys_jam_running filter : jam yang bersesuaian



        }else{
            // print_r("belum sampai pada waktu kirim wa");
        }

        // print_r("test");
        // print_r($data_time);

        $this->response($data_time, 200);
    }


    // show data mahasiswa
    function index_getXXX() {
        $nim = $this->get('nim');
        if ($nim == '') {
            $mahasiswa = $this->db->get('mahasiswa')->result();
        } else {
            $this->db->where('nim', $nim);
            $mahasiswa = $this->db->get('mahasiswa')->result();
        }
        $this->response($mahasiswa, 200);
    }

    // insert new data to mahasiswa
    function index_post() {
        $data = array(
                    'nim'           => $this->post('nim'),
                    'nama'          => $this->post('nama'),
                    'id_jurusan'    => $this->post('id_jurusan'),
                    'alamat'        => $this->post('alamat'));
        $insert = $this->db->insert('mahasiswa', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // update data mahasiswa
    function index_put() {
        $nim = $this->put('nim');
        $data = array(
                    'nim'       => $this->put('nim'),
                    'nama'      => $this->put('nama'),
                    'id_jurusan'=> $this->put('id_jurusan'),
                    'alamat'    => $this->put('alamat'));
        $this->db->where('nim', $nim);
        $update = $this->db->update('mahasiswa', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // delete mahasiswa
    function index_delete() {
        $nim = $this->delete('nim');
        $this->db->where('nim', $nim);
        $delete = $this->db->delete('mahasiswa');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}