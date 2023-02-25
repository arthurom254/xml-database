<?php
$num = $_GET['e_id'];
$xmlfile = simplexml_load_file('employees.xml');
foreach ($xmlfile->xpath("/work/employee[e_id='$num']") as $employee) {

	unset($employee[0]);

}
file_put_contents('employees.xml', $xmlfile->asXML());

header("location: index.php");
?>