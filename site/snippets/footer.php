
 	 	<footer class="footer" role="contentinfo">
 	 		<div class="container-fluid">
				<div class="row">
					<div class="col-sm-3 ">
						<!-- logo ici -->					
					</div>
					<div class="col-sm-3">
						<?php foreach ($pages->visible() as $p) : ?>
							<p><a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a></p>
						<?php endforeach ?>
					</div>
					<div class="col-sm-6 text-right">
						<p>A project by Techno Culture Club</p>
						<p>Design by Glasgow</p>
					</div>
				</div>
 	 		</div>
		</footer>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php url('assets/js/vendor/jquery-1.11.2.min.js') ?>"><\/script>')</script>

    <?php echo getBlogFooter($page); ?>

    <?php echo js('assets/js/vendor/bootstrap.min.js'); ?>
    <?php echo js('assets/js/main.js'); ?>


		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
				(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
				function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
				e=o.createElement(i);r=o.getElementsByTagName(i)[0];
				e.src='//www.google-analytics.com/analytics.js';
				r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
				ga('create','<?php echo $site->analytics() ? $site->analytics() : 'UA-XXXXX-X' ?>','auto');ga('send','pageview');
		</script>
		
  </body>
</html>
