<?php
class Employee_model extends Model{
	
		function _construct(){
			parent::Model();
		}
		/*กำหนดค่าที่ใช้ในโปรแกรม*/
		function setdata(){
			$data["title"] = "ข้อมูลพนักงาน";
			$data["fid"] = 0;
			$data["ffname"] = array("name"=>"fname",
											"maxlength"=>75,
											"size"=> 30);
			$data["flname"] = array("name"=>"lname",
											"maxlength"=>75,
											"size"=> 30);
			$data["fjobname"] = array(''=>'-กรุณาเลือกตำแหน่ง-',
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
			/*อ่านข้อมูลมาทั้งหมด*/
			function getall(){
				$query = $this->db->get('employees');
				//return $query->result();
				return $query;
				}
	  

	}

?>