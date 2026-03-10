<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Study Planner</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>AI Study Planner</h2>

<form method="post" action="generate.php">
    Subject: <input type="text" name="subject"><br><br>
    Exam Date: <input type="date" name="exam"><br><br>
    Daily Hours: <input type="number" name="hours"><br><br>

    <input type="submit" name="submit" value="Generate Plan">
</form>

<?php
if(isset($_POST['submit'])){

    $subject = $_POST['subject'];
$exam = $_POST['exam'];
$hours = $_POST['hours'];

$sql = "INSERT INTO study_plans(subject, exam_date, daily_hours)
VALUES('$subject','$exam','$hours')";

mysqli_query($conn,$sql);

echo "Study Plan Saved!";
}
?>

</body>
</html>