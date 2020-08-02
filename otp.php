<?php
  session_start();
  $otp = $_SESSION['otp'];
?>

<?php
  if(isset($_POST['submit']))
  {
    $otp_user = $_POST['otp_user'];
    if($otp_user == $otp)
    {
      header("Location: scheme.php");
    }
    else
    {
      header("Location: login.php");
    }
  }
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="style.css">
  
  <title>OTP Verification | Govt. of Sikkim</title>
</head>

<body>
  <form class="form-signin" method="POST">
    <center><img class="mb-4" src="govtlogo.png" alt="govtlogo" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Govt. of Sikkim</h1></center>
    <label for="otp" class="sr-only">OTP</label>
    <input type="text" name="otp_user" id="otp" class="form-control" placeholder="Enter OTP" required autofocus><br>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Verify</button>
  </form>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>

</html>


