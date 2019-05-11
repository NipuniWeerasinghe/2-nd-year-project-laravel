<?php $__env->startSection('content'); ?>
<br>
<br>
<center><div class="panel panel-default" style="width: 800px; height: 580px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<h3>Add chapter</h3>

<form enctype="multipart/form-data" action="/lesson" method="POST"  >
<div class="form-group" align="left" style="width:780px;">

    <?php echo e(Form::label('grade', 'Select grade')); ?>

    <br>
     <?php echo e(Form::select('grade', array('6' => 'Grade 6', '7' => 'grade 7','8' => 'grade 8','9' => 'Grade 9','10' => 'Grade 10'),'',['class'=>'form-control'])); ?>;
</div>
                               <hr>

                                    <br>

<div class="form-group" align="left" >
<?php echo e(Form::label('lesson','Lesson Name')); ?>

<?php echo e(Form::text('lesson','',['class'=>'form-control','placeholder'=>'Enter lesson name'])); ?>


 <hr>
<label style=" align=left;">upload note</label>
 <?php if($errors->has('title')): ?>
   <p class="help-block">
  <strong><?php echo e($errors->first('title')); ?></strong>
  </p>
   <?php endif; ?>
<input type="file" name="file">
 <?php if($errors->has('file')): ?>
   <p class="help-block">
  <strong><?php echo e($errors->first('file')); ?></strong>
  </p>
   <?php endif; ?>
    <hr>
   <label style=" align=left;">upload video link</label>
   <input type="text" name="video" class="form-control file_title_c" id="video" placeholder="upload youtube video link">
   <br>
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<button type="submit" class="pull-right btn btn-sm btn-primary"><span class="glyphicon glyphicon-upload"></span> Upload</button>
</div>
<?php echo Form::close(); ?>

</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>