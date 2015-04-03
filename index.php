<?php  

$pageID = "Louisville Vocal Project";
require_once("inc/config.php");
include(ROOT_PATH . 'inc/header.php');

?>

<!-- ************* BANNER IMAGE ************ -->

	<div class="banner">
		<p>Louisville Vocal Project</p>
	</div>

		<!-- first row -->
	<div class="container">

			<!-- ************* EVENTS SECTION ************ -->

			<div class="event container">
				<h1><a href="<?php echo BASE_URL;?>Events">Event 1</a></h1>
				<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. um dolor sit amet, consectetur adipiscing elit.</p>
				<ul>
					<li><?php echo date('l jS \of F Y h:i:s A');?></li>
					<li>The Love Shack: 200 E. Broadway, Louisville, KY</li>
				</ul>
				<button>Tickets</button>
			</div>

			<!-- ************* About SECTION ************ -->

			<div class="splash-about container">
				<h1><a href="<?php echo BASE_URL;?>About">About</a></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
			</div>


		<!-- second row -->

	
			<!-- ************* LISTEN SECTION ************ -->

			<div class="listen container">
				<h1><a href="#">Listen</a></h1>
				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/193055163&amp;color=8EE59C&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false"></iframe>
			</div>

			<!-- ************* WATCH SECTION ************ -->

			<div class="watch container">
				<h1><a href="#">Watch</a></h1>
				<iframe src="https://player.vimeo.com/video/69186856?color=8ee59c&portrait=0" width="221" height="166" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>			
			</div>
		
	</div>
	
<?php
include(ROOT_PATH . 'inc/footer.php');
?>