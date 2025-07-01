
<?php $__env->startPush('title'); ?>
    <title>Article Category</title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('section'); ?>
<h2>Article Create</h2>
<div class="section">
    <div class="minisection">
        <label for="">Category</label>
        <input type="text">
    </div>
    <div class="minisection">
        <label for="">Title</label>
        <input type="text" name="ar_name">
    </div>
</div>
<div class="section">
    <div class="minisection">
        <label for="">URL</label>
        <input type="text" name="ac_url">
    </div>
    <div class="minisection">
        <label for="">Date</label>
        <input type="date" name="updated_at">
    </div>
</div>
<div class="sction">
    <label for="">Description</label>
    <textarea name="" class="ckeditor" id="" cols="30" rows="10"></textarea>
</div>
<div class="section">
    <div class="minisection">
        <label for="">Status</label>
        <input type="text" name="status">
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
<button>submit</button>
<textarea name="" class="ckedtitor" id="" cols="30" rows="10"></textarea>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.include.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saurabh\resources\views/admin/article_cat_create.blade.php ENDPATH**/ ?>