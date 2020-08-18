<!DOCTYPE html>
<html lang="en">
<head>
  <title>Joseph Cruz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="css/assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet'>
  <link rel="stylesheet" href="css/custom.css">
</head>
<script>
	$(document).ready(function(){
		$(window).scroll(function(){
			if($(this).scrollTop() > 120){
				$('#scrollTop').fadeIn();
			}else{
				$('#scrollTop').fadeOut();
			}
			
			
		});
		
		window.addEventListener('scroll', function(e) {
			if( isOnScreen( jQuery('#aboutme') ) ) { /* Pass element id/class you want to check */
			
				
			
				$('.php').css('width','80%');
				$('.html').css('width','90%');
				$('.js').css('width','80%');
				$('.css').css('width','70%');
				$('.bootstrap').css('width','70%');
				$('.laravel').css('width','75%');
				$('.vue').css('width','65%');
				
				
				$('.php').css('animation','php 2s');
				$('.html').css('animation','html 2s');
				$('.js').css('animation','js 2s');
				$('.css').css('animation','css 2s');
				$('.bootstrap').css('animation','bootstrap 2s');
				$('.laravel').css('animation','laravel 2s');
				$('.vue').css('animation','vue 2s');
			}	
		});
		
	})
	
function isOnScreen(elem) {
	// if the element doesn't exist, abort
	if( elem.length == 0 ) {
		return;
	}
	var $window = jQuery(window)
	var viewport_top = $window.scrollTop()
	var viewport_height = $window.height()
	var viewport_bottom = viewport_top + viewport_height
	var $elem = jQuery(elem)
	var top = $elem.offset().top
	var height = $elem.height()
	var bottom = top + height

	return (top >= viewport_top && top < viewport_bottom) ||
	(bottom > viewport_top && bottom <= viewport_bottom) ||
	(height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
}

function downloadCV(){
    window.location.href = 'css/assets/images/josephresume.docx';
}

function gotoContent(content){
	
	var targetDiv = $(this).attr(content);
    $('html, body').animate({
        scrollTop: $(targetDiv).offset().top
    }, 1000);
	
	if(content == 'aboutme'){
		$('.php').css('animation','php 2s');
		$('.html').css('animation','html 2s');
		$('.js').css('animation','js 2s');
		$('.css').css('animation','css 2s');
		$('.bootstrap').css('animation','bootstrap 2s');
		$('.laravel').css('animation','laravel 2s');
		$('.vue').css('animation','vue 2s');
	}
}

function scrollToTop(){
	var targetDiv = $(this).attr('header-div');
    $('html, body').animate({
        scrollTop: $(targetDiv).offset().top
    }, 1000)
}

function showGalleryNexqueue(){
	$('#modal_nexqueue').modal('show');
}

function showGalleryHris(){
	$('#modal_hris').modal('show');
}
</script>
<body>
<div id="header-div">
	<div id="particles-js">
		<div id="profile-pic">
		<center>
		  <img class="rounded-circle" src="css/assets/images/profilepic.jpg" alt="Joseph Crispin Cruz" style="height:12em;"></img><br>
			  <span class="text-detail" style="font-size:25px;">Here I'am Joseph Crispin Cruz</span><br>
			  <span class="text-detail">Im a Software Engineer</span><br><br>
			  <button type="button" class="btn btn-outline-primary" onclick="downloadCV()">Download CV <i class="fa fa-cloud-download"></i></button>
		  <center>
		</div>
	</div>
	<script type="text/javascript" src="particlejs/particles.js"></script>
    <script type="text/javascript" src="particlejs/app.js"></script>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
	  <li class="nav-item">
        <a class="nav-link" id="sample" href="#" onclick="gotoContent('samplework')">Sample Work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="gotoContent('aboutme')">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="gotoContent('workexperience')">Experience</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#" onclick="gotoContent('contactme')">Contact</a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px" id="samplework">
  <div class="row" >
	<div class="col-sm-12">
		<center><span class="title-content"><strong>Sample Projects Handle<span></strong></center>
		<hr />
	</div>
	
	<div class="col-sm-6 card-holder">
		<div class="card">
		  <img src="css/assets/images/nexqueue.png" class="card-img-top" alt="..." >
		  <div class="card-body">
			<h5 class="card-title">Queueng Management System</h5>
			<p class="card-text">Queueng System that organize customer's lane for better serving. This system manage can track
								 the number of queued today, can upload advertisement, manage customer's queue,can generate reports and issueing ticket no. and many more.
								 This system is created using laravel framework and jquery/bootstrap for frontend .</p>
			<button class="btn btn-primary" onclick="showGalleryNexqueue()" style="cursor:pointer;">View Gallery</button>
		  </div>
		</div>
	</div>
	<div class="col-sm-6 card-holder">
		<div class="card">
		  <img src="css/assets/images/hris.png" class="card-img-top" alt="..." >
		  <div class="card-body">
			<h5 class="card-title">HRIS System</h5>
			<p class="card-text">Human Resources system manages HR task such as filing of leaves, generating attendance reports, tracking of attendance and many more. 
								It have also a chat app feature for team collaboration . This system is created using laravel framework and vuejs framework for
								frontend and websocket for realtime notification and messaging.</p>
			<button class="btn btn-primary" onclick="showGalleryHris()" style="cursor:pointer;">View Gallery</button>
		  </div>
		</div>
	</div>
  </div>
  <br>
</div>

<div class="container" style="margin-top:30px" id="aboutme">
  <div class="row">
	<div class="col-sm-12">
		<center><span class="title-content"><strong>All About Me</strong><span></center>
		<hr />
	</div>
	<div class="col-sm-12">
		<div class="row">
		  <div class="col-sm-6 card-holder">
			<div class="card">
			<center><h5 class="card-title" style="margin-top:8px;">Short Bio</h5></center>
			<hr />
				<p class="description">		Hello im Joseph Crispin Cruz graduate of Bachelor of Science in Information Technology. I graduated at
					ICCT COLLEGES last 2015. Ive been working as a programmer for 4 years , im very interested in learning new
					technologies.
				</p>
			</div>
		  </div>
		  
		  <div class="col-sm-6 card-holder">
			<div class="card">
			<center><h5 class="card-title" style="margin-top:8px;">Skills</h5></center>
			<hr />
				<div class="skills">
					<ul>
					<li>
						<h3 class="skill-title">PHP</h3><span class="bar"><span class="php"></span></span>
					</li>
					<li>
						<h3 class="skill-title">HTML</h3><span class="bar"><span class="html"></span></span>
					</li>
					<li>
						<h3 class="skill-title">Javascript</h3><span class="bar"><span  class="js"></span></span>
					</li>
					<li>
						<h3 class="skill-title">CSS</h3><span class="bar"><span class="css"></span></span>
					</li>
					<li>
						<h3 class="skill-title">Bootstrap</h3><span class="bar"><span class="bootstrap"></span></span>
					</li>
					<li>
						<h3 class="skill-title">Laravel</h3><span class="bar"><span class="laravel"></span></span>
					</li>
					<li>
						<h3 class="skill-title">Vuejs</h3><span class="bar"><span class="vue"></span></span>
					</li>
					</ul>
				</div>
			</div>
		  </div>
		</div>	  	
	</div>
  </div>
  <br>
</div>
<div class="container" style="margin-top:30px" id="contactme">
  <div class="row" >
	  <div class="col-sm-12">
			<center><span class="title-content"><strong>Contact</strong><span></center>
			<hr />
		<form method="POST" action="sendemail.php">
			<div class="form-group">
				<label class="card-title">Name</label>
				<input type="text" class="form-control" name="visitor" placeholder="Name" />
			</div>
			<div class="form-group">
				<label class="card-title">Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email" />
			</div>
			<div class="form-group">
				<label class="card-title">Message</label>
				<textarea class="form-control" name="message" placeholder="Drop your message here. . ."></textarea>
			</div>
			<input type="submit" class="btn btn-primary"></input>
	 </form>
	  </div>
  </div>
</div>
<br>
<a href="javascript:void(0;)" title="Scroll up" id="scrollTop" onclick="scrollToTop()">
	<span></span>
</a>
<div class="jumbotron text-center" style="margin-bottom:0;background-color:#515152; color:#FFFFFF80">
 Copyright&copy;<u>Joseph Cruz</u><br>All rights reserve <?php echo date('Y'); ?>
</div>

<!--  Modal nexqueue -->
  <div class="modal fade " id="modal_nexqueue">
    <div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<li data-target="#demo" data-slide-to="3"></li>
			  </ul>
			  
			  <!-- The slideshow -->
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="css/assets/images/nexqueue_dashboard.png" alt="Dashboard" class="carousel-img">
				</div>
				<div class="carousel-item">
				  <img src="css/assets/images/nexqueue_token.png" alt="Issue Token" class="carousel-img">
				</div>
				<div class="carousel-item">
				  <img src="css/assets/images/nexqueue_media.png" alt="Upload media" class="carousel-img">
				</div>
				<div class="carousel-item">
				  <img src="css/assets/images/nexqueue_window.png" alt="Upload media"  class="carousel-img">
				</div>
			  </div>
			  
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
			</div>
		</div>
	</div>
  </div>
  
  <!--  Modal hris -->
  <div class="modal fade " id="modal_hris">
    <div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div id="demo2" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ul class="carousel-indicators">
				<li data-target="#demo2" data-slide-to="0" class="active"></li>
				<li data-target="#demo2" data-slide-to="1"></li>
				<li data-target="#demo2" data-slide-to="2"></li>
				<li data-target="#demo2" data-slide-to="3"></li>
				<li data-target="#demo2" data-slide-to="4"></li>
			  </ul>
			  
			  <!-- The slideshow -->
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="css/assets/images/hris_admin_dashboard.png" alt="Admin Dashboard" class="carousel-img">
				</div>
				<div class="carousel-item">
				  <img src="css/assets/images/hris_attendance_dashboard.png" alt="Attendance Dashboard" class="carousel-img">
				</div>
				<div class="carousel-item">
				  <img src="css/assets/images/hris_time_log.png" alt="Time in" class="carousel-img">
				</div>
				<div class="carousel-item">
				  <img src="css/assets/images/hris_create_gc.png" alt="Create GC"  class="carousel-img">
				</div>
				<div class="carousel-item">
				  <img src="css/assets/images/hris_chat.png" alt="Sample Chat"  class="carousel-img">
				</div>
			  </div>
			  
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo2" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo2" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
			</div>
		</div>
	</div>
  </div>
  

</body>
</html>
