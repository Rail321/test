canvas = document.querySelector('#canvas');
ctx = canvas.getContext('2d');

ctx.width = window.innerWidth;
ctx.height = window.innerHeight;

ctx.transform(1, 0, 0, -1, 0, canvas.height)

const resizeX = 1;
const resizeY = 0.75;

const form = document.querySelector("#form");

form.addEventListener('submit', (event) => {
	event.preventDefault();

	let xhr = new XMLHttpRequest();

	xhr.open( 'POST', 'api.php');

	xhr.send( new FormData(form));

	xhr.onreadystatechange = () => {

		if(xhr.readyState === 4 && xhr.status === 200) {
			response = xhr.responseText;
			values = JSON.parse(response);

			ctx.fillStyle = 'black';
			ctx.fillRect( 0, 0, ctx.width, ctx.height);

			ctx.fillStyle = 'white';
			ctx.fillRect( values.x1.x * resizeX, values.x1.y * resizeY, 3, 3);
			ctx.fillRect( values.x2.x * resizeX, values.x2.y * resizeY, 3, 3);

			for (var i = 0; i < values.sequence.x.length; i++) {
				ctx.fillRect( values.sequence.x[i] * resizeX, values.sequence.y[i] * resizeY, 1.5, 1.5);
			}

			ctx.fillStyle = 'red';
			ctx.fillRect( values.xInput.x * resizeX, values.xInput.y * resizeY, 3, 3);

			ctx.fillStyle = 'blue';
			ctx.fillRect( values.p.x * resizeX, values.p.y * resizeY, 3, 3);

			document.querySelector('#response').innerHTML = "Значение Y равно: " + values.xInput.y;
		}

	}

});