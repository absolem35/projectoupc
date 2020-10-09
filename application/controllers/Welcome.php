<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{


		$this->load->view('components/header');
		$this->load->view('components/footer');
	}
}