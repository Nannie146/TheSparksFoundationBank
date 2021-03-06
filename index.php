<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>TSF Bank</title>
  <link rel="shortcut icon" href="images/bank.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav  class="navbar navbar-expand-lg navbar-dark  sticky-top" style="background-color: #3db2d9;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">

        <img src="images/bank.jpg" alt="logo" style="width:40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" index.php ">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services"> Services</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- End Navbar -->

   <!-- Home -->
   <section class="topContent">
    <div class="mainHeading">
      <div>
        <span class="main-content" style="font-size: 50px; color:#3db2d9">The Sparks Foundation Bank</span>
      </div>
      <div style="margin-top: 12px;">
        <span class="sub-content">The Sparks Foundation Bank helps users to make transactions around the world.</span>
      </div>
      <br>
      <a href="#services"class="btn btn-lg btn-outline-light" style="background-color: #3db2d9; color:#ffffff;">Get Started</a>
    </div>
    <div class="topContentImg">
      <img src="images/Bank.jpg" alt="Banking">
    </div>
  </section>
  <!-- End Home -->

  <!-- About -->
  <section id="about" class="container">
    <h2 class="heading" style="font-size:50px;color:#ffffff">About Us</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <img class=" mt-3 " style="width:400px;" src="images/transfer.jpg" alt="TSF Bank">
        </div>
        <div class="col-md-6 mx-auto mt-4">
          <div>
            <span class="text" style="font-size:30px;color:#3db2d9">The Sparks Foundation Bank</span>
          </div>
          <div class="mt-2">
            <span class="sub-content" style="font-size:20px">It is a Basic Banking System for making transactions between users.
              With the help of our bank, users can perform transactions in an easy and quick way. Users can transfer money from any part of the world.</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About -->

  <!-- Services -->
  <section class="container" id="services">
    <h2 class="heading" style="font-size:50px; color:#3db2d9">Our Services</h2>

    <div class="container  text-center">
      <div class="row">
        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="images/customer.svg" class="card-img-top mt-3 img" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title">View Customers</h5>
            <p class="card-text">View all Customer's data</p>
            <a href="transfermoney.php"  class="btn btn-outline-light" style="background-color: #3db2d9; color:#ffffff;"">View Customers</a>
          </div>
        </div>

        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="images/magnifier.svg" class="card-img-top mt-3 img" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title">View Transactions</h5>
            <p class="card-text">View all the past transactions happened between different accounts</p>
            <a href="transactionhistory.php" class="btn btn-outline-light" style="background-color: #3db2d9; color:#ffffff;">View Transactions</a>
          </div>
        </div>

        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="images/transfer.svg" class="card-img-top mt-3 img" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title" id="harry">Transfer Money</h5>
            <p class="card-text"> Transfer Money between multiple accounts</p>
            <a href="transfermoney.php" class="btn btn-outline-light" style="background-color: #3db2d9; color:#ffffff;">Transfer Money</a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Services -->

  
  <!-- Footer -->
  <footer style="background-color:#3db2d9">
    <div class="follow">
      <h3 style="color: black; font-family: 'Baloo Bhai 2', cursive; font-size: 25px;">Follow Us</h3>
      <div class="social">
        <a href="https://www.facebook.com/thesparksfoundation.info/" class="facebook">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="https://twitter.com/tsfsingapore?lang=en" class="twitter">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="https://www.linkedin.com/company/the-sparks-foundation/" class="linkedin">
          <i class="fa fa-linkedin"></i>
        </a>
        <a href="https://www.instagram.com/thesparksfoundation.info/?hl=en" class="instagram">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <p class="text-copy">
      Copyright &copy; 2021 All rights reserved
    </p>
  </footer>
  <!-- End Footer -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
