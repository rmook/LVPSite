<?php  

$pageID = "Louisville Vocal Project";
require_once("inc/config.php");
include(ROOT_PATH . 'inc/header.php');

?>

<!-- ************* BANNER IMAGE ************ -->

	<div class="banner">
		<p>Louisville Vocal Project</p>
	</div>

<!-- GRID SYSTEM -->

	<div class="container-fluid">	

		<!-- first row -->

		<div class="row">
			<!-- ************* EVENTS SECTION ************ -->

			<div class="event col-sm-7">
				<h1><a href="<?php echo BASE_URL;?>events">Events</a></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
				<button>Buy Tickets</button>
			</div>

			<!-- ************* About SECTION ************ -->

			<div class="splash-about col-sm-5">
				<h2><a href="<?php echo BASE_URL;?>about">About</a> Louisville Vocal Project</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
			</div>
		</div>

		<!-- second row -->

		<div class="row">
			<!-- ************* LISTEN SECTION ************ -->

			<div class="listen col-sm-7">
				<h1><a href="#">Listen</a></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
				<button>Play</button>
			</div>

			<!-- ************* WATCH SECTION ************ -->

			<div class="watch col-sm-5">
				<h1><a href="#">Watch</a></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat nibh eu lobortis malesuada.</p>
				<div class="screen">
					<button>Play</button>
				</div>
			</div>
		</div>
	</div>
	
<?php
include(ROOT_PATH . 'inc/footer.php');
?>