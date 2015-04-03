
<html>
<head>
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $pageID; ?></title>
    <link href='http://fonts.googleapis.com/css?family=Lustria|Cinzel:400,700' rel='stylesheet' type='text/css'>	
    <link rel="stylesheet" href="<?php echo BASE_URL;?>css/normalize.css">
	<link rel="stylesheet" href="<?php echo BASE_URL;?>css/styles.css">
</head>

<body>

<!-- 	*********** NAVBAR *************  -->

	<nav role="navigation">
		<a href="#" id="navicon"></a>
		<div class="logo">
			<a href="<?php echo BASE_URL;?>">LVP</a>
		</div>
		<ul id="menu">
		 	<li><a href="<?php echo BASE_URL;?>About/" class = "<?php if ($pageID == "About") {echo "selected";}?>">About</a></li>
		 	<li><a href="<?php echo BASE_URL;?>Events/" class = "<?php if ($pageID == "Events") {echo "selected";}?>">Events</a></li>
		 	<li><a href="#">Listen</a></li>
			<li><a href="#">Watch</a></li>
	     </ul>
	</nav>

	<!-- Filler for space under nav -->

	<div class="filler"></div>

</body>
</html>
