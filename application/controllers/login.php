<?php 
class login extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}
	function index(){
		$this->load->view('login');
	}
	function aksi_login(){
		$email = $this->input->post('email');
		$sandi = $this->input->post('sandi');
		$where = array(
			'email' => $email,
			'sandi' => $sandi
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'email' => $email,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("admin"));
		}else{
			echo "Email dan Sandi salah !";
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}