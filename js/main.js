canvas = document.querySelector('#canvas');
ctx = canvas.getContext('2d');

ctx.width = window.innerWidth;
ctx.height = window.innerHeight;

x1 = {
	x: 0,
	y: 100,
	color: 'black',
	thikness: 1,
};

x2 = {
	x: 100,
	y: 0,
	color: 'black',
	thikness: 1,
};

p = {
	x: 0,
	y: 0,
	color: 'black',
	thikness: 1,
};

step = 0.05;

ctx.fillRect( x1.x, x1.y, x1.thikness, x1.thikness, x1.color);
ctx.fillRect( x2.x, x2.y, x2.thikness, x2.thikness, x2.color);
ctx.fillRect( p.x, p.y, p.thikness, p.thikness, p.color);

for (var i = 0.0; i <= 1.0; i += step) {
	console.log(i);
}