		<?php $base_url = 'http://localhost/esg_templates/one-night/';?>
		<?php 
	  if(@$_SERVER['SERVER_NAME'] == 'localhost')
	  {
	    $base_url = 'http://localhost/esg_templates/one-night/';
	  }else{
	    $base_url = 'https://templates.esoftgreat.com/one-night/';
	  }
	  ?>
		<title>esoftgreat - Software Development</title>
	  <!-- Bootstrap core CSS -->
	  <link href="<?php echo $base_url;?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <!-- Custom fonts for this template -->
	  <link href="<?php echo $base_url;?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>assets/css/style.css">