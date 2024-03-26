<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="view_attendance.css">
</head>

<body>
  <?php
  include('config.php');
  include('admin.php');
  try {
    $query = "SELECT * FROM banks";
    $data = mysqli_query($con, $query);
    print_r($data);
    return true;
  } catch (PDOException $e) {
    $error = $e->getMessage();
  }
  if ($_SERVER['REQUEST_METHOD'] ==  'POST') {
    if ($_POST['action'] == 'Add Accounts') {
      $Account_Type = mysqli_real_escape_string($con, $_POST['Account_Type']);
      $Minimum_Balance = mysqli_real_escape_string($con, $_POST['Minimum_Type']);
      $Interest_Rate = mysqli_real_escape_string($con, $_POST['Interest_Rate']);
      $Account_Features = mysqli_real_escape_string($con, $_POST['Account_Features']);


      mysqli_query($con, "INSERT INTO accounts(, Email,Phone,Password) VALUES ('$username','$email','$phone','$hashed_password')") or die("Query failed");
    }
  }
  ?>
  <main class="main">
    <div class="main-content-holder">
      <h1 style="text-align: center;">Accounts</h1>
      <form action="" method="post">
        <div class="select_heads">
          <div class="left-select-head">
            <select name="grade" class="select-grade" id="grade">
              <option>Select Bank</option>
              <?php foreach ($levels as $item) { ?>
                <option value="<?php echo $item->id ?>"><?php echo $item->level ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Account Type</label>
          <input type="text" class="form-control" name="Account_Type">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Minimum Balance</label>
          <input type="text" class="form-control" name="Minimum_Balance">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Interest Rate</label>
          <input type="text" class="form-control" name="Interest_Rate">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Account Features</label>
          <input type="text" class="form-control" name="Account_Features">
        </div>

        <input type="submit" name="action" class="btn btn-primary" value="Add Accounts">
      </form>
    </div>
  </main>
</body>

</html>