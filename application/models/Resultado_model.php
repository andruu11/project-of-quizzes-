<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resultado_model extends CI_Model
{
	public function Get_by_Responsabilizado($Responsabilizado)
	{
		$query = 'SELECT `r`.`idresultado`, `et`.`nombre` AS `etapa`, `r`.`resultado`, `r`.`fecha`
			FROM `resultado` `r`
			LEFT JOIN `etapa` `et` ON `r`.`id_etapa` = `et`.`idetapa`
			WHERE  `r`.`id_usuario`="'.$Responsabilizado.'"';
			return $this->db->query($query)->result();
	}
}

/* End of file Resultado_model.php */
/* Location: ./application/models/Resultado_model.php */