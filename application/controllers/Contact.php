<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$this->load->view('Header.php');
		$this->load->view('Contact.php');
		$this->load->view('Footer.php');
	}
}
