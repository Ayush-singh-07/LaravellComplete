
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
        a { 
            text-decoration: none;
            color: white;
        }
    </style>

</head>
  <body>
      
  <h1>Welcome <?php echo e(Session('userName')); ?> </h1>
    
    <button class="btn btn-danger "><a href="/logout">logout</a></button>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>






<?php /**PATH D:\InstalledPrograms\PHPandXAMPPinstall\htdocs\Laravel_projects\test_project\resources\views/sessionSuccess.blade.php ENDPATH**/ ?>