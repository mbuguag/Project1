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
    if ($_POST['action'] == 'Add LOANS') {
      $BankID = mysqli_real_escape_string($con, $_POST['bank']);
      $Loan_Type = mysqli_real_escape_string($con, $_POST['Loan_Type']);
      $Interest_Rate = mysqli_real_escape_string($con, $_POST['Interest_Rate']);
      $Repayment_Period = mysqli_real_escape_string($con, $_POST['Repayment_Period']);
      $Eligibility_Criteria = mysqli_real_escape_string($con, $_POST['Eligibility_Criteria']);
      $Loan_Details = mysqli_real_escape_string($con, $_POST['Loan_Details']);


      mysqli_query($con, "INSERT INTO loans(BankID, LoanType, InterestRate, RepaymentPeriod, EligibilityCriteria, LoanDetails) VALUES ('$BankID','$Loan_Type', '$Interest_Rate', '$Repayment_Period','$Eligibility_Criteria', '$Loan_Details')") or die("Query failed");
    }
  }
  ?>
  <main class="main">
    <div class="main-content-holder">
      <h1 style="text-align: center;">Loans</h1>
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
          <label for="" class="form-label">Loan type</label>
          <input type="text" class="form-control" name="Loan_Type">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Interest Rate</label>
          <input type="text" class="form-control" name="Interest_Rate">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Repayment Period</label>
          <input type="text" class="form-control" name="Repayment_Period">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Eligibility Criteria</label>
          <input type="text" class="form-control" name="Eligibility_Criteria">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Loan Details</label>
          <input type="text" class="form-control" name="Loan_Details">
        </div>
        <input type="submit" name="action" class="btn btn-primary" value="Add LOANS">
      </form>
    </div>
  </main>
</body>

</html>