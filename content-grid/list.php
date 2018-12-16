<!DOCTYPE html>
<html>
	<head>
		<?php include 'meta.php' ?>
	</head>
	<body>
		<div class="container">
			<?php include 'menu.php' ?>
			<div class="clearfix"></div>
			<hr>
			<ul id="slider" class="nav nav-pills">
			  <li class="nav-item">
			    <a class="nav-link active" href="#">Hot News</a>
			  </li>
			  <li class="nav-item">
			  	<marquee><a class="nav-link" href="#">Esoftgreat kini merambah dunia peryoutuban</a></marquee>
			  </li>
			</ul>
			<hr>
			<div class="row">
				<div class="col-md-9">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Category</li>
					  </ol>
					</nav>
					<h3>Category <a href=""><span class="badge badge-secondary">Media</span></a></h3>
					<ul class="list-unstyled">
						<?php 
						$data = array(1,2,3,4,5);
						foreach ($data as $key => $value) 
						{
							$css = ($key%2 == 0) ? 'my-4' : '';
							?>
						  <li class="media <?php echo $css ?>">
						  	<a href=""><img class="thumb mr-3" src="<?php echo $base_url;?>assets/images/wood-<?php echo $value?>.jpeg" alt="Generic placeholder image"></a>
						    <div class="media-body">
						    	<a href=""><h5 class="mt-0 mb-1">Product <?php echo $value ?></h5></a>
						      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
						    </div>
						  </li>
							<?php
						}
						?>
					</ul>
				</div>
				<div class="col">
					<?php include 'right.php' ?>
				</div>
			</div>
		</div>
		<hr>
		<?php include 'footer.php' ?>
	</body>
</html>