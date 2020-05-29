

<?php $__env->startSection('content'); ?>

<div class="flex-center position-ref full-height">
    

    <div class="content">
        <div  class="logo">
            <img src="/img/BorderLedger5.png" alt="BorderLedger5Logo">
        </div>
        
        <div class="description" >
            <form action="" style="padding: 30px">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Username</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>                
                </div>
                <button class="btn btn-dark btn-lg" type="submit">Sign in</button>
            </form>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Christopher\Documents\GitHub\border_ledger_5\resources\views//borderLedger/login.blade.php ENDPATH**/ ?>