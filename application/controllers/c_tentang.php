<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_tentang extends CI_Controller {

	
	public function index()
	{
		$data['isi'] = $this->load->view('v_tentang', '', true);

		$this->load->view('main_view',$data);
	}
}
