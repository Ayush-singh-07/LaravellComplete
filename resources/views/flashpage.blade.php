<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Flash Example </h1>

@if(Session::has('user'))
<h1>Data Saved for {{Session('user')}} successfully</h1>
@endif


<form action="flashexample" method="post">
    @csrf
    Username: <input type="text" name="username" id="username"><br>
    Email: <input type="email" name="useremail" id="useremail"><br>
    Password: <input type="password" name="userpass" id="usesrpass"><br>
    <input type="submit" value="Register">
</form>

</body>
</html>