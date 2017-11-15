<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	public function index()
	{
		$this->load->view('Header.php');
		$this->load->view('Company.php');
		$this->load->view('Footer.php');
	}
}
