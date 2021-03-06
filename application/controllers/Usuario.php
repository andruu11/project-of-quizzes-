<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller 
{
	/**
	*
	* Inicializacion de la controlador Adjetivos
	*
	* @return void
	*/
	public function __construct()
	{
		parent::__construct();

		// Cargamos los modelos global		
		$this->load->model('One_model');
	}

	public function index()
	{
		if (!$this->session->userdata('acceso')) redirect('sesion/login');
		$data['title'] 		= 'Usuarios';		
		$data['Usuarios'] 	= $this->One_model->Get('usuario',TRUE);

		$data['_acceso'] = TRUE;
		$data['_nuevo']	 = TRUE;
 		$data['_editar'] = FALSE;
		$data['_borrar'] = FALSE;

		$this->load->view('side/header', $data);
		$this->load->view('side/nav', $data);
		$this->load->view('usuario/index', $data);
		$this->load->view('side/footer');
	}

	/**
	*
	* Metodo para añadir nuevo usuario
	*
	* @return void
	*/
	public function add()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('apellido', 'Apellido', 'trim|required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('email', 'Correo Electronico', 'trim|required|min_length[10]|max_length[100]');
		$this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[4]|max_length[16]');		
		if ($this->form_validation->run()) 
		{
			if ($this->input->post('password') == $this->input->post('rpassword')) 
			{
				$this->load->library('Uuid');
				$idusuario	= $this->uuid->v5('email');
				$nombre 	= $this->input->post('nombre');
				$apellido 	= $this->input->post('apellido');
				$email 		= $this->input->post('email');
				$fecha_nacimiento = $this->input->post('fecha_nacimiento');
				$password 	= $this->encryption->encrypt($this->input->post('password'));
				$creado		= date('Y-m-d H:i:s');

				$record = array(
					'idusuario' => $idusuario,
					'nombre' 	=> $nombre,
					'apellido' 	=> $apellido,
					'email' 	=> $email,
					'password' 	=> $password,
					'fecha_nacimiento' => $fecha_nacimiento,
					'creado'	=> $creado,
					'status'	=> 1,
					'rol'		=> 'pac'
					);			
				$this->One_model->Add("usuario", $record);
				redirect('Usuario');
			}
			else
			{
				// Preparamos variables para la vista
				$data['title'] 			= "Ingresar";
				$data['_acceso'] 		= FALSE;
				$data['register_failed']= TRUE;
				$data['failed_message']	= "Las contraseñas no coinciden";

				// Cargamos la vista
				$this->load->view('side/header', $data);
				$this->load->view('side/nav', $data);
				$this->load->view('usuario/add', $data);
				$this->load->view('side/footer');
			}
		} 
		else 
		{
			$data['title'] = "Nuevo Usuario";
			$data['_acceso'] = FALSE;			

			$this->load->view('side/header', $data);
			$this->load->view('side/nav');
			$this->load->view('usuario/add', $data);
			$this->load->view('side/footer');
		}
	}

	// --------------------------------------------------------------------

	/**
	*
	* Metodo para editar el usuario
	*
	* @param 	 string  	usuario
	* @return 	 bool
	*/
	public function edit($idusuario)
	{
		if (!$this->session->userdata('acceso')) redirect('sesion/login');
		// Preparamos el adjetivo
		$data['Usuario'] = $this->One_model->Get_where('usuario', array('idusuario' => $idusuario));		

		// Si existe el adjtivo en la BD - Abrimos el formulario de edicion
		if (isset($data['Usuario']->idusuario)) 
		{
			// Cargamos la libreria de validacion de formulario
			$this->load->library('form_validation');

			// Definimos las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre de usuario', 'trim|required|max_length[1000]');

			// Definimos los mensajes de validacion
			$this->form_validation->set_message('required', "{field}: Campo requerido");
			$this->form_validation->set_message('max_length', "{field} Excede el limite {param}");

			// Si se ha enviado el formulario - Modificamos adjetivo en la BD - mostramos la vista de modificar adjetivo
			if ($this->form_validation->run())
			{			
				$nombre 	= $this->input->post('nombre');
				$apellido 	= $this->input->post('apellido');
				$email 		= $this->input->post('email');
				$fecha_nacimiento = $this->input->post('fecha_nacimiento');
				$modificado	= date('Y-m-d H:i:s');
				$status		= $this->input->post('status');
				$rol		= $this->input->post('rol');

				$object = array(
					'idusuario' => $idusuario,
					'nombre' 	=> $nombre,
					'apellido' 	=> $apellido,
					'fecha_nacimiento' => $fecha_nacimiento,
					'modificado'	=> $modificado,
					'status'	=> $status,
					'rol'		=> $rol
					);	
				$this->One_model->Update('usuario', array('idusuario' => $idusuario), $object);
				redirect('usuario');
			} 
			else 
			{
				$data['title'] 			= 'Editar usuario: '.$data['Usuario']->nombre;
				$data['Responsables']	= $this->One_model->Get_where('usuario', array('rol'=>'tut'),TRUE);
				$data['Pacientes']		= $this->One_model->Get_where('usuario', array('rol'=>'pac'),TRUE);
				$data['_acceso'] 		= TRUE;

				$this->load->view('side/header', $data);
				$this->load->view('side/nav', $data);
				$this->load->view('usuario/edit', $data);
				$this->load->view('side/footer');
			}
		}
	}

	// --------------------------------------------------------------------

	/**
	*
	* Metodo para eliminar el usuario
	*
	* @param 	 string  	usuario
	* @return 	 bool
	*/
	public function delete($idusuario)
	{
		# code...
	}

	// --------------------------------------------------------------------

	/**
	*
	* Metodo para cambiar de estado el usuario
	*
	* @param 	 string  	usuario
	* @return 	 bool
	*/
	// public function switch($idusuario)
	// {
	// 	# code...
	// }

	// --------------------------------------------------------------------

	/**
	*
	* Metodo para comprobar la existencia de un usuario registrado en la BD
	*
	* @param 	 string  	usuario
	* @return 	 bool
	*/
	public function comprobar_nuevo($usuario)
	{
		$data = $this->One_model->Get("usuario", "usuario", $usuario);
		if (isset($data)) 
		{
			$this->form_validation->set_message('comprobar_nuevo', "Existe un usuario existente con ese nombre");
			return false;
		}
		else
		{
			return true;
		}
	}

}

/* End of file Usuarios.php */
/* Location: ./application/controllers/Usuarios.php */