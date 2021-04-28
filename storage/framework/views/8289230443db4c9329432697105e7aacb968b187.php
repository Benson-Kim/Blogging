<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Template for Bootsrap</title>
<!-- Boostrap Core CSS -->
    <link rel="stylesheet" href="/css/bootstrap_css/bootstrap.min.css">
<!-- Custom Styles for this template -->
    <link rel="stylesheet" href="/css/blog.css">  
</head>

<body>

    <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">The Computer Security Blog</h1>
            <p class="lead blog-description">Recognizing security threats and how to eliminate them</p>
        </div>
    </div>

    <div class="container">
        <div class="row">

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
        </div> <!-- .row  -->
    </div> <!-- .container  -->

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\laraapp\resources\views/layouts/master.blade.php ENDPATH**/ ?>