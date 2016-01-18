<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_page extends CI_Controller {
    public function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('contact/index');
    }
}
?>