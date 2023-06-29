<?php
include 'C:\xampp\htdocs\Prog\Chart_values\CE_mf_avg_vals.php'; 

$ovr_data = ($ovr_m_avg_aca + $ovr_m_avg_soc + $ovr_m_avg_ext + $ovr_m_avg_phy + $ovr_m_avg_men + $ovr_m_avg_div + $ovr_m_avg_saf + $ovr_m_avg_res + $ovr_m_avg_car + $ovr_m_avg_fin) / 10;
$m_value = number_format($ovr_data, 2);
// echo $m_value;

$ovr_data = ($ovr_f_avg_aca + $ovr_f_avg_soc + $ovr_f_avg_ext + $ovr_f_avg_phy + $ovr_f_avg_men + $ovr_f_avg_div + $ovr_f_avg_saf + $ovr_f_avg_res + $ovr_f_avg_car + $ovr_f_avg_fin) / 10;
$f_value = number_format($ovr_data, 2);
// echo $f_value;

?>