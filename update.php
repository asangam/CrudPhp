
<?php
$con=mysqli_connect("localhost","root","","crudphp");
//checking the connection
if(mysqli_connect_errno())
{
echo "Unable to connect to the database : " .mysqli_connect_error();
}

if(isset($_GET['updateid'])) 
{
$update_details=$_GET['updateid'];
$query="select * from developerdetails where id='$update_details'";
$run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($run))
{
$update_id=$row['id'];
$firstName=$row['firstName'];
$lastName=$row['LastName'];
$email=$row['email'];
}

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Details</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript">
    function logOut()
    {
    alert("You have been logged out");
    }
    </script>
  </head>
  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="dashboard.php"><img src="img/hero.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav mr-auto">
            <li>
              <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
              <li class="nav-item active">
                <a class="nav-link" href="add.html" >Add</a>
              </li>
            </ul>
            <a class="btn btn-info" href="index.html" onclick="logOut()">Log Out</a>
          </nav>
        </div>
        <h1 class="dashboard-title">Update Details</h1>
         <form action="update.php?update_form=<?php echo $update_details; ?>" method="post">
          <div class="form-group row no-container">
            <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="firstName"
              value="<?php

                    if(isset($firstName))
                      {
                        echo $firstName;
                      }
                      else
                      {
                        echo "";

                      }

               ?>"  
              id="firstName" placeholder="Enter you first name" required>
            </div>
          </div>
          <div class="form-group row no-container">
            <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="lastName"
              value="<?php echo $lastName ?>" id="lastName" placeholder="Enter your last name" required>
            </div>
          </div>
          <div class="form-group row no-container">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email"
              value="<?php echo $email ?>" id="email" placeholder="Enter your email" required>
            </div>
          </div>
          <div class="form-group row no-container">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-info" name="update">Update</button>
            </div>
          </div>
        </form>
        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
      </body>
    </html>
    <?php
    $con=mysqli_connect("localhost","root","","crudphp");
    // checking connection
    if(mysqli_connect_errno())
    {
    echo "Unable to connect to the database : " .mysqli_connect_error();
    }
    if(isset($_POST['update']))
    {
    $update_id=$_GET['update_form'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $queryu="update developerdetails set firstName='$firstName', LastName='$lastName',
    email='$email' where id='$update_id'";
    if(mysqli_query($con,$queryu))
    {
    echo "<script>alert('Details Updated')</script>";
    echo "<script>location.href='dashboard.php'</script>";
    }
    else
    {
    echo "Unable to Update the details";
    }
    }
    ?>