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
        <a href="index.php" ><ion-icon name="home"></ion-icon>Home</a>
        <a href="bank.php"><ion-icon name="business"></ion-icon>Banks</a>
        <a href="compare.php"><ion-icon name="git-compare"></ion-icon>Compare</a>
        <a href="#" class="active"><ion-icon name="mail"></ion-icon>Contact Us</a>
        </div>

        <div class="profile">
            <img class="profile-img" src="img/user.png" alt="user">
            <div class="profile-name">
                <h4>Joseph Mbugua</h4>
                <button class="logout-btn">logout</button>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
    
   <!--Main-->
   <div class="main-contacts">
    <ion-icon class="menu-bar" name="menu"></ion-icon>
    <div class="c-form">
        <h2>Contact Form</h2>
        <form class="f-details">
            <div class="f-input">
                <input type="text" class="f-content" placeholder="Name">
                <input type="email" class="f-content" placeholder="Email">
                <input type="number" class="f-content" placeholder="Phone Number">
                <input type="text" class="f-content" placeholder="Subject">
            </div>
            <textarea rows="6" name="message" class="f-content" placeholder="Message"></textarea>
    
          <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>
      <div class="c-dtls">
        <div class="location">
            <ion-icon name="pin"></ion-icon>
            <p>Nairobi, Kenya</p>
        </div>
        
        <div class="mail">
            <ion-icon name="mail"></ion-icon>
            <p>info@mwananchi.com</p>
        </div>

        <div class="phone">
            <ion-icon name="call"></ion-icon>
            <p>+254 712 345 678</p>
        </div>
      </div>
    
</div>
<!--End Main-->

<div class="c-detail">
    
</div>

</body>
<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script src="app.js"></script>
</html>