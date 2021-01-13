canvas = document.querySelector('#canvas');
ctx = canvas.getContext('2d');

ctx.width = window.innerWidth;
ctx.height = window.innerHeight;

let xhr = new XMLHttpRequest();

xhr.open( 'GET', 'api.php');

xhr.send();

xhr.onreadystatechange = () => {

	if(xhr.readyState === 4 && xhr.status === 200) {
		response = xhr.responseText;
		values = JSON.parse(response);
		console.log( values);

		ctx.fillStyle = 'white';
		ctx.fillRect( values.x1.x, values.x1.y, 5, 5);
		ctx.fillRect( values.x2.x, values.x2.y, 5, 5);

		for (var i = 0; i < values.sequence.x.length; i++) {
			ctx.fillRect( values.sequence.x[i], values.sequence.y[i], 2.5, 2.5);
		}

		ctx.fillStyle = 'red';
		ctx.fillRect( values.xInput.x, values.xInput.y, 5, 5);

		ctx.fillStyle = 'blue';
		ctx.fillRect( values.p.x, values.p.y, 5, 5);

		document.querySelector('#response').innerHTML = "Значение Y равно: " + values.xInput.y;
	}

}