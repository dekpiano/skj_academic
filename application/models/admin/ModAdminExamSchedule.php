<?php
class ModAdminExamSchedule extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
    }

    public function exam_schedule_insert($data)
	{
		
		return $this->db->insert('tb_exam_schedule',$data);
	}

	public function exam_schedule_update($data)
	{
		
		return $this->db->update('tb_exam_schedule',$data,"exam_id='".$this->input->post('exam_id')."'");
	}

	public function exam_schedule_delete($id)
	{
	
				$this->db->where('exam_id', $id);
		return 	$this->db->delete('tb_exam_schedule');
	}
}