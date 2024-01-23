<?php
Class Home extends Controller{
 
    public function index(){
       
        $this->view("templates/header");
        $this->view("siswa/index");
        $this->view("templates/footer");
    }

    
}