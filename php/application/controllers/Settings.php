<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	public function index()
	{
        $header = array (
            "name" => "Tableau de bord",
            "path" => array( "Tableau de bord"),
            "profilePic" => ""
        );
		$this->load->view('parts/header', $header);
		$this->load->view('home');
		$this->load->view('parts/footer');
	}
}