<div class="form-group top-20">
	<input type="text" name="" class="form-control" placeholder="Search...">
</div>
<div class="card my-3">
  <div class="card-header main-color">
    BERITA TERBARU
  </div>
  <ul class="list-group list-group-flush">
  	<?php
  	$data = array(1,2,3,4,5);
		foreach ($data as $key => $value) 
		{
			?>
	    <li class="list-group-item px-0">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-md-3 col-2">
		    			<img src="<?php echo $base_url;?>assets/images/wood-<?php echo $value?>.jpeg" class="thumbnail">
		    		</div>
		    		<div class="col-md-9 col-10">
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
  </ul>
</div>
<div class="card my-3">
  <div class="card-header main-color">
  	ARSIP BERITA
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
			<a class="light_link" href="">Agustus 2019</a>
    </li>
    <li class="list-group-item">
			<a class="light_link" href="">September 2019</a>
    </li>
  </ul>
</div>
<div class="card my-3">
  <div class="card-header main-color">
  	KATEGORI
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
			<a class="light_link" href="">OSIS</a>
    </li>
    <li class="list-group-item">
			<a class="light_link" href="">PENGUMUMAN</a>
    </li>
    <li class="list-group-item">
			<a class="light_link" href="">LOMBA</a>
    </li>
  </ul>
</div>
<div class="card my-3">
  <div class="card-header main-color">
  	TAG
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
			<a class="light_link" href="">HITS</a>
    </li>
    <li class="list-group-item">
			<a class="light_link" href="">JUARA</a>
    </li>
    <li class="list-group-item">
			<a class="light_link" href="">PRESTASI</a>
    </li>
  </ul>
</div>