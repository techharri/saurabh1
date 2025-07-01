
<?php $__env->startPush('title'); ?>
    <title>About</title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
<h1 id="about" style="text-align:center;">article</h1>
<ul>
    <?php $__currentLoopData = $articlename; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($article->ar_name); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saurabh\resources\views/pages/article/article.blade.php ENDPATH**/ ?>