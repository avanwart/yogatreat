<?php 
/*
Use this page if you want to create a custom homepage for 
your site. WordPress will look for home.php before index.php. If
you end up using a custom home.php page you can also use the 
blog.php page to display your blog posts. Simply rename or delete
this page template and the latest blog posts(index.php) will be the
homepage of your website. 
*/
?>
<?php get_header(); ?>

<section id="hero" role="roll with it">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active slide1">
				
				<div class="carousel-caption">
					<h1><?php bloginfo('description'); ?></h1>
				</div>
			</div>
			<div class="item slide2">
				
				<div class="carousel-caption">
					<h4>First Thumbnail label</h4>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			</div>
		 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
	</div>
</section>
<section id="info">
<div class="container content">
	<p>~Treat Yourself~
Choose from a multitude of classes that guarantee a total mind, body and soul transformation. Our classes will leave you feeling toned, energized and empowered.
</p>
</div>
</section>
<section id="classes">
	<div class="container">
		<div class="row content">
			<h3>Classes</h3> <a href="http://clients.mindbodyonline.com/ws.asp?studioid=150291&stype=-7&sView=week&sDate=5/10/2014" target="new">Sign Up Now!</a>
			<p>Pictures (Small blocks with link/click to class schedule)</p>
			<div class="col-md-4"><p>Yoga</p>
				<div id="yoga"></div>
			</div>
			<div class="col-md-4"><p>Mat Pilates</p>
				<div id="matPilates"></div>
			</div>
			
			<div class="col-md-4"><p>TRX</p></div>
		</div><!-- .row -->
		<div class="row content">
      <div class="col-md-4"><p>Tae Bo® Fitness</p>
      	<div id="taeboFitness"></div>
      </div>
      <div class="col-md-4"><p>Yoga Barre</p>
      	<div id="yogaBarre"></div>
      </div>
      <div class="col-md-4"><p>Kids and Teens</p>
				<div id="kids"></div>
      </div>
		</div><!-- .row -->
	</div><!-- .container -->
</section>
<section id="social">
	<div class="container content">
		<div class="row">
			
		</div><!-- .row -->
	</div><!-- .container -->
</section>

<script>
	jQuery(document).ready(function($){
		$('.carousel').carousel('pause');
	});
</script>
<?php get_footer(); ?>
