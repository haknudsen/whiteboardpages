<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Custom Animated Video | Website Animation | Video Animation</title>
	<meta name="keywords" content="Animation, Animated Explainer Video, Custom Video.">
	<meta name="description" content="Explain your product, service or procedure in an Animated Explainer Video! Powerfully explain things step-by-step, and keeps your viewers' attention!">
	<meta name="robots" content="index, follow">
	<meta name="author" content="WebsiteTalkingHeads.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-j8y0ITrvFafF4EkV1mPW0BKm6dp3c+J9Fky22Man50Ofxo2wNe5pT1oZejDH9/Dt" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://vjs.zencdn.net/7.2.4/video-js.css" rel="stylesheet">
	<link href="../css/video.css" rel="stylesheet">
	<link href="css/whiteboard.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<?php include("includes/header.php"); ?>
<section class="jumbotron-fluid bg-image">
	<h1 class="banner-text">Cool Explainer Videos, Whiteboard Sketch Videos, Spokesperson too!</h1>
	<div class="container mt-2">
		<div class="row d-flex align-items-center">
			<div class="col-lg-8" id="video-holder">
				<?php 
    $video = "Animated Alien Video";
    $bgColor = "#00B46A";
    $btnColor = "#2A2D26";
	$alt = "Animated Aliens Video Demo";
    include("../ivideo/showVideo.php"); 
    ?>
			</div>
			<div class="col-lg-4">
				<?php include( "includes/whiteboard-form.php"); ?>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="container">
		<h2 class="banner-bottom-text">Hand Drawing Videos, Whiteboard Animation Videos, Whiteboard Sketch, Video Scribe and Cartoon Doodle Videos.</h2>
		<div class="examples clearfix p-2">
			<?php 
    $type = "Animation";
    $show = "12";
	$rand = false;
	$columns = 3;
    include("../ivideo/showDemo.php"); 
    ?>
		</div>
		<div class="d-box pb-1">
			<a href="../mrss/animation.rss"><img class="mx-auto d-block" src="../mrss/images/Talking-Heads-RSS-Feed.png" width="28" height="28" title="Talking Heads® Animation RSS Feed" alt="Talking Heads® Animation RSS Feed"/></a>
		</div>
</section>
<div class="video-bottom"></div>
<div class="call-now mx-auto">
	<h2>CALL NOW to Get Results!</h2>
	<h3><a href="tel://801-748-2281" title="Give us a call.">801-748-2281</a></h3>
</div>
<div class="ten"></div>
</div>
</section>
<section class="content">
	<div class="container">
		<h1 class="banner-bottom-text pt-3">Custom Animation Video</h1>
		<h3 class="text-capitalize text-center">We can describe your product, service or procedure in an Animated Video!</h3>
		<div class="d-flex align-items-center">
			<div class="col-6">
				<img src="https://websitetalkingheads.com/images/video-production-banner.png" alt="Best Web Design Agencies- Video Production" class="mt-1 img-fluid mx-auto" title="Best Web Design Agencies- Video Production">
			</div>
			<div class="col-6">
				<p class="content-text">Our Animated Videos will explain your proces step-by-step. We develop custom video material tailored for your organization and marketing objectives.</p>
				<p class="content-text">At Talking Heads® our Animated Videos focus on your message. Great video production and animation is your ticket to increasing your brand awareness and boosting sales.</p>
				<p class="content-text">For more than a decade we've refined the skills and processes for great video production.  We consistently craft videos that deliver messages clearly.  They have quantifiable outcomes for companies big and small. Our experienced and knowledgeable team will clarifies your message through video.</p>
			</div>
		</div>
	</div>
</section>
<section class="container p-2">
	<?php include( "includes/testimonial-awards.php"); ?>
</section>
<section class="content">
	<div class="container">
		<section class="content">
			<div class="container pt-2">
				<h2 class="banner-bottom-text text-center">Animated Video</h2>
				<div class="container p-2">
					<div class="d-flex align-items-center">
						<div class="col-lg-6" id="video-holder">
							<?php 
    $video = "Thing A Ma Bob";
    $bgColor = "#BEBEB2";
    $btnColor = "#6EB478";
	$alt = "Animated Video Example";
    include("../ivideo/showVideo.php"); 
    ?>
						</div>
						<div class="col-6">
							<div class="content-text">Static advertisements with images and text are becoming more dated and irrelevant. Online web videos are the way to go. Those that are able to use the advantages of having a website video will be the ones who will win.</div>
							<div class="content-text">People demand is an entertaining and engaging animated video. That is right. If you look at the videos that dominate social media, they have this blend of engaging, energetic. </div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>
<?php include("includes/footer.php"); ?>
<div id="mainModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="videoModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
			





			</div>
			<div class="container d-flex justify-content-center">
				<video id="talking-heads-video" class="video-js" controls preload="auto" width="800" height="432" poster="https://www.websitetalkingheads.com/ivideo/videos/Animated Alien Video.jpg" data-setup="{}">
					<source src="https://www.websitetalkingheads.com/ivideo/videos/Animated Alien Video.mp4" type='video/mp4'>
					<source src="https://www.websitetalkingheads.com/ivideo/videos/Animated Alien Video.webm" type='video/webm'>
					<p class="vjs-no-js">
						To view this video please enable JavaScript, and consider upgrading to a web browser that
						<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
					</p>
				</video>
			</div>
			<div class="d-none" id="form">
				<?php include("../ivideo/contact.php"); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="contact">Contact Us</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<script src="https://vjs.zencdn.net/7.2.4/video.js"></script>
<script src="../js/iVideo.js"></script>
<script src="js/nav.js"></script>

</body>

</html>