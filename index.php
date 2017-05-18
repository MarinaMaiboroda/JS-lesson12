<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="icon" href="">
    <!--<link type="text/css" rel="stylesheet" href="css/main.css">-->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<header>
	</header>

	<main>
		<form id="ajax_form" method="post">
			<label for="user_name">User name</label>
			<input id="user_name" name="name" minlenght="2" value="" />
			<label for="user_email">User email</label>
			<input id="user_email" name="email" type="email" value="" /> 
			<label for="user_phone">User phone</label>
			<input id="user_phone" name="phone" value="" />
			<label for="comment">Comments</label>
			<textarea id="comment" value=""></textarea>
			<button id="send_btn" type="submit">Send</button>
		</form>
		
		<div id="result_form"><div> 
		
		<button id="parse_json" type="button">Parse json</button>
	</main>

	<footer>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>-->
	<script src="js/ajax.js"></script>
</body>
</html>