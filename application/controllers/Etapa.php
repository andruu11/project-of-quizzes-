<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etapa extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();			
		if (!$this->session->userdata('acceso')) redirect('sesion/login');		
		$this->load->model('One_model');
	}

	public function index()
	{	
		$data['title'] 	 = 'Etapa';
		$data['_acceso'] = TRUE;
		$data['_nuevo']	 = FALSE;
 		$data['_editar'] = FALSE;
		$data['_borrar'] = FALSE;

		$data['Etapas'] = $this->One_model->get("etapa", TRUE);
		
		$this->load->view('side/header', $data);
		$this->load->view('side/nav');
		$this->load->view('etapa/index', $data);
		$this->load->view('side/footer');			
	}

	public function add()
	{		
		$this->load->library('form_validation');		
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|required|min_length[5]|max_length[1000]');				
		$this->form_validation->set_message('required', "{field}: Campo requerido");
		$this->form_validation->set_message('max_length', "{field} Excede el limite {param}");
		
		if ($this->form_validation->run()) 
		{	
			$nombre 		= $this->input->post('nombre',TRUE);
			$descripcion 	= $this->input->post('descripcion',TRUE);
			$this->load->library('Uuid');
			$idetapa		= $this->uuid->v5($nombre);
			
			//Cargamos a la base de datos
			$object = array(
				'idetapa' 		=> $idetapa,
				'nombre'		=> $nombre,
				'descripcion' 	=> $descripcion,
				);
			$this->One_model->add('etapa', $object);

			redirect('etapa');					
		} 
		else 
		{			
			$data['title'] = "Nuevo etapa";
			$data['_acceso'] = TRUE;
			
			$this->load->view('side/header', $data);
			$this->load->view('side/nav', $data);
			$this->load->view('etapa/add', $data);
			$this->load->view('side/footer');
		}
	}
}

/* End of file Etapa.php */
/* Location: ./application/controllers/Etapa.php */