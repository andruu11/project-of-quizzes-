<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sugerencia extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();			
		if (!$this->session->userdata('acceso')) redirect('sesion/login');		
		$this->load->model('One_model');
	}

	public function index()
	{	
		$data['title'] 	 = 'Sugerencia';
		$data['_acceso'] = TRUE;
		$data['_nuevo']	 = FALSE;
 		$data['_editar'] = FALSE;
		$data['_borrar'] = FALSE;

		$data['Sugerencias'] = $this->One_model->get("sugerencia", TRUE);
		
		$this->load->view('side/header', $data);
		$this->load->view('side/nav');
		$this->load->view('sugerencia/index', $data);
		$this->load->view('side/footer');			
	}

	public function add()
	{		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('ejercicio', 'Ejercicio', 'required');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('respuesta', 'Respuesta', 'required');
		$this->form_validation->set_message('required', "{field}: Campo requerido");
		$this->form_validation->set_message('max_length', "{field} Excede el limite {param}");
		
		if ($this->form_validation->run()) 
		{
			$nombre 					= $this->input->post('nombre', TRUE);
			$config['upload_path'] 		= './uploads/images/';
			$config['allowed_types']	= 'png';
			$config['max_size']  		= '1000';
			$config['file_name']		= $nombre;
			$config['file_ext_tolower'] = TRUE;
			
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('imagen'))
			{
				$data 			= $this->upload->data();
				$this->load->library('Uuid');
				$idsugerencia	= $this->uuid->v5($nombre);
				$ejercicio 		= $this->input->post('ejercicio',TRUE);
				$imagen			= $data['file_name'];
				$respuesta 		= $this->input->post('respuesta',TRUE);
				
				$object = array(
					'idsugerencia'	=> $idsugerencia,
					'id_ejercicio'	=> $ejercicio,
					'imagen'		=> $imagen,
					'nombre'		=> $nombre,
					'respuesta' 	=> $respuesta					
					);
				
				$this->One_model->add('sugerencia', $object);
				redirect('sugerencia');
			}
			else
			{
				$data['title'] 			= "Ingresar";
				$data['Ejercicios']		= $this->One_model->Get('ejercicio',TRUE);
				$data['_acceso'] 		= TRUE;				
				$data['failed_message']	= $this->upload->display_errors();

				$this->load->view('side/header', $data);
				$this->load->view('side/nav', $data);
				$this->load->view('sugerencia/add', $data);
				$this->load->view('side/footer');	
			}					
		} 
		else 
		{			
			$data['title'] 		= "Nuevo Sugerencia";
			$data['Ejercicios']	= $this->One_model->Get('ejercicio',TRUE);
			$data['_acceso']	= TRUE;
			
			$this->load->view('side/header', $data);
			$this->load->view('side/nav', $data);
			$this->load->view('sugerencia/add', $data);
			$this->load->view('side/footer');
		}
	}
}

/* End of file Sugerencia.php */
/* Location: ./application/controllers/Sugerencia.php */