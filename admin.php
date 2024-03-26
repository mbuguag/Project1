<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mwananchi App</title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="main.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
  <nabar class="teacher-navbar">
    <div class="top-nav">
      <div class="avatar-holder">
        <img src="../../images/yellow_grt.jpg" alt="profile image" />
      </div>
      <div class="avatar-name">
        <p>Marcos</p>
      </div>
    </div>
    <div class="other-navbars">
      <div class="icons-holder">
        <a href="database.php" class="icon-item home-item">
          <div class="nav-icon">
            <i class="bx bx-home-circle"></i>
          </div>
          <div class="nav-name active">Database</div>
        </a>
        <a href="Accounts.php" class="icon-item">
          <div class="nav-icon">
            <i class="bx bx-book-open"></i>
          </div>
          <div class="nav-name">Accounts</div>
        </a>

               <a href="Loans.php" class="icon-item">
          <div class="nav-icon">
            <i class="bx bx-book-open"></i>
          </div>
          <div class="nav-name">Loans</div>
        </a>

        <a href="Assetfinance.php" class="icon-item">
          <div class="nav-icon">
            <i class="bx bx-book-open"></i>
          </div>
          <div class="nav-name">Assetfinance</div>
        </a>

        <a href="banks.php" class="icon-item">
          <div class="nav-icon">
            <i class="bx bx-list-ul"></i>
          </div>
          <div class="nav-name">Banks</div>
        </a>

      </div>
    </div>
  </nabar>
  <!-- Header -->
  <header class="teacher-header">
    <div class="header-items">
      <button class="header-btn"><a href="../../index.php">Home Main</a></button>
      <button class="header-btn"><a href="../logout.php">Logout</a></button>
    </div>
  </header>
</body>
<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>

</html>