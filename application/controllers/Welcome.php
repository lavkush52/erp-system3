<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = "Home";
		$this->loadView('index', $data);
	}



	public function chatBox()
	{
		$this->load->view('chat-box');
	}
	
	public function error404()
	{
		$this->load->view('error-404');
	}

	public function maintenance()
	{
		$data['title'] = "This site under maintenance";
		$this->load->view('maintenance', $data);
	}
	
	public function loadView($file, $data = array())
	{
		if(site_status=="Active"):
			$this->load->view('front/components/app', $data);
			$this->load->view('front/'.$file, $data);
			$this->load->view('front/components/footer', $data);
		else:
			$this->maintenance();
		endif;
	}
}
