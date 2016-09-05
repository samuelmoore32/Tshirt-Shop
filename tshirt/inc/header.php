<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
	
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./">T-shirts</a></h1>

			<ul class="nav">
				<li class="shirts <?php if ($section == "shirts") { echo "on"; } ?>"><a href="shirts.php">Shirts</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="contact.php">Contact</a></li>
				<li class="cart"><a target="paypal" href="#">Shopping Cart</a></li>
			</ul>

		</div>

	</div>

	<div id="content">