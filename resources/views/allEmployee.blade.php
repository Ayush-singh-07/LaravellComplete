
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage employees</title>
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

  <h1>Manage Employees</h1>

    <div class="mydiv">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Employee ID</th>
      <th scope="col"> Name</th>
      <th scope="col">Designation</th>
      <th scope="col">salary</th>
      <th scope="col">update</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>

              @foreach($allusers as $i)
                        <tr>
                          <td>{{$i->id }} </td>
                          <td>{{$i->name }} </td>
                          <td>{{$i->designation }} </td>
                          <td>{{$i->salary }} </td>
                          <td><a href={{"updateEmployee/".$i['id']}}>Edit</a></td>
                          <td><a href={{"deleteEmployee/".$i['id']}}>Delete</a> </td>

                        </tr>
                    @endforeach
    
  </tbody>
</table>




    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>






