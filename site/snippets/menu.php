<nav class="navbar navbar-default navbar-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $site->url() ?>">
				<!-- check pour trouver le bon logo -->
				<?php if ($page->isHomepage()) : ?>

				<?php elseif ($page->template() == 'day') : ?>
					<img src="<?php echo $site->url().'/assets/images/LOGO_0'.$page->num().'.png' ?>" alt="<?php echo $site->title()->html() ?>" class="img-responsive" />
				<?php else : ?>
					<img src="<?php echo url('assets/images/LOGO_noir.png') ?>" alt="<?php echo $site->title()->html() ?>" class="img-responsive" />
				<?php endif ?>
			</a>
		</div>
	    <div id="navbar" class="collapse navbar-collapse">

			<ul class="nav navbar-nav navbar-right">
		    <?php foreach($pages->visible() as $p): ?>
		      <?php if($p->hasVisibleChildren() && $p->template() != 'posts'): ?>
						<li class="dropdown<?php e($p->isOpen(), ' active') ?>">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<?php foreach($p->children()->visible() as $p): ?>
								<li<?php e($p->isOpen(), ' class="active"') ?>>
									<a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
								</li>
								<?php endforeach ?>
							</ul>
						</li>
		      <?php else : ?>
						<li<?php e($p->isOpen(), ' class="active"') ?>>
							<a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
						</li>
		      <?php endif; ?>

		    </li>
		    <?php endforeach ?>

		    <li><a>|</a></li>
		    <!-- Languages -->
		    <li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#"><?php echo $site->language()->code() ?></a>
				<ul class="dropdown-menu" role="menu">
				    <?php foreach($site->languages() as $language): ?>
				    <li<?php e($site->language() == $language, ' class="active"') ?>>
				      	<a href="<?php echo $page->url($language->code()) ?>">
				        	<?php echo html($language->name()) ?>
				      	</a>
				    </li>
				    <?php endforeach ?>
				 </ul>
			</li>



			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

