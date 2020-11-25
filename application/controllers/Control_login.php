<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Model_login');
	}

	public static $title = "เข้าสู่ระบบ";
	public static $description = "ระบบ Login โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์";
 	
 	public function dataAll(){
		$data['full_url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 		$data['title'] = self::$title;
		$data['description'] = self::$description; 		

		return $data;
 	}

	public function Login_main()
	{
		if(!empty(get_cookie('username_cookie')) && !empty(get_cookie('password_cookie')) ){
					 redirect('admin');				
		}else{
			$data = $this->dataAll();
					$this->load->view('login/loginMain.php');
		}
		

		
	}

	public function validlogin()
	{	
	
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
 
			if($this->input->server('REQUEST_METHOD') == TRUE){
				if($this->Model_login->record_count($username, $password) == 1)
				{
					$result = $this->Model_login->fetch_user_login($username, $password);
					$this->session->set_userdata(array('login_id' => $result->StudentCode,'fullname'=> $result->StudentPrefix.$result->StudentFirstName.' '.$result->StudentLastName,'status'=> 'user','class' => $result->StudentClass));

					set_cookie('username_cookie',$username,'3600'); 
					set_cookie('password_cookie',$password,'3600');

					$this->session->set_userdata(array('login_id' => $result->StudentCode,'fullname'=> $result->StudentPrefix.$result->StudentFirstName.' '.$result->StudentLastName,'status'=> 'user'));

				 redirect('Home');
					//echo "Yes";

				}
				else
				{
					// $this->session->set_flashdata(array('msgerr'=> '<center class="mt-4"><h4 class="p-2 badge-pill badge-danger">ชื่อผู้ใช้ หรือ รหัส ไม่ถูกต้อง!</h4></center>'));
					// redirect('login');

					redirect('./', 'refresh');
				}
			}
		
		
	}



	public function logout()
	{
		delete_cookie('username_cookie'); 
		delete_cookie('password_cookie'); 
		$this->session->sess_destroy();
		redirect('./', 'refresh');
	}

}