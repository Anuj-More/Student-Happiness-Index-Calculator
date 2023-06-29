<!-- Home Page, redirect to Academics domain and First Page 
of the form with navbar -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        body {
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .container h1 {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <?php
    // require 'partials/_navbar.php';
    ?>
    <div class="container">
        <h1>Survey Form<hr></h1><br>
        <form id="form" action="/prog/form2.php" method="post" onsubmit="return validateForm()">
            <div class="form">
                <label for="name" id="label-name">Name: </label>
                <input type="text" id="name" name="name" placeholder="Enter your name" />
            </div><br>
            <div class="form">
                <label for="gender" id="label-gender">Gender: </label>

                <input type="radio" id="m" name="gender" value="m">
                <label for="m">M</label>
                <input type="radio" id="f" name="gender" value="f">
                <label for="f">F</label>
            </div><br>
            <div class="form">
                <label for="email" id="label-email">Email: </label>
                <input type="email" id="email" name="email" placeholder="Enter your email" />
            </div><br>
            <div class="form">
                <label for="roll" id="label-roll">Roll Number: </label>
                <input type="text" id="roll" name="roll" placeholder="Enter your roll number" />
            </div><br>
            <div class="form">
                <label for="department" id="label-department">Department: </label>

                <input type="radio" id="CE" name="department" value="CE">
                <label for="CE">Computer Engineering</label>
                <input type="radio" id="IT" name="department" value="IT">
                <label for="IT">Information Technology</label>
                <input type="radio" id="IN" name="department" value="IN">
                <label for="IN">Instrumentation</label>
                <input type="radio" id="EXTC" name="department" value="EXTC">
                <label for="EXTC">Electronics & Telecommunication</label>
                <input type="radio" id="EC" name="department" value="EC">
                <label for="EC">Electronics & Computer</label>
            </div><br>
            <div class="form">
                <label for="Year" id="label-year">Year: </label>

                <input type="radio" id="first" name="year" value="1">
                <label for="first">1st</label>
                <input type="radio" id="second" name="year" value="2">
                <label for="second">2nd</label>
                <input type="radio" id="third" name="year" value="3">
                <label for="third">3rd</label>
                <input type="radio" id="fourth" name="year" value="4">
                <label for="fourth">4th</label>
            </div><br>
            <div class="form">
                <label for="div" id="label-div">Division: </label>
                <input type="text" id="div" name="div" placeholder="Enter your division" />
            </div><br>

            <button type="submit" value="submit">Submit</button>
        </form>
    </div>

    <script>
        function validateForm() {
            var name = document.forms["form"]["name"].value;
            var gender = document.forms["form"]["gender"].value;
            var email = document.forms["form"]["email"].value;
            var roll = document.forms["form"]["roll"].value;
            var department = document.forms["form"]["department"].value;
            var year = document.forms["form"]["year"].value;
            var div = document.forms["form"]["div"].value;

            if (name == "" || gender == "" || email == "" || roll == "" || department == "" || year == "" || div == "") {
                alert("Please fill out all fields");
                event.preventDefault();
                return false;
            }
        }
    </script>
</body>

</html>