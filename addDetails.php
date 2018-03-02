<?php 

$con=mysqli_connect("localhost","root","","crudphp");
// checking connection
if(mysqli_connect_errno())
	{
		echo "Unable to connect to the database : " .mysqli_connect_error();
	}

	if(isset($_POST['submit']))
		{
			$firstName=$_POST['firstName'];
			$lastName=$_POST['lastName'];
			$email=$_POST['email'];
		

		$query="insert into developerdetails(firstName,LastName,email)
		values('$firstName','$lastName','$email')";

		if(mysqli_query($con,$query))
			{
				echo "<script>alert('Details Inserted')</script>";
				echo "<script>location.href='add.html'</script>";
			}

		else
			{
				echo "Unable to insert the details";
			}

		}

 ?>