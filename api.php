<?php

	$x1 = array(
		'x' => 10,
		'y' => 10,
	);

	$x2 = array(
		'x' => 200,
		'y' => 125,
	);

	$p = array(
		'x' => 10,
		'y' => 50,
	);

	$xInput = 100;

	$step = 0.05;

	function getValues( $xInput, $x1, $x2, $p, $stepProportion) {

		$response['x1'] = $x1;
		$response['x2'] = $x2;
		$response['p'] = $p;
		$response['xInput']['x'] = $xInput;
		$response['xInput']['y'] = getY( $xInput, $x1, $x2, $p);
		$response['sequence'] = array();

		$step = abs($x1['x'] - $x2['x']) * $stepProportion;

		for ($x=min($x1['x'],$x2['x']); $x <= max($x1['x'],$x2['x']); $x += $step) {
			$response['sequence']['x'][] = $x;
			$response['sequence']['y'][] = getY( $x, $x1, $x2, $p);
		}

		return $response;

	}

	function getY( $xInput, $x1, $x2, $p) {

		$proportion = ($xInput - $x1['x']) / ( $x2['x'] - $x1['x']);
		$stroke1['x'] = $x1['x'] + ($p['x'] - $x1['x']) * $proportion;
		$stroke1['y'] = $x1['y'] + ($p['y'] - $x1['y']) * $proportion;
		$stroke2['x'] = $p['x'] + ($x2['x'] - $p['x']) * $proportion;
		$stroke2['y'] = $p['y'] + ($x2['y'] - $p['y']) * $proportion;
		$yOutput = $stroke1['y'] + ($stroke2['y'] - $stroke1['y']) * $proportion;
		return $yOutput;

	}

	$response = getValues( $xInput, $x1, $x2, $p, $step);

	echo json_encode( $response);

?>