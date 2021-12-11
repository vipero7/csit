<?php view('layouts/header'); ?>


<body id="page-top"> 

<div class="body">
	<!-- HEADER -->
			<header>
		<nav class="navbar-inverse navbar-lg navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="intro.html" class="navbar-brand brand"><img src="assets/images/travel-ok.jpg" alt="Smiley face"></a>
				</div>

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>

				<?php view('layouts/navbar'); ?>

			</div>
		</nav>
	</header>

	<!-- PAGE HEADER -->
	<div class="intro page_head text-center">
		<div class="overlay">
			<img src="assets/images/place-ok.jpg" style="width: 1519.9px"; height="345px;" />
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 style="color:black;">Places</h3>
					<p style="color:blue;">List of places which matches with your preference.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- PORTFOLIO -->
	<div class="portfolio-wrap portfolio-3col">
		<div class="container">
	
			

			

			<div class="portfolio-grid">

				<?php foreach($value as $d) { ?>

				<div class="portfolio-item branding">
					<!-- <a class="swipebox-video" href="images/home.jpg" > -->
						<img class="img-responsive" src="<?php echo $d['image'] ?>" style="width:349px;height:320px;" alt="">
						<div class="portfolio-item-overlay">
							<div class="portfolio-item-overlay-inner">
								<h3><?php echo $d['place'] ?></h3>
								<p><?php echo $d['value'] * 100 ?>% match</p>
							</div>
						</div>
					</a>
				</div>

			<?php } ?>
				
			<!-- 	<div class="portfolio-item branding">
						<img class="img-responsive" src="images/1.jpg" style="width:349px;height:320px;" alt="">
						<div class="portfolio-item-overlay">
							<div class="portfolio-item-overlay-inner">
								<h3>Project Name</h3>
								<p>Lorem ipsum sit</p>
							</div>
						</div>
					</a>
				</div> -->
				
		<!-- 		<div class="portfolio-item branding">
						<img class="img-responsive" src="images/go.jpg" style="width:349px;height:320px;" alt="">
						<div class="portfolio-item-overlay">
							<div class="portfolio-item-overlay-inner">
								<h3>Project Name</h3>
								<p>Lorem ipsum sit</p>
							</div>
						</div>
					</a>
				</div> -->

			</div>
		</div>

		
		<div class="clear space40"></div>
		<div class="container text-center">
			<ul class="pagination">
				<li class="disabled"><a href="#"><i>«</i></a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#"><i>»</i></a></li>
			</ul>
		</div>
	</div>
	

	<?php view('layouts/footer'); ?>