
<?php $__env->startPush('title'); ?>
    <title>Article Category</title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('section'); ?>
<h2>Article Create</h2>
<form action="<?php echo e(route('admin.articlestore')); ?>" method="POST">
    <?php echo csrf_field(); ?>
<div class="section">
    <div class="minisection">
        <label for="">Category</label>
        <select name="ac_id" id="ac_id">
            <option value="0">Select Category</option>
            <?php $__currentLoopData = $articlecat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articlecats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($articlecats->ac_id); ?>"><?php echo e($articlecats->ac_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="minisection">
        <label for="">Title</label>
        <input type="text" name="ar_name">
    </div>
</div>
<div class="section">
    <div class="minisection">
        <label for="">URL</label>
        <input type="text" name="ar_url">
    </div>
    <div class="minisection">
        <label for="">Date</label>
        <input type="date" name="updated_at">
    </div>
</div>
<div class="sction">
    <label for="">Description</label>
    <textarea name="long_desc" class="ckeditor" id="" cols="30" rows="10"></textarea>
</div>
<div class="section">
    <div class="minisection">
        <label for="">Status</label>
        <select name="status" id="">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
    <div class="minisection">
        <label for="">Meta title</label>
        <input type="text" name="meta_title">
    </div>
</div>
<div class="section">
    <div class="minisection">
        <label for="">Meta Keyword</label>
        <textarea name="keyword" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="minisection">
        <label for="">Meta Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </div>
</div>
<div class="section">
    <div class="minisection">
        <button type="submit">Submit</button>
    </div>
    <div class="minisection">
        <button><a href="<?php echo e(url('/')); ?>/admin/article">Back</a></button>
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.include.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saurabh\resources\views/admin/article_create.blade.php ENDPATH**/ ?>