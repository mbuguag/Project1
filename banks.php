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
      <h1 style="text-align: center;">Banks</h1>
      <form action="../../controllers/bank/bank_proc.php" method="post">
        <div class="mb-3">
          <label for="" class="form-label">Bank Name</label>
          <input type="text" class="form-control" name="bank_name">
        </div> <div class="mb-3">
          <label for="" class="form-label">website</label>
          <input type="text" class="form-control" name="Website">
        </div> <div class="mb-3">
          <label for="" class="form-label">Logo</label>
          <input type="text" class="form-control" name="Logo">
        </div> <div class="mb-3">
          <label for="" class="form-label">History</label>
          <input type="text" class="form-control" name="History">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Contact Info</label>
          <input type="text" class="form-control" name="Contact_Info">
        </div>
        <input type="submit" name="action" class="btn btn-primary" value="Add Bank">
      </form>
    </div>
  </main>
</body>

</html>