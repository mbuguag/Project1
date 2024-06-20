<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php 
  include('admin.php');
  include('config.php'); 

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['action'] == 'Add Bank'){
      $bank_name = mysqli_real_escape_string($con, $_POST['bank_name']);
      $website = mysqli_real_escape_string($con, $_POST['Website']);
      $bank_logo = mysqli_real_escape_string($con, $_POST['Logo']);
      $history = mysqli_real_escape_string($con, $_POST['History']);
      $contact = mysqli_real_escape_string($con, $_POST['Contact_Info']);

      $stmt = $con-> prepare("SELECT * FROM banks WHERE BankName = ? ") or die("Query failed");
      $stmt -> bind_param("s", $bank_name);
      $stmt -> execute();
      $validate_bank = $stmt -> get_result();

      if ($validate_bank->num_rows !==0){
        echo"<div class='message'><p> Bank record already exists</p>
        <a href = 'javascript:self.history.back()'><button>Go back</button></a></div>";
      }
      else {
        mysqli_query($con,"INSERT INTO banks(BankName, Website, Logo, History, ContactInfo) VALUES ('$bank_name','$website','$bank_logo','$history','$contact')") or die("Query failed");
        echo"<div class='message'><p> Bank recorded successfully</p>
        <a href = 'banks.php'><button>Login</button></a></div>";
      }
    }
  }
  ?>
  <main class="main">
    <div class="main-content-holder">
      <h1 style="text-align: center;">Banks</h1>
      <form action="" method="post">
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