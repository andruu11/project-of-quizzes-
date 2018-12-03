<?php
/**
 * Global Model
 *
 * Aplicación desarrollada mendiante el fremawork CodeIgniter Copyright (c) 2014 - 2017, British Columbia Institute of Technology 
 *
 * @package	Test DISC
 * @author	Roger Alexandro Arce Zeballos
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @since	Version 0.0.1
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * One_Model
 *
 * @package		One_model
 * @category	Model
 * @author		Roger Alexandro Arce Zeballos
 */
class One_model extends CI_Model 
{
	// ------------------------------------------------------------------------
	/**
	* Get_multi_where
	* 
	* Metodo "experimental" para obtener datos de una tabla con multiples where
	*
	* @param	table 		string		Nombre de la table
	* @param	where 		array		Array con multiples Array
	* @param	allrows		boolean		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_multi_where($table, $where = '', $allrows = FALSE)
	{
		if ($where == '') 
		{
			return $this->db->get($table)->result();
		}
		else
		{
			$this->db->where($where);
			if ($allrows) 
			{
				return $this->db->get($table)->row();
			}
			else
			{
				return $this->db->get($table)->result();
			}
		}
	}
	// ------------------------------------------------------------------------
	/**
	* Get
	* 
	* Metodo para obtener datos de una tabla
	*
	* @param 	table 		string 		Nombre de la table
	* @param 	allrows 	boolean		Si es true? Recupera todas las filas: Recupera una fila
	* @param 	params 		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get($table, $allrows = FALSE, $params = array())
	{
		if ($allrows) 
		{
			if(isset($params) && !empty($params))
	        {
	            $this->db->limit($params['limit'], $params['offset']);
	        }
			return $this->db->get($table)->result();
		}
		else
		{
			return $this->db->get($table)->row();
		}
	}
	// ------------------------------------------------------------------------
	/**
	* Get_array
	* 
	* Metodo para obtener datos de una tabla
	*
	* @param 	table 		string 		Nombre de la table
	* @param 	allrows 	boolean		Si es true? Recupera todas las filas: Recupera una fila
	* @param 	params 		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_array($table, $allrows = FALSE, $params = array())
	{
		if ($allrows) 
		{
			if(isset($params) && !empty($params))
			{
				$this->db->limit($params['limit'], $params['offset']);
			}
			return $this->db->get($table)->result_array();
		}
		else
		{
			return $this->db->get($table)->row_array();
		}
	}
	
	// ------------------------------------------------------------------------
	/**
	* Get_count
	* 
	* Metodo para obtener la cantidad de filas de una tabla
	*
	* @param	table 		Nombre de la table
	* @return 	int
	*/
	public function Get_count($table)
	{
		return $this->db->count_all($table);
	}
	// ------------------------------------------------------------------------
	/**
	* Get_where
	* 
	* Metodo para obtener datos de una tabla con una condición
	*
	* @param	table 		string 		Nombre de la tabla
	* @param	where 		array		Contiene la condición a cumplir
	* @param	allrows		boolean		Si es true? Recupera todas las filas: Recupera una fila
	* @param	params		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_where($table, $where, $allrows = FALSE, $params = array())
	{
		$this->db->where($where);		
		if ($allrows) 
		{
			if(isset($params) && !empty($params))
			{
				$this->db->limit($params['limit'], $params['offset']);
			}
			return $this->db->get($table)->result();
		}
		else
		{
			return $this->db->get($table)->row();
		}
	}
	
	// ------------------------------------------------------------------------
	/**
	* Get_where_array
	* 
	* Metodo para obtener datos de una tabla con una condición
	*
	* @param 	table 		string 		Nombre de la tabla
	* @param 	where 		array 		Contiene la condición a cumplir
	* @param 	allrows 	boolean		Si es true? Recupera todas las filas: Recupera una fila
	* @param 	params 		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_where_array($table, $where, $allrows = FALSE, $params = array())
	{
		$this->db->where($where);		
		if ($allrows) 
		{
			if(isset($params) && !empty($params))
			{
			    $this->db->limit($params['limit'], $params['offset']);
			}
			return $this->db->get($table)->result_array();	
		}
		else
		{
			return $this->db->get($table)->row_array();
		}	
	}
	// ------------------------------------------------------------------------
	/**
	* Get_where_count
	* 
	* Metodo para obtener la cantidad de datos de una tabla con una condición
	*
	* @param 	table 		string 		Nombre de la tabla
	* @param 	where 		array		Contiene la condición a cumplir
	* @return 	integer
	*/
	public function Get_where_count($table, $where)
	{
		$this->db->where($where);
		$this->db->from($table);
		return $this->db->count_all_results();
	}
	
