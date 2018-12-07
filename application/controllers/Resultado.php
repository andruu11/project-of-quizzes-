<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resultado extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();			
		if (!$this->session->userdata('acceso')) redirect('sesion/login');		
		$this->load->model('One_model');
	}

	public function index()
	{
		$data['title'] 	 = 'Resultados';
		$data['_acceso'] = TRUE;
		$data['_nuevo']	 = FALSE;
 		$data['_editar'] = FALSE;
		$data['_borrar'] = FALSE;

		$data['Resultados'] = $this->One_model->Get_join(
			"r.idresultado, u.nombre, u.apellido, r.resultado, r.fecha", 
			'resultado r', 
			'usuario u', 
			'r.id_usuario = u.idusuario', 
			'LEFT',
			TRUE
		);

		$this->load->view('side/header', $data);
		$this->load->view('side/nav', $data);
		$this->load->view('resultado/index', $data);
		$this->load->view('side/footer');
	}
}

/* End of file Resultado.php */
/* Location: ./application/controllers/Resultado.php */