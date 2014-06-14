<div class="row">
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name">
				<h1><a href="#">My Site</a></h1>
			</li> <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon">
				<a href="#"><span>Menu</span></a>
			</li>
		</ul>
		<section class="top-bar-section"> <!-- Right Nav Section -->
			<ul class="right">
				<li class="active">
					<a href="#">Right Button Active</a>
				</li>
				<li class="has-dropdown">
					<a href="#">Right Button Dropdown</a>
					<ul class="dropdown">
						<li>
							<?php echo CHtml::link('Odjavi se',array('site/logout')); ?>
						</li>
					</ul>
				</li>
			</ul> <!-- Left Nav Section -->
			<ul class="left">
				<li>
					<?php echo CHtml::link('Dodaj automobil',array('car/create')); ?>
				</li>
			</ul>
		</section>
	</nav>
</div>