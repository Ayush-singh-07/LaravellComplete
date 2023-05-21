<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



@if( $weekday == "Monday")
<h1>Monday is boaring</h1>
@elseif($weekday == "Tuesday")
<h1>Tuesday is tough</h1>
@elseif($weekday == "Wednesday")
<h1>Wednesday is a loop </h1>
@elseif($weekday == "Thursday")
<h1>Thursday is fine</h1>
@elseif($weekday == "Friday")
<h1>Yipiee  its Friday</h1>
@elseif($weekday == "Saturday")
<h1>Saturday is cool </h1>
@elseif($weekday == "Sunday")
<h1>Sunday is chill day</h1>

@endif
</body>
</html>