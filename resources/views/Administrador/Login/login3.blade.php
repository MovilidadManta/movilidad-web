<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap css -->
	<link href="valex/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<title>Document</title>
	<style>
		html {
			background: url('/valex/assets/img/fo.jfif') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			overflow: hidden;
		}

		img {
			display: block;
			margin: auto;
			width: 100%;
			height: auto;
		}

		#login-button {
			cursor: pointer;
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			padding: 30px;
			margin: auto;
			width: 100px;
			height: 100px;
			border-radius: 50%;
			background: rgba(3, 3, 3, 0.8);
			overflow: hidden;
			opacity: 0.4;
			box-shadow: 10px 10px 30px #000;
		}

		/* Login container */
		#container {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			margin: auto;
			width: 260px;
			height: 260px;
			border-radius: 5px;
			background: rgba(3, 3, 3, 0.25);
			box-shadow: 1px 1px 50px #000;
			display: none;
		}

		.close-btn {
			position: absolute;
			cursor: pointer;
			font-family: "Open Sans Condensed", sans-serif;
			line-height: 18px;
			top: 3px;
			right: 3px;
			width: 20px;
			height: 20px;
			text-align: center;
			border-radius: 10px;
			opacity: 0.2;
			-webkit-transition: all 2s ease-in-out;
			-moz-transition: all 2s ease-in-out;
			-o-transition: all 2s ease-in-out;
			transition: all 0.2s ease-in-out;
		}

		.close-btn:hover {
			opacity: 0.5;
		}

		/* Heading */
		h1 {
			font-family: "Open Sans Condensed", sans-serif;
			position: relative;
			margin-top: 0px;
			text-align: center;
			font-size: 40px;
			color: #ddd;
			text-shadow: 3px 3px 10px #000;
		}

		/* Inputs */
		a,
		input {
			font-family: "Open Sans Condensed", sans-serif;
			text-decoration: none;
			position: relative;
			width: 80%;
			display: block;
			margin: 9px auto;
			font-size: 17px;
			color: #fff;
			padding: 8px;
			border-radius: 6px;
			border: none;
			background: rgba(3, 3, 3, 0.1);
			-webkit-transition: all 2s ease-in-out;
			-moz-transition: all 2s ease-in-out;
			-o-transition: all 2s ease-in-out;
			transition: all 0.2s ease-in-out;
		}

		input:focus {
			outline: none;
			box-shadow: 3px 3px 10px #333;
			background: rgba(3, 3, 3, 0.18);
		}

		/* Placeholders */
		::-webkit-input-placeholder {
			color: #ddd;
		}

		:-moz-placeholder {
			/* Firefox 18- */
			color: red;
		}

		::-moz-placeholder {
			/* Firefox 19+ */
			color: red;
		}

		:-ms-input-placeholder {
			color: #333;
		}

		/* Link */
		a {
			font-family: "Open Sans Condensed", sans-serif;
			text-align: center;
			padding: 4px 8px;
			background: rgba(107, 255, 3, 0.3);
		}

		a:hover {
			opacity: 0.7;
		}

		#remember-container {
			position: relative;
			margin: -5px 20px;
		}

		.checkbox {
			position: relative;
			cursor: pointer;
			-webkit-appearance: none;
			padding: 5px;
			border-radius: 4px;
			background: rgba(3, 3, 3, 0.2);
			display: inline-block;
			width: 16px;
			height: 15px;
		}

		.checkbox:checked:active {
			box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05),
				inset 0px 1px 3px rgba(0, 0, 0, 0.1);
		}

		.checkbox:checked {
			background: rgba(3, 3, 3, 0.4);
			box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05),
				inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05),
				inset 15px 10px -12px rgba(255, 255, 255, 0.5);
			color: #fff;
		}

		.checkbox:checked:after {
			content: "\2714";
			font-size: 10px;
			position: absolute;
			top: 0px;
			left: 4px;
			color: #fff;
		}

		#remember {
			position: absolute;
			font-size: 13px;
			font-family: "Hind", sans-serif;
			color: rgba(255, 255, 255, 0.5);
			top: 7px;
			left: 20px;
		}

		#forgotten {
			position: absolute;
			font-size: 12px;
			font-family: "Hind", sans-serif;
			color: rgba(255, 255, 255, 0.2);
			right: 0px;
			top: 8px;
			cursor: pointer;
			-webkit-transition: all 2s ease-in-out;
			-moz-transition: all 2s ease-in-out;
			-o-transition: all 2s ease-in-out;
			transition: all 0.2s ease-in-out;
		}

		#forgotten:hover {
			color: rgba(255, 255, 255, 0.6);
		}

		#forgotten-container {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			margin: auto;
			width: 260px;
			height: 180px;
			border-radius: 10px;
			background: rgba(3, 3, 3, 0.25);
			box-shadow: 1px 1px 50px #000;
			display: none;
		}

		.orange-btn {
			background: rgba(87, 198, 255, 0.5);
		}
	</style>
</head>

<body>
	<div id="login-button">
		<img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
		</img>
	</div>
	<div id="container">
		<h1>Log In</h1>
		<span class="close-btn">
			<img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
		</span>

		<form>
			<input type="email" name="email" placeholder="E-mail">
			<input type="password" name="pass" placeholder="Password">
			<a href="#">Log in</a>
			<!--<div id="remember-container">
				<input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked" />
				<span id="remember">Remember me</span>
				<span id="forgotten">Forgotten password</span>
			</div>-->
		</form>
	</div>

	<!-- Forgotten Password Container -->
	<div id="forgotten-container">
		<h1>Forgotten</h1>
		<span class="close-btn">
			<img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
		</span>

		<form>
			<input type="email" name="email" placeholder="E-mail">
			<a href="#" class="orange-btn">Get new password</a>
		</form>
	</div>
</body>
<!-- JQuery min js -->
<script src="valex/assets/plugins/jquery/jquery.min.js"></script>

<script>
	$("#login-button").fadeOut("slow", function() {
			$("#container").fadeIn();
			TweenMax.from("#container", 0.4, {
				scale: 0,
				ease: Sine.easeInOut
			});
			TweenMax.to("#container", 0.4, {
				scale: 1,
				ease: Sine.easeInOut
			});
		});
	$("#login-button").click(function() {
		$("#login-button").fadeOut("slow", function() {
			$("#container").fadeIn();
			TweenMax.from("#container", 0.4, {
				scale: 0,
				ease: Sine.easeInOut
			});
			TweenMax.to("#container", 0.4, {
				scale: 1,
				ease: Sine.easeInOut
			});
		});
	});

	$(".close-btn").click(function() {
		TweenMax.from("#container", 0.4, {
			scale: 1,
			ease: Sine.easeInOut
		});
		TweenMax.to("#container", 0.4, {
			left: "0px",
			scale: 0,
			ease: Sine.easeInOut
		});
		$("#container, #forgotten-container").fadeOut(800, function() {
			$("#login-button").fadeIn(800);
		});
	});

	/* Forgotten Password */
	$("#forgotten").click(function() {
		$("#container").fadeOut(function() {
			$("#forgotten-container").fadeIn();
		});
	});
</script>

</html>