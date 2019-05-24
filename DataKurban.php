<?php 
	/**
	 * 
	 */
	class DataKurban extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_kurban');
			$this->load->helper('url');
		}

	 	function tambah(){
	 		$this->load->view('tambahcatatan');
	 	}

		function tambahdata(){
			$pemilik = $this->input->post('pemilik');
			$jenis_hewan = $this->input->post('jenis_hewan');
			$quantity = $this->input->post('quantity');
			$kontak = $this->input->post('kontak');
			$alamat = $this->input->post('alamat');

			$data = array(
				'pemilik' => $pemilik,
				'jenis_hewan' => $jenis_hewan,
				'quantity' => $quantity,
				'kontak' => $kontak,
				'alamat' => $alamat
			);

			$this->m_kurban->input_data($data,'daftar_hewan_kurban');
			redirect('#feature');
		}

		function hapusdata($no){
			
			if($no==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('home');
			}	
			else{
			$this->m_kurban->hapus_data($data,$no);
			redirect('home');
			}
		}
		function editdata($no){
			$where = array('no' => $no);
			$data['daftar_hewan_kurban'] = $this->m_kurban->edit_data($where,'daftar_hewan_kurban')->result();
			$this->load->view('edit',$data);
		}

		/*function updatedata(){
			$no = $this->input->post('no');
			$pemilik = $this->input->post('pemilik');
			$jenis_hewan = $this->input->post('jenis_hewan');
			$quantity = $this->input->post('quantity');
 			$kontak = $this->input->post('kontak');
 			$alamat = $this->input->post('alamat');
			$data = array(
				'pemilik' => $pemilik,
				'jenis_hewan' => $jenis_hewan,
				'quantity' => $quantity,
				'kontak' => $kontak,
				'alamat' => $alamat
			);
 
			$where = array(
				'no' => $no
			);
 
			$this->m_kurban->update_data($where,$data,'daftar_hewan_kurban');
			redirect('#feature');
			}*/
		public function updatedata()
     {
        $this->form_validation->set_rules('no', 'no', 'required');
        $this->form_validation->set_rules('pemilik', 'pemilik', 'required');

        $no = $this->input->post('no');
		$pemilik = $this->input->post('pemilik');
		$jenis_hewan = $this->input->post('jenis_hewan');
		$quantity = $this->input->post('quantity');
		$kontak = $this->input->post('kontak');
		$alamat = $this->input->post('alamat');
		{
	        
            $data=array(
                "pemilik"=>$pemilik,
                "jenis_hewan"=>$jenis_hewan,
                "quantity"=>$quantity,
                "kontak"=>$kontak,
                "alamat"=>$alamat

            );
	        }

            $this->m_kurban->update_data($data,$no);
            redirect('#feature');
        }
}