<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConStudents extends CI_Controller {
var  $title = "แผงควบคุม";
	public function __construct() {
		parent::__construct();
    }


    public function index(){      
        
        $data['CheckOnOff'] = $this->db->select('*')->from('tb_register_onoff')->get()->result();
        $this->load->view('user/layout/HeaderUser.php',$data);
        $this->load->view('user/Students/PageStudentsHome.php');
        $this->load->view('user/layout/Footer.php');

        // delete_cookie('username_cookie'); 
		// delete_cookie('password_cookie'); 
        // $this->session->sess_destroy();
        
    }

    public function StudentsList(){  
        
        $data['selStudent'] = $this->db->select('StudentNumber,StudentCode,StudentPrefix,StudentFirstName,StudentLastName')->from('tb_students')->where('StudentClass','ม.4/1')->get()->result();
        
        $this->load->view('user/layout/HeaderUser.php',$data);
        $this->load->view('user/Students/PageStudentsList.php');
        $this->load->view('user/layout/Footer.php');

        // delete_cookie('username_cookie'); 
		// delete_cookie('password_cookie'); 
        // $this->session->sess_destroy();
        
    }

    
    public function ExamSchedule(){
        $data['Exam'] = $this->db->order_by('exam_id','DESC')->limit(6)->get('tb_exam_schedule')->result();
        $this->load->view('user/layout/HeaderUser.php',$data);
        $this->load->view('user/PageExamSchedule.php');
        $this->load->view('user/layout/Footer.php');
    }



}


?>
