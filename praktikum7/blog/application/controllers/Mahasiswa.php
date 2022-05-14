<?php
class Mahasiswa extends CI_controller{
    // membuat method index
    public function index(){
       $this->load->model('mahasiswa_model','mhs1');
        
       // buat object model 1 dan nilainya
       $this->mhs1->id=1;
       $this->mhs1->nim='0111';
       $this->mhs1->nama='Faiz';
       $this->mhs1->gender='L';
       $this->mhs1->ipk=3.85;

       $this->load->model('mahasiswa_model','mhs2');
       
       // buat object model 2 dan nilainya
       $this->mhs2->id=2;
       $this->mhs2->nim='0222';
       $this->mhs2->nama='Nurul';
       $this->mhs2->gender='P';
       $this->mhs2->ipk=3.55;

       // simpan object yang kita buat tadi ke dalam array
       $list_mhs = [$this->mhs1, $this->mhs2];
       // siapkan data untuk di kirim kedalan view, dimana datanya di ambil dari object yang kita simpan ke dalam    
       $data['list_mhs'] = $list_mhs;
       //render data dan kirim data ke dalam view
       $this->load->view('layout/header');
       $this->load->view('mahasiswa/index', $data);
       $this->load->view('layout/footer');
    } 
}
?>