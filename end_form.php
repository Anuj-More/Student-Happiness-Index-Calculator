<!-- Twelfth and last Page of the form, Thankyou page, Store Financial Stability
info in database-->



<?php
    require 'partials/_dbconnect.php';

    $q1 = $_POST['q1'];
    // echo $q1.'<br>';
    $q2 = $_POST['q2'];
    // echo $q2.'<br>';
    $q3 = $_POST['q3'];
    // echo $q3.'<br>';
    $q4 = $_POST['q4'];
    // echo $q4.'<br>';

    $q5 = (($q1*25)+($q2*35)+($q3*25)+($q4*15))/5;


    $sql = "INSERT INTO `financial` (`q1`, `q2`, `q3`, `q4`, `q5`) VALUES ('$q1', '$q2', '$q3', '$q4', '$q5');";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("Error! Sorry, we encountered some problem while storing data");;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Results</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
			border-radius: 10px;
			text-align: center;
		}

		h1 {
			margin-top: 0;
			font-size: 36px;
			font-weight: bold;
			color: #333;
			text-align: center;
			margin-bottom: 30px;
		}

		.result {
			font-size: 24px;
			font-weight: bold;
			color: #333;
			margin-bottom: 30px;
		}

		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			font-size: 18px;
			font-weight: bold;
			text-decoration: none;
			border-radius: 5px;
			transition: background-color 0.3s ease;
		}

		.btn:hover {
			background-color: #555;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Thank You</h1>
		<a href="Home.html" class="btn">Return to Home</a>
	</div>
</body>
</html>