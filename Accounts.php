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
  $query = "SELECT * FROM banks";
  $stmt = $con->query( $query );
  if($stmt){
    $res = [];
    while($row = $stmt->fetch_object()){ 
      $res[] = $row;
    }
    $numRows = $stmt->num_rows;
  } else{
    echo "Error: " . $con->error;
  }
  if ($_SERVER['REQUEST_METHOD'] ==  'POST') {
    if ($_POST['action'] == 'Add Accounts') {
      $BankID = mysqli_real_escape_string($con, $_POST['bank']);
      $Account_Type = mysqli_real_escape_string($con, $_POST['Account_Type']);
      $Minimum_Balance = mysqli_real_escape_string($con, $_POST['Minimum_Type']);
      $Interest_Rate = mysqli_real_escape_string($con, $_POST['Interest_Rate']);
      $Account_Features = mysqli_real_escape_string($con, $_POST['Account_Features']);


      mysqli_query($con, "INSERT INTO accounts(BankID, AccountType, MinimumBalance, InterestRate, AccountFeatures) VALUES ('$BankID','$Account_Type','$Minimum_Balance','$Interest_Rate', '$Account_Features')") or die("Query failed");
    }
  }
  ?>
  <main class="main">
    <div class="main-content-holder">
      <h1 style="text-align: center;">Accounts</h1>
      <form action="" method="post">
        <div class="select_heads">
          <div class="left-select-head">
            <select name="bank" class="select-grade" id="grade">
              <option>Select Bank</option>
              <?php foreach ($res as $item) { ?>
                <option value="<?php echo $item->BankID ?>"><?php echo $item->BankName ?></option>
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