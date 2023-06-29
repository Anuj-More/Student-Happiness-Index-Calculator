<?php
include 'C:\xampp\htdocs\Prog\Chart_values\CE_avg_vals.php'; 

$ovr_data = ($avg_aca + $avg_soc + $avg_ext + $avg_phy + $avg_men + $avg_div + $avg_saf + $avg_res + $avg_car + $avg_fin) / 10;
$formatted_value = number_format($ovr_data, 2);
echo $formatted_value;

?>