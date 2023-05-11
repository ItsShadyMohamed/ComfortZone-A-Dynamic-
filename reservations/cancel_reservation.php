<?php
include '../config.php';
$reservation_id=$_POST['reservation_id'];
$sql= "DELETE FROM reservations WHERE reservation_id='$reservation_id'";
mysqli_query($conn,$sql);
mysqli_close($conn);
header('Location: My reservations.php');
exit();
?>
