<header class="transition">

	<div class="container">
		<div class="col-md-12">
			
			<a class="branding" href="./">
				<img class="img-fluid logo transition" src="./img/header/logo-dellabitta.png" alt="logo dellabitta ascensores">
			</a>

			<div id="toggleIcon" class="transition">
				<i id="hamburger" class="fas fa-bars"></i>
			</div>

			<section id="menu" class="transition">

				<nav>

					<ul id="navigation">
						<li>
							<?php $res = $current == 'home' ? 'active' : ''; ?>
							<a class="<?= $res ?> transition" href="./">HOME</a>
						</li>

						<li>
							<?php $res = $current == 'empresa' ? 'active' : ''; ?>
							<a class="<?= $res ?> transition" href="./empresa.php">EMPRESA</a>
						</li>

						<li>
							<?php $res = $current == 'productos' ? 'active' : ''; ?>
							<a class="<?= $res ?> transition" href="./productos.php">PRODUCTOS</a>
						</li>

						<li>
							<?php $res = $current == 'contacto' ? 'active' : ''; ?>
							<a class="<?= $res ?> transition" href="./contacto.php">CONTACTO</a>
						</li>

					</ul>

				</nav>

			</section>
			
		</div>
	</div>

</header>