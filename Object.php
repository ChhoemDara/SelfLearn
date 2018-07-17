<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
class Car{
	function Car(){
		$this->model='BMW';
		//echo "What the fuck";
	}
}
$output=new Car();
echo $output->model;
 ?>

</body>
</html>