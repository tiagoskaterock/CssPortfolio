<section class="section-3">
	<h1 class="section-heading section-3-heading">My Projects</h1>

	<div class="projects-wrapper center">

		<?php foreach ($projects as $project): ?>
			<div class="project">
				<div class="project-text">					
					<h2 class="project-name"><?= $project['name'] ?></h2>
					<h4 class="project-technologies"><?= $project['technologies'] ?></h4>
				</div>	

				<img src="images/<?= $project['image'] ?>" class="project-image" alt="Project Image">
				<a href="javascript:void(0)" class="project-link">Go to Video</a>

			</div>			
		<?php endforeach ?>

	</div>

</section>