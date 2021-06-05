<?php

	// Create connection
	$conn=mysqli_connect('localhost','root','','quiz');
	
	// Check connection
	if(mysqli_connect_errno())
	{
		echo 'Failed' . mysqli_connect_errno(); //failed
	}
?>