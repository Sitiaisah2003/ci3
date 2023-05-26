<?php defined('BASEPATH') OR exit('No direct script access allowed');

class suratusaha_model extends CI_Model
{
    private $_table = "suratusaha";

    public $id;
    public $nama;
    public $tgl_lahir;
    public $no_ktp;
    public $pekerjaan;
    public $agama;
    public $alamat;


    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'no_ktp',
            'label' => 'name',
            'rules' => 'required']
            
           
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    public function save()
    {
       
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->nama = $post["nama"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->no_ktp = $post["no_ktp"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->agama = $post["agama"];
        $this->alamat = $post["alamat"];
        return $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->no_ktp = $post["no_ktp"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->agama = $post["agama"];
        $this->alamat = $post["alamat"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}