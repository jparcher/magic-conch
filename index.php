<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Ever had a question that you just couldn't answer? Let the Magic Conch answer for you. Go on, ask it!">
	<link rel="shortcut icon" href="img/favicon.ico">
	<title>Got A Question? Ask The Magic Conch</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" type="text/css">
</head>

<body>
	<script type="text/javascript">
		if(top.location != window.location) {
			window.location = 'https://www.jparcher.xyz/conch/error_iframe.php';
		}
	</script>

	<?php
	$answer = array(
		'It is certain',
		'Reply hazy try again',
		'Conch says no',
		'Outlook not so good',
		'Without a doubt',
		'Yes definitely',
		'Nope',
		'You may rely on it',
		'As I see it, yes',
		'Most likely',
		'Outlook good',
		'Yes',
		'Signs point to yes',
		'Ask again later',
		'It is decidedly so',
		'Possibly',
		'Better not tell you now',
		'Cannot predict now',
		'Concentrate and ask again',
		'Dont count on it',
		'My reply is no',
		'Outlook good',
		'My sources say no',
		'Could be',
		'Very doubtful',
		'Nah bro',
		'Hells yeah',
	);

	$i = rand(0, count($answer)-1);
	$selectedAnswer = "$answer[$i]";
	?>

	<header id="top" class="header">
		<div class="text-vertical-center">
			<a href="/conch"><img src="img/conch.png" alt="The Magic Conch"></a>
			<h1>Ask the Magic Conch</h1>
			<br>
			<?php

			$success = false;
			$errors = '';
			if (!empty($_GET)) {

				if (empty($_GET['question'])) $errors .= '<div class="error bottom">Please ask the magic conch a question.<br /></div>';
				else $question = $_GET["question"];


				if (empty($errors)) {
					$success = true;

				}
							// otherwise, display errors
				else {
					echo $errors;
				}
			}


			if ($success == true) {
				?>
				<h2 class="question"><?php echo $question ?>?</h2>
				<br><h3 class="text-center"><?php echo  $selectedAnswer; ?></h3><br/>

				<a href="/conch" class="btn btn-dark btn-lg">Ask a different question...</a>

				<?php
			}
						// Otherwise, show the form
			else {
				?>

				<div class="form__block">
					<form method="get">
						<input type="text" name="question" placeholder="Enter your question..."/>

						<input type="submit" class="btn btn-dark btn-lg" value="Ask The Conch"/>
					</form>
				</div>
				<?php
			}	?>
		</div>
	</header>

	<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58b73008995ae63b"></script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-59785229-1', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>
