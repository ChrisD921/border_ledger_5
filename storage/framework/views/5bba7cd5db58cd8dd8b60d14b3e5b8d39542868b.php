

<?php $__env->startSection('content'); ?>

<div class="flex-center position-ref full-height">

    <div class="registration">
        <h1>Creat a New Personnel Account</h1>
        <form action="" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name">

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name">

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        
        
        <button type="submit" value="Add User">Submit</button>
        </form>    
    </div>    

    <div class="content">
        <p>Hello this is the Managment screen!</p>
    <?php $__currentLoopData = $pers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    
        <div class="description">
           Name: <?php echo e($personnel->first_name); ?> <?php echo e($personnel->last_name); ?> <br>
            Date of Birth:<?php echo e($personnel->date); ?><br> 
            Password:<?php echo e($personnel->password); ?>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Christopher\Documents\GitHub\border_ledger_5\resources\views//borderLedger/management.blade.php ENDPATH**/ ?>