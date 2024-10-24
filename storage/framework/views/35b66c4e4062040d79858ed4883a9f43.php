<!-- resources/views/games/show.blade.php -->


<?php $__env->startSection('title', $game->name); ?>

<div class="container mt-5">
    <h1><?php echo e($game->name); ?></h1>
    <p><?php echo e($game->description); ?></p>
    <a href="<?php echo e(route('games.index')); ?>" class="btn btn-secondary">Back to Games</a>
</div>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel course\systemProject\resources\views/games/show.blade.php ENDPATH**/ ?>