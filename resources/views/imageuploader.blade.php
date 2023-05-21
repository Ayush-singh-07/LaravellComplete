<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <h1>File uploader</h1>

<form action="imageuploader" method="post" enctype = "multipart/form-data">
        @csrf
        Username: <input type="text" name="username" id="username"><br>
        <span style="color: red"> @error('username') {{$message}} @enderror</span><br>
        Email: <input type="email" name="useremail" id="useremail"><br>
        <span style="color:red"> @error("useremail") {{$message}} @enderror</span><br>
        Password: <input type="password" name="userpass" id="usesrpass"><br>
        <span style="color:red"> @error("userpass") {{$message}} @enderror</span><br>
        <input type="file" name="imagefile" id="imagefile"><br>
        <span style="color:red"> @error("imagefile") {{$message}} @enderror</span><br>

        <input type="submit" value="Submit">
    </form>


</body>
</html>