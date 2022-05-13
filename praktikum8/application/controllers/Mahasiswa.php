<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
            //panggil model + bikin objek, manggil model gaperlu kapital
        $this->load->model('mahasiswa_model', 'mhs1');
            //pake class model
        $this->mhs1->id =1;
        $this->mhs1->nim='010001';
        $this->mhs1->nama='Faiz Fikri';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;
        
        $this->load->model('mahasiswa_model','mhs2');
        $this->mhs2->id=2;
        $this->mhs2->nim='020001';
        $this->mhs2->nama='Pandan Wangi';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.35;
        
            //simpen data di array
        $list_mhs = [$this->mhs1, $this->mhs2];
            //siapin buat dikirim ke view
        $data['list_mhs']=$list_mhs;
            //kirim data ke view
        $this->load->view('header');
        $this->load->view('mahasiswa/index',$data); //foleder/file
        $this->load->view('footer');
        }
       } 
           
