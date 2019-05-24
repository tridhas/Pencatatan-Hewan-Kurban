<?php


class Login extends CI_Controller
{
	function __construct()
		{
			parent::__construct();
			$this->load->model('m_kurban');
			$this->load->helper('url');
		}
	
	function  index() {
		$this->load->view('login');
	}

	function aksilogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_kurban->cek_login("petugas",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'username' => $username,
				'status' => "login_user"
			);

		$this->session->set_userdata($data_session);

		redirect(base_url("home"));

	}else{
		echo "Username dan password salah !";
	}
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}
}