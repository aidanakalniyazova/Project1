<?php

if (isset($_GET['id'])) {

	$id=$_GET['id'];
$conn= new mysqli("localhost","root","","salon");
$sql = "DELETE FROM users WHERE id='$id'";
$result = $conn->query($sql);
header("Location: http://".$_SERVER["SERVER_NAME"] . "/salon/admin.php");

}
?>
