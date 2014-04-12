<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php echo $pagename; ?>
		</title>
	</head>
	<body>

		<h1> <?php echo $title; ?></h1>

		<div class="container">
			<div class="content">
				
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

			</div>
		</div>

	</body>
</html>