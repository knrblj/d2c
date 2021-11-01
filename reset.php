<?php 
include 'connection.php';
if(isset($_POST['reset']))
{
	//reset all the data from the database
	$up1="TRUNCATE TABLE bookstatus";
	$up2="INSERT INTO `bookstatus` (`row`, `booknum`, `remaining`) VALUES 
	('1', '', '5'), 
	('2', '', '6'),
	('3', '', '7'), 
	('4', '', '5'),
	('5', '', '6'), 
	('6', '', '7'),
	('7', '', '5'), 
	('8', '', '6'),
	('9', '', '7'), 
	('10', '', '5'),
	('11', '', '6'), 
	('12', '', '7'),
	('13', '', '8');";
	$de1="TRUNCATE TABLE bookdetails;";
	$run1=mysqli_query($conn,$up1);
	$run2=mysqli_query($conn,$up2);
	$run3=mysqli_query($conn,$de1);
	if($run1 && $run2 && $run3)
	{
		header("location:index.php");
	}
}
?>