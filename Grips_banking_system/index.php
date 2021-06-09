<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Banking System</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
  </head>
  <body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><strong>THE SPARKS BANK</strong></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item ">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="createuser.php">Create User</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="transfermoney.php">Transfer Money </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="transactionhistory.php">Transaction History</a>
    </li>
  </ul>
</div>
</nav>

<div class="container-fluid imgdiv">

  <img src="img/bank2.jpg" class="img-fluid"  alt="background-img" style="width:100%;" >

    <h4 style="color:#800080;background-color:#eeeeee;position:absolute;top:200px;left:120px;font-size:2.2em;text-decoration:underline;"><strong>WELCOME TO THE SPARKS BANK</strong></h4>
    <p style="color:#800080;background-color:#eeeeee;position:absolute;top:242px;left:120px;font-size:1.8em;">Your Perfect Banking Partner!</p>


</div>

<div class="container-fluid">
<div class="row text-center">
    <div class="col-md act">
      <h2>New User</h2>
      <br>
        <img src="img/user1.png" alt="userimg" class="img-fluid" id="icon-img">
        <br>
        <br>
        <a href="createuser.php"><button type="button" class="btn btn-primary">Create User</button></a>
    </div>

    <div class="col-md act">
      <h2>Transfer Money</h2>
      <br>
        <img src="img/money.png" alt="transferimg" class="img-fluid" id="icon-img">
        <br>
        <br>
        <a href="transfermoney.php"><button type="button" class="btn btn-primary">Transfer Money</button></a>
    </div>

    <div class="col-md act">
      <h2>Transaction History</h2>
      <br>
        <img src="img/history.png" alt="historyimg" class="img-fluid" id="icon-img">
        <br>
        <br>
        <a href="transactionhistory.php"><button type="button" class="btn btn-primary">Transaction History</button></a>
    </div>

</div>
</div>

<footer class="text-center mt-5 py-2">
    <p style="color: #800080;">&copy 2021. Made by <b>Tejas PV</b><br>GRIP TheSparksFoundation.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
