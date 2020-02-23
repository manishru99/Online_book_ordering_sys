<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Paper Forest</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css1/templatemo-style.css" rel="stylesheet" />
</head>

<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img1/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img1/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Book House</h1>
								<h6 class="tm-site-description">Search your favourite books!</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="#" class="tm-nav-link">About</a></li>
								<li class="tm-nav-li"><a href="cart.php" class="tm-nav-link">Cart</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to Book House</h2>
				<p class="col-12 text-center"></p>
			</header>
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="productsf.php" class="tm-nav-link active">Fiction</a></li>
						<li class="tm-paging-item"><a href="productsn.php" class="tm-nav-link">Non-Fiction</a></li>
						<li class="tm-paging-item"><a href="products_e.php" class="tm-nav-link">Engineering</a></li>
					</ul>
				</nav>
			</div>

			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pizza" class="tm-gallery-page">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/e1.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Digital signal processing</h4>
								<p class="tm-gallery-description"></p>
								<p class="tm-gallery-price">Rs 145 </p>

								<?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(16)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=16" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/e2.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Enggineering Technology</h4>
								<p class="tm-gallery-description"></p>
								<p class="tm-gallery-price"> Rs 270</p>
								<?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(17)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=17" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
										}
										?>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/e4.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Artificial intelligence</h4>
								<p class="tm-gallery-description"></p>
								<p class="tm-gallery-price">Rs 330 </p>
								<?php if(!isset($_SESSION['email'])){  ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
									}
									else{
										if(check_if_added_to_cart(4)){
											echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
										}else{
											?>
											<a href="cart_add.php?id=19" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
											<?php
										}
									}
									?>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/5.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Data Structures using C</h4>
								<p class="tm-gallery-description"></p>
								<p class="tm-gallery-price">Rs.180 </p>
								<?php if(!isset($_SESSION['email'])){  ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
									}
									else{
										if(check_if_added_to_cart(7)){
											echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
										}else{
											?>
											<a href="cart_add.php?id=7" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
											<?php
										}
									}
									?>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/6.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Machine Learning</h4>
								<p class="tm-gallery-description"></p>
								<p class="tm-gallery-price">Rs 280</p>
								<?php if(!isset($_SESSION['email'])){  ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
									}
									else{
										if(check_if_added_to_cart(20)){
											echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
										}else{
											?>
											<a href="cart_add.php?id=20" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
											<?php
										}
									}
									?>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/e6.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Paper Solutions</h4>
								<p class="tm-gallery-description"></p>
								<p class="tm-gallery-price"> Rs 40 </p>
								<?php if(!isset($_SESSION['email'])){  ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
									}
									else{
										if(check_if_added_to_cart(21)){
											echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
										}else{
											?>
											<a href="cart_add.php?id=21" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
											<?php
										}
									}
									?>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/e7.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Css Frameworks</h4>
								<p class="tm-gallery-description"></p>
								<p class="tm-gallery-price">Rs 94</p>
								<?php if(!isset($_SESSION['email'])){  ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
									}
									else{
										if(check_if_added_to_cart(20)){
											echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
										}else{
											?>
											<a href="cart_add.php?id=20" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
											<?php
										}
									}
									?>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/e8.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Database systems</h4>
								<p class="tm-gallery-description"></p>
								<p class="tm-gallery-price">Rs 215</p>
								<?php if(!isset($_SESSION['email'])){  ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
									}
									else{
										if(check_if_added_to_cart(22)){
											echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
										}else{
											?>
											<a href="cart_add.php?id=22" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
											<?php
										}
									}
									?>
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 1 -->
				
				<!-- gallery page 2 -->
				<div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Menu One</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$25</p>
								<?php if(!isset($_SESSION['email'])){  ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php
									}
									else{
										if(check_if_added_to_cart(1)){
											echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
										}else{
											?>
											<a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
											<?php
										}
									}
									?>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Second Title Salad</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$30</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Third Salad Item</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$45</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Superior Salad</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Sed ultricies dui</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$55 / $60</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Maecenas eget justo</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$75</p>
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 2 -->
				
				<!-- gallery page 3 -->
				<div id="tm-gallery-page-noodle" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Noodle One</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$12.50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Noodle Second</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$15.50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Third Soft Noodle</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$20.50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Aliquam sagittis</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$30.25</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Maecenas eget justo</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$35.50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img1/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Quisque et felis eros</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$40.50</p>
							</figcaption>
						</figure>
					</article>

				</div> <!-- gallery page 3 -->
			</div>
			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="img1/lib.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title"></h4>
							<p class="tm-mb-45">Get absorbed in this vast ocean of knowledge. <a rel="nofollow" href="https://templatemo.com/contact"></a>  Thank you.</p>
							<a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; Paper Forest By Manish Utekar ,Rutuja Saigaonkar, Prajakta Tambe, Pooja Shirude 
            
            | Design: <a rel="nofollow" href="https://templatemo.com">Paper Forest</a></p>
		</footer>
	</div>
	<script src="js1/jquery.min.js"></script>
	<script src="js1/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>