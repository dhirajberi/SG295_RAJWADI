<?php
  session_start();
?>

<?php
  include_once 'dbh.inc.php';
?>

<?php
  if(isset($_POST['submit']))
  {
    $adhar_number = $_POST['adhar_number'];
    $sql = "SELECT * FROM adhar_data WHERE adhar=$adhar_number;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
	  if($resultCheck > 0)
	  {
	  	while($row=mysqli_fetch_assoc($result))
	  	{
        $name = $row['name'];
        $phone =  '91'.$row['phone'];
        $adhar =  $row['adhar'];
        $salary =  $row['salary'];
        $address = $row['address'];
        $email =  $row['email'];
        $age =  $row['age'];
        $sex = $row['sex'];

        $_SESSION['name']=$name;
        $_SESSION['phone']=$phone;
        $_SESSION['adhar']=$adhar;
        $_SESSION['salary']=$salary;
        $_SESSION['address']=$address;
        $_SESSION['email']=$email;
        $_SESSION['age']=$age;
        $_SESSION['sex']=$sex;
      }
      $otp = mt_rand(100000,999999); 
      $_SESSION['otp']=$otp;

      $url = 'https://api.msg91.com/api/v5/otp?authkey=337066Ae96CRHMsaE5f1ebecaP1&template_id=5f1edaccd6fc05764a433681&extra_param={"OTP":"'.$otp.'"}&mobile='.$phone.'&invisible=1&otp=OTP';
      file_get_contents($url);
      header("Location: otp.php");

      //header("Location: scheme.php");  //For testing only.
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
  
  <title>Login Page | Govt. of Sikkim</title>
</head>

<body>
  <!-- Header -->
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light .bg-white">
  <a class="navbar-brand" href="#"><img src="ne1.png"></a>
  <a class="navbar-brand" href="#"><img src="rsz_nf.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
</div>

  <!-- Header ends -->
  <!-- Slider -->
<div class="container">
  <img src="uh.jpeg" class="d-block w-100 mb-4" alt="...">
</div>
<!-- Slider ends -->

  <div class="container my-4">
  <form class="form-signin" method="POST">
    <center><img class="mb-4" src="govtlogo.png" alt="" width="150" height="150">
    <h1 class="h2 mb-3 font-weight-normal">GOVERNMENT OF SIKKIM</h1>
    <h1 class="h4 mb-3 font-weight-normal">RURAL DEVELOPMENT DEPARTMENT</h1>
    <label for="AdharNumber" class="sr-only">Adhar Number</label>
    <input type="number" name="adhar_number" id="AdharNumber" class="form-control" placeholder="Enter Adhar Number" required autofocus><br>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
  </form>
</div>

  <div class="container my-4">
<footer class="blog-footer">
      <p>Copyright © 2020 Department of Information and Technology, Government of Sikkim.</p>
</footer>
</div>
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
  <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="verification.js"></script>
</body>

</html>