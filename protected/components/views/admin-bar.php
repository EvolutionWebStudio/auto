<nav class="top-bar admin-navigation" data-topbar>
	<ul class="title-area">
		<li class="name">
		</li>
		<li class="toggle-topbar menu-icon">
			<a href="#"><span><span class="fa fa-chevron-down"></span> Administracija</span></a>
		</li>
	</ul>
	<section class="top-bar-section"> <!-- Right Nav Section -->
		<ul class="right">
			<li class="has-dropdown">
				<a href="#"><span class="fa fa-user"></span> <?php echo Yii::app()->user->name; ?></a>
				<ul class="dropdown">
					<li>
						<?php echo CHtml::link('Odjavi se',array('site/logout')); ?>
					</li>
				</ul>
			</li>
		</ul> <!-- Left Nav Section -->
		<ul class="left">
			<li>
				<?php echo CHtml::link('<span class="fa fa-plus-square"></span> Novi automobil',array('car/create')); ?>
			</li>
			<li>
				<?php echo CHtml::link('<span class="fa fa-plus-square"></span> Novi proizvođač',array('mark/admin')); ?>
			</li>
			<li>
				<?php echo CHtml::link('<span class="fa fa-pencil"></span> O nama',array('page/update/1')); ?>
			</li>
			<li>
				<?php echo CHtml::link('<span class="fa fa-pencil"></span> Kontakt',array('contact/update/1')); ?>
			</li>
			<li>
				<?php echo CHtml::link('<span class="fa fa-sort"></span> Sortiraj automobile',array('site/sortiranje')); ?>
			</li>
		</ul>
	</section>
</nav>
