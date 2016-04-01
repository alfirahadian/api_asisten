<?php 
class Upload_aslab extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('upload_model_aslab');
	}

	public function index(){
        $this->load->view('view_upload_aslab');
	}

	public function do_upload(){
		$this->load->library('form_validation');
		// field name, error message, validation rules
		//$this->form_validation->set_rules('divisi', 'Divisi', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('hp', 'Hp', 'required');
		$this->form_validation->set_rules('line', 'ID Line', 'required');
		//$this->form_validation->set_rules('userfile', 'Foto Profil', 'required');

		if($this->form_validation->run() == FALSE)
		{
			echo validation_errors();
			echo "Terjadi kesalahan. Pastikan Anda memasukkan data yang benar.";
		}
		else
		{
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
			//$config['max_size']	= '10000';
	 
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
	 		
			if ( ! $this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('view_upload', $error);
				echo "Jangan lupa masukkan gambar";
			}
			else{
				$data = $this->upload->data();
				//var_dump($data);
				//die;
				$this->upload_model_aslab->add_file($data);
				echo "Berhasil";
				//redirect('beranda');
			}

			
		}
		
	}
}
?>