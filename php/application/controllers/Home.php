<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$header = array (
			"id" => 0,
            "pageTitle" => "Tableau de bord",
            "path" => array( 
				array("title" => "Tableau de bord","url" => base_url()),
				array("title" => "Tableau de bord","url" => base_url("green")),
			),
            "profilePic" => base_url("assets/images/admin.jpg"),
			"notifications" => array(),
			"messages" => array(),
			"claimCount" => 5,
			"informationCount" => 9,
			"ideasCount" => 5,

        );
		$this->load->view('parts/header', $header);
		$this->load->view('home');
		$this->load->view('parts/footer');
	}
}
