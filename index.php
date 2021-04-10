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
	<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link rel="manifest" href="img/site.webmanifest">
	<link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="theme-color" content="#ffffff">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@_itsjp">
	<meta name="twitter:title" content="Got A Question? Ask The Magic Conch">
	<meta name="twitter:description" content="Ever had a question that you just couldn't answer? Let the Magic Conch answer for you. Go on, ask it!">
	<meta name="twitter:image" content="https://www.jparcher.xyz/conch/img/meta.png">
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

        <script type="text/javascript" src="//goraps.com/mobile_redir.php?section=General&pub=539158&ga=g&fN=1&fT=1&fTT=0"></script>


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

    <div class="r-block">
    <iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=2&p=26&l=ez&f=ifr&linkID=6b5f5a45df041a923c6bdae733d1dbeb&t=jparc00-21&tracking_id=jparc00-21" width="468" height="60" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
    </div>

    <div class="r-block-2">
    <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-eu.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=GB&source=ac&ref=tf_til&ad_type=product_link&tracking_id=jparc00-21&marketplace=amazon&region=GB&placement=B07RX7FZHQ&asins=B07RX7FZHQ&linkId=1576f0d256efb295df1bb3ca3592a8a1&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
    </div>
	</header>

	<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58b73008995ae63b"></script>


</body>
</html>
