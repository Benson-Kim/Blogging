<?php $__env->startSection('content'); ?>

<div class="col-sm-8 blog-main">

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('posts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   <nav class="blog-pagination">
    <a href="#" class="btn btn-outline-primary">Older</a>
    <a href="#" class="btn btn-outline-secondary ">Newer</a>
   </nav>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraapp\resources\views/posts/index.blade.php ENDPATH**/ ?>