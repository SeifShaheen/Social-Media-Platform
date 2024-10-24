<!-- resources/views/search/results.blade.php -->


<?php $__env->startSection('title', 'Search Results'); ?>

<div class="container mt-5">
    <h1>Search Results</h1>
    <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>
    <?php if(isset($message)): ?>
        <div class="alert alert-warning">
            <?php echo e($message); ?>

        </div>
    <?php else: ?>
        <h2>User: <?php echo e($user->name); ?></h2>
        <h3>Posts</h3>
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
        <h3>Games</h3>
        <?php if($games->isEmpty()): ?>
            <div class="alert alert-warning">
                No games found.
            </div>
        <?php else: ?>
            <ul>
                <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(route('games.show', $game->id)); ?>"><?php echo e($game->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel course\systemProject\resources\views/search/results.blade.php ENDPATH**/ ?>