<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Respuesta_model extends CI_Model 
{
	public function Get()
	{
		$this->db->select('r.idrespuesta, e.nombre AS "ejercicio", s.nombre AS "sugerencia", r.respuesta ');
		$this->db->from('respuesta r');
		$this->db->join('ejercicio e', 'r.id_ejercicio = e.idejercicio', 'left');
		$this->db->join('sugerencia s', 'r.id_sugerencia = s.idsugerencia', 'left');
		$this->db->order_by('e.nombre', 'asc');
		return $this->db->get()->result();
	}
}

/* End of file Respuesta_model.php */
/* Location: ./application/models/Respuesta_model.php */