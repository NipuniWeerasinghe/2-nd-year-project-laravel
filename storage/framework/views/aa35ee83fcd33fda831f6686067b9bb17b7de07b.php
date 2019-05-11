<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($users->name); ?> <?php echo e($users->email); ?> <?php echo e($users->dob); ?> <?php echo e($users->usertype); ?><br/><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>