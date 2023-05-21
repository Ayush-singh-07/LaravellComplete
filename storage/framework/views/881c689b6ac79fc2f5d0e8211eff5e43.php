<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php if( $weekday == "Monday"): ?>
<h1>Monday is boaring</h1>
<?php elseif($weekday == "Tuesday"): ?>
<h1>Tuesday is tough</h1>
<?php elseif($weekday == "Wednesday"): ?>
<h1>Wednesday is a loop </h1>
<?php elseif($weekday == "Thursday"): ?>
<h1>Thursday is fine</h1>
<?php elseif($weekday == "Friday"): ?>
<h1>Yipiee  its Friday</h1>
<?php elseif($weekday == "Saturday"): ?>
<h1>Saturday is cool </h1>
<?php elseif($weekday == "Sunday"): ?>
<h1>Sunday is chill day</h1>

<?php endif; ?>
</body>
</html><?php /**PATH D:\InstalledPrograms\PHPandXAMPPinstall\htdocs\Laravel_projects\test_project\resources\views/weekday.blade.php ENDPATH**/ ?>