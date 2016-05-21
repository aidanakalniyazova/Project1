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

 if (isset($_POST['url1'])) {
  $path='img/';
 	 $churl1=$path.$_POST['url1'];

     $chdes1=$_POST['des1'];
	$conn= new mysqli("Localhost","root","","salon");
    $sql1 = "UPDATE photo SET url ='$churl1' WHERE id='1' " ;
    $sql2 = "UPDATE photo SET des ='$chdes1' WHERE id='1' " ;
	$result=$conn->query($sql1);
	$result2=$conn->query($sql2);

	
}

 else if (isset($_POST['url2'])) {
    $path='img/';
     $churl2=$path.$_POST['url2'];
     $chdes2=$_POST['des2'];
	$conn= new mysqli("Localhost","root","","salon");
	$sql3 = "UPDATE photo SET url ='$churl2' WHERE id='2' " ;
    $sql4 = "UPDATE photo SET des ='$chdes2' WHERE id='2' " ;
	$result=$conn->query($sql3);
	$result2=$conn->query($sql4);

}
 else if (isset($_POST['url3'])) {
    $path='img/';
     $churl3=$path.$_POST['url3'];
     $chdes3=$_POST['des3'];

	$conn= new mysqli("Localhost","root","","salon");
	$sql5 = "UPDATE photo SET url ='$churl3' WHERE id='3' " ;
    $sql6 = "UPDATE photo SET des ='$chdes3' WHERE id='3' " ;
	

	$result=$conn->query($sql5);
	$result2=$conn->query($sql5);

}
 else if (isset($_POST['url4'])) {
  $path='img/';
     $churl4=$path.$_POST['url4'];
     $chdes4=$_POST['des4'];

	$conn= new mysqli("Localhost","root","","salon");
	$sql7 = "UPDATE photo SET url ='$churl4' WHERE id='4' " ;
    $sql8 = "UPDATE photo SET des ='$chdes4' WHERE id='4' " ;

	$result=$conn->query($sql7);
	$result2=$conn->query($sql8);

}


 ?>
<div class="update">
  <form method="post"  >
<h3>Change url and description</h3>
<HR>
<br>
 1 announcement <input class="bank"  name="url1" >
  description <input class="bank"  name="des1" >
 <input type="submit" value="Change photo">
</form>
<br>
  <form method="post"  >
 2 announcement <input class="bank"  name="url2" >
  description <input class="bank"  name="des2" >
  <input type="submit" value="Change photo">
</form>
<br>
 <form method="post" >
 3 announcement <input class="bank"  name="url3" >
  description <input class="bank"  name="des3" >
  <input type="submit" value="Change photo">
</form>
 <br>
  <form method="post"  >
 4 announcement <input class="bank"  name="url4" >
  description <input class="bank"  name="des4" >
 <input type="submit" value="Change photo">
</form>
</div>



 </body>
 </html>