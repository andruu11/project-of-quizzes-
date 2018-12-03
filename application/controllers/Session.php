<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session extends CI_Controller
{
	public function index()
	{
		
	}

	public function login()
	{
		// Si ya accedido - redirigir al home
		if ($this->session->userdata('acceso')) redirect('home');

		// Cargamos la libreria de validacion de formulario
		$this->load->library('form_validation');

		// Definimos las reglas de validacion
		$this->form_validation->set_rules('usuario', 'Nombre de usuario', 'trim|required');
		$this->form_validation->set_rules('password', 'Contraseña', 'trim|required');

		// Definimos los mensajes de validacion
		$this->form_validation->set_message('required', "{field}: Campo requerido");	
		

		// Si se ha enviado el formulario - Comprobamos inicio de sesion - mostramos la vista de formulario
		if ($this->form_validation->run()) 
		{
			$usuario 	= $this->input->post('usuario');
			$password 	= $this->input->post('password');
			$userdata 	= $this->Global_model->Get("usuario", "usuario", $usuario);			

			//Si el usuario existe - iniciamos sesion - mostramos nuevamente la vista de formulario
			if ($userdata != NULL)
			{
				// Si las contraseñas coinciden - iniciamos sesion - mostramos nuevamente la vista de formulario
				if ($password == $this->encryption->decrypt($userdata->password)) 
				{
					$data = array(
						'idusuario' => $userdata->idusuario,
						'acceso' 	=> TRUE
						);
					$this->session->set_userdata($data);
					redirect('home','refresh');
				}
				else
				{
					// Preparamos variables para la vista
					$data['title'] 			= "Ingresar";
					$data['_acceso'] 		= FALSE;
					$data['login_failed'] 	= TRUE;

					// Cargamos la vista
					$this->load->view('side/header', $data);
					$this->load->view('side/nav', $data);
					$this->load->view('login/index', $data);
					$this->load->view('side/footer');
				}				
			}			
			else
			{
				// Preparamos variables para la vista
				$data['title'] 			= "Ingresar";
				$data['_acceso'] 		= FALSE;
				$data['login_failed'] 	= TRUE;

				// Cargamos la vista
				$this->load->view('side/header', $data);
				$this->load->view('side/nav', $data);
				$this->load->view('login/index', $data);
				$this->load->view('side/footer');
			}
		} 
		else 
		{
			// Preparamos variables para la vista
			$data['title'] 			= "Ingresar";
			$data['_acceso'] 		= FALSE;
			$data['login_failed'] 	= FALSE;

			// Cargamos la vista
			$this->load->view('side/header', $data);
			$this->load->view('side/nav');
			$this->load->view('login/index', $data);
			$this->load->view('side/footer');
		}
	}
}

/* End of file Session.php */
/* Location: ./application/controllers/Session.php */