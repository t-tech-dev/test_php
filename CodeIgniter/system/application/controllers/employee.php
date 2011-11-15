<?php
class Employee extends Controller{
	function _construct()
	{
		parent::Controller();	
	}
	function index()
	{
		$this->load->model("employee_model");//โหลดโมเดล
		$data=$this->employee_model->setdata();//โหลดfunction
		$data["query"]=$this->employee_model->getall();//อ่านข้อมูลมาทั้งหมด
		$this->load->view("employee_mian",$data);//โหลดวิว
	}
	function test()
	{
		$this->load->model("employee_hello");//โหลดโมเดล
		$data=$this->employee_hello->setdata();//โหลดfunction
		 $data["num"]=$this->employee_hello->display_num();
		$this->load->view("employee_hello",$data);//โหลดวิว
	}	
	
	function input(){
			$this->load->helper('form');  
			$this->load->helper('html');      
			$this->load->model('employee_model');
			if($this->input->get('submit')){
				$this->employee_model->entry_insert();
			}   
			$data = $this->employee_model->general();
			$this->load->view('employee_mian',$data);   
		  }
		
	   
	function entry_input(){
		  $this->load->database();
		  $data = array(
					'id'=>$this->input->post('id'),
					'fname'=>$this->input->post('fname'),
					'lname'=>$this->input->post('lname'),
					'jobname'=>$this->input->post('jobname'),
					'member'=>$this->input->post('member'),
					'nickname'=>$this->input->post('nickname'),
				  );
		  $this->db->input('employees',$data);
		}
	  
		   
	function general(){
		  $data['base']       = $this->config->item('base_url');
		  $data['css']        = $this->config->item('css');     
		 /* $data['webtitle']   = 'Employee';
		  $data['websubtitle']= 'We collect all title of 
								 books on the world';
		  $data['webfooter']  = '© copyright by step 
								 by step php tutorial';*/
		  $data["title"] = "ข้อมูลพนักงาน";			  
		  $data['id']  = 'ID';
		  $data['fname'] = 'Fname';
		  $data['lname']  = 'Lname';              
		  $data['jobname'] = 'jobname';
		  $data['member']  = 'Member';  
		  $data['nickname'] = 'Nickname';
		  $data['forminput']  = 'Form Input';
		  
		  $data["fid"] = 0;
		  $data["ffname"] = array("name"=>"fname",
										  "maxlength"=>75,
										  "size"=> 30);
		  $data["flname"] = array("name"=>"lname",
										  "maxlength"=>75,
										  "size"=> 30);
		  $data["fjobname"] = array('name'=>'-กรุณาเลือกตำแหน่ง-',
		  'นักวิเคราะห์ระบบ'=>'นักวิเคราะห์ระบบ',
		  'นักออกแบบระบบ'=>'นักออกแบบระบบ',
		  'โปรแกรมเมอร์'=>'โปรแกรมเมอร์',
		  'นักทดสอบระบบ'=>'นักทดสอบระบบ',
		  );
		  $data["fjobnames"] = "-กรุณาเลือกตำแหน่ง-";
		  $data["fmember"] = array('name'=>'member','value' => 1, 'checked' => TRUE);
		  $data["fnickname"] = array('name'=>'nickname','rows' => 4, 'cols' => 50);
		return $data;   
		}
			
		}
					
?>