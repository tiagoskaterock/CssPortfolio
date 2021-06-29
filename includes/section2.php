<section class="section-2" id="section-about">

	<h1 class="section-heading section-2-heading">About me</h1>

	<div class="progress-bars-wrapper">
		<?php foreach ($bars as $bar): ?>
			<div class="progress-bar">
				<p class="progress-text">
					<?= $bar['name'] ?>
					<span><?= $bar['percent'] ?></span>%
					<div class="progress-percent"></div>
			</div>
		<?php endforeach ?>
	</div>

	<div class="services">
		<?php foreach ($services as $service): ?>
			<div class="service">
				<i class="<?= $service['icon'] ?>"></i>
				<h2 class="service-heading"><?= $service['name'] ?></h2>
			</div>
		<?php endforeach ?>
	</div>		

</section>