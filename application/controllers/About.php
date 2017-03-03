<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
			'nama' => "Febrita Dian Pranata",
			'nim' => "1541180211",
			'kelas' => "TI-2C",
			'jurusan' => "Teknik Informatika",
			'alamat' => "Jl Rinjani 20 Malang",
			'hobby' => "Travelling",
			'email' => "febritadian29@gmail.com",
			);
		$this->load->view('about', $data);	
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
?>