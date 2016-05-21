+<?php session_start();

require_once("section/header.php");




if (isset($_POST['register'])) {
$name=$_POST["name"];
$login=$_POST["login"];
$password=$_POST["password"];
$email=$_POST["email"];
$phone=$_POST["phone"];

$conn=new mysqli("localhost","root","","salon");



   
        $sql="INSERT INTO users2 (name,login,pass,email,phone) VALUES ('$name','$login','$password','$email','$phone')";
        $result=$conn->query($sql);
           
            echo "<script>alert('Register succesfully')</script>" ;   

        
}

?>

    
  <div class="form">
    <form  method="post" >
      <input type="text" name= "name"     placeholder="Введите Name"required>
      <br>
      <br>
      <input type="text" name="login" placeholder="Enter your Login" required>
      <br>
      <br>
       <input type="password" name="password" placeholder="Enter your password" required>
      <br>
      <br>
       <input type="text" name="email" placeholder="Enter your email"required>
      <br>
      <br>
       <input type="tel" name="phone" placeholder="Enter your phone-number"required>
      <br>
      <br>
      <button name="register">Register</button>
       <a  href="login.php">Return</a></p>
    </form>
  </div>

</body>
</html>