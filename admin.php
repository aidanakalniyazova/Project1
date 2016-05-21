<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Project name - Home page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Projected designed and developed by Aidana Kalniyazova March 2016" />
<meta name="author" content="Aidana Kalniyazova" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="skins/default.css" rel="stylesheet" />
</head>
<body>
		<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span>First</span> Project</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><img src="img/dummies/badge.png"  width="80" height="80" alt="" class="align-left"></a></li>
                        <li><a href="admin.php">Admin page</a></li>
                        <li><a href="logout.php">logout</a></li>
                        <li><a href="update.php">Update</a></li>  
                     </ul>
                </div>
            </div>
        </div>
	</header>

 
 <?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "salon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	
        echo "<div class=\"col-sm-4\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">".$row['id'].'    '.'<a href="delete.php?id=' . $row['id'] . '">Delete</a>'.''."</div>
        <div class=\"panel-footer\">".'Name-'.$row['name']."<br>".'Email-'.$row['email']."<br>".'Phone-'.$row['phone']."<br>".'Data-'.$row['data']."<br>".'Message-'.$row['message']."<br></div>
      </div>
    </div>";
    }
} 



?>
</body>
</html>
