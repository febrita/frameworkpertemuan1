<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog Febrita</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Blog Febrita</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo site_url()?>/home">Home</a></li>
						<li><a href="<?php echo site_url()?>/about">About</a></li>
						<li><a href="<?php echo site_url()?>/contact">Contact</a></li>
						<!--<li><a href="<?php echo site_url()?>/news">Berita</a></li>-->
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<div class="jumbotron">
			<div class="container">
				<h1><?php echo $nama ?></h1>
				<p>This is me !</p>
				<p>
					<a class="btn btn-primary btn-lg">by : Febrita dian</a>
				</p>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<table class="table table-hover">
			<tbody>
				<tr>
					<td><?php echo $nama; ?></td>
				</tr>
				<!--<tr>
					<td><?php echo $alamat; ?></td>
				</tr>-->
				<tr>
					<td><?php echo $email; ?></td>
				</tr>
			</tbody>
		</table>
		<!--</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<table class="table table-hover">
			<tbody>
			<?php foreach ($tugas as $key ) { ?>
			<?php if($key!== "Ngoding") ?>

				<tr>
					<td><?php echo $key ; ?></td>
				</tr>
				<?php } ?>
			<?} ?>
			</tbody>
		</table>
			
		</div>
		</div>
		</div>-->
			This blog does not provide benefits that are meaningful to you, not make you inspired, and also does not make you smart. But in this blog you will recognize me, my world, and my personality from my self, not from other. Because I'm not perfect, but at least my real.

		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" ></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>