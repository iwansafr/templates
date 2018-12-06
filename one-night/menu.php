<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light menu">
  <a class="navbar-brand" href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>assets/images/logo.png" class="img-responsive" width="150"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $base_url; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url; ?>">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo $base_url; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo $base_url; ?>list.php">List</a>
          <a class="dropdown-item" href="<?php echo $base_url; ?>list-grid.php">List Grid</a>
          <a class="dropdown-item" href="<?php echo $base_url; ?>single.php">Single</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo $base_url; ?>">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="<?php echo $base_url; ?>">Disabled</a>
      </li>
    </ul>
    <form action="" method="get">
      <div class="input-group input-group-sm">
        <input type="text" name="keyword" class="form-control pull-right" placeholder="Search" value="">
        <div class="input-group-btn">
          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </div>
      </div>
		</form>
  </div>
</nav>