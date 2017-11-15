<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate extends CI_Controller {
	public function index()
	{
		$this->load->view('Header.php');
		$this->load->view('Certificate.php');
		$this->load->view('Footer.php');
	}
}
