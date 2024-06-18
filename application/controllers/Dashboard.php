<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();

        // Cek session untuk login, jika session status tidak sama dengan session admin_login dialihkan ke halaman login
        if($this->session->userdata('status') != 'admin_login'){
            redirect(base_url() . 'login?alert=belum_login');
        }
    }

    function index(){
        // $buku = $this->m_data->get_data('buku')->num_rows();
        // $anggota = $this->m_data->get_data('anggota')->num_rows();
        // $petugas = $this->m_data->get_data('petugas')->num_rows();
        // $peminjaman = $this->m_data->get_data('peminjaman')->num_rows();

        // $data['perpustakaan'] = array(
        //     'buku' => $buku,
        //     'anggota' => $anggota,
        //     'petugas' => $petugas,
        //     'peminjaman' => $peminjaman
        // );

        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_index');
        $this->load->view('dashboard/v_footer');
    }

    function operator(){
        // Ambil data dari tabel petugas
        $data['operator'] = $this->m_data->get_data('operator')->result();
        $this->load->view('dashboard/v_header');
        // Mengirim data ke halaman petugas
        $this->load->view('dashboard/v_operator', $data);
        $this->load->view('dashboard/v_footer');
    }

    function operator_tambah(){
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_operator_tambah');
        $this->load->view('dashboard/v_footer');
    }

    function operator_tambah_aksi(){
        $nama = $this->input->post('nama');

        $data = array(
            'nama' => $nama,
        );

        // Tambahkan data ke database
        $this->m_data->insert_data($data, 'operator');
        redirect(base_url() . 'dashboard/operator');
    }

    function operator_edit($id){
        $where = array('id_operator' => $id);
        // Ambil data sesuai id operator untuk di edit dan diubah ke bentuk array
        $data['operator'] = $this->m_data->edit_data($where,'operator')->result();
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_operator_edit', $data);
        $this->load->view('dashboard/v_footer');
    }

    function operator_update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');

        $where = ['id_operator' => $id];
        $data = ['nama' => $nama];

        // update data operator
        $this->m_data->update_data($where,$data,'operator');
        
        redirect(base_url() . 'dashboard/operator');
    }

    function operator_hapus($id){
        $where = array('id_operator' => $id);
        $this->m_data->delete_data($where,'operator');
        redirect(base_url() . 'dashboard/operator');
    }

    function forklift(){
        $data['forklift'] = $this->m_data->get_data('forklift')->result();

        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_forklift', $data);
        $this->load->view('dashboard/v_footer');
    }

    function forklift_tambah(){
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_forklift_tambah');
        $this->load->view('dashboard/v_footer');
    }

    function forklift_tambah_aksi(){
        $nama = $this->input->post('nama');
        $jenis = $this->input->post('jenis');
        $tgl_pembelian = $this->input->post('tgl_pembelian');
        $km = $this->input->post('km');
        $kondisi = $this->input->post('kondisi');
        $tgl_maintenance = $this->input->post('tgl_maintenance');
        $keterangan = $this->input->post('keterangan');

        $data = [
            'nama' => $nama,
            'jenis' => $jenis,
            'tgl_pembelian' => $tgl_pembelian,
            'km' => $km,
            'kondisi' => $kondisi,
            'tgl_maintenance' => $tgl_maintenance,
            'keterangan' => $keterangan
        ];

        // Tambahkan data ke database
        $this->m_data->insert_data($data, 'forklift');
        redirect(base_url() . 'dashboard/forklift');
    }

    function forklift_edit($id){
        $where = array('id' => $id);
        // Ambil data sesuai id forklift untuk di edit dan diubah ke bentuk array
        $data['forklift'] = $this->m_data->edit_data($where,'forklift')->result();
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_forklift_edit', $data);
        $this->load->view('dashboard/v_footer');
    }

    function forklift_update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $jenis = $this->input->post('jenis');
        $tgl_pembelian = $this->input->post('tgl_pembelian');
        $km = $this->input->post('km');
        $kondisi = $this->input->post('kondisi');
        $tgl_maintenance = $this->input->post('tgl_maintenance');
        $keterangan = $this->input->post('keterangan');

        $where = ['id' => $id];
        $data = [
            'nama' => $nama,
            'jenis' => $jenis,
            'tgl_pembelian' => $tgl_pembelian,
            'km' => $km,
            'kondisi' => $kondisi,
            'tgl_maintenance' => $tgl_maintenance,
            'keterangan' => $keterangan
        ];

        // update data forklift
        $this->m_data->update_data($where,$data,'forklift');
        
        redirect(base_url() . 'dashboard/forklift');
    }

    function forklift_hapus($id){
        $where = array('id' => $id);
        $this->m_data->delete_data($where,'forklift');
        redirect(base_url() . 'dashboard/forklift');
    }

    function petugas(){
        // Ambil data dari tabel petugas
        $data['petugas'] = $this->m_data->get_data('petugas')->result();
        $this->load->view('dashboard/v_header');
        // Mengirim data ke halaman petugas
        $this->load->view('dashboard/v_petugas', $data);
        $this->load->view('dashboard/v_footer');
    }

    function petugas_tambah(){
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_petugas_tambah');
        $this->load->view('dashboard/v_footer');
    }

    function petugas_tambah_aksi(){
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $jabatan = $this->input->post('jabatan');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => md5($password),
            'jabatan' => $jabatan
        );

        // Tambahkan data ke database
        $this->m_data->insert_data($data, 'petugas');
        redirect(base_url() . 'dashboard/petugas');
    }

    function petugas_edit($id){
        $where = ['id' => $id];
        // Ambil data sesuai id petugas untuk di edit dan diubah ke bentuk array
        $data['petugas'] = $this->m_data->edit_data($where,'petugas')->result();
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_petugas_edit', $data);
        $this->load->view('dashboard/v_footer');
    }

    function petugas_update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $jabatan = $this->input->post('jabatan');

        $where = ['id' => $id];
        if($password != ''){
            $data = [
                'nama' => $nama,
                'username' => $username,
                'password' => md5($password),
                'jabatan' => $jabatan
            ];
        }else{
            $data = [
                'nama' => $nama,
                'username' => $username,
                'jabatan' => $jabatan
            ];
        }

        // update data petugas
        $this->m_data->update_data($where,$data,'petugas');
        
        redirect(base_url() . 'dashboard/petugas');
    }

    function petugas_hapus($id){
        $where = array('id' => $id);
        $this->m_data->delete_data($where,'petugas');
        redirect(base_url() . 'dashboard/petugas');
    }

    function pengajuan(){
        // Ambil data dari tabel pengajuan
        // $data['pengajuan'] = $this->m_data->get_data('pengajuan')->result();
        $data['pengajuan'] = $this->db->query("select id_pengajuan, tgl_pengajuan, status, forklift.nama as nama_forklift, operator.nama as nama_operator, keluhan from pengajuan join forklift on pengajuan.forklift = forklift.id join operator on pengajuan.operator = operator.id_operator where status = '0' order by tgl_pengajuan desc")->result();
        $this->load->view('dashboard/v_header');
        // Mengirim data ke halaman pengajuan
        $this->load->view('dashboard/v_pengajuan', $data);
        $this->load->view('dashboard/v_footer');
    }

    function pengajuan_proses($id){
        $where = ['id_pengajuan' => $id];
        $data = ['status' => 1];

        $this->m_data->update_data($where, $data, 'pengajuan');
        redirect(base_url() . 'dashboard/pengajuan');
    }

    function maintenance(){
        // Ambil data dari tabel pengajuan
        // $data['pengajuan'] = $this->m_data->get_data('pengajuan')->result();
        $data['pengajuan'] = $this->db->query("select id_pengajuan, tgl_pengajuan, status, forklift.nama as nama_forklift, operator.nama as nama_operator, keluhan from pengajuan join forklift on pengajuan.forklift = forklift.id join operator on pengajuan.operator = operator.id_operator where status != '0' order by tgl_pengajuan desc")->result();
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_maintenance', $data);
        $this->load->view('dashboard/v_footer');
    }

    function maintenance_kondisi($id){
        $data['pengajuan'] = $this->db->query("select id_pengajuan, tgl_pengajuan, status, forklift.nama as nama_forklift, operator.nama as nama_operator, keluhan from pengajuan join forklift on pengajuan.forklift = forklift.id join operator on pengajuan.operator = operator.id_operator where id_pengajuan = '$id' order by tgl_pengajuan desc")->result();
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_maintenance_kondisi', $data);
        $this->load->view('dashboard/v_footer');
    }

    function maintenance_simpan(){
        $pengajuan = $this->input->post('pengajuan');
        $tgl_maintenance = $this->input->post('tgl_maintenance');
        $durasi = $this->input->post('durasi');
        $maintenance = $this->input->post('maintenance');
        $keterangan = $this->input->post('keterangan');
        $kondisi = $this->input->post('kondisi');

        $data = [
            'pengajuan' => $pengajuan,
            'tgl_maintenance' => $tgl_maintenance,
            'durasi' => $durasi,
            'maintenance' => $maintenance,
            'keterangan' => $keterangan,
            'kondisi' => $kondisi
        ];

        $this->m_data->insert_data($data, 'maintenance');

        $where = ['id_pengajuan' => $pengajuan];
        $status_update = ['status' => 2];
        $this->m_data->update_data($where, $status_update, 'pengajuan');

        redirect(base_url() . 'dashboard/maintenance');
    }

    function maintenance_lihat($id){
        $data['maintenance'] = $this->db->query("select id_pengajuan, tgl_pengajuan, status, forklift.nama as nama_forklift, operator.nama as nama_operator, keluhan, maintenance.tgl_maintenance, maintenance.durasi, maintenance.maintenance, maintenance.keterangan, maintenance.kondisi from pengajuan join forklift on pengajuan.forklift = forklift.id join operator on pengajuan.operator = operator.id_operator join maintenance on pengajuan.id_pengajuan = maintenance.pengajuan where id_pengajuan = '$id' order by tgl_pengajuan desc")->result();
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_maintenance_lihat', $data);
        $this->load->view('dashboard/v_footer');
    }

