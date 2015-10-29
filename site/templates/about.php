<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('numbers') ?>

	<div class="container text content" role="main">
		<div class="row" id="about">
			<?php echo $page->text()->kirbytext() ?>
		</div>
	</div> <!-- // container -->

	<!-- Les logos hardcodés -->
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<a href="http://technoculture.club" target="_blank">
					<img src="<?php echo $site->url().'/assets/images/logo_TCC_M.png' ?>" class="img-responsive">
				</a>
			</div>
			<div class="col-sm-2">
				<a href="http://www.sietemedia.com.mx/" target="_blank">
					<img src="<?php echo $site->url().'/assets/images/sietemedia.png' ?>" class="img-responsive">
				</a>
			</div>
			<div class="col-sm-2">
				<a href="http://museomixmtl.com" target="_blank">
					<img src="<?php echo $site->url().'/assets/images/museomixMTL.png' ?>" class="img-responsive">
				</a>
			</div>
			<div class="col-sm-2">
				<a href="http://www.museomix.mx/" target="_blank">
					<img src="<?php echo $site->url().'/assets/images/museomixmx.png' ?>" class="img-responsive">
				</a>
			</div>
			<div class="col-sm-2">
				<a href="http://www.mrif.gouv.qc.ca/en/" target="_blank">
					<img src="<?php echo $site->url().'/assets/images/MRIF.gif' ?>" class="img-responsive">
				</a>
			</div>
			<div class="col-sm-2">
				<a href="http://amexcid.gob.mx/" target="_blank">
					<img src="<?php echo $site->url().'/assets/images/amex.png' ?>" class="img-responsive">
				</a>
			</div>
		</div>
	</div>

<?php snippet('footer') ?>