<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sktm extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('sktm_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
    }
	public function index()
	{
        // load view pegawai/overview.php
		$data["sktm"] = $this->sktm_model->getAll();
        $this->load->view("pegawai/sktm/list", $data);
	}
    public function pdf ($id)
{
    $data["sktm"] = $this->sktm_model->getById($id);
    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "SKTM.pdf";
    $html = $this->load->view('admin/sktm/pdf', $data, true);
    $this->pdf->loadHtml($html);
    $this->pdf->render();
    $this->pdf->stream();
}
}