///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

    function peminjaman_laporan(){
        if(isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])){
            $mulai = $this->input->get('tanggal_mulai');
            $sampai = $this->input->get('tanggal_sampai');

            $data['peminjaman'] = $this->db->query("select * from peminjaman, buku, anggota where peminjaman.peminjaman_buku = buku.id and peminjaman.peminjaman_anggota = anggota.id and date(peminjaman_tanggal_mulai) >='" . $mulai . "' and date(peminjaman_tanggal_sampai) <= '" . $sampai . "' order by peminjaman_id desc")->result();
        }else{
            $data['peminjaman'] = $this->db->query("select * from peminjaman, buku, anggota where peminjaman.peminjaman_buku = buku.id and peminjaman.peminjaman_anggota = anggota.id order by peminjaman_id desc")->result();
        }

        $this->load->view('admin/v_header');
        $this->load->view('admin/v_peminjaman_laporan', $data);
        $this->load->view('admin/v_footer');
    }

    function anggota(){
        // ambil data dari tabel anggota
        $data['anggota'] = $this->m_data->get_data('anggota')->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_anggota', $data);
        $this->load->view('admin/v_footer');
    }

    function anggota_kartu($id){
        $where = array('id' => $id);
        $data['anggota'] = $this->m_data->edit_data($where, 'anggota')->result();
        $this->load->view('admin/v_anggota_kartu', $data);
    }


    function peminjaman_cetak(){
        if(isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])){
            $mulai = $this->input->get('tanggal_mulai');
            $sampai = $this->input->get('tanggal_sampai');

            $data['peminjaman'] = $this->db->query("select * from peminjaman, buku, anggota where peminjaman.peminjaman_buku = buku.id and peminjaman.peminjaman_anggota = anggota.id and date(peminjaman_tanggal_mulai) >='" . $mulai . "' and date(peminjaman_tanggal_sampai) <= '" . $sampai . "' order by peminjaman_id desc")->result();
            
            $this->load->view('admin/v_peminjaman_cetak', $data);
        }else{
            redirect(base_url() . 'admin/peminjaman_laporan');
        }
    }

    function logout(){
        // Hapus semua session
        $this->session->sess_destroy();
        redirect(base_url() . 'login?alert=logout');
    }

    function ganti_password(){
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_ganti_password');
        $this->load->view('admin/v_footer');
    }

    function ganti_password_aksi(){
        $baru = $this->input->post('password_baru');
        $ulang = $this->input->post('password_ulang');

        // cocokan antara input password_baru dengan input password_ulang
        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|matches[password_ulang]');
        $this->form_validation->set_rules('password_ulang', 'Ulangi Password', 'required');

        if($this->form_validation->run() != false){
            $id = $this->session->userdata('id');
            $where = array('id' => $id);
            $data = array('password' => md5($baru));

            // Melakukkan update data password dengan mengambil function update_data() dari model M_data
            $this->m_data->update_data($where, $data, 'admin');
            redirect(base_url() . 'admin/ganti_password?alert=sukses');
        }else{
            $this->load->view('admin/v_header');
            $this->load->view('admin/v_ganti_password');
            $this->load->view('admin/v_footer');
        }
    }
}

?>