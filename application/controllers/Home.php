<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//$data['nama'] = "Febrita Dian Pranata";
		$data = array(
			'nama' => " Welcome to my blog		",
			//'alamat' => "Jl Rinjani no 20 Malang",
			'email' => "febritadian29@gmail.com",
			 );
		//$data["tugas"] = array('ngoding','makan','tidur');
		$this->load->view('home',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
																