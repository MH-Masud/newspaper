
<!DOCTYPE HTML>
<html>
<head>
	<title>The Daily News | Section </title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Blogname Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
	/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!--end slider -->
		<!--script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!---->

</head>
<body>
	<?php
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://content.guardianapis.com/search?api-key=7f9247e7-08ac-4514-9167-7284248e8bfe");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch); 
		$data = json_decode($output);
		$latest_posts = $data->response->results;
	?>
<!---strat-banner---->
<div class="banner">				
	 <div class="header">  
		  <div class="container">
			  <div class="logo">
					<a href="index.html"> <img src="images/logo.jpg" title="soup" /></a>
			 </div>
			 <div class="clearfix"></div>
					<script>
					$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
					});
					</script>
				<!---//End-top-nav---->					
		 </div>
	 </div>
	 <div class="container">
		 <div class="banner-head">
			 <h1>The Daily News</h1>
		 </div>
		 <div class="banner-links">
			 <ul>
			 <li class="active"><a href="/">Home</a></li>
				 <?php
				 $all_section = array();
				 foreach($latest_posts as $section) {
					array_push($all_section,$section->sectionId);
				 }
				 $unique_sections = array_unique($all_section);
				 foreach($unique_sections as $sec) {
				?>
				 <li class="active"><a href="section.php?id=<?php echo $sec ?>"><?php echo $sec?></a></li>
				<?php } ?>
			 </ul>
		 </div>
	 </div>
</div>
<!---//End-banner---->
<div class="content">
	 <div class="container">
		 <div class="content-grids">
			 <div class="col-md-8 content-main">
				 <div class="content-grid">
					 <div class="content-grid-head">
						 <h3><?php echo $_GET['id']; ?></h3>
					 </div>
				 </div>
				<?php 
				$post_id = $_GET['id'];
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "https://content.guardianapis.com/".$post_id."?api-key=7f9247e7-08ac-4514-9167-7284248e8bfe");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$output = curl_exec($ch);
				curl_close($ch); 
				$section_data = json_decode($output);
				$section_posts = $section_data->response->results;
				foreach($section_posts as $post) { 
				?>
				 <div class="content-grid-sec">
					 <div class="content-sec-info">
							 <h3><a href="single.php?id=<?php echo $post->id ?>"><?php echo $post->webTitle?></a></h3>
							 <h4><?php echo $post->webPublicationDate?> : <a href="section.php?id=<?php echo $post->sectionId?>"><?php echo $post->sectionName?></a></h4>
							 <a class="bttn" href="single.php?id=<?php echo $post->id ?>">MORE</a>
					 </div>
				 </div>
				<?php } ?>			 
			 </div>
			 
			 <div class="col-md-4 content-main-right">
				 <div class="search">
						 <h3>SEARCH HERE</h3>
						 <form action="search.php" method="POST">
							<input type="text" name="key_word" value="">
							<input type="submit" value="">
						</form>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--fotter-->
<div class="fotter">
	 <div class="container">
		 <div class="col-md-4 fotter-info">
			 <h3>INTEGER VITAE LIBERO</h3>
			 <p>Raesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. </p>
			 <p>Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus ultrices nulla quis nibh. Quisque a lectus. </p>
		 </div>
		 <div class="col-md-4 fotter-list">
			 <h3>VESTIBULUM COMMO</h3>
			 <ul>
			 <li><a href="#">Ut alliquam solicitudin</a></li>
			 <li><a href="#">Neque id cursus faucibus</a></li>
			 <li><a href="#">Raesent dapibus neque id cursus</a></li>
			 </ul>
		 </div>
		 <div class="col-md-4 fotter-media">
				<h3>FOLLOW US ON....</h3>
				 <div class="social-icons">
				 <a href="#"><span class="fb"> </span></a>
				 <a href="#"><span class="twt"> </span></a>
				 <a href="#"><span class="in"> </span></a>				 			 
			    </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---fotter/-->
<div class="copywrite">
	 <div class="container">
	 <p>Copyrights &copy; 2015 Blogging All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
</div>
</div>
<!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>