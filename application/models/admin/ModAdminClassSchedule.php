<?php
class ModAdminClassSchedule extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
    }

    public function class_schedule_insert($data)
	{
		
		return $this->db->insert('tb_class_schedule',$data);
	}

	public function class_schedule_update($data)
	{
		
		return $this->db->update('tb_class_schedule',$data,"schestu_id='".$this->input->post('schestu_id')."'");
	}

	public function class_schedule_delete($id)
	{
	
				$this->db->where('schestu_id', $id);
		return 	$this->db->delete('tb_class_schedule');
	}
}