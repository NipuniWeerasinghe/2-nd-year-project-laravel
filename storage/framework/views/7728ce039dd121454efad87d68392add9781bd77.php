<?php $__env->startSection('content'); ?>
<h1>Lessons</h1>
<div class="panel panel-default" style=" padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<?php if(count($lesson)>0): ?>
<?php $__currentLoopData = $lesson; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<ul class="list-group">
<li class="list-group-item">Lesson Name : <?php echo e($lesson->lesson); ?>

</li>
	
</ul>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>