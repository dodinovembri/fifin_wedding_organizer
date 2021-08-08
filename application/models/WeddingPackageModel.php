<?php

class WeddingPackageModel extends CI_Model
{
    private $_table = "wedding_package";

    public function get($status = NULL)
    {
        if (isset($status)){
            $this->db->where('status', $status);
        }
    	return $this->db->get($this->_table);
    }

    public function getById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->_table);
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->_table, $data);
    }    

    public function destroy($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table);
    } 

    public function count()
    {
        return $this->db->count_all($this->_table);
    }    
          
}