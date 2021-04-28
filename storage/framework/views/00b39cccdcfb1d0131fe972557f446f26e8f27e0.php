<div class="col-sm-3 offset-sm-1  blog-sidebar">

    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p> It is the purpose of <em>The Computer Security Blog</em> to provide guidance in recognizing threats, eliminating
            them where possible and, if not, then reducing any losses attributable to them.</p>
    </div>
                
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="/?month=<?php echo e($archive['month']); ?>&year=<?php echo e($archive['year']); ?>">
                        <?php echo e($archive['month'].' '.$archive['year']); ?>

                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </ol>
    </div>

    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">Github</a> </li>
            <li><a href="#">Twitter</a> </li>
            <li><a href="#">Facebook</a> </li>
        </ol>
    </div>

</div> <!-- .blog-sidebar  --><?php /**PATH C:\xampp\htdocs\laraapp\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>