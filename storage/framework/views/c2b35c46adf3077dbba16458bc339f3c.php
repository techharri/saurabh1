
<?php $__env->startPush('title'); ?>
    <title>Article </title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('section'); ?>
<h2>Article </h2>
<a href="<?php echo e(route('admin.articlecreate')); ?>" class="btn btn-primary"><button>Add New</button></a>
<form action="<?php echo e(route('admin.article_list')); ?>" method="GET">
    <div class="row mb-3">
        <div class="col-md-4">
            <input type="text" name="ar_name" class="form-control" placeholder="Search by title" value="<?php echo e(request('ar_name')); ?>">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="<?php echo e(route('admin.article_list')); ?>" class="btn btn-secondary">Reset</a>
        </div>
    </div>
</form>

<table class="table">
    <thead>
        <tr>
            <th>
                <a style="color:#fff;" href="<?php echo e(route('admin.article_list', ['sort' => 'a_id', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc'])); ?>">
                    ID
                    <?php if(request('sort') == 'a_id'): ?>
                        <?php if(request('direction') == 'asc'): ?>
                            ↑
                        <?php else: ?>
                            ↓
                        <?php endif; ?>
                    <?php endif; ?>
                </a>
            </th>
            <th> Title
                
            </th>
            <th>
                <a style="color:#fff;" href="<?php echo e(route('admin.article_list', ['sort' => 'ac_id', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc'])); ?>">
                    Category
                    <?php if(request('sort') == 'ac_id'): ?>
                        <?php if(request('direction') == 'asc'): ?>
                            ↑
                        <?php else: ?>
                            ↓
                        <?php endif; ?>
                    <?php endif; ?>
                </a>
            </th>
            <th>Date
                
        </th>
            <th>
                <a style="color:#fff;" href="<?php echo e(route('admin.article_list', ['sort' => 'status', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc'])); ?>">
                    Status
                    <?php if(request('sort') == 'status'): ?>
                        <?php if(request('direction') == 'asc'): ?>
                            ↑
                        <?php else: ?>
                            ↓
                        <?php endif; ?>
                    <?php endif; ?>
                </a>
            </th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $articlelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articlelists): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($articlelists->a_id); ?></td>
            <td><?php echo e($articlelists->ar_name); ?></td>
            <td><?php echo e($articlelists->category->ac_name); ?></td>
            <td><?php echo e($articlelists->created_at); ?></td>
            <td>
                <?php if($articlelists->status == 1): ?>
                    Active
                <?php elseif($articlelists->status == 0): ?>
                    Suspend
                <?php endif; ?>
            </td>
            
            <td><button><a href="<?php echo e(route('admin.articleedit',$articlelists->a_id)); ?>">Edit</a></button> <button onclick="return confirm('Are you sure you want to delete this article?')"><a href="<?php echo e(route('admin.articledel', $articlelists->a_id)); ?>">Delete</a></button></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<div class="pagination">
    <?php echo e($articlelist->links('pagination::bootstrap-4')); ?> <!-- This only works on paginated data -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saurabh\resources\views/admin/article_list.blade.php ENDPATH**/ ?>