<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesion extends CI_Controller
{
	public function index()
	{
	}

	public function login()
	{		
		// if ($this->session->userdata('acceso')) redirect('home');
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Correo Electronico', 'trim|required');
		$this->form_validation->set_rules('password', 'Contraseña', 'trim|required');
		$this->form_validation->set_message('required', "{field}: Campo requerido");		

		// Si se ha enviado el formulario - Comprobamos inicio de sesion - mostramos la vista de formulario
		if ($this->form_validation->run()) 
		{	
			$this->load->model('One_model');
			$userdata 	= $this->One_model->Get_where("usuario", array('email' => $this->input->post('email')));
			print_r($userdata);

			//Si el email existe - iniciamos sesion - mostramos nuevamente la vista de formulario
			if ($userdata != NULL)
			{
				$password 	= $this->input->post('password');
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
					$this->load->view('sesion/login', $data);
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
				$this->load->view('sesion/login', $data);
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
			$this->load->view('sesion/login', $data);
			$this->load->view('side/footer');
		}
	}
}

/* End of file Session.php */
/* Location: ./application/controllers/Session.php */