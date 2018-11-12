<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Yanna Crafts (bootstrap version)</title>
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<meta charset = "utf-8">
		<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Metamorphous|Roboto|Indie-Flower|Charmonman|Cookie|Courgette|Dancing+Script|Kaushan+Script|Lobster|Lobster+Two|Marck+Script|Pacifico|Pattaya|Sacramento|Satisfy|Spicy+Rice|Srisakdi|Tangerine" rel="stylesheet">
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "styles/index.css">
	</head>
	<body>
		<?php
			if(isset( $_POST['name']))
				$name = $_POST['name'];
			if(isset( $_POST['email']))
				$email = $_POST['email'];
			if(isset( $_POST['message']))
				$message = $_POST['message'];
			if(isset( $_POST['subject']))
				$subject = $_POST['subject'];
			
			if ($name === ''){
				echo "Name cannot be empty.";
				die();
			}
			if ($email === ''){
				echo "Email cannot be empty.";
				die();
			} else {
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
					echo "Email format invalid.";
					die();
				}
			}
			if ($subject === ''){
				echo "Subject cannot be empty.";
				die();
			}
			if ($message === ''){
				echo "Message cannot be empty.";
				die();
			}
			
			$content="From: $name \nEmail: $email \nMessage: $message";
			$recipient = "youremail@here.com";
			$mailheader = "From: $email \r\n";
			mail($recipient, $subject, $content, $mailheader) or die("Error!");
			echo "Email sent!";
		?>
	</body>
</html>