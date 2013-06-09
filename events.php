<?php include_once("inc/constants.php"); ?>
<?php include_once("inc/functions.php"); ?>
<?php include("inc/header.php"); ?>

<div class="event-poster-container" style="padding:100px 0 0 0; min-height:800px">
	<div class="container_12">
		<div class="grid_12">
			<h1>Events</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, omnis, tempora, non cum voluptas laboriosam harum rerum animi doloremque repellat eos odio officia voluptates ut reiciendis rem sint maiores illum.</p>
		</div>
	</div>

	<div class="container_12">
		<div class="grid_12">
			<h2>
				<span class="term">Fall</span>
				<span class="year">2013</span>
			</h2>
		</div>
	</div>
	<?php include("inc/events-chart.php"); ?>
	<?php include("inc/events-chart.php"); ?>
	<?php include("inc/events-chart.php"); ?>

	<div class="container_12">
		<div class="grid_12">
			<h2>
				<span class="term">Spring</span>
				<span class="year">2013</span>
			</h2>
		</div>
	</div>

	<?php include("inc/events-chart.php"); ?>
</div>


<script>
	window.onload = function () {
		document.body.setAttribute('class', 'events-list-body')
	}
</script>
<?php include("inc/footer.php"); ?>
