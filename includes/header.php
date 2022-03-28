<header>

	<div class="container">
		<div class="col-md-12">
			
			<a class="close_subnavigation" href="./">
				<img class="img-fluid" src="./img/header/logo-wg.png" alt="logo wg">
			</a>

			<div id="toggleIcon">
				<i id="hamburger" class="fas fa-bars"></i>
			</div>

			<section id="menu">

				<nav>

					<ul id="navigation">
						<li>
							<?php $res = $current == 'home' ? 'active' : ''; ?>
							<a class="<?= $res ?>" href="./index.php">HOME</a>
						</li>
					</ul>

				</nav>

			</section>
			
		</div>
	</div>

</header>