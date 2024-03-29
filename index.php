<?php
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <title>MWANANCHI APP</title>
    
</head>
<body>
   <!--sidebar-->
   <div class="sidebar">
        <div class="logo"><h1>Mwana<span>nchi</span></h1></div>
        <div class="menu">
        <a href="#" class="active" ><ion-icon name="home"></ion-icon>Home</a>
        <a href="bank.php"><ion-icon name="business"></ion-icon>Banks</a>
        <a href="compare.php"><ion-icon name="git-compare"></ion-icon>Compare</a>
        <a href="contacts.php"><ion-icon name="mail"></ion-icon>Contact Us</a>
        </div>

        <div class="profile">
            <img class="profile-img" src="img/user.png" alt="user">
            <div class="profile-name">
                <h4><?php echo $_SESSION['username'];?></h4>
                <button class="logout-btn" onClick="RedirectLogout()">logout</button>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
    
   <!--Main-->
   <div class="main-index">
    <ion-icon class="menu-bar" name="menu"></ion-icon>
    <div class="hero">
        <h1>Mwananchi</h1>
        <h3> Consulting Agency</h3>
        <p> By holding extensive bank and service information,Mwananchi Bank Consulting 
            agency effectively guide individuals, businesses, and organizations in finding the
            most suitable banking solutions for their needs. 
        </p>
    </div>

    <button onclick="redirectToBank()" class="btn-bank">Search Bank details</button>
   </div>
   <!--End Main-->


</body>
<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script src="app.js"></script>
<script>
    function redirectToBank() {
      window.location.href = 'bank.html';
    }
   
    function RedirectLogout() {
      window.location.href = 'login.php';
    }
    
    </script>
    
</html>