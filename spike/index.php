<!DOCTYPE html>
<html lang="en">
<head>
	<?PHP 
		include "app/config.php";
	?>
	<script>
		var baseUrl = '<?PHP echo($baseUrl); ?>';
	</script>
	<meta charset="UTF-8">
	<title>Spike Email Test - Enrico Coccia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="favicon.ico"/>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<script src="js/function.js"></script>	
</head>
<body>
	<div class="container">
		<div class="wrapper">
			<div class="box-download text-center">
				<a href="https://www.enricococcia.com/spike/template-email.html">Download HTML</a>
				<a href="https://github.com/enricococcia/template-email-generator">Download Source</a>
			</div>
			<h1 class="title text-center"><b>Spike</b> Email Template Generator</h1>
			<p class="info-text text-center">Complete the form for send the message.</p>
			<form class="form-spike" id="form-spike">
				<div class="form-group">
					<label for="name">Name*</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
				</div>
				<div class="form-group">
					<label for="email">Email address*</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
				</div>
				<div class="form-group">
					<label for="message">Message*</label>
					<textarea class="form-control" id="message" name="message" placeholder="Enter your message" maxlength="100" rows="6" required></textarea>
				</div>
				<div class="text-right">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>

		</div>

	</div>
	<div class="site-overlay"></div>
	
	<div class="modal" tabindex="-1" role="dialog" id="modal-actions">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="titleActions"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="alert alert-danger" style="display: none;" id="descriptionActionsDanger"></div>
					<div class="alert alert-success" style="display: none;" id="descriptionActionsSuccess"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
				</div>
			</div>
		</div> 
	</div> 

	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>