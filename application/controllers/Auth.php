<?php
Class Auth extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        // is_login();
        // $this->load->model(array('Sys_cover_model', 'Trans_penjualan_model', 'Tbl_stok_barang_detail_model', 'Tbl_produk_model', 'Tbl_stok_barang_model', 'Tbl_sales_model', 'Tbl_produk_mapel_referensi_model', 'Trans_penjualan_detail_model', 'Trans_retur_detail_model'));

        $this->load->model(array('KirimWa_model'));
        
        // $this->load->library('form_validation');
        // $this->load->library('Pdf');
        $this->load->helper(array('nominal'));
    }
    
    function index(){
        $this->load->view('auth/login');
    }
    
    function cheklogin(){
        $email      = $this->input->post('email');
        //$password   = $this->input->post('password');
        $password = $this->input->post('password',TRUE);
        $hashPass = password_hash($password,PASSWORD_DEFAULT);
        $test     = password_verify($password, $hashPass);
        // query chek users
        $this->db->where('email',$email);
        //$this->db->where('password',  $test);
        $users       = $this->db->get('tbl_user');
        
        if($users->num_rows()>0){
            $user = $users->row_array();
            if(password_verify($password,$user['password'])){
                // retrive user data to session
                $this->session->set_userdata($user);
                // redirect('welcome'); //DEFAULT
                $pesan = base_url() . " ,  Selamat " . $user['full_name']  . " [ " . $user['email']  . " ] /  Terimakasih Sudah Login.";
                $nomorhp = $this->input->post('nmrwhatsapp',TRUE);
                $this->KirimWa_model->kirimwa($nomorhp, $pesan);

                redirect('Tbl_property');
            }else{
                redirect('auth');
            }
        }else{
            // $this->session->set_flashdata('status_login','email atau password yang anda input salah');
            // redirect('auth');


            $X_data="TIDAK_ADA_DATA";

            //CEK DI tbl_user_lupapassword
            $this->db->where('email', $email);
            $users = $this->db->get('tbl_user_lupapassword');

            if ($users->num_rows() > 0) {
                $user = $users->row_array();
                $X_data="ADA";
            }

            // $this->db->where('no_hp', $email);
            // $users = $this->db->get('tbl_user_lupapassword');

            

            $sql = "select * from tbl_user_lupapassword order by  date_input desc limit 1";

            if ($this->db->query($sql)->num_rows() > 0) {
                $user = $this->db->query($sql)->row_array();
                $X_data="ADA";
            }
            
            if($X_data == "ADA"){

                // //Cek waktu: date_input, apakah kurang dari 5 menit.

                $date = $user['date_input'];
                $currentDate = strtotime($date);
                $futureDate = $currentDate+(60*5);
                $KadaluarsaDate = date("Y-m-d H:i:s", $futureDate);



                if(date('Y-m-d H:i:s') <= $KadaluarsaDate){

                    if (password_verify($password, $user['password'])) {
                        
                         //GET DATA USER DARI tbl_user
                         $this->db->where('id_user_level', $user['id_user_level']);
                         $this->db->where('email', $user['email']);
                         $users = $this->db->get('tbl_user');                            

                         $user = $users->row_array();

                        // retrive user data to session
                        $this->session->set_userdata($user);

                       
                        // print_r($users_tbl_user->row()->id_users);
                        // die;

                        $sess = array(
                            'sess_username'        => $user['full_name'],
                            'sess_iduser'        => $user['id_users'],
                            'sess_id_user_level'        => $user['id_user_level'],
                            'sess_email_user'        => $user['email'],
                            'sess_no_hp'        => $user['no_hp'],
                            // 'sess_status_tagihan'        => $user['status_tagihan'],
                        );
                        $this->session->set_userdata($sess);
        
        
                        // print_r($sess);
                        // print_r("<br/>");
                        // print_r("<br/>");
                        // die;
        
                        $get_client = $this->get_client_ip();
                        $get_client_browser = $this->get_client_browser();
                        $date_login = date('Y-m-d H:i:s');
                        $pesan = base_url() . " ,  Selamat " . $this->input->post('nama',TRUE)  . " [ " . $this->input->post('nmrwhatsapp',TRUE)  . " ] /  Terimakasih Sudah Login.";
                        $nomorhp = $this->input->post('nmrwhatsapp',TRUE);
                        $this->KirimWa_model->kirimwa($nomorhp, $pesan);
        
                        // print_r($this->session->userdata('sess_id_user_level'));
                        // die;

                        if ($this->session->userdata('sess_id_user_level') == '1') { //admin
                            redirect('Dashboard');
                        } elseif ($this->session->userdata('sess_id_user_level') == '99') { //administrator
                            redirect('Dashboard');
                        } elseif ($this->session->userdata('sess_id_user_level') == '2') { //manager
                            redirect('Dashboard');
                        } elseif ($this->session->userdata('sess_id_user_level') == '7') { //kasir
                            redirect('Dashboard');
                        } elseif ($this->session->userdata('sess_id_user_level') == '3') { //sales
                            redirect('Dashboard');
                        } elseif ($this->session->userdata('sess_id_user_level') == '4') { //customer
                            redirect('Dashboard');
                        } else {
                            // header("location:" . base_url());
                            redirect('auth');
                        }
                    } else {
                        // print_r("tidak lolos password");
                        // die;
                        redirect('auth');
                    }
                }else{
                    $this->session->set_flashdata('status_login', 'email atau password yang anda input salah');
                    redirect('auth');
                }
            }else{
                        
                $this->session->set_flashdata('status_login', 'email atau password yang anda input salah');
                redirect('auth');
            }


        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('status_login','Anda sudah berhasil keluar dari aplikasi');
        redirect('auth');
    }


    function web_griyaku(){
        redirect(base_url());
    }



}
