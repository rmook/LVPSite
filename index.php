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
	<div class="grid-container">

			<!-- ************* EVENTS SECTION ************ -->

			<div class="event grid-7 grid-container">
				<h1 class="grid-4"><a href="<?php echo BASE_URL;?>events">Events</a></h1>
				<p class="grid-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  <a href="#">More Events</a></p>
				<button>Tickets</button>
			</div>

			<!-- ************* About SECTION ************ -->

			<div class="splash-about grid-5 grid-container">
				<h1 class="grid-4"><a href="<?php echo BASE_URL;?>about">About</a></h1>
				<p class="grid-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
			</div>


		<!-- second row -->

	
			<!-- ************* LISTEN SECTION ************ -->

			<div class="listen grid-7 grid-container">
				<h1 class="grid-4"><a href="#">Listen</a></h1>
				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/193055163&amp;color=8EE59C&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false"></iframe>
			</div>

			<!-- ************* WATCH SECTION ************ -->

			<div class="watch grid-5 grid-container">
				<h1 class="grid-4"><a href="#">Watch</a></h1>
				<iframe src="https://player.vimeo.com/video/69186856?color=8ee59c&portrait=0" width="221" height="166" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>			</div>
			</div>
	
<?php
include(ROOT_PATH . 'inc/footer.php');
?>