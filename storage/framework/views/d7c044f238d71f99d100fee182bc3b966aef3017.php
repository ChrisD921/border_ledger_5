

<?php $__env->startSection('content'); ?>

<div class="flex-center position-ref full-height">
    

    <div class="content">
        <div  class="logo">
            <img src="/img/BorderLedger5.png" alt="BorderLedger5Logo">
        </div>
        
        <div class="description">
            <p>During a community quarantine, people are not allowed to travel across the cities and municipalities except for a few exceptions. Although there are only few people going in and out of the boundary, it is very important to have a record of them going in and out the borders. This is to ensure that they legally pass the border, and to know how to find them if something happened.
                <br><br>
                The web app will be used by the personnel who are guarding the border. It allows them to encode details of people who are going in and out of the border such as name, ID Card, purpose, where they are going. </p>
        </div>
        <a href="/borderLedger/management">Add a Personnel Account</a><br>
        <a href="/borderLedger/ledger">Add a Passerby Entry</a><br>
        <a class="btn btn-secondary my-2" href="/borderLedger/login"> Login </a>
        <a class="btn btn-secondary my-2" href="/auth/register"> Register </a>
        

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Christopher\Documents\GitHub\border_ledger_5\resources\views//borderledger/index.blade.php ENDPATH**/ ?>