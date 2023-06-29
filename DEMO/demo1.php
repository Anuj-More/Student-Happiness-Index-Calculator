
<?php
 
$dataPoints = array( 
	array("y" => 3373.64, "label" => "Germany" ),
	array("y" => 2435.94, "label" => "France" ),
	array("y" => 1842.55, "label" => "China" ),
	array("y" => 1828.55, "label" => "Russia" ),
	array("y" => 1039.99, "label" => "Switzerland" ),
	array("y" => 765.215, "label" => "Japan" ),
	array("y" => 612.453, "label" => "Netherlands" )
);

include 'partials/_dbconnect.php';

$sql = "SELECT * FROM `financial` WHERE `fin_user_id` in (SELECT `Entry_No` FROM `basic_info` WHERE `department` LIKE 'CE');";

$result = mysqli_query($conn, $sql);

$test = array();
$count = 0;

// fetch associative array
while($row = mysqli_fetch_array($result)){
    $test[$count]["label"] = $row["fin_user_id"]; 
    $test[$count]["y"] = $row["q5"];     
    $count=$count+1;
}
echo "<pre>";
var_dump($test);
echo "</pre>";

?>
<!-- // <!DOCTYPE HTML>
// <html>
// <head>
// <script> -->
<!-- // window.onload = function() {
 
// var chart = new CanvasJS.Chart("chartContainer", {
// 	animationEnabled: true,
// 	theme: "light2",
// 	title:{
// 		text: "Gold Reserves"
// 	},
// 	axisY: {
// 		title: "Gold Reserves (in tonnes)"
// 	},
// 	data: [{
// 		type: "column",
// 		yValueFormatString: "#,##0.## tonnes",
// 		dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
// 	}]
// });
// chart.render();
 
// }
// </script> -->
<!-- // </head>
// <body>
// <div id="chartContainer" style="height: 370px; width: 100%;"></div>
// <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
// </body>
// </html>  -->