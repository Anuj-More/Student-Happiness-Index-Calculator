<!-- academics -->
<?php
    include 'C:\xampp\htdocs\Prog\partials\_dbconnect.php';
    $sql = "SELECT `q5` FROM `academics` WHERE `aca_user_id` IN (SELECT Entry_No FROM basic_info WHERE `department` LIKE 'IN' AND gender = 'm');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    // echo "<pre>";
    // var_dump($test);
    // echo "</pre><br><br>";
    // Initialize sum variable to zero
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_m_avg_aca = $sum/$length;
    // echo $ovr_m_avg_aca."<br>";
?>
<!-- academics -->
<?php
    include 'C:\xampp\htdocs\Prog\partials\_dbconnect.php';
    $sql = "SELECT `q5` FROM `academics` WHERE `aca_user_id` IN (SELECT Entry_No FROM basic_info WHERE `department` LIKE 'IN' AND gender = 'f');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    // echo "<pre>";
    // var_dump($test);
    // echo "</pre><br><br>";
    // Initialize sum variable to zero
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_f_avg_aca = $sum/$length;
    // echo $ovr_f_avg_aca."<br>";
?>


<!-- social life -->
<?php
    $sql = "SELECT `q5` FROM `social_life` WHERE `soc_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'm');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_m_avg_soc = $sum/$length;
    // echo $ovr_m_avg_soc."<br>";
?>
<!-- social life -->
<?php
    $sql = "SELECT `q5` FROM `social_life` WHERE `soc_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'f');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_f_avg_soc = $sum/$length;
    // echo $ovr_f_avg_soc."<br>";
?>


<!-- extracurriculars -->
<?php
    $sql = "SELECT `q5` FROM `extracurriculars` WHERE `ext_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'm');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_m_avg_ext = $sum/$length;
    // echo $ovr_m_avg_ext."<br>";
?>
<!-- extracurriculars -->
<?php
    $sql = "SELECT `q5` FROM `extracurriculars` WHERE `ext_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'f');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_f_avg_ext = $sum/$length;
    // echo $ovr_f_avg_ext."<br>";
?>


<!-- physical health -->
<?php
    $sql = "SELECT `q5` FROM `physical_health` WHERE `phy_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'm');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_m_avg_phy = $sum/$length;
    // echo $ovr_m_avg_phy."<br>";
?>
<!-- physical health -->
<?php
    $sql = "SELECT `q5` FROM `physical_health` WHERE `phy_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'f');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_f_avg_phy = $sum/$length;
    // echo $ovr_f_avg_phy."<br>";
?>


<!-- mental health -->
<?php
    $sql = "SELECT `q5` FROM `mental_health` WHERE `men_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'm');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_m_avg_men = $sum/$length;
    // echo $ovr_m_avg_men."<br>";
?>
<!-- mental health -->
<?php
    $sql = "SELECT `q5` FROM `mental_health` WHERE `men_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'f');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_f_avg_men = $sum/$length;
    // echo $ovr_f_avg_men."<br>";
?>


<!-- diversity & inclusion -->
<?php
    $sql = "SELECT `q5` FROM `diversity` WHERE `div_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'm');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_m_avg_div = $sum/$length;
    // echo $ovr_m_avg_div."<br>";
?>
<!-- diversity & inclusion -->
<?php
    $sql = "SELECT `q5` FROM `diversity` WHERE `div_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'f');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_f_avg_div = $sum/$length;
    // echo $ovr_f_avg_div."<br>";
?>


<!-- safety & security -->
<?php
    $sql = "SELECT `q5` FROM `safety` WHERE `saf_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'm');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_m_avg_saf = $sum/$length;
    // echo $ovr_m_avg_saf."<br>";
?>
<!-- safety & security -->
<?php
    $sql = "SELECT `q5` FROM `safety` WHERE `saf_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'f');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_f_avg_saf = $sum/$length;
    // echo $ovr_f_avg_saf."<br>";
?>


<!-- access to resources -->
<?php
    $sql = "SELECT `q5` FROM `resources` WHERE `res_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'm');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_m_avg_res = $sum/$length;
    // echo $ovr_m_avg_res."<br>";
?>
<!-- access to resources -->
<?php
    $sql = "SELECT `q5` FROM `resources` WHERE `res_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'f');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_f_avg_res = $sum/$length;
    // echo $ovr_f_avg_res."<br>";
?>


<!-- career prospects -->
<?php
    $sql = "SELECT `q5` FROM `career` WHERE `car_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'm');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_m_avg_car = $sum/$length;
    // echo $ovr_m_avg_car."<br>";
?>
<!-- career prospects -->
<?php
    $sql = "SELECT `q5` FROM `career` WHERE `car_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'f');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_f_avg_car = $sum/$length;
    // echo $ovr_f_avg_car."<br>";
?>


<!-- financial stability -->
<?php
    $sql = "SELECT `q5` FROM `financial` WHERE `fin_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'm');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_m_avg_fin = $sum/$length;
    // echo $ovr_m_avg_fin."<br>";
?>
<!-- financial stability -->
<?php
    $sql = "SELECT `q5` FROM `financial` WHERE `fin_user_id` IN (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'IN' AND gender = 'f');";
    $res = mysqli_query($conn, $sql);
    $test = array();
    while($val = mysqli_fetch_array($res)){
        $test[] = $val["q5"];
    }
    $sum = 0;
    // Loop through the array and add the integer values to sum
    foreach ($test as $opt) {
        $sum += intval($opt);
    }
    $length = count($test);
    $ovr_f_avg_fin = $sum/$length;
    // echo $ovr_f_avg_fin."<br>";
?>