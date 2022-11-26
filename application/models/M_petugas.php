<?php

class M_petugas extends CI_Model
{
    public function ambil_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function check_login()
    {
        $kdakses = set_value('kd_akses');
        $password = set_value('password');
        $result = $this->db->where('kd_akses', $kdakses)->where('password', md5($password))->limit(1)->get('data_karyawan');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
}
