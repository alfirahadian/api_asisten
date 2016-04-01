<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {

	/**
		* @Author				: Localhost {Ferdhika Yudira}
		* @Email				: fer@dika.web.id
		* @Web					: http://dika.web.id
		* @Date					: 2015-07-09 14:49:12
	**/
	
	public function ambilSemua(){
		$query = $this->db->get('asisten_riset');
		$query = $query->result_array();

		return $query;
	}

	public function ambilSemuaAslab(){
		$query = $this->db->get('aslab');
		$query = $query->result_array();

		return $query;
	}

	public function ambilSemuaKamjar(){
		$query = $this->db->get('kamjar');
		$query = $query->result_array();

		return $query;
	}

	public function ambilSemuaBenginpro(){
		$query = $this->db->get('benginpro');
		$query = $query->result_array();

		return $query;
	}

	public function ambilSemuaAlumni(){
		$query = $this->db->get('alumni');
		$query = $query->result_array();

		return $query;
	}
}