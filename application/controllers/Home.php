<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
		$data['title'] = 'Inicio';
		$data['_acceso'] = $this->session->userdata('acceso') ? $this->session->userdata('acceso') : FALSE;		
		
		$this->load->view('side/header', $data);
		$this->load->view('side/nav');
		$this->load->view('home/index', $data);
		$this->load->view('side/footer');		
	}
}
