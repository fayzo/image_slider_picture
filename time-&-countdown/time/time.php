<?php
// Current date and time
$datetime = date("Y-m-d H:i:s");

// Convert datetime to Unix timestamp
$timestamp = strtotime($datetime);

// Subtract time from datetime
$time = $timestamp - (2 * 60 * 60);

// Date and time after subtraction
echo $datetime = date("Y-m-d H:i:s", $time)."<br>";
//******************************************** */
//******************************************** */
//***************REMAING TIMING***************************** */
$now = new DateTime();
$future_date = new DateTime('2018-12-11 12:00:00');

$interval = $future_date->diff($now);

echo $interval->format("%a days, %h hours, %i minutes, %s seconds")."<br>";
//******************************************** */
//******************************************** */
//***************REMAING TIMING***************************** */
$today      = new DateTime('now');
$tomorrow   = new DateTime('tomorrow');
$difference = $today->diff($tomorrow);

echo $difference->format('%h hours %i minutes %s seconds until tomorrow')."<br>";
?>