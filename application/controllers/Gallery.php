<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function index()
	{
		$this->load->view('Header.php');
		$this->load->view('Gallery.php');
		$this->load->view('Footer.php');
	}
}

