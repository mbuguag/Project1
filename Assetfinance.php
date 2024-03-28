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
    if ($_POST['action'] == 'Add Assetfinance') {
      $BankID = mysqli_real_escape_string($con, $_POST['bank']);
      $Asset_Type = mysqli_real_escape_string($con, $_POST['Asset_Type']);
      $Loan_Amount_Min = mysqli_real_escape_string($con, $_POST['Loan_Amount_Min']);
      $Loan_Amount_Max = mysqli_real_escape_string($con, $_POST['Loan_Amount_Max']);
      // $Eligibility_Criteria = mysqli_real_escape_string($con, $_POST['Eligibility_Criteria']);
      $Loan_Details = mysqli_real_escape_string($con, $_POST['Loan_Details']);


      mysqli_query($con, "INSERT INTO assetfinancing(BankID, AssetType, LoanAmountMin, LoanAmountMax,  LoanDetails) VALUES ('$BankID','$Asset_Type', '$Loan_Amount_Min', '$Loan_Amount_Max', '$Loan_Details')") or die("Query failed");
    }
  }
  ?>
  <main class="main">
    <div class="main-content-holder">
      <h1 style="text-align: center;">Assetfinance</h1>
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
          <label for="" class="form-label">Asset Type</label>
          <input type="text" class="form-control" name="Asset_Type">
        </div> <div class="mb-3">
          <label for="" class="form-label">Loan Amount Min</label>
          <input type="text" class="form-control" name="Loan_Amount_Min">
        </div> <div class="mb-3">
          <label for="" class="form-label">Loan Amount Max</label>
          <input type="text" class="form-control" name="Loan_Amount_Max">
        </div> <div class="mb-3">
          <label for="" class="form-label">Eligibility Criteria</label>
          <input type="text" class="form-control" name="Eligibity_Criteria">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Loan Details</label>
          <input type="text" class="form-control" name="Loan_Details">
        </div>
        <input type="submit" name="action" class="btn btn-primary" value="Add Assetfinance">
      </form>
    </div>
  </main>
</body>

</html>