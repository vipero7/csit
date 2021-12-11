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
			<img src="assets/images/user2-ok.jpg" style="width:1519.5px;height:345px;"/>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 style="color:black;">User Preference</h3>
					<p style="color:blue;">Adjust the slider according to your preference... and get result.</p>
				</div>
			</div>
		</div>
	</div>

	<br>

	<!-- ELEMENTS - TABLES -->

	<div class="container">
		<div class="row">

	<form action="/get-places" method="post">

<div class="row-md-7">
	<div class="""slidecontainer">
 		<div id="range-weather">
 		<p>	<h4 style="color:green;"> Temperature</h4>(1-10: cold temperature, 11-20: hot temperature) </p> <br>
  			<input type="range" class="slider" min="1" max="20" name="weather" v-model="fontSize">
  			<span class="range-value">{{fontSize}}</span>
		</div>
	</div>
</div>

<br>

<div class="row-md-7">
	<div class="""slidecontainer">
		<div id="range-crowd">
			<p> <h4 style="color:green;"> Crowd </h4> (1-10: less people, 11-20: more people) </p> <br>
			<input type="range" class="slider" min="1" max="20" name="crowd" v-model="fontSize">
  			<span class="range-value">{{fontSize}}</span>
		</div>
	</div>
</div>


	<br>

<div class="row-md-7">
	<div class="""slidecontainer">
		<div id="range-infrastructure">
				<p> <h4 style="color:green;"> Development </h4> (1-10: less infrastructure(countryside), 11-20: more infrastructure (Developed)) </p> <br>
			<input type="range" class="slider" min="1" max="20" name="infra" v-model="fontSize">
			<span class="range-value">{{fontSize}}</span>
		</div>
	</div>
</div>

	
		<br>

<div class="row-md-7">
	<div class="""slidecontainer">
		<div id="range-simsar">
			<p> <h4 style="color:green;">Water Resources</h4> (1-10: no lake, no ponds, 11-20: lake, pond exist) </p> <br>
			<input type="range" class="slider" min="1" max="20" name="simsar" v-model="fontSize">
			<span class="range-value">{{fontSize}}</span>
		</div>
	</div>
</div>

		
		<br>


<div class="row-md-7">
	<div class="""slidecontainer">
		<div id="range-cost">
			<p> <h4 style="color:green;"> Cost</h4> (1-10: low cost destination, 11-20: generally expensive) </p> <br>
			<input type="range" class="slider" min="1" max="20" name="cost" v-model="fontSize">
			<span class="range-value">{{fontSize}}</span>
		</div>
	</div>
</div>
		
		<br>

<div class="row-md-7">
	<div class="""slidecontainer">
		<div id="range-distance">
			<p> <h4 style="color:green;"> Distance </h4> (1-10: generally near from kathmandu, 11-20: far from kathmandu) </p> <br>
			<input type="range" class="slider" min="1" max="20" name="distance" v-model="fontSize">
			<span class="range-value">{{fontSize}}</span>
		</div>
	</div>
</div>

			<br>

<div class="row-md-7">
	<div class="""slidecontainer">
		<div id="range-security">
			<p> <h4 style="color:green;"> Security</h4> (1-10: less secure to travel with family, 11-20: more secure to travel) </p> <br>
			<input type="range" class="slider" min="1" max="20" name="security" v-model="fontSize">
			<span class="range-value">{{fontSize}}</span>
		</div>
	</div>
</div>


<br>

			
	<input class="btn btn-primary" type="submit" name="Process" value="Process">
	
	<br>
		


	</form>

		</div>
	</div>



	
	<div class="clearfix"></div>

	<br>

	<?php view('layouts/footer'); ?>