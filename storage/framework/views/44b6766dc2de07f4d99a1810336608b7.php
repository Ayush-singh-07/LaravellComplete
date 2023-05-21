<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo e(asset('storage/uploads/'.$data[1])); ?>




    <h1>Hello , <?php echo e($data[0]); ?></h1>
    <p>Below is your file uploaded....</p><br>
    <img src="<?php echo e(asset('storage/cover_image/'.$data[1])); ?>" alt="image" srcset="">

    
</body>
</html><?php /**PATH D:\InstalledPrograms\PHPandXAMPPinstall\htdocs\Laravel_projects\test_project\resources\views/showimage.blade.php ENDPATH**/ ?>