	// ------------------------------------------------------------------------
	/**
	* Get_select
	* 
	* Metodo para obtener datos de una tabla con determinados campos
	*
	* @param 	field 		string 		Nombre del campo o de los campos
	* @param 	table 		string 		Nombre de la tabla
	* @param 	allrows 	boolean		Si es true? Recupera todas las filas: Recupera una fila
	* @param 	params 		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_select($field, $table, $allrows = FALSE, $params = array())
	{
		$this->db->select($field);
		if($allrows)
		{
			if(isset($params) && !empty($params))
			{
			    $this->db->limit($params['limit'], $params['offset']);
			}
			return $this->db->get($table)->result();
		}
		else
		{
			return $this->db->get($table)->row();
		}
	}
	// ------------------------------------------------------------------------
	/**
	* Get_select_array
	* 
	* Metodo para obtener datos de una tabla con determinados campos
	*
	* @param 	field 		string 		Nombre del campo o de los campos
	* @param 	table 		string 		Nombre de la tabla
	* @param 	allrows 	boolean		Si es true? Recupera todas las filas: Recupera una fila
	* @param 	params 		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_select_array($field, $table, $allrows = FALSE, $params = array())
	{
		$this->db->select($field);
		if($allrows)
		{
			if(isset($params) && !empty($params))
			{
			    $this->db->limit($params['limit'], $params['offset']);
			}
			return $this->db->get($table)->result_array();
		}
		else
		{
			return $this->db->get($table)->row_array();
		}
	}
	// ------------------------------------------------------------------------
	/**
	* Get_select_where
	* 
	* Metodo para obtener datos de una tabla con determinados campos y condicion
	*
	* @param 	field 		string 		Nombre del campo o de los campos
	* @param 	table 		string 		Nombre de la tabla
	* @param 	where 		array 		Contiene la condición a cumplir
	* @param 	allrows 	boolean		Si es true? Recupera todas las filas: Recupera una fila
	* @param 	params 		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_select_where($field, $table, $where, $allrows = FALSE, $params = array())
	{
		$this->db->select($field);
		$this->db->where($where);
		if($allrows)
		{
			if(isset($params) && !empty($params))
			{
			    $this->db->limit($params['limit'], $params['offset']);
			}
			return $this->db->get($table)->result();
		}
		else
		{
			return $this->db->get($table)->row();
		}
	}
	// ------------------------------------------------------------------------
	/**
	* Get_select_where_array
	* 
	* Metodo para obtener datos de una tabla con determinados campos y condicion
	*
	* @param 	field 		string 		Nombre del campo o de los campos
	* @param 	table 		string 		Nombre de la tabla
	* @param 	where 		array 		Contiene la condición a cumplir
	* @param 	allrows 	boolean		Si es true? Recupera todas las filas: Recupera una fila
	* @param 	params 		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_select_where_array($field, $table, $where, $allrows = FALSE, $params = array())
	{
		$this->db->select($field);
		$this->db->where($where);
		if($allrows)
		{
			if(isset($params) && !empty($params))
			{
			    $this->db->limit($params['limit'], $params['offset']);
			}
			return $this->db->get($table)->result_array();
		}
		else
		{
			return $this->db->get($table)->row_array();
		}
	}
	// ------------------------------------------------------------------------
	/**
	* Get_join
	* 
	* Metodo para obtener datos de una tabla unida a otra tabla
	*
	* @param 	field 		string 		Nombre del campo o de los campos
	* @param 	table1 		string 		Nombre de la tabla
	* @param 	table2 		string 		Nombre de la tabla
	* @param 	condition	string 		Condición de unión
	* @param 	join		string 		Lugar de unión
	* @param 	allrows 	boolean		Si es true? Recupera todas las filas: Recupera una fila
	* @param 	params 		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_join($field, $table1, $table2, $condition, $join, $allrows = FALSE, $params = array())
	{
		$this->db->select($field);
		$this->db->from($table1);
		$this->db->join($table2, $condicion, $join);				
		if($allrows)
		{
			if(isset($params) && !empty($params))
			{
			    $this->db->limit($params['limit'], $params['offset']);
			}
			return $this->db->get()->result();
		}
		else
		{
			return $this->db->get()->row();
		}
	}
	// ------------------------------------------------------------------------
	/**
	* Get_join_array
	* 
	* Metodo para obtener datos de una tabla unida a otra tabla
	*
	* @param 	field 		string 		Nombre del campo o de los campos
	* @param 	table1 		string 		Nombre de la tabla
	* @param 	table2 		string 		Nombre de la tabla
	* @param 	condition	string 		Condición de unión
	* @param 	join		string 		Lugar de unión
	* @param 	allrows 	boolean		Si es true? Recupera todas las filas: Recupera una fila
	* @param 	params 		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_join_array($field, $table1, $table2, $condicion, $join, $allrows = FALSE)
	{
		$this->db->select($field);
		$this->db->from($table1);
		$this->db->join($table2, $condicion, $join);				
		if($allrows)
		{
			if(isset($params) && !empty($params))
			{
			    $this->db->limit($params['limit'], $params['offset']);
			}
			return $this->db->get()->result_array();
		}
		else
		{
			return $this->db->get()->row_array();
		}
	}
	
	// ------------------------------------------------------------------------
	/**
	* Get_likes
	* 
	* Metodo para obtener datos de una tabla con condición de busqueda
	*
	* @param 	titles		array 		Contiene la condición de busqueda
	* @param 	table 		string 		Nombre de la tabla
	* @param 	allrows 	boolean		Si es true? Recupera todas las filas: Recupera una fila
	* @param 	params 		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_likes($titles, $table, $allrows = FALSE, $params = array())
	{
		$this->db->like(titles);		
		if($allrows)
		{
			if(isset($params) && !empty($params))
			{
				$this->db->limit($params['limit'], $params['offset']);
			}
			return $this->db->get($table)->result();
		}
		else
		{
			return $this->db->get($table)->row();
		}
	}
	
	// ------------------------------------------------------------------------
	/**
	* Get_likes_array
	* 
	* Metodo para obtener datos de una tabla con condición de busqueda
	*
	* @param 	titles		array 		Contiene la condición de busqueda
	* @param 	table 		string 		Nombre de la tabla
	* @param 	allrows 	boolean		Si es true? Recupera todas las filas: Recupera una fila
	* @param 	params 		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_likes_array($titulos, $table, $allrows = FALSE, $params = array())
	{
		$this->db->like($titulos);		
		if($allrows)
		{
			if(isset($params) && !empty($params))
			{
				$this->db->limit($params['limit'], $params['offset']);
			}
			return $this->db->get($table)->result_array();			
		}
		else
		{
			return $this->db->get($table)->row_array();
		}
	}
	
	// ------------------------------------------------------------------------
	/**
	* Get_like_count
	* 
	* Metodo para obtener la cantidad de datos de una tabla con una condición de busqueda
	*
	* @param 	table 		string 		Nombre de la tabla
	* @param 	where 		array		Contiene la condición a cumplir
	* @return 	integer
	*/
	public function Get_like_count($titulos, $table)
	{
		$this->db->like($titulos);
		$this->db->from($table);
		return $this->db->count_all_results();
	}
	
