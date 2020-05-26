

<?php $__env->startSection('content'); ?>

<section class="jumbotron text-center">
    <div class="jumbotron">
      <h1 class="jumbotron-heading">Border Ledger</h1>
      <p class="msg"> <?php echo e(session('success_msg')); ?></p>
      
        <div class="flex-center position-ref full-height">
            
            <div class="registration">
                <h1>Create a New Personnel Account</h1>
                <form action="/borderLedger/management" method="POST">
                <?php echo csrf_field(); ?>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name"><br>

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name"><br>

                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth"><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password"><br>
                
                
                <button type="submit" value="Add User">Submit</button>
                </form>    
            </div> 

            
                <div class="content">
                    <p>Hello this is the Managment screen!</p>
                    <div class="container mt-2 mb-3">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h4 class="text-center mb-5"> Personnel Accounts</h4>
                                <table class="table table-striped mt-2">
                                    <thead>
                                        <th> Full Name</th>
                                        <th> Date of Birth</th>
                                        <th> Password</th>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $personnel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personnels): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($personnels->first_name); ?> <?php echo e($personnels->last_name); ?></td>
                                            <td><?php echo e($personnels->date_of_birth); ?></td>                        
                                            <td><?php echo e($personnels->password); ?> </td>
                                            <td><button type="menu">View (TODO)</button></td>
                                            <td>
                                                <form action="/borderLedger/management/<?php echo e($personnels->id); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button>Delete Account</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <?php echo e($personnel->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            
            </div>


        </div>

    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Christopher\Documents\GitHub\border_ledger_5\resources\views//borderLedger/management.blade.php ENDPATH**/ ?>