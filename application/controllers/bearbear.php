<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

error_reporting(E_ALL);

class Milyon_mania extends CI_Controller {

    public function __construct() {
        parent::__construct();
        session_set_cookie_params(0);
        session_start();
        $this->load->library('session');
        $this->load->helper('url');
    }
}
?>
