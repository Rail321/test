<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<canvas class="canvas" id="canvas"></canvas>

	<?php

		$x1 = array(
			'x' => 10,
			'y' => 110,
		);

		$x2 = array(
			'x' => 110,
			'y' => 10,
		);

		$p = array(
			'x' => 110,
			'y' => 110,
		);

		$xInput = 110;

		echo getY( $xInput, $x1, $x2, $p);

		function getY( $xInput, $x1, $x2, $p) {

			if( $xInput >= $x1['x'] && $xInput <= $x2['x'] || $xInput <= $x1['x'] && $xInput >= $x2['x'] ) {
				$proportion = ($xInput - $x1['x']) / ( $x2['x'] - $x1['x']);
				$stroke1['x'] = $x1['x'] + ($p['x'] - $x1['x']) * $proportion;
				$stroke1['y'] = $x1['y'] + ($p['y'] - $x1['y']) * $proportion;
				$stroke2['x'] = $p['x'] + ($x2['x'] - $p['x']) * $proportion;
				$stroke2['y'] = $p['y'] + ($x2['y'] - $p['y']) * $proportion;
				$yOutput = $stroke1['y'] + ($stroke2['y'] - $stroke1['y']) * $proportion;
				echo $yOutput;
			}
		}

	?>

	<link rel="stylesheet" href="css/main.css">
	<script src='js/main.js'></script>
</body>
</html>