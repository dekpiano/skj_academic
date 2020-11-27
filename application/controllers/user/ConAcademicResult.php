<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConAcademicResult extends CI_Controller {
var  $title = "ผลการเรียน";
	public function __construct() {
		parent::__construct();
		
		if ($this->session->userdata('fullname') == '' || $this->session->userdata('status') == "admin") {
            
			redirect('Login','refresh');
		}

    }


    public function score(){      
        $data['title'] = "ผลการเรียน";
        $data['scoreYear'] = $this->db->select('
                                    tb_register.RegisterYear,
                                    tb_register.StudentID,
                                    tb_register.RegisterClass')
                                    ->from('tb_register')
                                    ->where('StudentID',$this->session->userdata('login_id'))
                                    ->group_by('tb_register.RegisterYear')
                                    ->order_by('tb_register.RegisterClass ASC','tb_register.RegisterYear ASC')
                                    ->get()->result();

        $data['scoreStudent'] = $this->db->select('tb_subjects.SubjectName,
                                    tb_subjects.SubjectUnit,
                                    tb_register.SubjectCode,
                                    tb_register.StudentID,
                                    tb_register.Score100,
                                    tb_register.Grade,
                                    tb_register.RegisterYear,
                                    tb_register.RegisterClass')
                                    ->from('tb_register')
                                    ->join('tb_subjects', 'tb_register.SubjectCode = tb_subjects.SubjectCode')
                                    ->where('StudentID',$this->session->userdata('login_id'))
                                    ->group_by('tb_subjects.SubjectCode')
                                    ->order_by('tb_register.RegisterClass ASC','tb_register.RegisterYear ASC','tb_subjects.SubjectCode ASC')
                                    ->get()->result();
        //print_r($data['scoreStudent']); exit();
        $this->load->view('user/layout/Header.php',$data);
        $this->load->view('user/PageAcademicResult.php');
        $this->load->view('user/layout/Footer.php');

        // delete_cookie('username_cookie'); 
		// delete_cookie('password_cookie'); 
        // $this->session->sess_destroy();
        
    }



}


?>
