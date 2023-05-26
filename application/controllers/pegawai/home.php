<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('sktm_model');
        $this->load->model('suratusaha_model');
    }
	public function index()
	{
        // load view admin/overview.php
	    $data["sktm"] = $this->sktm_model->getAll();
        $data["suratusaha"] = $this->suratusaha_model->getAll();

        $this->load->view("pegawai/index",$data);
	}
}