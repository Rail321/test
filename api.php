<?php

	$x1 = array(
		'x' => floatval($_POST['x1']['x']),
		'y' => $_POST['x1']['y'],
	);

	$x2 = array(
		'x' => $_POST['x2']['x'],
		'y' => $_POST['x2']['y'],
	);

	$p = array(
		'x' => $_POST['p']['x'],
		'y' => $_POST['p']['y'],
	);

	$xInput = $_POST['xInput'];

	$step = $_POST['step'];

	$response['x1'] = $x1;
	$response['x2'] = $x2;
	$response['p'] = $p;
	$response['sequence'] = array();

	for ($i = 0; $i <= 1; $i += $step) {
		$ex1 = $x1['x'] + ($p['x'] - $x1['x']) * $i;
		$ey1 = $x1['y'] + ($p['y'] - $x1['y']) * $i;
		$ex2 = $p['x'] + ($x2['x'] - $p['x']) * $i;
		$ey2 = $p['y'] + ($x2['y'] - $p['y']) * $i;
		$response['sequence']['x'][]  = $ex1 + ($ex2 - $ex1) * $i;
		$response['sequence']['y'][]  = $ey1 + ($ey2 - $ey1) * $i;
	}

	for ($i = 0; $i < count($response['sequence']['x']); $i++) {

		if( ($response['sequence']['x'][$i] <= $xInput) && ($xInput <= $response['sequence']['x'][$i + 1]) ) {
			$proportion = ( $xInput - $response['sequence']['x'][$i] ) / ( $response['sequence']['x'][$i + 1] - $response['sequence']['x'][$i] );
			$response['xInput']['x'] = $xInput;
			$response['xInput']['y'] = $response['sequence']['y'][$i] + ( $response['sequence']['y'][$i + 1] - $response['sequence']['y'][$i]) * $proportion;
		}

	}

	echo json_encode( $response);

?>