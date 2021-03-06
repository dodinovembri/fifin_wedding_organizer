<?php

class OrderModel extends CI_Model
{
    private $_table = "order";

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

    public function getByIdCustom($id)
    {
        $this->db->where('building_id', $id);
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
          
}