<nav class="navbar navbar-inverse " >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">-Nimnaya-</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo e(Request::is('/')? 'active':''); ?>"><a href="/">Home</a></li>
            <li class="<?php echo e(Request::is('about')? 'active':''); ?>"><a href="/about">About</a></li>
            <li class="<?php echo e(Request::is('contact')? 'active':''); ?>"><a href="/contact">Contact</a></li>
         </ul>
        <!--/.nav-collapse -->
        <ul class="nav navbar-nav navbar-right navbar navbar-inverse" id="navbar">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li class="<?php echo e(Request::is('/auth/login')? 'active':''); ?>"><a href="<?php echo e(route('login')); ?>"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                            <li class="<?php echo e(Request::is('/auth/register')? 'active':''); ?>"><a href="<?php echo e(route('register')); ?>"><span class="glyphicon glyphicon-pencil"></span> Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                               <span class="glyphicon glyphicon-globe"></span>
                                   Notifications <span class="badge"><?php echo e(count(auth()->user()->unreadNotifications)); ?></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                 <li><?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <p>someone has added a lesson</p>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </li>
                                 
                                </ul>
                            </li>

                      
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                                <img src="/uploads/avatars/<?php echo e(Auth::user()->avatar); ?>" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%;"> 
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                 <li><a href="<?php echo e(url('/profile')); ?>"><i class="fa fa-btn fa-user"></i><span class="  glyphicon glyphicon-user"></span> Profile</a>
                                    </li>
                               
                                    
                                     <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
            </div>        </ul>
      </div>
      </div>
 </nav>
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>