<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>
			<?php echo $pagename; ?>
		</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css" />
	</head>
	<body>

		<?php 
			if(is_array($body)){
				foreach ($body as $b => $value) {
					echo $value;
				}
			}
			else{
				echo $body;
			}
		 ?>

		 <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
		 <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>