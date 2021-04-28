

<?php $__env->startSection('content'); ?>

<div class="col-sm-8">
        
            <h1>Reset Password</h1>
        
        <div class="card-body">
            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <form action="/forgot-password" method="post">
                <?php echo e(csrf_field()); ?>

                
                <div class="form-group">
                    <label for="name">E-mail Address:</label>
                    <input type="email" name="email" id="email" class="form-control" autocomplete="email" autofocus>
                </div>

                <div class="form-group">
                    <button type="submit"  class="btn btn-primary" >Send Password Reset Link</button>
                </div>

                
            </form>
        </div>
   
        

            <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraapp\resources\views/forget-password/create.blade.php ENDPATH**/ ?>