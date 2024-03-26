<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php include('admin.php') ?>
  <main class="main">
    <div class="main-content-holder">
      <h1 style="text-align: center;">Loans</h1>
      <form action="../../controllers/bank/bank_proc.php" method="post">
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