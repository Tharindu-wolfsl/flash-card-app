<!DOCTYPE html>
<html>
<head>
	<title>Waiting Page</title>
	<style type="text/css">
		body {
			background-image: url("background.jpg");
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
			margin: 0;
			padding: 0;
			height: 100vh;
		}

		.container {
			width: 80%;
			max-width: 480px;
			height: 80%;
			max-height: 700px;
			margin: 0 auto;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
			background-color: #fff;
			padding: 30px;
			border-radius: 30px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}

		.container img {
			display: block;
			margin: 0 auto;
			max-width: 100%;
			margin-top: -20px;
			padding-top: 20px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}

		.container h1 {
			font-size: 40px;
			margin-bottom: 20px;
			margin-top:40px;
		}

		.dots {
			font-size: 30px;
			animation: blink 1s infinite;
		}

		@keyframes blink {
			50% {
				opacity: 0;
			}
		}

		@media only screen and (max-width: 768px) {
			.container {
				width: 90%;
				max-width: 500px;
				height: 60%;
				max-height: 500px;
			}

			.container h1 {
				font-size: 30px;
			}

			.dots {
				font-size: 20px;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="logo1.jpg">
		<h1>Waiting<span class="dots">...</span></h1>
	</div>
</body>
</html>
