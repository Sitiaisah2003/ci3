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
		$level = $this->input->post('level');
		$where = array(
			'email' => $email,
			'sandi' => $sandi,
			'level' => $level
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'email' => $email,
				'level' => $level,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			if ($level == 'admin') {
                redirect(base_url('admin'));
            } else if ($level == 'pegawai') {
                redirect(base_url('pegawai'));
            } else {
                redirect(base_url('login'));
            }
        } else {
            $data['error_message'] = "Username dan Sandi salah!";
        $this->load->view('login', $data);
        }
		// 	redirect(base_url("admin"));
		// }else{
		// 	echo "Email dan Sandi salah !";
		// }
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}