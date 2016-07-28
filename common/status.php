<article>
	<section class="writer">
		<textarea placeholder="¿Qué piensas?"></textarea>
		<div class="buttons-writer">
			<button class="default">Frases célebres</button>
			<button class="general">Publicar</button>
		</div>
	</section>

	<?php 
		for ($i=0; $i < 10; $i++) { 
	?>
	<section>
		<div class="avatar">
			<div class="background_image">
				<img src="img/avatar64.jpg" alt="">
			</div>
			<div class="action">
				<h2><a href="profile.php">Benito Camelo Parado Al Fondo</a></h2>
				<h3> <a href="#">Hace dos horas</a></h3>
			</div>
			<div style="clear:both;"></div>
		</div>
		<div class="status">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur exercitationem sit dolores recusandae, reprehenderit atque eos quod excepturi sunt mollitia maxime corrupti, fuga modi vel non architecto quos perspiciatis aperiam? iciatis aperiam
			</p>
		</div>
		<div class="like_tools">
			<a href="#" class="like_button">Me gusta</a>
			<a href="#" class="dislike_button">No me gusta</a>
			<a href="#openmodal" class="comments_button">25 Comentarios</a>
		</div>
	</section>
	<?php
	}
	?>

</article>