<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="">
	<meta name="author" content="Olamide">
	<meta name="description" content="Download free images from pexels.com">
	<meta name="keywords" content="download, stock images, banners, videos">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css.map">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css.map">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css.map">
	<link rel="stylesheet" href="style.css">

	<title></title>
</head>
<body>
	<header class="search-header">
		<nav>
			<div class="container">
				<div class="nav-item">
					<div class="logo">
						<a href="#"><img src="img/logo.png" alt="logo"></a>
					</div>

					<div id="nav" class="m-toggle">
						<ul>
							<a href="index.php"><li>Home</li></a>
							<a href="#"><li>Explore</li></a>
							<a href="search.php"><li>Search</li></a>
							
						</ul>
					</div>
					<div id="toggle" class="toggle">
						<img src="img/menu2.png" alt="toggle">
					</div>
				</div>
			</div>
		</nav>

		<div class="search-banner-text">
			<h2>Thousands of stock images all in one place</h2>
		</div>
		<div class="search-box">
			<div class="search-underlay">
				<form method="POST" action="result.php">
					<input type="text" name="keyword" placeholder="E.g Food,Games, etc.">
					<button name="submit"><i class="fa fa-search" style="font-size:20px"></i> Search</button>
				</form>
			</div>
			
		</div>
	</header>

<footer>
		<div class="container">
			<div class="row">
			<div class="col-lg-3 quick-links">
				<h4>Quick Links</h4>
				<ul>
					<a href="#"><li>Stock Images</li></a>
					<a href="#"><li>Free Videos</li></a>
					<a href="#"><li>Premium Videos</li></a>
					<a href="#"><li>APIs Integrations</li></a>
				</ul>
			</div>

			<div class="col-lg-3 newsletter">
				<h4>NEWSLETTER</h4>
				<form method="POST" action="">
					<input type="" name="" >
					<button class="btn btn-success" name="newsletter">Go!</button>
				</form>
				<p>Stay up-to-date with our weekly newsletter.</p>
			</div>

			<div class="col-lg-3 contact">
				<h4>Contact Information</h4>
				<ul>
					<li><i class="fa fa-phone" style="font-size:20px; margin-right:5px;"> </i>+23456789012</li>
					<li><i class="fa fa-envelope"></i> Business@domain.com</li>
					<li><i class="fa fa-building" style="font-size:20px; margin-right:5px;"> </i>10 Obayan Street Akoka, Lagos.</li>
					<li><i class="fa fa "></i></li>
				</ul>
			</div>

			<div class="col-lg-3 quick-links">
				<h4>Quick Links</h4>
				<ul>
					<a href="#"><li>Stock Images</li></a>
					<a href="#"><li>Free Images</li></a>
					<a href="#"><li>Premium Images</li></a>
					<a href="#"><li>Integrating APIs</li></a>
				</ul>
			</div>
		</div>
		</div>
	</footer>
	

</body>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="bootstrap/js/bootstrap.bundle.js.map"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.js.map"></script>
<script>
   
    $(document).ready(function(){
      $(".toggle").click(function(){
        $(".m-toggle").slideToggle(1000);
      });
    });
  </script>
</html>


</script>
</html>