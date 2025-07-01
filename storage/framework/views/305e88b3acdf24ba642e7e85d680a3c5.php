
<?php $__env->startPush('title'); ?>
    <title>Article </title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('section'); ?>
<h2>Article </h2>
<a href="<?php echo e(route('admin.articlecreate')); ?>" class="btn btn-primary"><button>Add New</button></a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Parent Category</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $articlelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articlelists): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($articlelists->a_id); ?></td>
            <td><?php echo e($articlelists->ar_name); ?></td>
            <td><?php echo e($articlelists->ac_id); ?></td>
            <td><?php echo e($articlelists->created_at); ?></td>
            <td><?php echo e($articlelists->status); ?></td>
            
            <td><button>Edit</button> <button onclick="return confirm('Are you sure you want to delete this article?')"><a href="<?php echo e(route('admin.articledel', $articlelists->a_id)); ?>">Delete</a></button></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saurabh\resources\views/admin/articlelist.blade.php ENDPATH**/ ?>