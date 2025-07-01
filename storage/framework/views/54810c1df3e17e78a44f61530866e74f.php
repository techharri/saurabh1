
<?php $__env->startPush('title'); ?>
    <title>Student</title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('section'); ?>
<h2>Students</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Student</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($student->s_id); ?></td>
            <td><?php echo e($student->student); ?></td>
            <td><?php echo e($student->email); ?></td>
            <td><?php echo e($student->contact); ?></td>
            <td><?php echo e($student->created_at); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saurabh\resources\views/admin/students.blade.php ENDPATH**/ ?>