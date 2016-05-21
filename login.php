<?php session_start();

require_once("section/header.php");

 

if(isset($_POST["login"])){
$login=$_POST["login"];
$password=$_POST["password"];
$conn= new mysqli("localhost","root","","salon");
$sql="SELECT * FROM users2 WHERE login='$login' AND pass='$password'";

  $result=$conn->query($sql);
   if ($result->num_rows>0) {
       while ($row=$result->fetch_assoc()) {
        if ($row['id']=="1") {
        $_SESSION['login'] = $row['login'];
         $_SESSION['password'] = $row['pass'];
         header("Location: /salon/admin.php");  
        }
        else{
         $_SESSION['login'] = $row['login'];
         $_SESSION['password'] = $row['pass'];
         if ($login==null || $login=="" and $password==null || $password=="") {
          session_destroy();
          header("Location: /salon/login.php"); 
         }
         else{
         header("Location: /salon/index.php"); 
       }
        }
}
}
}
 ?>

    
  <div class="form" >
    <form  method="post">
      Login
      <input type="text" name="login"    placeholder="Введите логин" />
      <br>
      <br>
      Password<input type="password" name="password" placeholder="Пароль" />
      <br>
      <br>
      <input type="submit" value="Login">
       <a  href="register.php">Register</a></p>
    </form>
  </div>


</body>
</html>