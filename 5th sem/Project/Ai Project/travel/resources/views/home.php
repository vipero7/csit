
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

	<!-- INTRO -->
	<div class="intro intro1">
			<div class="overlay">
				<img src="/assets/images/home.jpg" style="width:1920px;height:1081px;"/>
			</div>
            <div class="container">
			<div class="row center-content">
				<div class="col-sm-7">
                	<p>are you having trouble to decide where to travel this holiday...</p>
					<h2>Just click here and you will never go through the same problem.</h2>
                    <div class="space30"></div>
					<a href="/user-preference" class="btn btn-lg btn-primary">Try for free <i class="ilmosys-arrow-right"></i></a>
				</div>
					</div>
                    </div>
				</div>
			</div>
		
	<!-- INFO CONTENT -->
	<div class="info-content2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Amity is Intelligent Tourist System which serves tourist to find exiting places to visit.</h3>
						<div class="space10"></div>
					<p>At Amity we care about every detail, our goal to make our clients satisfied.</p>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Flipbox -->

	<div class="elements-content">
		<div class="container">
			<div class="section-head text-center col-md-8 col-md-offset-2 space50">
				<h1>Most Popular Destination</h1>
			</div>

			<div class="row">
			<?php foreach($most as $key => $popular){

				if($key == 3){ ?>

					<div class="row">

				<?php }
 
				?>
				<div class="col-md-4">
					<div class="flips1">
						<div class="flips1_front flipscont1">
							<img src="<?php echo $popular['image'] ?>" alt="" class="full" style="width:349px;height:320px;" />
						</div>
						<div class="flips1_back flipscont1">
							<h4 class="text-white space20"><strong><?php echo $popular['place']; ?></strong></h4>
							<br /><br />
							<a href="#" class="btn btn-primary"><i class="fa fa-paper-plane"></i>&nbsp; Read more</a>
						</div>
					</div>
				</div>

			<!-- </div> -->



			<?php 
				if($key==2){ ?>

			</div>
			<br>

				<?php }
			 } ?>

			</div>
		</div>
	</div>
						
			<div class="space80"></div>

			
<div class="space80"></div>

	<div class="cta-wrap bg-primary">
		<div class="container">
			<div class="col-md-9">
				<h2>Do you like our service?</h2>
				<p>text text...</p>
			</div>
			<div class="col-md-3">
				<a href="/user-preference" class="cta-btn">Recommend Me</a>
			</div>
		</div>
	</div>


	<div class="clearfix"></div>
    
    <!-- ABOUT -->
    <div class="container">
	<div class="about-inline text-center">
		<div class="container">
        <p>- WHAT WE DO -</p>
			<h3>We make your business gain more <br>revenue at a glance</h3>
		</div>
	</div>
    
	<!-- INFO CONTENT -->
	<div class="info-content">
		<div class="container">
			<div class="row center-content">
				<div class="col-md-6">
					<h3 class="keysize">
                
                 <i class="icon2-Key"></i>Amity is Key for Success..</h3>
					<p><b>Lorem ipsum dolor </b> sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in sit amet leo. Mauris feugiat erat tellus.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  Separated they live in Bookmarksgrove. Lorem ipsum dolor sit amet  consectetur adipiscing elit.  Etiam et purus a odio finibus bibendum in sit amet leo. Mauris feugiat erat tellus.</p>
					<ul class="list">
						<li><i class="icon-check"></i> Etiam sed dolor ac diam volutpat</li>
						<li><i class="icon-check"></i> Erat volutpat aliquet imperdiet</li>
					</ul>
					<div class="space30"></div>
					<a href="#" class="btn btn-lg btn-primary">Learn More <i class="icon-arrow-right"></i></a>
				</div>

				<div class="col-md-6 text-center">
					<img src="images/1.png" class="pull-right img-responsive" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
	
    <div class="space100"></div>
	
  
   
    
<!-- benifits 1 -->
	<div class="intro intro-benifits">
		
			<div class="row center-content" >
            	<div class="col-md-6">
					<img src="images/bg/benifits.jpg" class="pull-left" alt=""/>
				</div>
             
            <div class="container">
            
				<div class="col-md-9 benifits col-md-push-1">
					<h3>Amity Landing page comes with lots of benifits!</h3> <br />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in sit amet leo.</p>
                    <br />
                    <p><span>*</span> Lorem ipsum dolor sit amet</p>
                    <p><span>*</span> Incididunt ut labore</p>
                    <p><span>*</span> Elit sed do eiusmod tempor</p>
                    <p><span>*</span> Incididunt ut labore</p>
				</div>					
			</div>
		</div>
	</div>

    <div class="container" id="pricing">
	<div class="about-inline text-center">
        <p>- CONTACT US -</p>
			<h3>Customer satisfaction is our top priority,  <br>  Don’t hesitate to contact us </h3>
		</div>
	</div>
	
	<!-- CONTACT INFO -->
	<div id="contact-info">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="c-info">
						<i class="icon-phone"></i>
						<h5><b>Call Us</b></h5>
						<p>(080) 123 456 7890</p>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="c-info">
						<i class="icon-envelope"></i>
						<h5><b>Email</b></h5>
						<p><a href="">hello@amity.com</a></p>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="c-info">
						<i class="icon-map-marker"></i>
						<h5><b>Address</b></h5>
						<p>72, Wallstreet, NY 20110</p>
					</div>
				</div>
                
                <div class="col-lg-3 col-sm-6">
					<div class="c-info">
						<i class="icon-lifesaver"></i>
						<h5><b>WEBSITE</b></h5>
						<p><a href="" > www.amity.com</a></p>
					</div>
				</div>

				
			</div>
		</div>
	</div>

	<!-- GOOGLE MAP -->
	<div class="google-map">
		<div class="container-fluid no-padding">
	        <div id="map"></div>
		</div>		
	</div>

	

<?php view('layouts/footer'); ?>