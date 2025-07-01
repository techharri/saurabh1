
<?php $__env->startPush('title'); ?>
    <title>Article Category</title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('section'); ?>
<h2>Article Category</h2>
<a href="<?php echo e(route('admin.articlecatcreate')); ?>" class="btn btn-primary"><button>Add New</button></a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Parent Category</th>
            
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $articlecat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articlecatlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($articlecatlist->ac_id); ?></td>
            <td><?php echo e($articlecatlist->ac_name); ?></td>
            <td><?php echo e($articlecatlist->parentCategory->ac_name ?? ''); ?></td>
            
            <td>
                <?php if($articlecatlist->status == 1): ?>
                    Active
                <?php elseif($articlecatlist->status == 0): ?>
                    Suspend
                <?php endif; ?>
            </td>
            
            <td><button>Edit</button> <button><a href="<?php echo e(route('admin.articlecatdel', $articlecatlist->ac_id)); ?>">Delete</a></button></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saurabh\resources\views/admin/article_cat_list.blade.php ENDPATH**/ ?>