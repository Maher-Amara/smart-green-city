<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	public function index()
	{
        $this->load->view('login');
	}

    public function register()
	{
        $this->load->view('register');
	}

    public function forget()
	{
        $this->load->view('forget');
	}
}