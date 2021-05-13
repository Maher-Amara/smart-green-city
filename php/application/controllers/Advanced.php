<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advanced extends CI_Controller {
	public function equipment(){
        $header = array (
			"id" => 11,
            "pageTitle" => "Équipement",
            "path" => array(),
            "profilePic" => base_url("assets/images/admin.jpg"),
			"notifications" => array(),
			"messages" => array(),
			"claimCount" => 5,
			"informationCount" => 9,
			"ideasCount" => 5,

        );
		$this->load->view('parts/header', $header);
		$this->load->view('home');
		$this->load->view('parts/footer');}

	public function security(){
		$header = array (
			"id" => 12,
			"pageTitle" => "Sécurité",
			"path" => array(),
			"profilePic" => base_url("assets/images/admin.jpg"),
			"notifications" => array(),
			"messages" => array(),
			"claimCount" => 5,
			"informationCount" => 9,
			"ideasCount" => 5,

		);
		$this->load->view('parts/header', $header);
		$this->load->view('home');
		$this->load->view('parts/footer');}

	public function settings(){
		$header = array (
			"id" => 13,
			"pageTitle" => "Paramètres",
			"path" => array(),
			"profilePic" => base_url("assets/images/admin.jpg"),
			"notifications" => array(),
			"messages" => array(),
			"claimCount" => 5,
			"informationCount" => 9,
			"ideasCount" => 5,

		);
		$this->load->view('parts/header', $header);
		$this->load->view('home');
		$this->load->view('parts/footer');}
}