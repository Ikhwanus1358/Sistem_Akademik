<?php

class Mahasiswa_model extends CI_model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nim" => $this->input->post('nim', true),
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "jurusan" => $this->input->post('jurusan', true),
        ];
        $this->db->insert('mahasiswa', $data);
    }
}
