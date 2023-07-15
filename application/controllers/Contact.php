<?php
    class Contact extends CI_Controller{
    function _construct(){
        parent::__contruct();
    }
    function index(){
        $this->load->view("contact");
    }
    }
?>