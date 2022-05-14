<?php
class Matakuliah extends CI_controller{
    public function index(){
        $this->load->model('matakuliah_model','mkh1');
         
        // buat object model 1 dan nilainya
        $this->mkh1->id=1;
        $this->mkh1->nama='Pemweb';
        $this->mkh1->sks='3';
        $this->mkh1->kode='PW';
       
        $this->load->model('matakuliah_model','mkh2');
        
        // buat object model 2 dan nilainya
        $this->mkh2->id=2;
        $this->mkh2->nama='Basdat';
        $this->mkh2->sks='3';
        $this->mkh2->kode='BD';

         // simpan object yang kita buat tadi ke dalam array
         $list_mkh = [$this->mkh1, $this->mkh2];
         // siapkan data untuk di kirim kedalan view, dimana datanya di ambil dari object yang kita simpan ke dalam    
         $data['list_mkh'] = $list_mkh;
         //render data dan kirim data ke dalam view
         $this->load->view('layout/header');
         $this->load->view('matakuliah/index', $data);
         $this->load->view('layout/footer');
 
    }
}
?>