<?php

class Model_Main extends Model
{
	
    public function GetEmployeeList(){	
        $sql_select = "select id, name from 	employees";
		$res = $this->select($sql_select);
		
		return json_encode($res);
			
			
	}
	
	public function GetEmployeeRoles($id){
	    $sql_select = "select EmployeeId, RoleId from employeeroles where EmployeeId = '".$id."'";
	    $res = $this->select($sql_select);
	    
	    return json_encode($res);
	    
	    
	}
	
	public function clockin($name, $role){
	    $sql_insert = "INSERT INTO employees (name) VALUES ( '".$name."')
                        INSERT INTO employees (name) VALUES ( '".$name."')";
        $result = $this->query($sql_insert);

	    
	    
    }
}
