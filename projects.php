<?php include_once("inc/constants.php"); ?>
<?php include_once("inc/functions.php"); ?>
<?php include("inc/header.php"); ?>

<div class="event-poster-container" style="padding:100px 0 0 0; min-height:800px">
	<div class="container_12">
		<div class="grid_12">
			<h1>Projects and Work</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, omnis, tempora, non cum voluptas laboriosam harum rerum animi doloremque repellat eos odio officia voluptates ut reiciendis rem sint maiores illum.</p>
		</div>
	</div>
	<?php include("inc/projects-chart.php"); ?>
	<?php include("inc/projects-chart.php"); ?>
</div>


<script>
	window.onload = function () {
		document.body.setAttribute('class', 'events-list-body')
	}
</script>
<?php include("inc/footer.php"); ?>
