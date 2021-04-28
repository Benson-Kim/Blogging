

<?php $__env->startSection('content'); ?>
    <div class="col-sm-8">
        <h1>Register</h1>

        <form method="POST" action="/register">

            <?php echo e(csrf_field()); ?>

            
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="name">E-mail Address:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>

            <div class="form-group">
                <button type="submit"  class="btn btn-primary" >Sign Up</button>
                <a href="/login" class="btn btn-secondary btn-outline-primary "> Sign In </a>
            </div>
            

            <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraapp\resources\views/registration/create.blade.php ENDPATH**/ ?>