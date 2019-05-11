<!DOCTYPE html>
<html>
<head>
	<title>Nimnaya</title>
	<link rel="stylesheet" href="/css/app.css">
	<!--social media facebook share-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>

<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>



<!--social media facebook share ends-->
</head>
<body>
<?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php if(Request::is('/')): ?>
<?php echo $__env->make('inc.showcase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php endif; ?>
<div class="homecontainer">
	<div class="row">
		<div class="col-md-12 col-lg-12">
	
		<?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	<?php echo $__env->yieldContent('content'); ?>
		</div>
			<div class="col-md-4 col-lg-4">
			</div>
		</div>
</div>
<footer id="footer" class="text-center">
	<p>copyright 2017 &copy;-HackMePlz-</p><div class="panel panel-default" style="width: 100px; height: 150px;background: #438de1;"  >
	<span class="glyphicon glyphicon-share-alt"></span><h5 style="color:#000">share on</h5>
<div class="fb-share-button" data-href="http://nimnayawebsite.dev/" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fnimnayawebsite.dev%2F&amp;src=sdkpreparse">Share</a></div>

<script type="IN/Share" data-url="http://nimnayawebsite.dev/"></script>


<div class="g-plus" data-action="share" data-annotation="none">
</div>
</div>
</footer>
</body>
</html>
