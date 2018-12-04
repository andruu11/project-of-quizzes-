<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejercicio extends CI_Controller 
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

		$data['Ejercicios'] = $this->One_model->get("Ejercicio", TRUE);
		
		$this->load->view('side/header', $data);
		$this->load->view('side/nav');
		$this->load->view('ejercicio/index', $data);
		$this->load->view('side/footer');			
	}

	public function add()
	{		
		$this->load->library('form_validation');		
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('audio', 'Audio', 'trim|required|min_length[5]|max_length[1000]');
		$this->form_validation->set_rules('etapa', 'Etapa', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_message('required', "{field}: Campo requerido");
		$this->form_validation->set_message('max_length', "{field} Excede el limite {param}");
		
		if ($this->form_validation->run()) 
		{	
			$nombre = $this->input->post('nombre',TRUE);
			//Codigo para subir audio
			$audio 	= $this->input->post('audio',TRUE);
			$etapa = $this->input->post('etapa',TRUE);
			$this->load->library('Uuid');
			$idejercicio		= $this->uuid->v5($nombre);
			
			//Cargamos a la base de datos
			$object = array(
				'idejercicio'	=> $idejercicio,
				'nombre'		=> $nombre,
				'audio' 	=> $audio,
				'etapa'		=> $etapa
				);
			$this->One_model->add('ejercicio', $object);

			redirect('ejercicio');					
		} 
		else 
		{			
			$data['title'] = "Nuevo Ejercicio";
			$data['_acceso'] = TRUE;
			
			$this->load->view('side/header', $data);
			$this->load->view('side/nav', $data);
			$this->load->view('ejercicio/add', $data);
			$this->load->view('side/footer');
		}
	}
}

/* End of file Ejercicio.php */
/* Location: ./application/controllers/Ejercicio.php */