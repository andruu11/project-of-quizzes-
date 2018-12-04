<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quizz extends CI_Controller 
{
	function __construct()
	{
		
	}

	public function index()
	{
		$this->load->view('quizz/index');
	}

}

/* End of file quizz.php */
/* Location: ./application/controllers/quizz.php */