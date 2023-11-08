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
        // load view admin/overview.php
		$data["sktm"] = $this->sktm_model->getAll();
        $this->load->view("admin/sktm/list", $data);
	}
    public function add()
    {
        $sktm = $this->sktm_model;
        $validation = $this->form_validation;
        $validation->set_rules($sktm->rules());
           if ($validation->run()) {
            $sktm->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("admin/sktm/new_form");
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/sktm');
       
        $sktm = $this->sktm_model;
        $validation = $this->form_validation;
        $validation->set_rules($sktm->rules());

        if ($validation->run()) {
            $sktm->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sktm"] = $sktm->getById($id);
        if (!$data["sktm"]) show_404();
        
        $this->load->view("admin/sktm/edit_form", $data);
    }
    public function terima($id) {
        $this->load->model('sktm_model');
        $this->sktm_model->updateStatus($id, 'diterima');
        redirect('admin/sktm');
      }
      public function tolak($id) {
        $this->load->model('sktm_model');
        $this->sktm_model->updateStatus($id, 'ditolak');
        redirect('admin/sktm');
      }
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->sktm_model->delete($id)) {
            redirect(site_url('admin/sktm'));
        }
    }
    // public function pdf()
	// {
    //     // load view admin/overview.php
	// 	$data["sktm"] = $this->sktm_model->getAll();
    //     $this->pdf->setPaper('A4', 'potrait');
	// 	$this->pdf->filename = "SKTM.pdf";
	// 	$this->pdf->load_view('admin/sktm/pdf', $data);
	// }
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