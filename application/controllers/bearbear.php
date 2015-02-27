<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

error_reporting(E_ALL);

class Bearbear extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        session_set_cookie_params(0);
        session_start();
        //$this->load->library('TwitterAPIExchange');
        $this->load->library('session');
        $this->load->helper('url');
        require_once('/var/www/bearbear/application/libraries/TwitterAPIExchange.php');
        //require_once('/var/www/bearbear/application/libraries/twitteroauth/autoload.php');
    }
    
    function index(){
        $this->load->view("front");
    }
}
?>
