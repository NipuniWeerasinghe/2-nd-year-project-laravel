 
<?php $__env->startSection('content'); ?>

<style type="text/css">
  .help-block{
    color: red;
  }
</style>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<br>


<center><div class="panel panel-default" style="width: 600px; height: 200px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<div class="panel-heading" style="color:#190abd"><b>upload a note</b></div>

 <div class="panel-body">
<form enctype="multipart/form-data" action="/note" method="POST"  >

  
 <input type="text" name="title" class="form-control file_title_c" id="title_id" placeholder="Enter title">
 <br>
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
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<button type="submit" class="pull-right btn btn-sm btn-primary"><span class="glyphicon glyphicon-upload"></span> Upload</button>
</form>
<script>
  <?php if(Session::has('message')): ?>
  var type = "<?php echo e(Session::get('alert-type','info')); ?>";
  switch(type){
    case 'success':
    toastr.success("<?php echo e(Session::get('message')); ?>");
    break;
    case 'error':
    toastr.error("<?php echo e(Session::get('message')); ?>");
    break;
  }
<?php endif; ?>
</script>
</div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>