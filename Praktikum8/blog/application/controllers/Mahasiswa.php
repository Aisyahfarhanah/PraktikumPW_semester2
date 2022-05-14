<?php
class Mahasiswa extends CI_controller{
    // membuat method index
    public function index(){
       // akses model mahasiswa
       $this->load->model('mahasiswa_model');
       $mahasiswa = $this->mahasiswa_model->getAll();
       $data['mahasiswa'] =$mahasiswa;
       //render data dan kirim data ke dalam view
       $this->load->view('layout/header');
       $this->load->view('mahasiswa/index', $data);
       $this->load->view('layout/footer');
    } 
    public function detail($id){
        // akses model mahasiswa
        $this->load->model('mahasiswa_model');
        $siswa = $this->mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;
        $this->load->view('layout/header');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layout/footer');

    }
}
?>