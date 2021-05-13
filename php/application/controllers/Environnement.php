<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Environnement extends CI_Controller {
	public function index()
	{
		$header = array (
			"id" => 10,
            "pageTitle" => "Collecte déchets",
            "path" => array(),
            "profilePic" => base_url("assets/images/admin.jpg"),
			"notifications" => array(),
			"messages" => array(),
			"claimCount" => 5,
			"informationCount" => 9,
			"ideasCount" => 5,

        );
		$this->load->view('parts/header', $header);
		// $this->load->view('home');
		$this->load->view('parts/footer');
	}
}