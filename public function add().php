<?php 
public function add()
    {
        $artikel = $this->artikel_model;
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                echo "error";
        }
        else
        {
             $poto = $this->upload->data();
             $poto = $poto['file_name'];
             $nama = $this->input->post('nama', TRUE);
             $isi = $this->input->post('isi', TRUE);

             $data = array(
                'nama' => $nama,
                'isi'   => $isi,
                'poto'  => $poto,
             );
             $this->db->insert('artikel', $data);
        }

        $this->load->view("admin/artikel/new_form");
    }

  
        ?>