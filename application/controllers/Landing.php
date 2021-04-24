<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	
	public function index()
	{
		$this->load->view('landing_page');
	}

	public function about()
	{
		$this->load->view('view_about');
	}

	public function services()
	{
		$this->load->view('view_services');
	}

	public function testmonial()
	{
		$this->load->view('view_testmonial');
	}
	
	public function contact()
	{
		$this->load->view('view_contact');
	}
}
