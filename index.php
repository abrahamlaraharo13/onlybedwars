<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><img src="http://pipsum.com/128x128.jpg" width="45" alt="Pescame"></li>
				<li>
					<form action="#">
						<input type="text" placeholder="Buscar">
						<button>
							<img src="img/glasses.png" height="10" alt="Buscar">
						</button>
					</form>
				</li>
				<!-- <li>Datos</li> -->
			</ul>
		</nav>
	</header>
	<div class="container">

		<article>

			<?php 
				for ($i=0; $i < 10; $i++) { 
			?>
			<section>
				<div class="avatar">
					<div class="background_image" style="background:url(http://pipsum.com/128x128.jpg);"></div>
					<img src="http://pipsum.com/64x64.jpg" alt="">
					<div class="action">
						<h1>peroerd587</h1>
						<div class="share_buttons">
							<a href="#" title="Compartir en facebook" ><span class="fb"></span></a>
							<a href="#" title="Compartir en twitter" ><span class="tw"></span></a>
							<a href="#" title="Compartir en Google+" ><span class="g"></span></a>
							<a href="#" title="Compartir en Instagram" ><span class="ins"></span></a>
						</div>
					</div>
				</div>
				<div class="status">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur exercitationem sit dolores recusandae, reprehenderit atque eos quod excepturi sunt mollitia maxime corrupti, fuga modi vel non architecto quos perspiciatis aperiam? iciatis aperiam
					</p>
				</div>
				<div style="clear:both;"></div>
			</section>
			<?php
			}
			?>

		</article>


		<aside>

			<div class="user_information">
				<div class="avatar">
					<img src="http://pipsum.com/128x128.jpg" alt="Avatar" width="100">
				</div>
				<div class="information">
					<h1 id="user_nick">PerroDelMal</h1>
					<h1 id="user_name">Benito Camelo</h1>
					<div class="stats">
						<span class="rating">32K</span>
						<span class="rating_text">veces leído</span>
					</div>
				</div>
				<div style="clear:both;"></div>
			</div>

			<nav>
				<ul>
					<li onclick="#">Opción 1</li>
					<li onclick="#">Opción 2</li>
					<li onclick="#">Opción 3</li>
					<li onclick="#">Opción 4</li>
				</ul>
			</nav>
		</aside>

		<div style="clear:both;"></div>
	</div>
	
</body>
</html>