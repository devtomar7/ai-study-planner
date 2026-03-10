<?php
include "config.php";

$subject=$_POST['subject'];
$exam=$_POST['exam'];
$hours=$_POST['hours'];

$today=date("Y-m-d");

$days=(strtotime($exam)-strtotime($today))/(60*60*24);

$total_hours=$days*$hours;

$sql="INSERT INTO study_plans(subject,exam_date,daily_hours)
VALUES('$subject','$exam','$hours')";

mysqli_query($conn,$sql);

echo "<h2>Study Plan</h2>";

echo "Subject: ".$subject."<br>";

echo "Days Left: ".$days."<br>";

echo "Daily Hours: ".$hours."<br>";

echo "Total Study Hours: ".$total_hours."<br>";

?>