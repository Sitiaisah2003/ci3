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
        // load view admin/overview.php
		$data["suratusaha"] = $this->suratusaha_model->getAll();
        $this->load->view("admin/suratusaha/list", $data);
	}
    public function add()
    {
        $suratusaha = $this->suratusaha_model;
        $validation = $this->form_validation;
        $validation->set_rules($suratusaha->rules());
           if ($validation->run()) {
            $suratusaha->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("admin/suratusaha/new_form");
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/suratusaha');
       
        $suratusaha = $this->suratusaha_model;
        $validation = $this->form_validation;
        $validation->set_rules($suratusaha->rules());

        if ($validation->run()) {
            $suratusaha->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["suratusaha"] = $suratusaha->getById($id);
        if (!$data["suratusaha"]) show_404();
        
        $this->load->view("admin/suratusaha/edit_form", $data);
    }
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->suratusaha_model->delete($id)) {
            redirect(site_url('admin/suratusaha'));
        }
    }
    public function pdf($id)
	{
        // load view admin/overview.php
		$data["suratusaha"] = $this->suratusaha_model->getById($id);
        $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Surat-Usaha.pdf";
		$this->pdf->load_view('admin/suratusaha/pdf', $data);
	}
//     public function pdf ($id)
// {
//     $data["suratusaha"] = $this->suratusaha_model-->getById($id);
//     $this->pdf->setPaper('A4', 'potrait');
//     $this->pdf->filename = "surat-usaha.pdf";
//     $html = $this->load->view('admin/suratusaha/pdf', $data);
//     $this->pdf->loadHtml($html);
//     $this->pdf->render();
//     $this->pdf->stream();
// }
    
}