<?php
class ModAdminClassRoom extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
    }

    public function ClassRoom_Add($data)
	{		
		return $this->db->insert('tb_regclass',$data);
	}
}