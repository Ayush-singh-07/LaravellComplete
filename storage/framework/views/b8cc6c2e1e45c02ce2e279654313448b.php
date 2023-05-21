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

<?php if(Session::has('user')): ?>
<h1>Data Saved for <?php echo e(Session('user')); ?> successfully</h1>
<?php endif; ?>


<form action="flashexample" method="post">
    <?php echo csrf_field(); ?>
    Username: <input type="text" name="username" id="username"><br>
    Email: <input type="email" name="useremail" id="useremail"><br>
    Password: <input type="password" name="userpass" id="usesrpass"><br>
    <input type="submit" value="Register">
</form>

</body>
</html><?php /**PATH D:\InstalledPrograms\PHPandXAMPPinstall\htdocs\Laravel_projects\test_project\resources\views/flashpage.blade.php ENDPATH**/ ?>