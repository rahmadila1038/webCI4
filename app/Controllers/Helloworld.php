<?php namespace App\Controllers;

class Helloworld extends BaseController{

    public function index($nama,$npm){
        //echo $this->nama;
            echo $nama."<br>";
            echo $npm."<br>";
            //echo "Hello rahmadila";
    }
    public function show(){
        echo " Rahmadil Nurjannah";
        echo "1817051038";
    }
}