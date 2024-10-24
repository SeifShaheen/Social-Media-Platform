<!-- resources/views/posts/index.blade.php -->


<?php $__env->startSection('title', 'Posts'); ?>

<div class="container mt-5">
    <h1>Posts</h1>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <?php if($posts->isEmpty()): ?>
        <div class="alert alert-warning">
            No posts found.
        </div>
    <?php else: ?>
        <ul>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(route('posts.show', $post->id)); ?>"><?php echo e($post->title); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
</div>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel course\systemProject\resources\views/posts/index.blade.php ENDPATH**/ ?>