<?php
 include('config.php'); 

?>
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
        <a href="#" class="active"><ion-icon name="business"></ion-icon>Banks</a>
        <a href="compare.php"><ion-icon name="git-compare"></ion-icon>Compare</a>
        <a href="contacts.php"><ion-icon name="mail"></ion-icon>Contact Us</a>
        </div>

        <div class="profile">
            <img class="profile-img" src="img/user.png" alt="user">
            <div class="profile-name">
                <h4>Joseph Mbugua</h4>
                <button class="logout-btn">logout</button>
            </div>
        </div>
    </div>
    
   <!--Main-->
   <div class="main-bank">
   <form action="" method="post">
    
        <div class="main-header">
             <ion-icon class="menu-bar" name="menu"></ion-icon>
             <div class="search">
                <button class="btn-search"><ion-icon name="search"></ion-icon></button>
                
                <select name="Select_banks" id="bank" onchange="updateloans()" class="select-sec"> 
                    <option value="">Select a bank.....</option>
                    <?php
                         $select_banks = mysqli_query($con, "SELECT * FROM banks");
                         while($bank_dtls = $select_banks-> fetch_assoc() ) {
                     ?>
                    <option value="<?php echo $bank_dtls ['BankName'] ?>"><?php echo $bank_dtls ['BankName'] ?></option>
                    <?php } ?>
                
                    <span class="btn-search">&#9660;</span>
                  </select>
                  <input type="hidden" name="BankID" value="<?php echo $bank_dtls ['BankID'] ?>">

            </div>
            </form>
        </div>
        <div class="wrapper">
            <div class="card">
                <div class="card-left">
                    <img src="img/loan.png" alt="loan">
                </div>
                <div class="card-center">
                    <h3>
                   
                    <select name="Select_loans" id="loans" class="select-sec">
                    <option value="">Select loan .....</option>
                    <?php
                     if(isset ($_POST['Select_Banks'])){
                        $BankID = $_POST['BankID'];
                         $select_loans = mysqli_query($con, "SELECT DISTINCT * FROM loans GROUP BY LoanType WHERE BankID = $BankID");
                         while($loan_dtls = $select_loans-> fetch_assoc() ) {
                     ?>
                    <option value="<?php echo $bank_dtls ['LoanType'] ?>"><?php echo $loan_dtls ['LoanType'] ?></option>
                    <?php } }?>

                        </h3>
                    </select>
                    <p class="card-detail">Repayment Period:<?php echo $bank_dtls ['RepaymentPeriod'] ?> </p>
                    
                    <div class="card-sub">
                        <p>I Bank Details</p>
                        <p>I Account details</p>
                        <p>I Guarantor</p>
                    </div>
                    <p class="card-detail">Requirements:<?php echo $bank_dtls ['EligibilityCriteria'] ?></p>

                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h3>Interest</h3>
                        <p>applicable</p>
                    </div>
                    <div class="card-amount">
                        <p><b><?php echo $bank_dtls ['InterestRate'] ?></b><span>/year</span></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-left blue-bg">
                    <img src="img/assets.png" alt="assets">
                </div>
                <div class="card-center">
                    <h3>Asset Financing</h3>
                    <p class="card-detail">Requirements</p>
                    <p class="card-loc">Must be a registered member</p>
                    <div class="card-sub">
                        <p>I Bank statement</p>
                        <p>I Account details</p>
                        <p>I Credit Report</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h3>Share</h3>
                        <p>Percentage</p>
                    </div>
                    <div class="card-amount">
                        <p><b>70%</b><span>/30%</span></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-left blue-bg">
                    <img src="img/registration.png" alt="reg">
                </div>
                <div class="card-center">
                    <h3>Member registration</h3>
                    <p class="card-detail">Requirements</p>
                    <p class="card-loc">Must be 18+ years</p>
                    <div class="card-sub">
                        <p>I KRA pin</p>
                        <p>I National ID</p>
                        <p>I Passport photo</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h3>Account</h3>
                        <p>opening deposit</p>
                    </div>
                    <div class="card-amount">
                        <p><b>1500</b><span>kes</span></p>
                    </div>
                </div>
            </div>
        </div>  
        <button onclick="redirectTocompare()" class="btn-compare">Compare</button>
  </div>


<!--Right Section-->
<div class="detail">
    <ion-icon class="close-detail" name="close"></ion-icon>
    <div class="detail-header">
        <img src="img/equity.png" alt="bank-logo">
        <h2>Equity Bank</h2>
        <p>Information</p>
    </div>
    <hr class="divider">
    <div class="detail-desc">
        <div class="about">
             <h4>About Bank</h4>
            <p>
                Equity Bank is a large commercial bank based in Kenya. 
                It was founded in 1984 and is one of the largest banks 
                in East and Central Africa by total assets and customer base. 
                
                
                
            </p>
    </div>
    <hr class="divider">
    <div class="services">
        <h4>Services</h4>
        <ul>
            <li>Group Accounts</li>
            <li>Asset financing</li>
            <li>Shares</li>

        </ul>
    </div>
    </div>
    <hr class="divider">
    <div class="contacts-dtls">
        <b><p>I P.O. Box 123-456, Nairobi</p>
        <p>I info@equity.co.ke</p>
        <p>I +254 712 345 678</p></div></b>
    </div>
</div>


</body>
<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script src="app.js"></script>
<script>
    function redirectTocompare() {
        window.location.href='compare.html';
    }
    <script>
    function updateloans() {
            const BankSelect = document.getElementById('Bank');
            const LoanInput = document.getElementById('loans');
            // const quantityInput = document.getElementById('quantity');
            // const totalInput = document.getElementById('total');

            const selectedOption = BankSelect.options[BankSelect.selectedIndex];
            const loan = selectedOption.dataset.loans;

            loanInput.value = loans;

//             const quantity = quantityInput.value;
//             const total = price * quantity;

//             totalInput.value = total;
//         }
    </script>
</script>
</html>