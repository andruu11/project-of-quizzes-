<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quizz extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();			
		if (!$this->session->userdata('acceso')) redirect('sesion/login');		
		$this->load->model('One_model');
	}

	public function index()
	{
		$data['title'] 	 = 'Quizz';
		$data['_acceso'] = TRUE;
		$data['Etapas']	 = $this->One_model->Get('etapa',TRUE);
		$this->load->view('side/header',$data);
		$this->load->view('side/nav',$data);
		$this->load->view('quizz/index',$data);
		$this->load->view('side/footer',$data);
	}

	public function etapa($idetapa)
	{
		$data['title'] 	 = 'Quizz';
		$data['_acceso'] = TRUE;
		$data['Etapa'] = $this->One_model->Get_where('etapa',array('idetapa'=>$idetapa));
		$data['Ejercicios'] = $this->One_model->Get_where('ejercicio', array('id_etapa' => $idetapa), TRUE);

		$this->load->model('Respuesta_model');
		foreach ($data['Ejercicios'] as $ejercicio)
		{
			$data[$ejercicio->nombre] = $this->Respuesta_model->Get_by_ejercicio($ejercicio->idejercicio);
		}

		$this->load->view('side/header',$data);
		$this->load->view('side/nav',$data);
		$this->load->view('quizz/etapa',$data);
		$this->load->view('side/footer',$data);	
	}

	public function resultado($idetapa)
	{
		//Nuevo Resultado
		$this->load->library('Uuid');
		$idresultado= substr($this->uuid->v4(), 0, 8);	
		$fecha 		= date('Y-m-d H:i:s');
		$idusuario 	= $this->session->userdata('idusuario');

		$object = array(
			'idresultado' 	=> $idresultado,
			'id_etapa'		=> $idetapa,			
			'id_usuario'	=> $idusuario,
			'fecha'			=> $fecha,
		);
		$this->One_model->Add('resultado', $object);

		//Nuevo marcados
		$data['Ejercicios'] = $this->One_model->Get_where('ejercicio', array('id_etapa' => $idetapa), TRUE);		
		foreach ($data['Ejercicios'] as $ejercicio)
		{
			$idrespuesta =  $this->input->post($ejercicio->idejercicio);
			$object = array(
				'id_resultado' => $idresultado,
				'id_respuesta' => $idrespuesta
			);
			$this->One_model->Add('marcado', $object);
		}

		// Calculo del Puntaje
		$Marcados = $this->One_model->Get_where('marcado',array('id_resultado'=>$idresultado),TRUE);
		$this->load->model('Respuesta_model');
		$puntaje = 0;
		foreach ($Marcados as $marcado)
		{
			$puntos = $this->Respuesta_model->Get_repuesta($marcado->id_respuesta);			
			if ($puntos->respuesta == "1") 
			{				
				$puntaje = $puntaje + 2;
			}
		}
		$this->One_model->Update('resultado',array('idresultado'=>$idresultado),array('resultado'=>$puntaje));

		//Mostrar resultados
		$data['Etapas'] = $this->One_model->Get_where('etapa',array('idetapa'=>$idetapa));
		$data['Resultados'] = $this->One_model->Get_where('resultado', array('idresultado'=>$idresultado));
		switch ($data['Resultados']->resultado) {
			case '0':
				$p=20;				
				break;
			case '2':
				$p=40;				
				break;
			case '4':
				$p=60;
				break;
			case '6':
				$p=80;
				break;
			case '8':
				$p=100;
				break;
			default:
				# code...
				break;
		}
		$data['P']		= $p;
		$data['title'] 	= 'Resultados';
		$data['_acceso']= TRUE;
		$this->load->view('side/header',$data);
		$this->load->view('side/nav',$data);
		$this->load->view('quizz/resultado',$data);
		$this->load->view('side/footer',$data);	
	}
}

/* End of file quizz.php */
/* Location: ./application/controllers/quizz.php */