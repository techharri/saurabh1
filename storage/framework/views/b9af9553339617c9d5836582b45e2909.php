
<?php $__env->startPush('title'); ?>
    <title>Article </title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('section'); ?>
<h2>Article </h2>
<form action="" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
    <div class="section">
    
    <input type="file" name="file" multiple required>
        <button style="padding:0.5em;">submit</button>
    </div>
</form>
<hr style="margin: .8em 0">
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>File</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $createlinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $createdlink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
         <td><?php echo e($createdlink->link_id); ?></td>
         <td><a href="<?php echo e(Storage::url('images/' . $createdlink->file)); ?>" target="_blank"><?php echo e($createdlink->file); ?></a></td>
         <td><img src="<?php echo e(Storage::url('images/' . $createdlink->file)); ?>" alt="<?php echo e($createdlink->file); ?>" style="width: 100px; height: auto;"></td>
         <td><button>Delete</button></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saurabh\resources\views/admin/file.blade.php ENDPATH**/ ?>