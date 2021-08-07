<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Cat Store</title>
    <meta charset="uft-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="../js/main.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   

  </head>
	<body>

<nav class="navbar navbar-expand-md">
	<a class="navbar-brand" href="#">Logo</a>
	<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="main-navigation">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Contact</a>
			</li>
		</ul>
	</div>
</nav>

<header class="page-header header container-fluid">
	<div class="overlay">
		<div class="description">
			<h1>Welcome to the Cat Store!</h1>
			<p>Having a cat can mean different things to different people. Some want a cat to cuddle and sit on their laps; others are happy to live with a very independent cat which spends most of its time outside and doesn’t want too much human interaction.
			What is important is that you try to find a cat that will interact with you if you want it to. All cats are not the same and how each individual cat behaves with you can depend on its inherent personality and early experiences (or lack of experiences), which can make it fearful or confident with people and life in general.
			The environment in which you keep a cat is also extremely significant – for example if it lives with many other cats which do not get on, then it will be stressed and will react differently than if it was on its own.
			</p>
			<button class="btn btn-outline-secondary btn-lg">Read More</button>
		</div>
	</div>
</header>

<div id="demo" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	</ul>
  
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="../images/slide1.jpg" alt="Cat Image 1" >
		</div>
		<div class="carousel-item">
			<img src="../images/slide2.jpg" alt="Cat Image 2" >
		</div>
		<div class="carousel-item">
			<img src="../images/slide3.jpg" alt="Cat Image 3" >
		</div>
	</div>
  
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>

<div class="container features">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<h3 class="feature-title">SIAMESE</h3>
			<img src="../images/siamese.jpg" class="img-fluid">
			<p>Popular since the 19th century, this breed of cat originated in Thailand (formerly known as Siam). The Siamese has helped create many other breeds, including the Oriental Shorthair, Sphynx, and Himalayan.
			Siamese cats have distinct markings called "points" that are the areas of coloration on their face, ears, feet, and tail, but some Siamese may not have any points. There are also two varieties of Siamese cats, one with an "apple" shaped head and chubbier body and one with a larger head and slender body.
			The animated Disney film, "Lady and the Tramp," featured Siamese cats singing a song and demonstrating not only their intelligence but also how vocal they can be.
			Many Siamese cats that were originally from Thailand had a kink in their tail. This trait was bred out of most Siamese, but you'll still find it in Siamese street cats in Thailand.</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<h3 class="feature-title">PERSIAN</h3>
			<img src="../images/persian.jpg" class="img-fluid">
			<p>Also lovingly referred to as one of the "smushed-face" cats, Persians have beautiful, long, fur coats. They can come in almost any color, depending on which cat registry association you are looking at, and have a flat face when compared to most other breeds of cats. Some breed descriptions even state the nose is not allowed to protrude past the eyes when viewed in a profile.
			Persians have been seen in many movies, art, commercials, and homes throughout the years and have also been one of the most popular breeds of cats for decades.
			Their coats demand regular grooming, otherwise, matting will result. Like many purebreds, they are prone to a variety of diseases, including renal and cardiac problems.
			Persians are also known as the Persian Longhair, the Iranian cat, and the Shirazi cat, named after the city of Shiraz, Iran, since they were originally imported from Iran.</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<h3 class="feature-title">Get in Touch!</h3>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Name" name="">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" placeholder="Email Address" name="email">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="4"></textarea>
			</div>
			<input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
		</div>
	</div>
</div>

<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12">
				<h6 class="text-uppercase font-weight-bold">Thank you for visiting our website, we hope you have found our information useful.</h6>
				<p>All our advice is freely accessible to everyone, wherever you are in the world. </p>
				<p> However, as a charity, we need your support to enable us to keep delivering high quality and up to date information for everyone.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<h6 class="text-uppercase font-weight-bold">Contact</h6>
				<p>30, The Cat Store, Flower Road, Colombo 7
				<br/>info@mywebsite.com
				<br/>+ 01 234 567 87
				<br/>+ 01 234 567 89</p>
			</div>
		</div>
		<div class="footer-copyright text-center">© 2020 Copyright: MyWebsite.com</div>
</footer>
 
</body>
</html>


 
