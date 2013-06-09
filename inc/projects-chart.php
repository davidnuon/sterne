<div class="container_12">
	<?php for ($x=0; $x < 2; $x++): ?>
	<a href="events-view.php" class="grid_6 hero-item">
		<img src="img/posters/<?php echo rand(1, 7); ?>.png" alt="">
		<span class="hero-info vevent"  id="hcalendar-Flat-is-the-New-Black">
			<span class="summary title">Mind revision, CSS transition</span>
			<time datetime="2013-06-08" class="dtstart">
				<div class="data-item date">8th June 2013</div>
				<div class="data-item time">4PM-5PM</div>
			</time>
			<span class="location data-item">ECS-304</span>
			<span class="description data-item">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			</span>
		</span>
	</a>
	<?php endfor; ?>	
</div>
<div class="container_12"><br></div>
