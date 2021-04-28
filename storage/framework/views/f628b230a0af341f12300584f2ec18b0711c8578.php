

<?php $__env->startSection('content'); ?>
<div class="col-sm-8 blog-main">
    
    <h1>Create a post</h1>
<hr>
    <form method="POST" action="/posts">

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control" name="title" >
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" ></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

        <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
    </form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraapp\resources\views/posts/create.blade.php ENDPATH**/ ?>