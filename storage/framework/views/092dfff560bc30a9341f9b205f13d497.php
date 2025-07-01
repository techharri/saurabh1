
<?php $__env->startPush('title'); ?>
    <title>Article</title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
<h1 id="about" style="text-align:center;">Categories</h1>
<ul>
    <?php $__currentLoopData = $articlecat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><a href="<?php echo e(url('/article')); ?>/<?php echo e($item->ac_url); ?>"><?php echo e($item->ac_name); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saurabh\resources\views/pages/article/category.blade.php ENDPATH**/ ?>