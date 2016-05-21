


<?php session_start();

require_once("section/header.php");



if (!isset($_SESSION['login'])) {
  header("Location: http://".$_SERVER["SERVER_NAME"] ."/salon/login.php");
}





if(isset($_POST["name"])) {
  $name=$_POST["name"];
  $email= $_POST["email"];
  $phone=$_POST["phone"];
  $data=$_POST["data"]."  ".$_POST["time"];
  $message=$_POST["message"];
  

  $conn=new mysqli("Localhost","root","","salon");
  $sql="INSERT INTO users (name,email,phone,data,message) VALUES('$name','$email','$phone','$data','$message')";   
  $conn->query($sql);
    } 
?>



<div class="send">
	<h4>    Свяжитесь с нами<strong> с помощью этой формы</strong></h4>
<form name="myForm" method="post" onsubmit="return validateForm()">
 <input class="input1" type="text" name="name" placeholder="* Enter your full name" >
 <input class="input1" type="text" name="email" placeholder="* Enter your email address">
 <input class="input1" type="tel" name="phone" placeholder="* Enter your phone">
 <input class="input1" id="datepicker1" type="text" name="data" placeholder="Enter your your data">
 <select  name="time">
     <?php
     for ($i=10; $i <=19 ; $i++) {

        echo "<option >$i:00</option>";     
       }
       ?>
     </select>
 <br>
 <br>
 <br>
 <textarea class="message" type="comment" rows="9" name="message" cols="80" placeholder="Enter your comments"></textarea>
 
 <BR>
 <BR>
 <BR>
 <input class="send1" type="submit" Value="Send">

</form>

</div>
	
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
			</div>
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
