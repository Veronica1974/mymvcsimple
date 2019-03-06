<?php

class Controller_Main extends Controller
{
	function __construct(){
		$this->model = new Model_Main();
		$this->view = new View();
	}
	
	function action_GetEmployeeList(){	
		
	
	    $data = $this->model->GetEmployeeList();
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
	
	function action_GetEmployeeRolest($id){
	    
	    
	   $data =  $this->model->GetEmployeeRolest($id);
	    $this->view->generate('main_view.php', 'template_view.php',$data);
	}
	
	
	function action_clockin(){
	    
	    
	    $data =  $this->model->clockin($_POST);
	    $this->view->generate('main_view.php', 'template_view.php',$data);
	}
	
	function action_index(){
	    $data = "fdfdf";
	$this->view->generate('main_view.php', 'template_view.php',$data);
	}
}