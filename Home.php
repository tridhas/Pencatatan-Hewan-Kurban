<?php 
/**
 * 
 */
class Home extends CI_Controller
{
	function __construct()
		{
			parent::__construct();
			$this->load->model('m_kurban');
			$this->load->helper('url');
		}

	public function index(){
		$data['daftar_hewan_kurban'] = $this->m_kurban->tampil_data()->result();
		$this->load->view('home',$data);
	}

	function registrasi(){
		$this->load->view("register");
	}

	function aksiregistrasi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$kontak = $this->input->post('kontak');
		$alamat = $this->input->post('alamat');
	
		$data = array(
			'username' => $username,
			'password' => md5($password),
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'kontak' => $kontak,
			'alamat' => $alamat
		);
		$this->m_kurban->input_data($data,'petugas');
		redirect('home');
	}
}