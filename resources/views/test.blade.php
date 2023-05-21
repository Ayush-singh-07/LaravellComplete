<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags-->
        <meta charset ="utf-8">
        <meta name="viewport" content="width=deivce-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="#" style="color:white">Laravel</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}" style="color:white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/register/create')}}" style="color:white">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/form')}}" style="color:white">Data</a>
                      </li>
                </ul>
            </div>
            </nav>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    </head>
    <body>
     <div class="container">
     <a href="{{route('register.create')}}">
       <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
    </a>
       <table class="table">
          <thead>
             <tr>
                <th>Name</th>
                <th>Profile</th>
                <th>Email</th>
                <th>Address</th>
                <th>Country</th>
                <th>State</th>
                <th>Action</th>
                
                
            </tr>
          </thead>
          <tbody>
            @foreach($user as $users)
            <tr>
                <td>{{$users->name}}</td>
                <td><div>
                <img src="storage/cover_image/{{$users->image}}" width='50' height='50' class="img img-responsive"/>
                </div></td>
                <td>{{$users->email}}</td>
                <td>{{$users->address}}</td>
                <td>{{$users->state}}</td>
                <td>{{$users->country}}</td>
                
                <a href="{{url('/register/delete/')}}/{{$users->id}}">
                <button class="btn btn-danger">Delete</button>
                </a>
                </td>
                <td>
                <a href="{{route('register.edit',['id'=>$users->id])}}">
                <button class="btn btn-primary">Edit</button>
                </a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
     </div>
    </body>
</html>