<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$this->load->view('Header.php');
		$this->load->view('About.php');
		$this->load->view('Footer.php');
	}
}
