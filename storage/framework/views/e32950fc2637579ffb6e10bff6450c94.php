
<?php $__env->startPush('title'); ?>
    <title>Student</title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('section'); ?>
<h2>Students</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Banner</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($banner->b_id); ?></td>
            <td><img src="<?php echo e($banner->banner); ?>" alt="" width="300px"></td>
            <td><?php echo e($banner->created_at); ?></td>
            <td><button>Add</button><button>Edit</button> <button>Delete</button></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saurabh\resources\views/admin/banner.blade.php ENDPATH**/ ?>