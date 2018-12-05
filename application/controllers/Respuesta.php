<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Respuesta extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();			
		if (!$this->session->userdata('acceso')) redirect('sesion/login');		
		$this->load->model('One_model');
	}

	public function index()
	{		
		$data['title'] 	 = 'Respuestas';
		$data['_acceso'] = TRUE;
		$data['_nuevo']	 = FALSE;
 		$data['_editar'] = FALSE;
		$data['_borrar'] = FALSE;

		$this->load->model('Respuesta_model');
		$data['Respuestas']	= $this->Respuesta_model->Get('respuesta',TRUE);
		
		$this->load->view('side/header', $data);
		$this->load->view('side/nav');
		$this->load->view('respuesta/index', $data);
		$this->load->view('side/footer');			
	}

	public function add()
	{
		$this->load->library('form_validation');		
		$this->form_validation->set_rules('ejercicio', 'Ejercicio', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('sugerencia', 'Sugerencia', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('respuesta', 'Respuesta', 'trim|required|max_length[100]');
		$this->form_validation->set_message('required', "{field}: Campo requerido");
		$this->form_validation->set_message('max_length', "{field} Excede el limite {param}");
		
		if ($this->form_validation->run()) 
		{
			$ejercicio 	= $this->input->post('ejercicio');
			$sugerencia = $this->input->post('sugerencia');
			$respuesta 	= $this->input->post('respuesta');			
			$this->load->library('Uuid');
			$idrespuesta	= $this->uuid->v5($ejercicio.$sugerencia);
			
			$object = array(
				'idrespuesta'	=> $idrespuesta,
				'id_ejercicio'	=> $ejercicio,
				'id_sugerencia'	=> $sugerencia,
				'respuesta'		=> $respuesta
				);
			
			$this->One_model->add('respuesta', $object);
			redirect('respuesta');
		} 
		else 
		{			
			$data['title'] 		= "Nuevo Respuesta";			
			$data['Ejercicios'] = $this->One_model->get("ejercicio", TRUE);
			$data['Sugerencias'] = $this->One_model->get("sugerencia", TRUE);
			$data['_acceso']	= TRUE;
			
			$this->load->view('side/header', $data);
			$this->load->view('side/nav', $data);
			$this->load->view('respuesta/add', $data);
			$this->load->view('side/footer');
		}
	}

	public function delete($idrespuesta)
	{
		$Respuesta = $this->One_model->Get_where("respuesta", array('idrespuesta' => $idrespuesta));
		if (isset($Respuesta->idrespuesta)) 
		{

			$this->One_model->Delete("respuesta",  array('idrespuesta' => $idrespuesta));			
			redirect('respuesta');
		}
		else
		{
			show_error('El grado actualmente no existe');
		}
	}
}

/* End of file Respuestas.php */
/* Location: ./application/controllers/Respuestas.php */