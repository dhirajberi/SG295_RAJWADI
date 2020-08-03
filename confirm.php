<?php
  session_start();
  if ( ! isset($_SESSION['name']) ) 
  {
	header("Location: login.php");
  }
  $name = $_SESSION['name'];
  $phone = $_SESSION['phone'];
  $adhar = $_SESSION['adhar'];
  $salary = $_SESSION['salary'];
  $address = $_SESSION['address'];
  $email = $_SESSION['email'];
  $age = $_SESSION['age'];
  $sex = $_SESSION['sex'];
?>

<?php
  include_once 'dbh.inc.php';
?>

<?php
if (isset($_REQUEST['id']))
{
    $id = htmlentities($_REQUEST['id']);
    $sql = "SELECT scheme FROM scheme_data WHERE id=$id;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
	if($resultCheck > 0)
	{
	    while($row=mysqli_fetch_assoc($result))
	    {
            $scheme = $row['scheme'];
        }
    }
}
?>

<?php
    if(isset($_POST['submit']))
    {
        $sql = "INSERT INTO govt_data(name, phone, email, adhar, salary, address, age, sex, scheme) VALUES ('$name', '$phone', '$email', '$adhar', '$salary', '$address', '$age', '$sex', '$scheme');";
        $result = mysqli_query($conn, $sql);

        $url = 'https://api.msg91.com/api/v5/otp?authkey=337066Ae96CRHMsaE5f1ebecaP1&template_id=5f23ae07d6fc052b4b688ece&extra_param={"NAME":"'.$name.'", "SCHEME":"'.$scheme.'", "OTP": "207426"}&mobile='.$phone.'';
      file_get_contents($url);
      header("Location: congrats.php");
    }
?>

<?php
    if(isset($_POST['rid']))
    {
        $r_id = $_POST['r_id'];
        if($r_id == '122902005427746001')
        {
            echo '<div class="container my-4">';        
            echo "Ration ID is matched with Aadhar card.";
            echo '</div>';
        }
        else
        {
            echo '<div class="container my-4">';        
            echo "Ration ID not matched with Aadhar card.";
            echo '</div>';
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
  
  <title>Confirm | Govt. of Sikkim</title>
</head>

<body>
    <div class="container my-4">
    <h1>Confirm your Details: </h1>
    </div>

    <div class="container my-4">
    <table class="table table-dark">
    <?php
       echo "<tr><td>Name</td><td>$name</td><tr>";
       echo "<tr><td>Phone</td><td>$phone</td><tr>";
       echo "<tr><td>Email</td><td>$email</td><tr>";
       echo "<tr><td>Adhar Number</td><td>$adhar</td><tr>";
       echo "<tr><td>Salary</td><td>$salary</td><tr>";
       echo "<tr><td>Address</td><td>$address</td><tr>";
       echo "<tr><td>Age</td><td>$age</td><tr>";
       echo "<tr><td>Sex</td><td>$sex</td><tr>";
       echo "<tr><td>Scheme</td><td>$scheme</td><tr>";
    ?>
    </table>
    </div>

    <div class="container my-4">
        <form action="">
            <input class="btn btn-primary" type="file" id="myFile" name="filename">
        </form>
    </div>

    <div class="container my-4">
        <form method="POST">
            <input type="text" name="r_id" placeholder="Enter Ration ID">
            <button class="btn btn-primary" type="submit" name="rid">CONFIRM</button>    
        </form>
    </div>

    <div class="container my-4">
        <form method="POST">
            <button class="btn btn-primary" type="submit" name="submit">CONFIRM</button>
            <a class="btn btn-danger" href="eligible-scheme.php" role="button">CANCEL</a>
        </form>
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

