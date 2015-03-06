<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Ninja Gold Game</title>
		<style>
			body {
				width: 1000px;
				margin: 0 auto;
				padding-top: 50px;
				background-color: black;
				background-image: url("http://3.bp.blogspot.com/-i6B9FeE987Q/U-SDirjFGJI/AAAAAAAA2d8/_dqu0x292Nc/s1600/LEGO_Ninjago_Gold.jpg");
				background-repeat: no-repeat;
			}
			.box {
				width: 225px;
				height: 170px;
				display: inline-block;
				border: 1px solid black;
				margin: 10px;
				text-align: center;
				background-color: white;
				opacity: .8;
			}
			#activities {
				width: 966px;
				border: 1px solid black;
				margin: 0 auto;
				overflow: scroll;
				height: 200px;
				background-color: white;
				color: green;
				opacity: .8;
				font-size: 22px;
				padding-left: 14px;
			}
			#white-text {
				color: gold;
				font-size: 26px;
				display: inline-block;
			}
			#gold {
				border: 1px solid black;
				width: 130px;
				height: 30px;
				font-size: 26px;
				padding: 4px;
				display: inline-block;
				background-color: white;
				opacity: .8;
			}
			input {
				font-size: 14px;
				background-color: gold;
				width: 100px;
				height: 40px;
			}
			#reset {
				width: 140px;
				margin-right: auto;
				margin-left: auto;
				margin-top: 20px;
			}
			.red {
				color: red;
			}

		</style>
	</head>
	<body>
		<p id="white-text">Your Gold:  </p>
		<div id="gold">
			<?php
				if (isset($_SESSION['gold'])){}
				else {
					$_SESSION['gold']=0;
				}
			echo $_SESSION['gold'];
			?>
		</div>
		<div id="ninja">
			<div class="box">
				<h2>Farm</h2>
				<h3>(earns 10-20 golds)</h3>
				<form action="process.php" method="post" name="place">
					<input type="submit" name="farm" value="Find Gold!"></button>
					<input type="hidden" name="action" value="register">
				</form>
			</div>
			<div class="box">
				<h2>Cave</h2>
				<h3>(earns 5-10 golds)</h3>
				<form action="process.php" method="post" name="place">
					<input type="submit" name="cave" value="Find Gold!"></button>
					<input type="hidden" name="action" value="register">
				</form>
			</div>
			<div class="box">
				<h2>House</h2>
				<h3>(earns 2-5 golds)</h3>
				<form action="process.php" method="post" name="place">
					<input type="submit" name="house" value="Find Gold!"></button>
					<input type="hidden" name="action" value="register">
				</form>
			</div>
			<div class="box">
				<h2>Casino!</h2>
				<h3>(earns/takes 0-50 golds)</h3>
				<form action="process.php" method="post" name="place">
					<input type="submit" name="casino" value="Find Gold!"></button>
					<input type="hidden" name="action" value="register">
				</form>
			</div>
		</div>
		<p>Activities</p>
		<div id="activities">
			<p></p>
			<?php
				if(isset($_SESSION['success']))
				{
					foreach ($_SESSION['success'] as $display)
					{
						echo $display."<br>";
					}
				}

			?>
		</div>
		<div id="reset">
			<form action="reset.php" method="post" name="place">
				<input type="submit" id="reset" name="reset" value="START OVER"></button>
			</form>
		</div>
	</body>
</html>