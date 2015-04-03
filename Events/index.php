<?php

$pageID = 'Events';
require_once("../inc/config.php");
include(ROOT_PATH . 'inc/header.php');

?>

<!-- ************* BANNER IMAGE ************ -->

	<div class="banner">
		<p>Louisville Vocal Project</p>
	</div>
		<!-- ************* Events SECTION ************ -->

	<div class="events">
		<div class="event">		
			<h1><a href="<?php echo BASE_URL;?>Events">Event 1</a></h1>
			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. um dolor sit amet, consectetur adipiscing elit.</p>
			<ul>
				<li><?php echo date('l jS \of F Y h:i:s A'); ?></li>
				<li>The Love Shack: 200 E. Broadway, Louisville, KY</li>
			</ul>
			<button>Tickets</button>
		</div>	
		<div class="sidebanner">
		</div>
				<div class="event">		
			<h1><a href="<?php echo BASE_URL;?>Events">Event 1</a></h1>
			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. um dolor sit amet, consectetur adipiscing elit.</p>
			<ul>
				<li><?php echo date('l jS \of F Y h:i:s A'); ?></li>
				<li>The Love Shack: 200 E. Broadway, Louisville, KY</li>
			</ul>
			<button>Tickets</button>
		</div>	
		<div class="sidebanner">
		</div>
				<div class="event">		
			<h1><a href="<?php echo BASE_URL;?>Events">Event 1</a></h1>
			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. um dolor sit amet, consectetur adipiscing elit.</p>
			<ul>
				<li><?php echo date('l jS \of F Y h:i:s A'); ?></li>
				<li>The Love Shack: 200 E. Broadway, Louisville, KY</li>
			</ul>
			<button>Tickets</button>
		</div>	
		<div class="sidebanner"></div>
	</div>

<?php 

include(ROOT_PATH . 'inc/footer.php');

?>
