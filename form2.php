<!-- Second Page of the form, Academics domain questions, Store 
basic_info in database, and redirect to Social-Life domain -->


<?php
require 'partials/_dbconnect.php';

$name = $_POST['name'];
// echo $name.'<br>';
$email = $_POST['email'];
// echo $email.'<br>';
$roll = $_POST['roll'];
// echo $roll.'<br>';
$year = $_POST['year'];
// echo $year.'<br>';
$div = $_POST['div'];
// echo $div.'<br>';
$dep = $_POST['department'];
// echo $department.'<br>';
$gen = $_POST['gender'];

$sql = "INSERT INTO `basic_info` (`Name`, `Gender`, `Email`, `Roll_No`, `department`, `Year`, `Division`) VALUES ('$name', '$gen', '$email', '$roll', '$dep', '$year', '$div')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error! Sorry, we encountered some problem while storing data");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Page</title>

    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Phase 1: Academics<hr><br></h1>
    <div class="container">
        <form id="form2" action="/prog/form3.php" method="post">
            <div class="form-control">
                <label for="q1" id="q1">How satisfied are you with your overall academic performance?</label><br>

                <input type="radio" id="51" name="q1" value="5">
                <label for="51">Very satisfied</label>
                <input type="radio" id="41" name="q1" value="4">
                <label for="41">Somewhat</label>
                <input type="radio" id="31" name="q1" value="3">
                <label for="31">Not sure</label>
                <input type="radio" id="21" name="q1" value="2">
                <label for="21">Not much</label>
                <input type="radio" id="11" name="q1" value="1">
                <label for="11">Not at all</label><br><br>
            </div>
            <div class="form-control">
                <label for="q2" id="q2">How anxious do you feel about examinations?</label><br>

                <input type="radio" id="12" name="q2" value="1">
                <label for="12">Alot</label>
                <input type="radio" id="22" name="q2" value="2">
                <label for="22">Somewhat</label>
                <input type="radio" id="32" name="q2" value="3">
                <label for="32">Not sure</label>
                <input type="radio" id="42" name="q2" value="4">
                <label for="42">Not much</label>
                <input type="radio" id="52" name="q2" value="5">
                <label for="52">Not at all</label><br><br>
            </div>
            <div class="form-control">
                <label for="q3" id="q3">How well do you feel the faculty and staff support you in your academic pursuits?</label><br>

                <input type="radio" id="53" name="q3" value="5">
                <label for="53">Alot</label>
                <input type="radio" id="43" name="q3" value="4">
                <label for="43">Somewhat</label>
                <input type="radio" id="33" name="q3" value="3">
                <label for="33">Not sure</label>
                <input type="radio" id="23" name="q3" value="2">
                <label for="23">Not much</label>
                <input type="radio" id="13" name="q3" value="1">
                <label for="13">Not at all</label><br><br>
            </div>
            <div class="form-control">
                <label for="q4" id="q4">To what extent do you feel that the courses you have taken here have helped you to achieve your academic goals?</label><br>

                <input type="radio" id="54" name="q4" value="5">
                <label for="54">Alot</label>
                <input type="radio" id="44" name="q4" value="4">
                <label for="44">Somewhat</label>
                <input type="radio" id="34" name="q4" value="3">
                <label for="34">Not sure</label>
                <input type="radio" id="24" name="q4" value="2">
                <label for="24">Not much</label>
                <input type="radio" id="14" name="q4" value="1">
                <label for="14">Not at all</label><br><br>
            </div>
            <button type="submit" value="submit">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById("form2").addEventListener("submit", function(event) {
            var radios = document.querySelectorAll('input[type=radio]:checked');
            if (radios.length < 4) {
                alert("Please answer all questions");
                event.preventDefault();
            }
        });
    </script>


</body>

</html>