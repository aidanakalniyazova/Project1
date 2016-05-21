<?php session_start();

require_once("section/header.php");

?>



	<section id="content">
	<div class="container">
		<div class="row">
			 <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">


<?php
$conn=new mysqli("Localhost","root","","salon");
$sql="SELECT * FROM photo ";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	$e=$row['url'];
    	$des=$row['des'];
    		echo "<div class=\"col-lg-3\">
						<div class=\"box\">
							<div class=\"box-full aligncenter\">
								<h4>$des</h4>
								<img src=".$e."  width=\"800\" height=\"700\" class=\"aligncenter\">
														
							</div>
						</div>
					</div>";
    	}

    	
   }
    	
     
?>

					
						</div>
						</div>
             	  </div>
			</div>
				<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					
				</div>
				
				</aside>
			</div>
		</div>
	</div>
	</section>




	<footer>
	<div class="container">
		<div class="row">
					<div class="black"></div>
    <footer class="text-center">
        <p><font size="4" color="white" face="Times New Roman"><strong>Все права защищены. (с) 2014<br>📫 г.Атырау, мкр.Центральный д.4</p>
        <p><a href="aidanakalniyazova@gmail.com">Написать нам </a>тел.:📞 +7 701 206 8822
<br/>@raysbarbershop.atyrau<strong></p>
<a class="fancybox" data-fancybox-type="image" href="https://www.google.kz/maps/place/4,+%D0%90%D1%82%D1%8B%D1%80%D0%B0%D1%83/@47.1065114,51.9253509,17z/data=!4m5!3m4!1s0x41a3ea1ee92124f9:0x58aa87c14dadc883!8m2!3d47.1070712!4d51.9270193">
                    <img src="img/atyrau.jpg" style="width: 400px; height:200px;" class="show-map" alt="">
</a>
            </footer>

			</div>
					<div class="clear">
					</div>
				</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Project Name 2016 All right reserved. By Aidana Kalniyazova</span>
						</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

</body>
</html>
