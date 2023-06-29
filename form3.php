<!-- Third Page of the form, Social-Life domain questions, Store Academics
info in database, and redirect to Extracurricular Activities domain -->



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

    $q5 = (($q1*25)+($q2*25)+($q3*25)+($q4*25))/5;


    $sql = "INSERT INTO `academics` (`q1`, `q2`, `q3`, `q4`, `q5`) VALUES ('$q1', '$q2', '$q3', '$q4', '$q5');";
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
    <title>Third Page</title>

    <style>
        body{
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Phase 2: Social-Life<hr><br></h1>
    <div class="container">
        <form id="form3" action="/prog/form4.php" method="post">
            <div class="form-control">
                <label for="q1" id="q1">How comfortable are you in approaching your classmates or colleagues for help?</label><br>

                <input type="radio" id="51" name="q1" value="5">
                <label for="51">Alot</label>
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
                <label for="q2" id="q2">On the given scale, How much do you enjoy spending time with your classmates or colleagues outside of class/work?</label><br>

                <input type="radio" id="52" name="q2" value="5">
                <label for="52">5</label>
                <input type="radio" id="42" name="q2" value="4">
                <label for="42">4</label>
                <input type="radio" id="32" name="q2" value="3">
                <label for="32">3</label>
                <input type="radio" id="22" name="q2" value="2">
                <label for="22">2</label>
                <input type="radio" id="12" name="q2" value="1">
                <label for="12">1</label><br><br>
            </div>
            <div class="form-control">
                <label for="q3" id="q3">How supported do you feel by your classmates or colleagues when going through tough times?</label><br>

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
                <label for="q4" id="q4">How often do you participate in social events or gatherings organized by your school or workplace?</label><br>

                <input type="radio" id="54" name="q4" value="5">
                <label for="54">Very often</label>
                <input type="radio" id="44" name="q4" value="4">
                <label for="44">Often</label>
                <input type="radio" id="34" name="q4" value="3">
                <label for="34">Neutral</label>
                <input type="radio" id="24" name="q4" value="2">
                <label for="24">Sometimes</label>
                <input type="radio" id="14" name="q4" value="1">
                <label for="14">Rarely</label><br><br>
            </div>
            <button type="submit" value="submit">Submit</button>
        </form>
    </div>
    

    <script>
        document.getElementById("form3").addEventListener("submit", function(event) {
            var radios = document.querySelectorAll('input[type=radio]:checked');
            if (radios.length < 4) {
                alert("Please answer all questions");
                event.preventDefault();
            }
        });
    </script>

</body>
</html>