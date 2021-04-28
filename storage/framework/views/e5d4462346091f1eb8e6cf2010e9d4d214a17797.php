<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a href="#" class="nav-link active">Home</a>
            <a href="#" class="nav-link">New Features</a>
            <a href="#" class="nav-link">Press</a>
            <a href="#" class="nav-link">About</a>
            
            <a href="/login" class="nav-link ml-auto">Login</a>
            <a href="/register" class=" nav-link navbar-nav navbar-right">Register</a>

            <?php if(Auth::check()): ?>
                <a href="#" class="nav-link ml-auto"><?php echo e(Auth::user()->name); ?></a>
                <a href="/logout" class=" nav-link navbar-nav navbar-right">Logout</a>
            <?php endif; ?>
        </nav>    
    </div>
</div><?php /**PATH C:\xampp\htdocs\laraapp\resources\views/layouts/nav.blade.php ENDPATH**/ ?>