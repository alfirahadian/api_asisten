<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
    
	public function add_file($data)
	{
        //$file_name = $data['file_name'];
		$data=array(
			'nama'=>$this->input->post('nama'),
            'foto_profil'=>"data:image/png;base64,".base64_encode(file_get_contents($_FILES['userfile']['tmp_name'])),
            'email'=>$this->input->post('email'),
            'divisi'=>$this->input->post('divisi'),
            'line'=>$this->input->post('line'),
            'hp'=>$this->input->post('hp')
			);
		$this->db->insert('asisten_riset',$data);
	}
}
?>