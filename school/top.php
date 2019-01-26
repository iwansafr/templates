<div class="card top-border mt-3">
  <div class="card-header">
    <a href="">BERITA TERBARU</a>
  </div>
  <ul class="list-group list-group-flush">
  	<div class="container-fluid">
	  	<div class="row">
		  	<div class="col-xl-6 px-0">
		  		<?php
					$data = array(1,2,3);
					?>
					<div id="slider_top" class="carousel slide m-3" data-ride="carousel">
					  <div class="carousel-inner">
					    <?php 
					    foreach ($data as $key => $value) 
					    {
					      $class = ($key == 1) ? 'active' : '';
					      ?>
					      <div class="carousel-item <?php echo $class ?>">
					        <img class="slider d-block w-100" src="<?php echo $base_url;?>assets/images/furniture-<?php echo $value?>.jpg" alt="Slide" >
					      </div>
					      <?php
					    }
					    ?>

					  </div>
					  <a class="carousel-control-prev" href="#slider_top" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#slider_top" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<a href=""><h6>SAMPLE POST MULTI IMAGE</h6></a>
			    			<div class="clearfix"></div>
			    			<span class="xs-title">
			    				<?php echo date('M d, Y') ?> | Info Sekolah
			    			</span>
			    			<p class="xs-title">
			    				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			    				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			    				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			    				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			    			</p>
							</div>							
						</div>
					</div>
		  	</div>
		  	<div class="col-xl-6 px-0 content_list">
			  	<?php
			  	$data = array(1,2,3,4,5);
					foreach ($data as $key => $value) 
					{
						?>
				    <li class="list-group-item">
				    	<div class="container">
					    	<div class="row">
					    		<div class="col-2">
					    			<img src="<?php echo $base_url;?>assets/images/wood-<?php echo $value?>.jpeg" class="thumbnail">
					    		</div>
					    		<div class="col-10">
					    			<a href="" class="sm-title">ini adalah berita terbaru kan</a>
					    			<div class="clearfix"></div>
					    			<span class="xs-title">
					    				<?php echo date('M d, Y') ?> | Info Sekolah
					    			</span>
					    		</div>
					    	</div>
				    	</div>
				    </li>
			    	<?php 
			    } 
				  ?>
		  	</div>
	  	</div>
  	</div>
  </ul>
</div>