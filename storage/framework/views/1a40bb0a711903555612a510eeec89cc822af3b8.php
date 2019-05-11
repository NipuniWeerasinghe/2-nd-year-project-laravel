<?php $__env->startSection('content'); ?>
<script type="text/javascript">
function disable(id){
document.getElementById(id).disabled = 'disabled';
}
function enable(id){
document.getElementById(id).disabled = '';
}
</script>
<div class="container">
<br>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <center> <div class="panel-heading"><b>Registration Form</b></div></center>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                       
                        
                        <label class="col-md-6 control-label" ><input type="radio" name="usertype"  onclick='disable("subject")' checked="checked" value="0">Student</label>
                       
                       
                        <label class="col-md-2 control-label" ><input type="radio" name="usertype" onclick='enable("subject")' value="1">teacher</label>
                      <br/>
                      <br/>
                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                         <div class="form-group<?php echo e($errors->has('lname') ? ' has-error' : ''); ?>">
                            <label for="lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" value="<?php echo e(old('lname')); ?>" required autofocus>

                                <?php if($errors->has('lname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('lname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

            
                         <div class="form-group<?php echo e($errors->has('dob') ? ' has-error' : ''); ?>">
                            <label for="dob" class="col-md-4 control-label">DOB</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="<?php echo e(old('dob')); ?>" required autofocus>

                                <?php if($errors->has('dob')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('dob')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('school') ? ' has-error' : ''); ?>">
                            <label for="school" class="col-md-4 control-label">School</label>

                            <div class="col-md-6">
                                <input id="school" type="text" class="form-control" name="school" value="<?php echo e(old('school')); ?>" required autofocus>

                                <?php if($errors->has('school')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('school')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                          
                         <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" required autofocus>

                                <?php if($errors->has('phone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                         <div class="form-group"  style="width:750px;">
                        <label for="gender" class="col-md-4 control-label">Gender</label>
    
    <div class="col-md-6">
     <?php echo e(Form::select('gender', array('male' => 'Male','female' => 'Female'),'',['class'=>'form-control'])); ?>;
</div>
</div>
       
                         <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>