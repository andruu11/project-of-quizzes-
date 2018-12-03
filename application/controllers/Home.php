<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
		$data['_acceso'] = $this->session->userdata('acceso') ? $this->session->userdata('acceso') : FALSE;
		$data['title'] = 'Bienvenido al Test DISC';
		
		$this->load->view('side/header', $data);
		$this->load->view('side/nav');
		$this->load->view('session/login', $data);
		$this->load->view('side/footer');		
	}
}
