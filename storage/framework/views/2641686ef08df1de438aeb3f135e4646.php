<!-- resources/views/posts/show.blade.php -->


<?php $__env->startSection('title', $post->title); ?>

<div class="container mt-5">
    <h1><?php echo e($post->title); ?></h1>
    <p><?php echo e($post->content); ?></p>
    <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-secondary">Back to Posts</a>
</div>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel course\systemProject\resources\views/posts/show.blade.php ENDPATH**/ ?>