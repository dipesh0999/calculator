<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php require_once 'head.php'; ?>

	<title>Calculator</title>

</head>
<body>
	<?php require_once 'header.php'; ?>

	<main class="wrapper">
		<div class="container">
			<div class="text">Calculator</div>
			<div class="cal">
				<form action="">
					<div class="display">
						<input type="text" name="display">
					</div>
					<div>
						<input type="button" value="AC" onclick="display.value = ''">
						<input type="button" value="DE" onclick="display.value = display.value.tostring().slice(0,-1)">
						<input type="button" value="." onclick="display.value += '.'">
						<input type="button" value="/" onclick="display.value += '/'">
					</div>
					<div>
						<input type="button" value="7" onclick="display.value += '7'">
						<input type="button" value="8" onclick="display.value += '8'">
						<input type="button" value="9" onclick="display.value += '9'">
						<input type="button" value="*" onclick="display.value += '*'">
					</div>
					<div>
						<input type="button" value="4" onclick="display.value += '4'">
						<input type="button" value="5" onclick="display.value += '5'">
						<input type="button" value="6" onclick="display.value += '6'">
						<input type="button" value="-" onclick="display.value += '-'">
					</div>
					<div>
						<input type="button" value="1" onclick="display.value += '1'">
						<input type="button" value="2" onclick="display.value += '2'">
						<input type="button" value="3" onclick="display.value += '3'">
						<input type="button" value="+" onclick="display.value += '+'">
					</div>
					<div>
						<input type="button" value="00" onclick="display.value += '00'">
						<input type="button" value="0" onclick="display.value += '0'">
						<input type="button" value="=" onclick="display.value = eval(display.value)" class="equal">
					</div>
				</form>
			</div>
		</div>
	</main>

	<?php require_once 'footer.php'; ?>
</body>
</html>