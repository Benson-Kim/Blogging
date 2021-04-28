

<?php $__env->startSection('content'); ?>

    <div class="col-sm-8">
        <h1>Sign In</h1>

        <form method="POST" action="/login">

            <?php echo e(csrf_field()); ?>


            <div class="form-group">
                <label for="name">E-mail Address:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="form-group">
                <button type="submit"  class="btn btn-primary" >Sign In</button>
                <a href="/register" class="btn btn-secondary btn-outline-primary "> Sign Up </a>
            </div>

            <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraapp\resources\views/sessions/create.blade.php ENDPATH**/ ?>