<?php

class FeatureModel extends CI_Model
{
    private $_table = "feature";

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

    public function getNotIn($wedding_package_id)
    {
        return $this->db->query("SELECT * FROM feature WHERE id NOT IN (SELECT feature_id FROM wedding_package_detail WHERE wedding_package_id = $wedding_package_id)");
    }
          
}