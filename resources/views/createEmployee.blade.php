
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register New Employee ...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body{
            padding: 10px;
            background-color: grey;
        }
        .mydiv{
          margin: 100px;
        }
        h1{
          text-align: center;
          font-family: cursive;
          color: white;
        }
        a{
          /* background-color: white; */
          text-decoration: none;
          color: inherit;
        }
    </style>

</head>
  <body>
    <div class="mydiv">
      <h1>Register Here</h1>
        <form class="form-control" action="/registeremployees" method="post">
            @csrf
            Name : <input class="form-control" type="text" name="emp_name" id="emp_name"><br><br>
            <!-- <span style="color: red"> @error('userName') {{$message}} @enderror</span><br> -->
            Designation : <input class="form-control" type="text" name="designation" id="designation"><br><br>
            <!-- <span style="color: red"> @error('userPassword') {{$message}} @enderror</span><br> -->
            Salary  : <input class="form-control" type="text" name="salary" id="salary"><br><br>
            
            <input class="btn btn-primary" type="submit" value="Add Employee">
        </form><br>
        <button class="btn btn-warning"><a href="/employeeview">Click Here to Manage List  ...</a></button>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>






