<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipality extends CI_Controller {
	public function index(){
		$header = array (
			"id" => 1,
            "pageTitle" => "Municipalité",
            "path" => array( 
			),
            "profilePic" => base_url("assets/images/admin.jpg"),
			"notifications" => array(),
			"messages" => array(),
			"claimCount" => 5,
			"informationCount" => 9,
			"ideasCount" => 5,

        );
		$this->load->view('parts/header', $header);
		// $this->load->view('home');
		$this->load->view('parts/footer');}
		
	public function council(){
		$header = array (
			"id" => 2,
			"pageTitle" => "Conseil munisipal",
			"path" => array( 
				array("title" => "Municipalité", "url" => base_url("municipality"))
			),
			"profilePic" => base_url("assets/images/admin.jpg"),
			"notifications" => array(),
			"messages" => array(),
			"claimCount" => 5,
			"informationCount" => 9,
			"ideasCount" => 5,

		);
		$this->load->view('parts/header', $header);
		// $this->load->view('home');
		$this->load->view('parts/footer');}
		
	public function committee(){
		$header = array (
			"id" => 3,
			"pageTitle" => "Comités",
			"path" => array( 
				array("title" => "Municipalité", "url" => base_url("municipality"))
			),
			"profilePic" => base_url("assets/images/admin.jpg"),
			"notifications" => array(),
			"messages" => array(),
			"claimCount" => 5,
			"informationCount" => 9,
			"ideasCount" => 5,

		);
		$this->load->view('parts/header', $header);
		// $this->load->view('home');
		$this->load->view('parts/footer');}
}