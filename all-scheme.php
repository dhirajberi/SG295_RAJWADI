<?php
  session_start();
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

    <style>
        html,
        body {
            height: 100%;
            background-image: url(tiranga.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

    <title>All Schemes | Govt. of Sikkim</title>
</head>

<body>
    <div class="container my-4">
        <h1>All Schemes</h1>
        <p>Welcome <?php echo $name?> | <a href="eligible-scheme.php">Eligible Schemes</a> | <a href="logout.php">Logout</a> </p>
    </div>

    <div class="container my-4">
    <table class="table table-dark">
        <thead class="thead-dark">
        <tr>
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
            echo "<tr><td>".$row['scheme']."</td></tr>";            
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