<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesion extends CI_Controller
{
	public function index()
	{
		// Lista de las sesiones iniciadas
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
			if (isset($userdata)) 
			{
				if ($this->input->post('password') == $this->encryption->decrypt($userdata->password))
				{
					$data = array(
						'idusuario' => $userdata->idusuario,
						'rol'		=> $userdata->rol,
						'acceso' 	=> TRUE
						);
					$this->session->set_userdata($data);
					redirect('quizz','refresh');
				}
				else
				{
					$data['title'] 			= "Ingresar";
					$data['_acceso'] 		= FALSE;
					$data['login_failed'] 	= TRUE;
					$data['failed_message']	= "No es correcto la contraseña";

					$this->load->view('side/header', $data);
					$this->load->view('side/nav');
					$this->load->view('sesion/login', $data);
					$this->load->view('side/footer');	
				}	
			}
			else
			{				
				$data['title'] 			= "Ingresar";
				$data['_acceso'] 		= FALSE;
				$data['login_failed'] 	= TRUE;
				$data['failed_message']	= "No existe el usuario con ese correo";
				
				$this->load->view('side/header', $data);
				$this->load->view('side/nav');
				$this->load->view('sesion/login', $data);
				$this->load->view('side/footer');
			}			
		}
		else 
		{			
			$data['title'] 			= "Ingresar";
			$data['_acceso'] 		= FALSE;
			$data['login_failed'] 	= FALSE;
			$data['failed_message']	= "";
		
			$this->load->view('side/header', $data);
			$this->load->view('side/nav');
			$this->load->view('sesion/login', $data);
			$this->load->view('side/footer');
		}
	}

	public function logout()
	{
		// Si ya accedido - redirigir al home
		if (!$this->session->userdata('acceso')) redirect('login');
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function recovery()
	{
		# code...
	}
}

/* End of file Session.php */
/* Location: ./application/controllers/Session.php */