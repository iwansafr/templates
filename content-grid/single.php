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
			  	<marquee><a class="nav-link" href="#">This place is for hot news</a></marquee>
			  </li>
			</ul>
			<hr>
			<div class="row">
				<div class="col-md-9">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Single</li>
					  </ol>
					</nav>
					<div class="col">
						<h5>Category <a href=""><span class="badge badge-secondary">Furniture</span></a></h5>
					</div>
					<hr>
					<center>
						<h3>Furniture 2</h3>
						<figure class="figure">
							<img class="img-responsive image" src="<?php echo $base_url;?>assets/images/furniture-2.jpg">
							<figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
							<?php 
							$data = array(1,2,3);
							foreach ($data as $key => $value) 
							{
								?>
									<img src="<?php echo $base_url;?>assets/images/wood-<?php echo $value;?>"  data-toggle="modal" data-target="#img-<?php echo $value;?>" class="img-responsive" style="object-fit: cover;height: 50px;">
								<!-- Modal -->
								<div class="modal fade" id="img-<?php echo $value;?>" tabindex="-1" role="dialog" aria-labelledby="img-<?php echo $value;?>" aria-hidden="true">
								  <div class="modal-dialog modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="img-<?php echo $value;?>">Modal title</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								    		<img src="<?php echo $base_url;?>assets/images/wood-<?php echo $value;?>" class="img-responsive" style="width:100%;">    
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								      </div>
								    </div>
								  </div>
								</div>								
								<?php
							}
							?>
						</figure>
					</center>
					<div class="table-responsive">
					  <table class="table table-sm">
						  <tbody>
						    <tr>
						      <th scope="row">Code</th>
						      <td>PD-001</td>
						    </tr>
						    <tr>
						      <th scope="row">Name</th>
						      <td>Wood 1</td>
						    </tr>
						    <tr>
						      <th scope="row">Price</th>
						      <td>Contact Us</td>
						    </tr>
						    <tr>
						      <th scope="row">Material</th>
						      <td>Wood</td>
						    </tr>
						  </tbody>
						</table>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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