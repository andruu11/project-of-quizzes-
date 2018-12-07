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

	public function Get_by_ejercicio($idejercicio)
	{
		$query = 'SELECT `r`.`idrespuesta`, `r`.`respuesta`, `s`.`nombre`, `s`.`imagen`
			FROM `respuesta` `r`
			LEFT JOIN `ejercicio` `e` ON `r`.`id_ejercicio` = `e`.`idejercicio`
			LEFT JOIN `sugerencia` `s` ON `r`.`id_sugerencia` = `s`.`idsugerencia`
			WHERE `id_ejercicio` = "'.$idejercicio.'"
			ORDER BY RAND()';		
		return $this->db->query($query)->result();
	}

	public function Get_repuesta($idrespuesta)
	{
		$this->db->select('respuesta');
		$this->db->from('respuesta');
		$this->db->where('idrespuesta', $idrespuesta);
		return $this->db->get()->row();
	}
}

/* End of file Respuesta_model.php */
/* Location: ./application/models/Respuesta_model.php */