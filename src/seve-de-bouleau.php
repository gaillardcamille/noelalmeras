<!DOCTYPE html>
<html lang="fr">

<?php
include_once 'component/head.php';
?>

<body>

	<?php
	include_once 'component/header.php';
	?>

	<section id=image_bg style='background-image: linear-gradient(0deg,
	rgba(245, 255, 250, 1) 0%, rgba(255, 255, 255, 0) 100%),
	url("img/foret-bouleau.jpeg")'>
	</section>

	<section id="le_produit">

		<img src="img/bouteille1Lseve.png" alt="Noël Alméras" />

		<div id="infos_produit">
			<h2>Sève de bouleau</h2>
			<h3>La bouteille / Le cubis </h3>
			<p>15€ 1L / 20€ 3L</p>
			<p>Disponible</p>
			<button onClick="Contact()">Contacter</button>
		</div>

	</section>

	<?php
	include_once 'component/footer.php';
	?>

	<script>
		function Contact() {
			alert("Appeler le +33 6 70 76 67 64 pour commander");
		}
	</script>

</body>

</html>