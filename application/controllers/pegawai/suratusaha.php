<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suratusaha extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('suratusaha_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
    }
	public function index()
	{
        // load view pegawai/overview.php
		$data["suratusaha"] = $this->suratusaha_model->getAll();
        $this->load->view("pegawai/suratusaha/list", $data);
	}
    public function pdf($id)
	{
        // load view admin/overview.php
		$data["suratusaha"] = $this->suratusaha_model->getById($id);
        $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Surat-Usaha.pdf";
		$this->pdf->load_view('admin/suratusaha/pdf', $data);
	}
}