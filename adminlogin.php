<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
</head>
<style>
    body {
        text-align: center;
    }
</style>

<body>
    <div class="card">
        <h2>Enter valid login details</h2>
        <form method="POST" action="">
            <label>Username:</label>
            <input type="text" name="username"><br><br>
            <label>Password:</label>
            <input type="password" name="password"><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

    <script>
        function redirectToDashboard() {
            window.location.href = "/Prog/Landing_Pages/dashboard.php";
            return false;
        }
    </script>

    <?php
    // database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "happiness_index";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // check if form is submitted
    if (isset($_POST['submit'])) {

        // get form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // check if username exists in database
        $sql = "SELECT * FROM admin WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // username exists, check if password is correct
            $row = $result->fetch_assoc();
            if ($row['password'] == $password) {
                // login successful, redirect to dashboard.php
                echo '<script>window.location.href = "/Prog/Landing_Pages/dashboard.php";</script>';
                exit();
            } else {
                // wrong password
                echo "<script>alert('Wrong password');</script>";
            }
        } else {
            // username does not exist
            echo "<script>alert('Username does not exist');</script>";
        }
    }

    $conn->close();
    ?>
</body>

</html>