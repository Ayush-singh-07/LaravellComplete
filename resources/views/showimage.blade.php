<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{ asset('storage/uploads/'.$data[1]) }}



    <h1>Hello , {{$data[0]}}</h1>
    <p>Below is your file uploaded....</p><br>
    <img src="{{ asset('storage/cover_image/'.$data[1]) }}" alt="image" srcset="">

    
</body>
</html>