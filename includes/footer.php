	<footer class="footer center">

		<div class="social-media">
			<?php foreach ($social_media as $item): ?>
				<a href="javascript:void(0)" class="social-media-link">
					<i class="<?= $item['icon'] ?>"></i>
				</a>				
			<?php endforeach ?>
		</div>

		<p class="copyright">
			Copyright &copy; CodeAndCreate.
			All Rights Reserved
		</p>
		
	</footer>


	<script src="js/js.js"></script>
</body>
</html>