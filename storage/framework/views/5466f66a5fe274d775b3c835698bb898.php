<!-- resources/views/games/index.blade.php -->


<?php $__env->startSection('title', 'games'); ?>

<div class="container mt-5">
    <h1>Games</h1>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <?php if($games->isEmpty()): ?>
        <div class="alert alert-warning">
            No Games Found.
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
</div>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel course\systemProject\resources\views/games/index.blade.php ENDPATH**/ ?>