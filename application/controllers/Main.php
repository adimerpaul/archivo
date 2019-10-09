<?php


class Main extends CI_Controller{
function index(){
    if (!isset($_SESSION['user'])){
        header("Location: ".base_url()."");
    }
    $this->load->view('main');
}
function insert(){
    $nombre=$_POST['nombre'];
    $ci=$_POST['ci'];
    $this->db->query("INSERT INTO persona SET
    nombre='nombre',
    carnet='$ci'
    ");
    header("Location: ".base_url()."Main");
}
}
