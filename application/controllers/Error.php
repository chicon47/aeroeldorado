<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

   
    public function notfound() {
        $this->load->view('notfound');
    }
}