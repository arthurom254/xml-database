<?php
	if(ISSET($_POST['edit'])){
		$xmlfile= simplexml_load_file('employees.xml');
		foreach($xmlfile->employee as $employee){
			if($employee->e_id == $_POST['e_id']){
				$employee->f_name = $_POST['f_name'];
				$employee->l_name = $_POST['l_name'];
				$employee->salary = $_POST['salary'];
				break;
			}
		}

		file_put_contents('employees.xml', $xmlfile->asXML());
		header("location: index.php");
	}
?>