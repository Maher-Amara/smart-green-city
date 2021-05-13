<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Citizens extends CI_Controller {
	public function index(){
		$header = array (
			"id" => 6,
            "pageTitle" => "Citoyens",
            "path" => array( 
			),
            "profilePic" => base_url("assets/images/admin.jpg"),
			"notifications" => array(),
			"messages" => array(),
			"claimCount" => 5,
			"informationCount" => 9,
			"ideasCount" => 5
        );
		$this->load->view('parts/header', $header);
		// $this->load->view('home');
		$this->load->view('parts/footer');}

	public function Complaints(){
		$header = array (
			"id" => 7,
            "pageTitle" => "Réclamations",
            "path" => array(
				array("title" => "Citoyens", "url" => base_url("citizens"))
			),
            "profilePic" => base_url("assets/images/admin.jpg"),
			"notifications" => array(),
			"messages" => array(),
			"claimCount" => 5,
			"informationCount" => 9,
			"ideasCount" => 5
        );
		$this->load->view('parts/header', $header);
		// $this->load->view('home');
		$this->load->view('parts/footer');}
	
	public function information(){
		$header = array (
			"id" => 8,
            "pageTitle" => "Demande information",
            "path" => array(
				array("title" => "Citoyens", "url" => base_url("citizens"))
			),
            "profilePic" => base_url("assets/images/admin.jpg"),
			"notifications" => array(),
			"messages" => array(),
			"claimCount" => 5,
			"informationCount" => 9,
			"ideasCount" => 5
        );
		$this->load->view('parts/header', $header);
		// $this->load->view('home');
		$this->load->view('parts/footer');}
	
	public function ideas(){
		$header = array (
			"id" => 9,
            "pageTitle" => "Boîte à idées",
            "path" => array(
				array("title" => "Citoyens", "url" => base_url("citizens"))
			),
            "profilePic" => base_url("assets/images/admin.jpg"),
			"notifications" => array(),
			"messages" => array(),
			"claimCount" => 5,
			"informationCount" => 9,
			"ideasCount" => 5
        );
		$this->load->view('parts/header', $header);
		// $this->load->view('home');
		$this->load->view('parts/footer');}
}