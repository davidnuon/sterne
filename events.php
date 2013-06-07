<?php include_once("inc/constants.php"); ?>
<?php include_once("inc/functions.php"); ?>
<?php include("inc/header.php"); ?>

<div class="over-container" style="padding:100px 0 0 0; min-height:800px">
	<?php include("inc/events-chart.php"); ?>
	<?php include("inc/events-chart.php"); ?>
	<?php include("inc/events-chart.php"); ?>
</div>

<script>
	(function () {
		console.log(document.body.setAttribute('class', 'events-body'));
	})();
</script>

<?php include("inc/footer.php"); ?>
