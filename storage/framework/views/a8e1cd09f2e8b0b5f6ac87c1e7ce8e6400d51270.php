<?php $__env->startSection('content'); ?>
<br>
<center><div class="panel panel-default" style="width: 800px; height: 600px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<h1 ><span class="glyphicon glyphicon-phone-alt"></span> Contact</h1>
<div class="panel-body">
<?php echo Form::open(['url' => 'contact/submit']); ?>

    <div class="form-group" align="left">
    	<?php echo e(Form::label('name', 'name')); ?>

    	<?php echo e(Form::text('name','',['class'=>'form-control','placeholder'=> 'Enter name'])); ?>

    </div>
    <div class="form-group" align="left">
    	<?php echo e(Form::label('email', 'E-Mail Address')); ?>

    	<?php echo e(Form::text('email', '',['class'=>'form-control','placeholder'=> 'Enter email'])); ?>

    </div>
    <div class="form-group" align="left">
    	<?php echo e(Form::label('message', 'Message')); ?>

    	<?php echo e(Form::textarea('message', '',['class'=>'form-control','placeholder'=> 'Enter message'])); ?>

    </div>
    <div>
    	<?php echo e(Form::submit('submit',['class'=>'btn btn-primary'])); ?>

        <?php echo Form::close(); ?>

    </div>
    </div>
    </div>



</center>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>