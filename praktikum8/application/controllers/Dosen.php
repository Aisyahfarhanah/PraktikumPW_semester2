<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
            //panggil model + bikin objek, manggil model gaperlu kapital
        $this->load->model('dosen_model', 'dsn1');
            //pake class model
        $this->dsn1->id =1;
        $this->dsn1->nidn='240779';
        $this->dsn1->nama='Faisal Amar';
        $this->dsn1->gender='L';
        $this->dsn1->pendidikan='S3';
        
        $this->load->model('dosen_model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn='240780';
        $this->dsn2->nama='Sri Meta';
        $this->dsn2->gender='P';
        $this->dsn2->pendidikan='S2';

        $this->load->model('dosen_model','dsn3');
        $this->dsn3->id=2;
        $this->dsn3->nidn='240781';
        $this->dsn3->nama='Agung Suci';
        $this->dsn3->gender='P';
        $this->dsn3->pendidikan='S2';

        
            //simpen data di array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
            //siapin buat dikirim ke view
        $data['list_dsn']=$list_dsn;
            //kirim data ke view
        $this->load->view('header');
        $this->load->view('dosen/index',$data); //foleder/file
        $this->load->view('footer');
        }
       } 
           
