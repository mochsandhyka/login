<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register');	
		
	}

	public function createuser()
	{
		$this->load->model('User');		
		$this->load->helper('url','form');	
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('username','Username','trim|required|callback_cekDB');
		$this->form_validation->set_rules('password','Password','trim|required');
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('register');
		}else
		{
				$this->User->insertUser();
				$this->load->view('register_sukses');
		}
	}

	public function cekDb()
	{
		$this->load->model('user');
		
		$username = $this->input->post('username');
		$result = $this->user->register($username);
		if($result){
			$this->form_validation->set_message('cekDB',"Register Gagal! Username Sudah Terpakai!");
			return false;
		}
		else{
			return true;
		}
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */
  ?>