<?php

include "./app/connection.php";
include "./app/helpers.php";


$delete_id = filter($_GET['deleteid']);
$query = $pdo->prepare("DELETE FROM developerdetails WHERE id = ?");
$query->bindParam(1, $delete_id);
if ($query->execute()) {
  echo "<script>alert('Details Deleted')</script>";
  echo "<script>location.href='dashboard.php'</script>";
} else {
  echo "Unable to Delete the details";
}
