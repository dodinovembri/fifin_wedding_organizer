<?php

class EventModel extends CI_Model
{
    private $_table = "event";

    public function get($status = NULL)
    {
        if (isset($status)){
            $this->db->where('status', $status);
        }
    	return $this->db->get($this->_table);
    }

    public function getDateNow($month, $year)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->_table);
    }

    public function getYear()
    {
        return $this->db->query("SELECT YEAR(start_date) as year from event");
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->_table);
    }    
    
    public function getByBuildingId($id)
    {
        $this->db->where('building_id', $id);
        return $this->db->get($this->_table);
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