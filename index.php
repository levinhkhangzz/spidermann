<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description"
                content="A Simple Spiderman Game in HTML5, CSS3 and Javascript" />
        <meta name="author" content="Chandula Janith (RedEdge967)" />
	<title>Spider-Man Game | A spiderman game to fight with more Villains of Spider-Man</title>
	<link rel="shortcut icon" href="images/spider-head.png" />
</head>
<style type="text/css">
	html,
	body {
		height: 100%;
		width: 100%;
		margin: 0;
		font-size: 0;
		background: #000;
	}

	.canvas-wrapper {
		float: left;
		position: absolute;
		top: 50%;
		left: 50%;

		-webkit-transform: translate(-50%, -50%);
		-moz-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		-o-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
	}

	.key {
	    height: 30px;
	    min-width: 20px;
	    line-height: 30px;
	    text-align: center;
	    border: 1px solid #ccc;
	    border-bottom: 3px solid #bbb;
	    background: white;
	    display: inline-block;
	    padding: 0 5px;
	    border-radius: 5px;
	    box-shadow: inset 0 -1px 0 #ccc;
	    color: #333;
	    font-weight: bold;
	}

	.key.spacebar {
		padding: 0 40px;
	}

	.keyboard {
		margin: 5px 0;
		font-size: 15px;
	    font-family: Helvetica;
	    color: white;
	}

	.action {
		margin-right: 15px;
	}

	.link {
		width: 100%;
		text-align: center;
		font-size: 20px;
		color: #ccc;
		font-family: SpidermanGamePixelFont, Helvetica, Arial;
		margin-top: 20px;
	}
</style>
<body>
	<div class="canvas-wrapper">
		<div class="keyboard">
			<div class="key spacebar">Spacebar</div>
			<span class="action">- Shoot</span>

			<div class="key">←</div>
			<div class="key">→</div>
			<span class="action">- Left/Right</span>

			<div class="key">↑</div>
			<span class="action">- Jump</span>

			<div class="key">Esc</div>
			<span class="action">- Pause</span>
		</div>
		<canvas id="canvas"></canvas>
		<div class="link">

	</div>
</body>
<script type="text/javascript" src="spiderman-game.php"></script>
<script type="text/javascript">

var game = new SpidermanGame({
	canvas: "#canvas"
});
game.load();

</script>
</html>
