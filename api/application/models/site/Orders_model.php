<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Orders_model extends CI_Model {

	public function get( $userId )

	{

		// szuka pole kolumny
		$this->db->where( 'userId', $userId );
		$q = $this->db->get( 'orders' );

		// row to jeden wiersz result wszystkie
		$q = $q->result();


		return $q;
	}

	public function create( $data )
	{
		$this->db->insert( 'orders' , $data );
	}

}
