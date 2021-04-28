<div class="blog-post">

    <a href="/posts/<?php echo e($post->id); ?>">
        <h2 class="blog-post-title"><?php echo e($post->title); ?></h2>
    </a>
    <p class="blog-post-meta">
        <a href="#"> <?php echo e($post->user->name); ?></a> on
        <?php echo e($post->created_at->toFormattedDateString()); ?>

    
    </p>

    <?php echo e($post->body); ?>


</div><?php /**PATH C:\xampp\htdocs\laraapp\resources\views/posts/post.blade.php ENDPATH**/ ?>