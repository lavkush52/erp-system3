<?php
class Admin_model extends CI_Model
{
    public function getConfigInfo()
    {
        $row = $this->db->get('tbl_config')->row();
        return $row;
    }

    public function updateConfigInfo($id, $data)
    {
        $this->db->where('id', $id);
        $row = $this->db->update('tbl_config', $data);
        $arr = array('status'=>'success','msg'=>"Site settings has been updated");
        return $arr;
    }
}

?>