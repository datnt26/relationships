<h3><?php echo e($video->name); ?></h3>

<ul>
    <?php $__currentLoopData = $video->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($comment->body); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\xampp\htdocs\relationships\resources\views/videos/show.blade.php ENDPATH**/ ?>