	/**
	* Get_order
	* 
	* Metodo para obtener datos de una tabla con condición de orden
	*
	* @param 	field		atring 		Nombre del campo
	* @param 	direction 	string 		Parametro de direccion
	* @param 	result 		boolean		Si es true? retorna array de objetos: retorna array de arrays
	* @param 	params 		array		Contiene los valores el $params['limit'] y $params['offset']"
	* @return 	array
	*/
	public function Get_order($field, $direction, $table, $result = FALSE, $params = array(), $count = FALSE)
	{
		$this->db->order_by($titulo, $orden);
		if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        if ($array) 
        {
        	return $this->db->get($table)->result_array();		
        }
        else
        {
        	return $this->db->get($table)->result();	
        }
	}
	// ------------------------------------------------------------------------
	/**
	* Add
	* 
	* Metodo para insertar datos en la tabla
	*
	* @param 	table 		Nombre de la tabla
	* @param 	array 		Contiene el array a añadir
	* @return 	array
	*/
	public function Add($table, $array)
	{
		$this->db->insert($table, $array);		
		return $this->db->insert_id();
	}
	
	// ------------------------------------------------------------------------
	/**
	* Add_batch
	* 
	* Metodo para insertar datos en la tabla
	*
	* @param 	table 		Nombre de la table
	* @param 	array 		Contiene los arrays a importar 	
	*/
	public function Add_batch($table, $array)
	{
		$this->db->insert_batch($table, $array);
	}
	// ------------------------------------------------------------------------
	/**
	* Update
	* 
	* Metodo para actualizar datos en la tabla
	*
	* @param 	table 		Nombre de la tabla
	* @param 	where 		Condicion en array u objeto
	* @param 	array 		Nombre del objeto a modificar
	* @return 	string
	*/
	public function Update($table, $where, $array)
	{
		$this->db->where($where);
		$response = $this->db->update($table, $array);
        if($response)
        {
            return "Updated successfully";
        }
        else
        {
            return "Error occuring while updating ".$table;
        }
	}
	// ------------------------------------------------------------------------
	/**
	* Delete
	* 
	* Metodo para eliminar datos en la tabla
	*
	* @param 	table 		Nombre de la tabla
	* @param 	where 		Condicion en array u objeto
	* @param 	array 		Nombre del objeto a eliminar
	* @return 	array
	*/
	public function Delete($table, $where)
	{
		$response = $this->db->delete($table, $where);
        if($response)
        {
            return "Deleted successfully";
        }
        else
        {
            return "Error occuring while deleting";
        }
	}
}
/* End of file One_model.php */
/* Location: ./application/models/One_model.php */