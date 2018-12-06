<?php
$data = array(1,2,3);
?>
<div id="slider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php 
    foreach ($data as $key => $value) 
    {
      echo '<li data-target="#slider" data-slide-to="'.$key.'" ></li>';
    }
    ?>
  </ol>
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
  <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>