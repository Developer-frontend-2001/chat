<div class="left-menu">
	<?php 
	$sql = "SELECT * from category WHERE 1";
	$result = mysqli_query($conn, $sql);
	
	?>
	<ul class="list-group d-flex align-items-center align-content-center bg-dark">

		<?php while ($category = mysqli_fetch_assoc($result)): ?>
			<li class="list-group-item fs-6 bg-dark" >
				<a href="#" style="position: relative;">
					<span class="far fa-comments fa-2x fa-spin"></span><span><?= $category['name'] ?></span>
				</a>
				</li>
		<?php endwhile ?>
	</ul>
</div>