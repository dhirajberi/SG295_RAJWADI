<?php
  session_start();
  if ( ! isset($_SESSION['name']) ) 
  {
	header("Location: login.php");
  }
  $name = $_SESSION['name'];
?>

<?php
  include_once 'dbh.inc.php';
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

    <title>All Schemes | Govt. of Sikkim</title>
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
        <h1>All Schemes</h1>
        <p>Welcome <?php echo $name?> | <a href="eligible-scheme.php">Eligible Schemes</a> | <a href="logout.php">Logout</a> </p>
    </div>

    <div class="container my-4">
    <table class="table table-dark">
        <thead class="thead-dark">
        <tr>
            <th>Department</th>
            <th>Schemes</th>
        </tr>
        </thead>
    <?php
	$sql = "SELECT * FROM scheme_data;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
            echo "<tr><td>".$row['department']."</td><td><a href='".$row['link']."'>".$row['title']."</a></td></tr>";            
		}
	}
    ?>
    </table>
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
</body>

</html>