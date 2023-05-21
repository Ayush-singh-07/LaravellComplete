
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Here ...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body{
            padding: 250px;
            background: linear-gradient(to right, rgb(128, 245, 130), rgb(133, 255, 241));
        }
        .mydiv{
            border: 2px solid black;
            padding: 25px;
        }
    </style>

</head>
  <body>
      
  <h1>Login Here</h1>

    <div class="mydiv">
        <form action="login" method="post">
            @csrf
            username: <input type="text" name="username" id="userName"><br><br>
            <span style="color: red"> @error('username') {{$message}} @enderror</span><br>
            password: <input type="password" name="userpass" id="userPassword"><br><br>
            <span style="color: red"> @error('userpass') {{$message}} @enderror</span><br>
            
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>






