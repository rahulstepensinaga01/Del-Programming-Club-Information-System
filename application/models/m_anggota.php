<?php

class m_anggota extends CI_Model
{

    // public function tampil_data()
    // {
    //     return $this->db->get('user');
    // }
    public function UntukAPI($table)
    {
        return $this->db->get($table);
    }
    public function edit_data($where, $table)
    {

        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
