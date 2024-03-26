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
      <h1 style="text-align: center;">Assetfinance</h1>
      <form action="../../controllers/bank/bank_proc.php" method="post">
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