<?php

class WeddingPackageDetailModel extends CI_Model
{
    private $_table = "wedding_package_detail";

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

    public function PackageDetail($wedding_package_id)
    {
        return $this->db->query("SELECT wedding_package_detail.*, feature.name AS feature_name, feature.image as image FROM wedding_package_detail JOIN feature ON wedding_package_detail.feature_id = feature.id WHERE wedding_package_detail.wedding_package_id = $wedding_package_id");
    }

    public function destroyAll($wedding_package_id)
    {
        return $this->db->query("DELETE FROM wedding_package_detail WHERE wedding_package_id = $wedding_package_id");
    }
          
}