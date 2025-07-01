
<?php $__env->startPush('title'); ?>
    <title>Article Category</title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('section'); ?>
<h2>Article Create</h2>
<form action="<?php echo e(route('admin.article_update', $article->a_id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
<div class="section">
    <div class="minisection">
        <label for="">Category</label>
        <input type="text" name="ac_id" value="<?php echo e($article->ac_id); ?>">
        
    </div>
    <div class="minisection">
        <label for="">Title</label>
        <input type="text" name="ar_name" value="<?php echo e($article->ar_name); ?>">
    </div>
</div>
<div class="section">
    <div class="minisection">
        <label for="">URL</label>
        <input type="text" name="ar_url" value="<?php echo e($article->ar_url); ?>">
    </div>
    <div class="minisection">
        <label for="">Date</label>
        <input type="date" name="created_at" value="<?php echo e($article->created_at->format('Y-m-d')); ?>">
    </div>
</div>
<div class="sction">
    <label for="">Description</label>
        <textarea name="long_desc" class="ckeditor" id="" cols="30" rows="10"><?php echo e(htmlspecialchars_decode($article->long_desc)); ?></textarea>
</div>
<div class="section">
    <div class="minisection">
        <label for="">Status</label>
        <input type="text" name="status" value="<?php echo e($article->status); ?>">
        
    </div>
    <div class="minisection">
        <label for="">Meta title</label>
        <input type="text" name="meta_title" value="<?php echo e($article->meta_title); ?>">
    </div>
</div>
<div class="section">
    <div class="minisection">
        <label for="">Meta Keyword</label>
        <textarea name="keyword" id="" cols="30" rows="10"><?php echo e($article->keyword); ?></textarea>
    </div>
    <div class="minisection">
        <label for="">Meta Description</label>
        <textarea name="description" id="" cols="30" rows="10"><?php echo e($article->description); ?></textarea>
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
<?php echo $__env->make('admin.include.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saurabh\resources\views/admin/article_edit.blade.php ENDPATH**/ ?>