<?php


############################
##   BY: SÍLVIO SILVA     ##
##   02/09/2022           ##
############################


include "./app/connection.php";
include "./app/helpers.php";
if (isset($_GET['updateid'])) {
  $update_details = $_GET['updateid'];

  $query = $pdo->prepare("SELECT * from developerdetails WHERE id = ?");
  $query->bindParam(1, $update_details);
  $query->execute();

  while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $update_id = filter($row['id']);
    $firstName = filter($row['firstName']);
    $lastName = filter($row['LastName']);
    $email = filter($row['email']);
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
    function logOut() {
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
            <a class="nav-link" href="add.html">Add</a>
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
        <input type="text" class="form-control" name="firstName" value="<?php

                                                                        if (isset($firstName)) {
                                                                          echo $firstName;
                                                                        } else {
                                                                          echo "";
                                                                        }

                                                                        ?>" id="firstName" placeholder="Enter you first name" required>
      </div>
    </div>
    <div class="form-group row no-container">
      <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="lastName" value="<?php echo $lastName ?>" id="lastName" placeholder="Enter your last name" required>
      </div>
    </div>
    <div class="form-group row no-container">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" value="<?php echo $email ?>" id="email" placeholder="Enter your email" required>
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


if (isset($_POST['update'])) {

  $update_id = filter($_GET['update_form']);
  $firstName = filter($_POST['firstName']);
  $lastName = filter($_POST['lastName']);
  $email = filter($_POST['email']);

  $query_update = $pdo->prepare("UPDATE developerdetails SET firstName = ?, LastName = ?, email = ? WHERE id = ?");
  $query_update->bindParam(1, $firstName);
  $query_update->bindParam(2, $lastName);
  $query_update->bindParam(3, $email);
  $query_update->bindParam(4, $update_id);

  if ($query_update->execute()) {
    echo "<script>alert('Details Updated')</script>";
    echo "<script>location.href='dashboard.php'</script>";
  } else {
    echo "Unable to Update the details";
  }
}
?>