<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register_controller extends CI_Controller
{
    public function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('register/index');
    }
}
?>