<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	public function index()
	{
            //panggil model + bikin objek, manggil model gaperlu kapital
        $this->load->model('Matakuliah_model', 'mtkl1');
            //pake class model
        $this->mtkl1->nama ='Pemrograman Web 1';
        $this->mtkl1->kode='21SI003';
        $this->mtkl1->sks='3';
        
        $this->load->model('Matakuliah_model','mtkl2');
        $this->mtkl2->nama='Basis Data 1';
        $this->mtkl2->kode='21SI005';
        $this->mtkl2->sks='2';
        
            //simpen data di array
        $list_mtkl = [$this->mtkl1, $this->mtkl2];
            //siapin buat dikirim ke view
        $data['list_mtkl']=$list_mtkl;
            //kirim data ke view
        $this->load->view('header');
        $this->load->view('Matakuliah/index',$data); //foleder/file
        $this->load->view('footer');
        }
       } 
           
