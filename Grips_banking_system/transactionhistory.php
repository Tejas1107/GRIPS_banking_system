<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css" type="text/css">
      <link rel="stylesheet" href="css/table.css" type="text/css">
    <title>Banking System</title>
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



        <div class="container">
            <h1 class="text-center pt-4" style="text-decoration: underline;color:#0a6ea8;">Transaction History</h1>

            <br>
            <div class="table-responsive-sm">
                <table class="table table-hover table-striped table-condensed table-bordered">
                    <thead style="color: black;">
                        <tr>
                            <th class="text-center">S.No</S></th>
                            <th class="text-center">Sender</th>
                            <th class="text-center">Receiver</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Date & Time</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include 'config.php';

                        $sql = "SELECT * FROM `transaction`";
                        $query = mysqli_query($conn, $sql);

                        while ($rows = mysqli_fetch_assoc($query)) {

                        ?>

                            <tr style="color: black;">
                                <td class="py-2"><?php echo $rows['sno']; ?></td>
                                <td class="py-2"><?php echo $rows['sender']; ?></td>
                                <td class="py-2"><?php echo $rows['receiver']; ?></td>
                                <td class="py-2"><?php echo $rows['balance']; ?></td>
                                <td class="py-2"><?php echo $rows['datetime']; ?></td>

                            </tr>

                        <?php
                        }

                        ?>

                    </tbody>


                </table>

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
