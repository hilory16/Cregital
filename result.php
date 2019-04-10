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
	<header class="">
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
			
		</div>
	</header>
	
	
<?php 
if (isset($_POST['submit'])) {
  	$search = $_POST['keyword'];
  	$per_page = 20;
  	$page_no = 1;
  	$url = "https://api.pexels.com/v1/search?query=";
  	$ch = curl_init();

  	// curl_setopt($ch,CURLOPT_HTTPHEADER,array('Authorization: 563492ad6f91700001000001a05e4c1d928f44f0a9103549878da934'));
  	// curl_setopt($ch, CURLOPT_URL,"https://api.pexels.com/v1/photos/:461198");

  	curl_setopt($ch,CURLOPT_HTTPHEADER,array('Authorization: 563492ad6f91700001000001a05e4c1d928f44f0a9103549878da934'));
  	curl_setopt($ch, CURLOPT_URL,$url.$search."&per_page=".$per_page."&page=".$page_no);

  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  	curl_setopt($ch, CURLOPT_HEADER, 0);
  	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);

  	$output = curl_exec($ch);

  	if ($output == FALSE) {
  		echo "cURL Error: ".curl_error($ch);
  	}

  	curl_close($ch);

  	echo '<script>
  		let result = ';
  		echo $output;
  	    echo '</script>';

  	    echo '<script>
  	    let total_result = result.total_results;
  		let photo_result = result.photos;
  		
  		let items = [];
  		for(let i=0;i < total_result; i++){
  		   items[i] = photo_result[i];
  		}

  		 let image1 = items[0]["src"]["original"];
  		 let image2 = items[1]["src"]["original"]
  		 let image3 = items[2]["src"]["original"]
  		 let image4 = items[3]["src"]["original"]
  		 let image5 = items[4]["src"]["original"]
  		 let image6= items[5]["src"]["original"]
  		 let image7 = items[6]["src"]["original"]
  		 let image8 = items[7]["src"]["original"]
  		 let image9 = items[8]["src"]["original"]


  		</script>';
  		$total_result = '<script> document.write(total_result)</script>';
  		$items = '<script> document.write(items)</script>';
  		// $photographer = '<script> document.write(photographer)</script>';
 		$page_item = '<script> document.write(items.length)</script>';
 		$image1 = '<script> document.write(image1)</script>';
 		$image2 = '<script> document.write(image2)</script>';
 		$image3 = '<script> document.write(image3)</script>';
 		$image4 = '<script> document.write(image4)</script>';
 		$image5 = '<script> document.write(image5)</script>';
 		$image6 = '<script> document.write(iimage6)</script>';
 		$image7 = '<script> document.write(image7)</script>';
 		$image8 = '<script> document.write(image8)</script>';
 		$image9 = '<script> document.write(image19)</script>';


 }

 ?>

	  <section class="result-section">
			<div class="container">
				<div class="row">
					<div class="sort" style="border:1px solid #e3e3e3;float:right">
						<a href="#"><i class="fa fa-sort" style="font-size:40px;opacity:.8;"></i></a>
					</div>
				</div>
				<div class="row result-returned">
					<h2 class="result-found"><span><?=$total_result?></span> Results Found!</h2>
				</div>

				<div class="row">
					<div class="col-lg-3">
						<img src="<?=$image1?>" alt="" class="result-img">
					</div>
					<div class="col-lg-3">
						<img src="" alt="" class="result-img">
					</div>
					
				</div>

				<div class="row">
					<li class=" page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
                        <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                    </li>

                    <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                        <a class="page-link" href="<?php if($pageno >= $total_pages){ echo 'disabled'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                    </li>
				</div>
			</div>

		</section>

					
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