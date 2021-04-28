

<?php $__env->startSection('content'); ?>
<div class="col-sm-8 blog-main">

    <h1><?php echo e($post->title); ?></h1>

    <?php echo e($post->body); ?>


    <hr>

    <div class="commments">

    <li class="list-group">

    <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
        <strong>
            <?php echo e($comment->created_at->diffForHumans()); ?>:
        </strong>        
            <?php echo e($comment->body); ?> 
    </li>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <div class="card">
        <div class="card-block">
                <form method="POST" action="/posts/<?php echo e($post->id); ?>/comments">
                    <?php echo e(csrf_field()); ?> 

                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
        </div>
    </div>
<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraapp\resources\views/posts/show.blade.php ENDPATH**/ ?>