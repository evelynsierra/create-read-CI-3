<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    private $table = "tb_siswa";

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["kd_siswa" => $id])->row();
    }
}
