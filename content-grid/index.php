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
					<hr>
					<div class="row">
						<?php 
						$data = array(1,2,3,4,5);
						foreach ($data as $key => $value) 
						{
							?>
							<div class="col-6 col-md-3">
								<img class="img-grid card-img-top" src="<?php echo $base_url;?>assets/images/wood-<?php echo $value?>.jpeg" alt="Card image cap">
								<a href="<?php echo $base_url.'single.php'; ?>"><h5 class="text-center">Kursi</h5></a>
								<!-- <table style="font-size: 12px;">
									<tr>
										<td>Bahan</td>
										<td>:</td>
										<td>Jati</td>
									</tr>
									<tr>
										<td>Kualitas</td>
										<td>:</td>
										<td>Super</td>
									</tr>
									<tr>
										<td>Harga</td>
										<td>:</td>
										<td>Pm</td>
									</tr>
								</table> -->
								<br>
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