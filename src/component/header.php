<?php
?>
<header>
	<h1><a>Noël Alméras</a></h1>
	<nav>
		<ul>
			<li><a href="/">Accueil</a></li>
			<li><a href="#">Sève de Bouleau</a></li>
			<li>
				<div href="#click" class="menu">
					<a class="menu-title">Produits</a>
					<ul class="menu-dropdown">
                        <?php foreach ($products as $product) : ?>
                            <a href="<?= $product["url"] ?>"><?= $product["nom_produit"] ?></a>
                        <?php endforeach; ?>
					</ul>
				</div>
			</li>
		</ul>
	</nav>
</header>
<?php
