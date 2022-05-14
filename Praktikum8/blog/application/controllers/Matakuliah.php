<?php
class Matakuliah extends CI_controller{
    // method dosen
    public function index(){
            // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] =$matakuliah;
        //render data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layout/footer');
    }
}
?>