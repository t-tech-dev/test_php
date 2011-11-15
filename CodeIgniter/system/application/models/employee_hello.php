<?php
class Employee_hello extends Model{
	
		function _construct(){
			parent::Model();
		}
		/*กำหนดค่าที่ใช้ในโปรแกรม*/
		function setdata(){
			  $data["title"]  = "TEST APP";
			  return $data;
			}
			
		function display_num(){
		 	$data = array ("aaa","ddd","bbb","dddd");
			return $data;	
		}

	}

?>