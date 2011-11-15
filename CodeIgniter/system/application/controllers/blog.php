<?php
class Blog extends  Controller{
	
	function index(){
		$data['todo_list']= array('Clean Houre','Cell Mom','Run Errands');
		$data['title']= "My Real Title";
		$data['heading']= "My Real Heading";
		
		$this->load->view(blogbiew,$data);
		}
	}
?>