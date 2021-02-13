<?php

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		// load libraries, models, etc

	}

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('home.php');
		$this->load->view('templates/footer');

	}

}