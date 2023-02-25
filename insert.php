<?php
		if(isset($_POST['insert']))
		{
			$xml=new DOMDocument('1.0','UTF-8');
			$xml->load('employees.xml');

			$e_id=$_POST['e_id'];
			$f_name=$_POST['f_name'];
            $l_name=$_POST['l_name'];
            $salary=$_POST['salary'];

			$workTag=$xml->getElementsByTagName('work')->item(0);

			$employeeTag=$xml->createElement('employee');

			$id=$xml->createElement('e_id',$e_id);
			$fname=$xml->createElement('f_name',$f_name);
            $lname=$xml->createElement('l_name',$l_name);
            $salary=$xml->createElement('salary',$salary);

			$employeeTag->appendChild($id);
			$employeeTag->appendChild($fname);
            $employeeTag->appendChild($lname);
			$employeeTag->appendChild($salary);

			$workTag->appendchild($employeeTag);
			$xml->save('employees.xml');	
            
            header("location: index.php");
		}
	?>


