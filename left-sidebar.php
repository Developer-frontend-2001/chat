<div class="left-menu">
	<?php 
	$sql = "SELECT * from category WHERE 1";
	$result = mysqli_query($conn, $sql);
	
	?>
	<ul class="list-group d-flex align-items-center align-content-center bg-dark">
		<li class="list-group-item fs-6 bg-dark">
			<a class="active" href="#" style="position: relative;">
				<div class="fas fa-bars fa-2x" id="left-sidebar"></div>
			</a>
		</li>
		<?php while ($category = mysqli_fetch_assoc($result)): ?>
			<li class="list-group-item fs-6 bg-dark m-0 p-0 mb-2" >
				<a href="#"  class="left-sidebar" style="position: relative;" data-id=<?=$category['id']?>>
					<div class="far fa-comments fa-2x left-sidebar" ></div>
					<div class="left-sidebar"><?= $category['name'] ?></div>
				</a>
				</li>
		<?php endwhile ?>
	</ul>
</div>