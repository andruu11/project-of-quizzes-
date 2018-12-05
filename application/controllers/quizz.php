<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quizz extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();			
		if (!$this->session->userdata('acceso')) redirect('sesion/login');		
		$this->load->model('One_model');
	}

	public function index()
	{
		$data['title'] 	 = 'Quizz';
		$data['_acceso'] = TRUE;
		$data['Etapas']	 = $this->One_model->Get('etapa',TRUE);
		$this->load->view('side/header',$data);
		$this->load->view('side/nav',$data);
		$this->load->view('quizz/index',$data);
		$this->load->view('side/footer',$data);
	}

	public function etapa($idetapa)
	{
		$data['title'] 	 = 'Quizz';
		$data['_acceso'] = TRUE;
		$this->load->view('side/header',$data);
		$this->load->view('side/nav',$data);
		$this->load->view('quizz/etapa',$data);
		$this->load->view('side/footer',$data);	
	}
}

/* End of file quizz.php */
/* Location: ./application/controllers/quizz.php */