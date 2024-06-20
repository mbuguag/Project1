<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="rstyle.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">

</head>
<body>
  <?php 
  session_start();
  include("config.php");

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['submit'])){
      
      $email =mysqli_real_escape_string($con, $_POST['email']);
      $password =mysqli_real_escape_string($con, $_POST['Password']);

    

      $stmt = $con-> prepare("SELECT * FROM Users WHERE Email = ? ") or die("Query failed");
      $stmt -> bind_param("s", $email);
      $stmt -> execute();
      $validate_user = $stmt -> get_result();

      if ($validate_user->num_rows !==0){
        $row = $validate_user -> fetch_assoc();
        $hashed_password = $row['Password'];

        if(password_verify($password, $hashed_password)){
          if($row['UserType']== 'admin'){
            $_SESSION['username'] = $row['UserName'];
            header("location:admin.php");
            exit;

          } 
          if($row['UserType']== 'User'){
            $_SESSION['username'] = $row['UserName'];
            header("location:index.php");
            exit;
        }
        


      }else{
        echo"<div class='message'><p> Invalid User Details</p></div>";
      }
     
    }else{echo"<div class='message'><p> User Not Registered</p></div>";}
  }
}
  else{
  ?>

  <form action="" method="post">
  <ion-icon name="person-circle-outline"></ion-icon>  <div class="fcontent">
    <input type="email" name="email" id="email" placeholder="Email" >
    <input type="Password" name="Password" id="Password" placeholder ="Password" Required="">
  </div>
  <button name="submit">Submit</button>
  <div class="credentials">
  <p onClick="redirectToRegister()">Sign up</p>
  <p>Forgot Password</p>
  </div>
</form>


<?php } ?>
</body>
<script> 
function redirectToRegister(){
  window.location.href="register.php";
}
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>