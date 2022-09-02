<?php



############################
##   BY: SÍLVIO SILVA     ##
##   02/09/2022           ##
############################

include "./app/connection.php";
include "./app/helpers.php";

if (isset($_POST['submit'])) {
	$firstName = filter($_POST['firstName']);
	$lastName = filter($_POST['lastName']);
	$email = filter($_POST['email'])/*  */;



	$query = $pdo->prepare("INSERT INTO developerdetails (firstName, LastName, email) VALUES (?, ?, ?)");
	$query->bindParam(1, $firstName);
	$query->bindParam(2, $lastName);
	$query->bindParam(3, $email);

	if ($query->execute()) {
		echo "<script>alert('Details Inserted')</script>";
		echo "<script>location.href='add.html'</script>";
	} else {
		echo "Unable to insert the details";
	}
}
