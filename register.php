<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration form</title>
  <link rel="stylesheet" href="lstyle.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">

</head>
<body>
  <?php 
  include("config.php");
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['submit'])){
      
      $username =mysqli_real_escape_string($con, $_POST['Username']);
      $email =mysqli_real_escape_string($con, $_POST['email']);
      $phone =mysqli_real_escape_string($con, $_POST['phone']);
      $Password =mysqli_real_escape_string($con, $_POST['Password']);
      $hashed_password = password_hash($Password, PASSWORD_DEFAULT);

      $stmt = $con-> prepare("SELECT * FROM Users WHERE Email = ? ") or die("Query failed");
      $stmt -> bind_param("s", $email);
      $stmt -> execute();
      $validate_user = $stmt -> get_result();

      if ($validate_user->num_rows !==0){
        echo"<div class='message'><p> User already exists</p>
        <a href = 'javascript:self.history.back()'><button>Go back</button></a></div>";
      }
      else {
        mysqli_query($con,"INSERT INTO Users(UserName, Email,Phone,Password) VALUES ('$username','$email','$phone','$hashed_password')") or die("Query failed");
        echo"<div class='message'><p> User registered successfully</p>
        <a href = 'login.php'><button>Login</button></a></div>";
      }
    }
  }
 
  else{
  ?>

  <form action="" method="post">
  <ion-icon name="person-circle-outline"></ion-icon>  <div class="fcontent">
  <input type="text" name="Username" id="User" placeholder ="Username" Required="">
  <input type="email" name="email" id="email" placeholder="Email" >
  <input type="tel" name="phone" id="phone" placeholder="phone number" >
  <input type="Password" name="Password" id="Password" placeholder ="Password" Required="">
  </div>
  <button name="submit">Submit</button>
  <div class="credentials">
  <p onClick="redirectToLogin()">Sign in</p>
  <p>Forgot Password</p>
  </div>
</form>


<?php } ?>
</body>
<script> 
function redirectToLogin(){
  window.location.href="login.php";
}
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>