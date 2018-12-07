<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporte extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();			
		if (!$this->session->userdata('acceso')) redirect('sesion/login');		
		$this->load->model('One_model');
	}

	public function index()
	{	
		$data['title'] 	 = 'Ejercicio';
		$data['_acceso'] = TRUE;
		$data['_nuevo']	 = FALSE;
 		$data['_editar'] = FALSE;
		$data['_borrar'] = FALSE;

		$data['Usuarios'] = $this->One_model->Get_count('usuario');
		$data['Etapa'] = $this->One_model->Get_count('etapa');
		$data['Ejercicio'] = $this->One_model->Get_count('ejercicio');
		$data['Respuesta'] = $this->One_model->Get_count('respuesta');
		$data['Sugerencia'] = $this->One_model->Get_count('sugerencia');

		
		$this->load->view('side/header', $data);
		$this->load->view('side/nav');
		$this->load->view('reporte/index', $data);
		$this->load->view('side/footer');			
	}
}

/* End of file Reporte.php */
/* Location: ./application/controllers/Reporte.php */