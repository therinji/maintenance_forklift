<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    // Menampilkan halaman login
    public function index(){
        $this->load->view('v_login');
    }

    // Validasi login
    function login_aksi(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        echo $username;
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() != false){
            $where = array(
                'username' => $username,
                'password' => md5($password)
            );

            $cek = $this->m_data->cek_login('petugas', $where)->num_rows();
            $data = $this->m_data->cek_login('petugas', $where)->row();

            if($cek > 0){
                if($data->jabatan == 'admin'){
                    $data_session = [
                        'id' => $data->id,
                        'nama' => $data->nama,
                        'username' => $data->username,
                        'status' => 'admin_login'
                    ];
                    $this->session->set_userdata($data_session);
                    redirect(base_url() . 'dashboard');
                }else{
                    $data_session = [
                        'id' => $data->id,
                        'nama' => $data->nama,
                        'username' => $data->username,
                        'status' => 'user_login'
                    ];
                    $this->session->set_userdata($data_session);
                    redirect(base_url() . 'user');
                }
            }else{
                redirect(base_url() . 'login?alert=gagal');
            }
        }else{
            $this->load->view('v_login');
        }
    }
}
?>