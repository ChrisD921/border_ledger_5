

<?php $__env->startSection('content'); ?>

<div class="flex-center position-ref full-height">
    <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Login</a>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="content">
        <img src="/img/BorderLedger5.png" alt="BorderLedger5Logo">
        
        <div class="description">
            <p>During a community quarantine, people are not allowed to travel across the cities and municipalities except for a few exceptions. Although there are only few people going in and out of the boundary, it is very important to have a record of them going in and out the borders. This is to ensure that they legally pass the border, and to know how to find them if something happened.
                <br><br>
                The web app will be used by the personnel who are guarding the border. It allows them to encode details of people who are going in and out of the border such as name, ID Card, purpose, where they are going. </p>
        </div>
        <a href="/borderLedger/management">Add a Personnel Account</a>
        <button class="loginButton" href='/borderLedger/login'> Login </button>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Christopher\Documents\GitHub\border_ledger_5\resources\views//borderledger/index.blade.php ENDPATH**/ ?>