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
					<div class="col">
						<h3>Category <a href=""><span class="badge badge-secondary">Media</span></a></h3>
					</div>
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
							      <h5 class="card-title">Product <?php echo $value?></h5>
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