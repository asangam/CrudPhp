<?php 
	
	  $con=mysqli_connect("localhost","root","","crudphp");

	  //checking the connection
  	  if(mysqli_connect_errno())
      {
        echo "Unable to connect to the database : " .mysqli_connect_error();
      }

      $delete_id=$_GET['deleteid'];
      $query= "delete from developerdetails where id='$delete_id'";

      if(mysqli_query($con,$query))
      {
        echo "<script>alert('Details Deleted')</script>";
        echo "<script>location.href='dashboard.php'</script>";
      }

    else
      {
        echo "Unable to Delete the details";
      }


 ?>