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
        <a href="bank.php" name="business"></ion-icon>Banks</a>
        <a href="#" class="active"><ion-icon name="git-compare"></ion-icon>Compare</a>
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
   <div class="main-compare">
    <div class="col">
        <div class="main-header">
             <ion-icon class="menu-bar" name="menu"></ion-icon>
             <div class="search">
                <button class="btn-search"><ion-icon name="search"></ion-icon></button>
                <select>
                    <option value="">Select a bank.....</option>
                    <option value="option1">Cooperative</option>
                    <option value="option2">KCB</option>
                    <option value="option3" selected>Equity</option>
                    <option value="option3">ABSA</option>
                    <option value="option3">Family</option>
                
                    <span class="btn-search">&#9660;</span>
                  </select>
            </div>
        </div>
        <div class="wrapper">
            <div class="card">
                <div class="card-left blue-bg">
                    <img src="img/loan.png" alt="loan">
                </div>
                <div class="card-center">
                    <h3>Loan</h3>
                    <p class="card-detail">Requirements</p>
                    <p class="card-loc">Must be a registered member</p>
                    <div class="card-sub">
                        <p>I Bank statement</p>
                        <p>I Account details</p>
                        <p>I Guarantor</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h3>Interest</h3>
                        <p>applicable</p>
                    </div>
                    <div class="card-amount">
                        <p><b>6.0%</b><span>/year</span></p>
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
  </div>
  <hr class="divider-comp">
  <div class="col">
    <div class="main-header">
        
        <div class="search">
           <button class="btn-search"><ion-icon name="search"></ion-icon></button>
           <select>
               <option value="">Select a bank.....</option>
               <option value="option1">Cooperative</option>
               <option value="option2">KCB</option>
               <option value="option3" selected>Equity</option>
               <option value="option3">ABSA</option>
               <option value="option3">Family</option>
           
               <span class="btn-search">&#9660;</span>
             </select>
       </div>
   </div>
   <div class="wrapper">
       <div class="card">
           <div class="card-left blue-bg">
               <img src="img/loan.png" alt="loan">
           </div>
           <div class="card-center">
               <h3>Loan</h3>
               <p class="card-detail">Requirements</p>
               <p class="card-loc">Must be a registered member</p>
               <div class="card-sub">
                   <p>I Bank statement</p>
                   <p>I Account details</p>
                   <p>I Guarantor</p>
               </div>
           </div>
           <div class="card-right">
               <div class="card-tag">
                   <h3>Interest</h3>
                   <p>applicable</p>
               </div>
               <div class="card-amount">
                   <p><b>6.0%</b><span>/year</span></p>
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
</div>
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

</html>