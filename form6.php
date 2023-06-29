<!-- Sixth Page of the form, Mental-Health domain questions, Store Physical-Health
info in database, and redirect to Diversity & Inclusion domain -->



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

    $q5 = (($q1*25)+($q2*40)+($q3*15)+($q4*20))/5;


    $sql = "INSERT INTO `physical_health` (`q1`, `q2`, `q3`, `q4`, `q5`) VALUES ('$q1', '$q2', '$q3', '$q4', '$q5');";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("Error! Sorry, we encountered some problem while storing data");;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sixth Page</title>

    <style>
        body{
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Phase 5: Mental-Health<hr><br></h1>
    <div class="container">
        <form id="form6" action="/prog/form7.php" method="post">
        <div class="form-control">
                <label for="q1" id="q1">On the given scale, How stressed do you feel on an average school day?</label><br>

                <input type="radio" id="5" name="q1" value="1">
                <label for="5">5</label>
                <input type="radio" id="4" name="q1" value="2">
                <label for="4">4</label>
                <input type="radio" id="3" name="q1" value="3">
                <label for="3">3</label>
                <input type="radio" id="2" name="q1" value="4">
                <label for="2">2</label>
                <input type="radio" id="1" name="q1" value="5">
                <label for="1">1</label><br><br>
            </div>
            <div class="form-control">
                <label for="q2" id="q2">How often do you feel overwhelmed with the academic workload?</label><br>

                <input type="radio" id="52" name="q2" value="1">
                <label for="52">Very often</label>
                <input type="radio" id="42" name="q2" value="2">
                <label for="42">Often</label>
                <input type="radio" id="32" name="q2" value="3">
                <label for="32">Neutral</label>
                <input type="radio" id="22" name="q2" value="4">
                <label for="22">Sometimes</label>
                <input type="radio" id="12" name="q2" value="5">
                <label for="12">Rarely</label><br><br>
            </div>
            <div class="form-control">
                <label for="q3" id="q3">How comfortable do you feel discussing mental health with your teachers or professors?</label><br>

                <input type="radio" id="53" name="q3" value="5">
                <label for="53">Very comfortable</label>
                <input type="radio" id="43" name="q3" value="4">
                <label for="43">Somewhat comfortable</label>
                <input type="radio" id="33" name="q3" value="3">
                <label for="33">Neutral</label>
                <input type="radio" id="23" name="q3" value="2">
                <label for="23">Somewhat uncomfortable</label>
                <input type="radio" id="13" name="q3" value="1">
                <label for="13">Very uncomfortable</label><br><br>
            </div>
            <div class="form-control">
                <label for="q4" id="q4">How would you rate your overall mental health during the current academic year?</label><br>

                <input type="radio" id="54" name="q4" value="5">
                <label for="54">Excellent</label>
                <input type="radio" id="44" name="q4" value="4">
                <label for="44">Very Good</label>
                <input type="radio" id="34" name="q4" value="3">
                <label for="34">Good</label>
                <input type="radio" id="24" name="q4" value="2">
                <label for="24">Fair</label>
                <input type="radio" id="14" name="q4" value="1">
                <label for="14">Poor</label><br><br>
            </div>
            <button type="submit" value="submit">Submit</button>
        </form>
    </div>
    
    <script>
        document.getElementById("form6").addEventListener("submit", function(event) {
            var radios = document.querySelectorAll('input[type=radio]:checked');
            if (radios.length < 4) {
                alert("Please answer all questions");
                event.preventDefault();
            }
        });
    </script>

</body>
</html>