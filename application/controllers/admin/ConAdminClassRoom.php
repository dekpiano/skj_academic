<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConAdminClassRoom extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		if ($this->session->userdata('fullname') == '' && $this->session->userdata('status') == "user") {		
			redirect('Login','refresh');
		}

    }

    public function AdminClassMain(){   

		$data['title'] = "ห้องเรียน/ที่ปรึกษา";		
		$this->db->select('*');
		$this->db->from('tb_class_schedule');
		$this->db->order_by('schestu_id','DESC');
		$data['class_schedule'] = $this->db->get()->result();

        $this->load->view('admin/layout/Header.php',$data);
        $this->load->view('admin/AdminClassRoom/AdminClassRoomMain.php');
        $this->load->view('admin/layout/Footer.php');

        // delete_cookie('username_cookie'); 
		// delete_cookie('password_cookie'); 
        // $this->session->sess_destroy();
        
    }
    
    public function AddClassRoom(){   
        print_r($this->input->post());
    }

}


?>
