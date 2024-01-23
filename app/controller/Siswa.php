<?php

class Siswa extends Controller{

    public $data = ['title' => 'Siswa'];

    public function index(){
        
        $data['title'] = 'Siswa';
        $data['nama'] = 'Sefarina';
        $this->view("templates/header");
        $this->view("siswa/index", $data);
        $this->view("templates/footer");


    }

    public function biodata(){
        echo"ini adalah siswa/biodata";

    }
}