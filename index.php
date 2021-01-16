<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="api.php" method="POST" class="form" id="form">
		<div class="form__col">
			<p class="form__title">x1</p>
			<label class="form__label">
				<p class="form__title">x</p>
				<input type="number" step="0.01" class="form__input" name="x1[x]" value="10">
			</label>
			<label class="form__label">
				<p class="form__title">y</p>
				<input type="number" step="0.01" class="form__input" name="x1[y]" value="125">
			</label>
		</div>
		<div class="form__col">
			<p class="form__title">x2</p>
			<label class="form__label">
				<p class="form__title">x</p>
				<input type="number" step="0.01" class="form__input" name="x2[x]" value="200">
			</label>
			<label class="form__label">
				<p class="form__title">y</p>
				<input type="number" step="0.01" class="form__input" name="x2[y]" value="10">
			</label>
		</div>
		<div class="form__col">
			<p class="form__title">p</p>
			<label class="form__label">
				<p class="form__title">x</p>
				<input type="number" step="0.01" class="form__input" name="p[x]" value="85">
			</label>
			<label class="form__label">
				<p class="form__title">y</p>
				<input type="number" step="0.01" class="form__input" name="p[y]" value="50">
			</label>
		</div>
		<div class="form__col">
			<p class="form__title"></p>
			<label class="form__label">
				<p class="form__title">xInput</p>
				<input type="number" step="0.01" class="form__input" name="xInput" value="100">
			</label>
			<label class="form__label">
				<p class="form__title">step</p>
				<input type="number" step="0.01" class="form__input" name="step" value="0.05">
			</label>
		</div>
		<div class="form__col form__col--button">
			<button class="form__button" type="submit">Определить</button>
		</div>
	</form>
	<p id="response" class="response">&nbsp;</p>
	<canvas class="canvas" id="canvas"></canvas>
	<link rel="stylesheet" href="css/main.css">
	<script src='js/main.js'></script>
</body>
</html>