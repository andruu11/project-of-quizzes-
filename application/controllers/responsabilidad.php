<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Responsabilidad extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();			
		if (!$this->session->userdata('acceso')) redirect('sesion/login');		
		$this->load->model('One_model');
	}

	public function index()
	{	
		$data['title'] 	 = 'Responsabilidades';
		$data['_acceso'] = TRUE;
		$data['_nuevo']	 = FALSE;

		$data['Responsabilidades'] = $this->One_model->Get_where('usuario', array('id_usuario_responsable' => $this->session->userdata('idusuario')), TRUE);

		$this->load->view('side/header', $data);
		$this->load->view('side/nav');
		$this->load->view('responsabilidad/index', $data);
		$this->load->view('side/footer');			
	}

	public function view($idresponsabilizado)
	{
		$data['title'] 	 = 'Responsabilidades';
		$data['_acceso'] = TRUE;
		$data['_nuevo']	 = FALSE;
		$data['Responsabilizado'] 	= $this->One_model->Get_where('usuario', array('idusuario' => $idresponsabilizado));

		$this->load->model('Resultado_model');
		$data['Resultados'] = $this->Resultado_model->Get_by_Responsabilizado($idresponsabilizado);		

		$this->load->view('side/header', $data);
		$this->load->view('side/nav');
		$this->load->view('responsabilidad/view', $data);
		$this->load->view('side/footer');
	}
}

/* End of file responsabilidades.php */
/* Location: ./application/controllers/responsabilidades.php */