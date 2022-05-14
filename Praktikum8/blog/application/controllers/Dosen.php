<?php
class Dosen extends CI_controller{
    // method dosen
    public function index(){
          // akses model dosen
       $this->load->model('dosen_model');
       $dosen = $this->dosen_model->getAll();
       $data['dosen'] =$dosen;
       //render data dan kirim data ke dalam view
       $this->load->view('layout/header');
       $this->load->view('dosen/index', $data);
       $this->load->view('layout/footer');
    }
    public function detail($id){
        //akses detail dosen
        $this->load->model('dosen_model');
        $pengajar = $this->dosen_model->getById($id);
        $data['pengajar'] = $pengajar;
        $this->load->view('layout/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layout/footer');

    }
}
?>