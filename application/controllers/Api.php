<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	/**
		* @Author				: Localhost {Ferdhika Yudira}
		* @Email				: fer@dika.web.id
		* @Web					: http://dika.web.id
		* @Date					: 2015-07-09 14:48:37
	**/

	function __construct(){
		parent::__construct();
		// Load model m_api.php
		$this->load->model('m_api');

		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Method: PUT, GET, POST, DELETE, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');
	}

	public function index(){
		$coeg = array(
			'name'		=> 'CNC',
			'website'	=> 'http://labcnc.com'
		);
		echo json_encode($coeg);
	}

	// Get images from gravatar coeg
	protected function foto($email=null){
		$email = trim($email);
  		$email = strtolower($email);
	  	$email_hash = md5($email);
	  	$path = "http://www.gravatar.com/avatar/".$email_hash;
		$d = 'retro'; 
		$s = 600; //ukuran
		return $path.'?d='.$d;	
	}

	public function ambil(){
		// Query from m_api.php
		$ambil = $this->m_api->ambilSemua();

		if(!empty($ambil)){
			foreach ($ambil as $kolom) {
				// data array from database
				$json[] = array(
					'id_riset' 	=> $kolom['id_riset'],
					'nama'		=> $kolom['nama'],
					'email' 	=> $kolom['email'],
					'hp'		=> $kolom['hp'],
					'divisi'	=> $kolom['divisi'],
					'line'		=> $kolom['line'],
					'foto_profil' => $kolom['foto_profil']
				);
			}
		}else{
			$json = array();
		}
		
		//$data['data'] = $json;
		// Print with json_encode()
		$this->output
      ->set_status_header(200)
      ->set_Header('Access-Control-Allow-Origin', "*")
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($json, JSON_PRETTY_PRINT))
      ->_display();
      exit;
	}

	public function ambilAslab(){
		// Query from m_api.php
		$ambil = $this->m_api->ambilSemuaAslab();

		if(!empty($ambil)){
			foreach ($ambil as $kolom) {
				// data array from database
				$json[] = array(
					'id_aslab' 	=> $kolom['id_aslab'],
					'nama'		=> $kolom['nama'],
					'email' 	=> $kolom['email'],
					'hp'		=> $kolom['hp'],
					'line'		=> $kolom['line'],
					'foto_profil' => $kolom['foto_profil']
				);
			}
		}else{
			$json = array();
		}
		
		//$data['data'] = $json;
		// Print with json_encode()
		$this->output
      ->set_status_header(200)
      ->set_Header('Access-Control-Allow-Origin', "*")
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($json, JSON_PRETTY_PRINT))
      ->_display();
      exit;
	}

	public function ambilBenginpro(){
		// Query from m_api.php
		$ambil = $this->m_api->ambilSemuaBenginpro();

		if(!empty($ambil)){
			foreach ($ambil as $kolom) {
				// data array from database
				$json[] = array(
					'id_benginpro' 	=> $kolom['id_benginpro'],
					'nama'		=> $kolom['nama'],
					'email' 	=> $kolom['email'],
					'hp'		=> $kolom['hp'],
					'line'		=> $kolom['line'],
					'foto_profil' => $kolom['foto_profil']
				);
			}
		}else{
			$json = array();
		}
		
		//$data['data'] = $json;
		// Print with json_encode()
		$this->output
      ->set_status_header(200)
      ->set_Header('Access-Control-Allow-Origin', "*")
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($json, JSON_PRETTY_PRINT))
      ->_display();
      exit;
	}

	public function ambilKamjar(){
		// Query from m_api.php
		$ambil = $this->m_api->ambilSemuaKamjar();

		if(!empty($ambil)){
			foreach ($ambil as $kolom) {
				// data array from database
				$json[] = array(
					'id_kamjar' 	=> $kolom['id_kamjar'],
					'nama'		=> $kolom['nama'],
					'email' 	=> $kolom['email'],
					'hp'		=> $kolom['hp'],
					'line'		=> $kolom['line'],
					'foto_profil' => $kolom['foto_profil']
				);
			}
		}else{
			$json = array();
		}
		
		//$data['data'] = $json;
		// Print with json_encode()
		$this->output
      ->set_status_header(200)
      ->set_Header('Access-Control-Allow-Origin', "*")
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($json, JSON_PRETTY_PRINT))
      ->_display();
      exit;
	}

	public function ambilAlumni(){
		// Query from m_api.php
		$ambil = $this->m_api->ambilSemuaAlumni();

		if(!empty($ambil)){
			foreach ($ambil as $kolom) {
				// data array from database
				$json[] = array(
					'id_alumni' => $kolom['id_alumni'],
					'nama'		=> $kolom['nama'],
					'divisi'	=> $kolom['divisi'],
					'tahun'		=> $kolom['tahun'],
					'email' 	=> $kolom['email'],
					'hp'		=> $kolom['hp'],
					'line'		=> $kolom['line'],
					'foto_profil' => $kolom['foto_profil']
				);
			}
		}else{
			$json = array();
		}
		
		//$data['data'] = $json;
		// Print with json_encode()
		$this->output
      ->set_status_header(200)
      ->set_Header('Access-Control-Allow-Origin', "*")
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($json, JSON_PRETTY_PRINT))
      ->_display();
      exit;
	}
	
}