<?php

class Model_dLemas extends CI_Model
{

    public function save_dlema($data)
    {
        $this->db->insert('dlemas', $data);
        return $this->db->insert_id(); // Get the last inserted ID
    }

    // Additional methods (optional)
    public function get_dlema_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('dlemas');
        return $query->row_array(); // Returns an associative array
    }

    public function get_all_dlemas()
    {
        $query = $this->db->get('dlemas');
        return $query->result_array(); // Returns an array of associative arrays
    }

}