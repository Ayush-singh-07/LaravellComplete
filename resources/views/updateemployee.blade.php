
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Here ...</title>
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
      <h1>Update Here</h1>
      


        <form class="form-control" action="/saveemployee/{{$editableuser[0]->id}}" method="post">
            @csrf
            name : <input class="form-control" type="text" name="emp_name" id="userName" value="{{$editableuser[0]->name}}"><br><br>
            designation : <input class="form-control" type="text" name="designation" id="designation" value="{{$editableuser[0]->designation}}"><br><br>
            salary  : <input class="form-control" type="text" name="salary" id="salary" value="{{$editableuser[0]->salary}}"><br><br>
            
            <input class="btn btn-primary" type="submit" value="Update">
        </form><br>
        <button class="btn btn-warning"><a href="/employeeview">Click Here to Manage List  ...</a></button>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>






