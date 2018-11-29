<!DOCTYPE html>
<html>
	<head>
		<?php include 'meta.php' ?>
	</head>
	<body>
		<div class="container">
			<?php include 'menu.php' ?>
			<?php include 'slider.php' ?>
			<div class="clearfix"></div>
			<hr>
			<ul class="nav nav-pills">
			  <li class="nav-item">
			    <a class="nav-link active" href="#">Hot News</a>
			  </li>
			  <li class="nav-item">
			  	<marquee><a class="nav-link" href="#">This place is for hot news</a></marquee>
			  </li>
			</ul>
			<hr>
			<div class="row">
				<div class="col-md-9">
					<div class="jumbotron">
					  <h1 class="display-4">Hello, world!</h1>
					  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
					  <hr class="my-4">
					  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
					  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
					</div>
					<ul class="list-unstyled">
						<?php 
						$data = array(1,2,3);
						foreach ($data as $key => $value) 
						{
							$css = ($key%2 == 0) ? 'my-4' : '';
							?>
						  <li class="media <?php echo $css ?>">
						  	<a href=""><img class="thumb mr-3" src="<?php echo $base_url;?>assets/images/wood-<?php echo $value?>.jpeg" alt="Generic placeholder image"></a>
						    <div class="media-body">
						    	<a href=""><h5 class="mt-0 mb-1">List-based media object</h5></a>
						      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
						    </div>
						  </li>
							<?php
						}
						?>
					</ul>
					<hr>
					<ul class="nav nav-pills">
					  <li class="nav-item">
					    <a class="nav-link active" href="#">Hot News</a>
					  </li>
					  <li class="nav-item">
					  	<marquee><a class="nav-link" href="#">This place is for hot news</a></marquee>
					  </li>
					</ul>
					<hr>
					<div class="card-group">
						<?php 
						$data = array(1,2,3,4,5);
						foreach ($data as $key => $value) 
						{
							?>
							<div class="col-md-4">
							  <div class="card">
							    <img class="img-grid card-img-top" src="<?php echo $base_url;?>assets/images/wood-<?php echo $value?>.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p style="font-size: 12px;">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							    </div>
									<div class="card-footer">
						      	<small class="text-muted">Last updated 3 mins ago</small>
									</div>
							  </div>
								<hr>
							</div>
							<?php
						}
						?>
					</div>
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