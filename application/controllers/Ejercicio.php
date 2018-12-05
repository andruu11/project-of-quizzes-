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
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[100]');		
		$this->form_validation->set_rules('etapa', 'Etapa', 'required');
		$this->form_validation->set_message('required', "{field}: Campo requerido");
		$this->form_validation->set_message('max_length', "{field} Excede el limite {param}");
		
		if ($this->form_validation->run()) 
		{
			$etapa 					= $this->input->post('etapa',TRUE);
			$nombre 				= $this->input->post('nombre', TRUE);

			$config['upload_path'] 	= './uploads/audio/';
			$config['allowed_types']= 'mp3|wav';
			$config['max_size']  	= '1000';
			$config['file_name']	= $nombre;
			$config['file_ext_tolower'] = TRUE;			
			
			$this->load->library('upload', $config);			
			
			if ($this->upload->do_upload('audio'))
			{				
				$data = $this->upload->data();				
				$this->load->library('Uuid');
				$idejercicio= $this->uuid->v5($nombre);
				$audio 		= $data['file_name'];
				
				$object = array(
					'idejercicio'	=> $idejercicio,
					'id_etapa'		=> $etapa,
					'nombre'		=> $nombre,
					'audio' 		=> $audio					
					);
				
				$this->One_model->add('ejercicio', $object);
				redirect('ejercicio');
			}
			else
			{
				$data['title'] 			= "Ingresar";
				$data['Etapas']			= $this->One_model->Get('etapa',TRUE);
				$data['_acceso'] 		= TRUE;				
				$data['failed_message']	= $this->upload->display_errors();

				$this->load->view('side/header', $data);
				$this->load->view('side/nav', $data);
				$this->load->view('ejercicio/add', $data);
				$this->load->view('side/footer');	
			}					
		} 
		else
		{
			$data['title'] 	= "Nuevo Ejercicio";
			$data['Etapas']	= $this->One_model->Get('etapa',TRUE);
			$data['_acceso']= TRUE;
			
			$this->load->view('side/header', $data);
			$this->load->view('side/nav', $data);
			$this->load->view('ejercicio/add', $data);
			$this->load->view('side/footer');
		}
	}

	public function audio($audio)
	{
		$this->load->model('file');
		$this->load->helper('download');
		$file = 'uploads/audio/'.$audio;
		force_download($file, NULL);
	}
}

/* End of file Ejercicio.php */
/* Location: ./application/controllers/Ejercicio.php */