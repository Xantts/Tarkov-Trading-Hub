<?php
$params['app']->doInclude('/vistas/helpers/plantilla.php');
$mensajes = mensajesPeticionAnterior();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title><?= $params['tituloPagina'] ?></title>
	<link rel="stylesheet" type="text/css" href="<?= $params['app']->resuelve('\css\index.css') ?>" />
</head>

<body>
	<?= $mensajes ?>
	<div id="contenedor">
		<?php
		$params['app']->doInclude('/vistas/comun/inicio.php');
		?>
		<main>
			<article>
				<?= $params['contenidoPrincipal'] ?>
			</article>
		</main>
		<?php
		?>
	</div>
</body>

</html>