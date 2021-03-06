<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mproductos extends CI_Model 
  {

  		function __construct()
		{
			parent::__construct();
		}

	  /******************************** Buscar y Listar productos ***********************************/		
	    public function buscarSKU($sku) //busca el producto por el codigo SKU
	    {
	    	$parametro = $this->db->get_where('producto',array('sku'=>$sku));

	        return $parametro->result();
	    }

	    public function buscarNom($nombre) //busca el producto por Nombre
	    {
	    	$parametro = $this->db->get_where('producto',array('Nombre'=>$nombre));

	        return $parametro->result();
	    }

	    public function buscarDis($dispo) //busca el producto por Disponibilidad
	    {
	    	$parametro = $this->db->get_where('producto',array('Disponibilidad'=>$dispo));

	        return $parametro->result();
	    }

	    public function listar()// Lista todos los productos
	    {
	    	$parametro = $this->db->get('prodcuto');

	    	return $parametro->result();
	    }

	  /**********************************Guardar producto*********************************/
	    public function guardar($parametro)
	    {
	    	$campos = array(
					'sku'		    => $parametro['sku'],
					'Nombre'	    => $parametro['Nombre'],
					'Descripcion'   => $parametro['Descripcion'],
					'Precio'	    => $parametro['Precio'],
					'PK_idCategoria'=> $parametro['idCategoria'],
					'url_imagen'	=> $parametro['url_imagen']
					 );
			$this->db->insert('producto',$campos);

	   		return $this->db->insert_id();
	    }



	   /******************************Eliminar el producto******************************/
	    public function eliminar()
	    {
	    	# code...
	    }

	    /******************************Modificar el producto******************************/
	    public function editarSKU() // ediatar po SKU
	    {
	    	$campos = array(
					'sku'		    => $parametro['sku'],
					'Nombre'	    => $parametro['Nombre'],
					'Descripcion'   => $parametro['Descripcion'],
					'Precio'	    => $parametro['Precio'],
					'PK_idCategoria'=> $parametro['idCategoria'],
					'url_imagen'	=> $parametro['url_imagen']
					 );
			$this->db->insert('producto',$campos);

	   		return $this->db->insert_id();
	    }
	    public function editarId() //editar por Id
	    {
	    	$campos = array(
					'sku'		    => $parametro['sku'],
					'Nombre'	    => $parametro['Nombre'],
					'Descripcion'   => $parametro['Descripcion'],
					'Precio'	    => $parametro['Precio'],
					'PK_idCategoria'=> $parametro['idCategoria'],
					'url_imagen'=> $parametro['url_imagen']
					 );
			$this->db->insert('producto',$campos);

	   		return $this->db->insert_id();
	    }
	    public function editar() // Editar por nombre
	    {
	    	$campos = array(
					'sku'		    => $parametro['sku'],
					'Descripcion'   => $parametro['Descripcion'],
					'Precio'	    => $parametro['Precio'],
					'PK_idCategoria'=> $parametro['idCategoria'],
					'url_imagen'	=> $parametro['url_imagen']
					 );
			$this->db->update('producto', $campos, array('Nombre' => $parametro['Nombre']));
	   		return $this->db->insert_id();
	    }
  }