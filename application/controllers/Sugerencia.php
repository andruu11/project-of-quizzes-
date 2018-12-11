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
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[100]');		
		$this->form_validation->set_message('required', "{field}: Campo requerido");
		$this->form_validation->set_message('max_length', "{field} Excede el limite {param}");
		
		if ($this->form_validation->run()) 
		{
			$nombre = $this->input->post('nombre').'_sugerencia';
			$existe = $this->One_model->Get_where('sugerencia', array('nombre'=>$nombre));

			if (is_null($existe)) 
			{
				$imagen = $this->imagen_upload($nombre);
				$audio 	= $this->audio_upload($nombre);

				if (isset($imagen['file_name']) || isset($audio['file_name']))
				{
					$this->load->library('Uuid');
					$idsugerencia 	= $this->uuid->v5($nombre);
					$name_imagen	= isset($imagen['file_name']) ? $imagen['file_name']: 'Sin imagen';
					$name_audio 	= isset($audio['file_name']) ? $audio['file_name']: 'Sin audio';				
					
					$object = array(
						'idsugerencia'	=> $idsugerencia,
						'imagen'		=> $name_imagen,
						'audio'			=> $name_audio,
						'nombre'		=> $nombre				
						);
					
					$this->One_model->add('sugerencia', $object);
					redirect('sugerencia');
				}
				else
				{
					$data['title'] 			= "Ingresar";				
					$data['_acceso'] 		= TRUE;				
					$data['imagen_error']	= $imagen;
					$data['audio_error']	= $audio;

					$this->load->view('side/header', $data);
					$this->load->view('side/nav', $data);
					$this->load->view('sugerencia/add', $data);
					$this->load->view('side/footer');
				}
			}
			else
			{
				$data['title'] 		= "Nuevo Sugerencia";				
				$data['_acceso'] 	= TRUE;				
				$data['file_error']	= 'Ya existe una sugerencia con ese nombre';

				$this->load->view('side/header', $data);
				$this->load->view('side/nav', $data);
				$this->load->view('sugerencia/add', $data);
				$this->load->view('side/footer');
			}
		} 
		else 
		{			
			$data['title'] 	= "Nuevo Sugerencia";			
			$data['_acceso']= TRUE;
			
			$this->load->view('side/header', $data);
			$this->load->view('side/nav', $data);
			$this->load->view('sugerencia/add', $data);
			$this->load->view('side/footer');
		}
	}

	private function imagen_upload($nombre)
	{
		$config_imagen['upload_path'] 		= './uploads/images/';
		$config_imagen['allowed_types']		= 'png|jpg';
		$config_imagen['max_size']  		= '1000';
		$config_imagen['file_name']			= $nombre;
		$config_imagen['file_ext_tolower']	= TRUE;
		
		$this->load->library('upload', $config_imagen);
		
		if ($this->upload->do_upload('imagen'))
		{
			return $this->upload->data();
		}
		else
		{
			return $this->upload->display_errors();	
		}
	}

	private function audio_upload($nombre)
	{
		$config_audio['upload_path'] 		= './uploads/audio/';
		$config_audio['allowed_types']		= 'mp3|wav';
		$config_audio['max_size']  			= '1000';
		$config_audio['file_name']			= $nombre;
		$config_audio['file_ext_tolower'] 	= TRUE;
		
		$this->upload->initialize($config_audio);
		
		if ($this->upload->do_upload('audio'))
		{
			return $this->upload->data();
		}
		else
		{
			return $this->upload->display_errors();			
		}
	}

	public function edit($idsugerencia)
	{
		$data['Sugerencia'] = $this->One_model->Get_where("sugerencia", array("idsugerencia"=>$idsugerencia));	
		$data['title'] 	= "Editar Sugerencia";			
		$data['_acceso']= TRUE;
		
		$this->load->view('side/header', $data);
		$this->load->view('side/nav', $data);
		$this->load->view('sugerencia/edit', $data);
		$this->load->view('side/footer');
	}
}

/* End of file Sugerencia.php */
/* Location: ./application/controllers/Sugerencia.php */