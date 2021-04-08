<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Home Page</title>

<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="animate.css-main/animate.css">

<script type="text/javascript" href="js/custom.js"> </script>
	<!-- Load more button script-->
	<script src="./js/wow.min.js"></script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();

  </script>
<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<style>

.srch .searchh {
    max-width:100%;
    color:#fff;
  }
  
  input#Go {
    color: #fff;
    padding: 2px 11px !important;
    border-radius: 0 5px 5px 0;
    margin-left: -8px;
    background: grey !important;
    cursor: pointer;
}

form.form-inline.my-2.my-lg-0.ml-8.form-group.has-search {
    width: 65%;
    text-align: center;
    margin-left: 11%;
}


  
@media only screen and ( max-width: 680px ) {
  .srch .searchh {
    max-width:100%;
    color:#fff;
  }
input#Go {
    color: #fff;
    padding: 2px 11px !important;
    border-radius: 0 5px 5px 0;
    margin-left: -3px;
    background: grey !important;
    cursor: pointer;
}


</style>

</head>
<body>

	<!-- Header -->

	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg">
			<!-- Logo -->
				<a class="navbar-brand site-image" href="#"><img src="images/logo.png" alt=""></a>
				<a class="navbar-brand site-image mobilelogoo" href="#"><img src="images/logo-ico.png" alt=""></a>

						<!-- Mobile menu -->
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>


	
				
				


				<!-- Menu  -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				
					<a class="navbar-brand site-image mobile-only" href="#"><img src="images/logo-ico.png" alt=""></a>
					<div class="container mobile-only"><div class="col-12 navlogin">
					<h3>Login Now</h3>
					<form><input type="text" id="user"></input>
					<input type="password"></input>
					<input type="submit" id="submit"></input>
					<p>Signup Is Disabled</p>
					</form></div></div>
					
					
					<ul class="navbar-nav mr-auto">
						<!--<li class="nav-item active">-->
						<!--<i class="icon ion-ios-paper mobile-only"></i>-->
						<!--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
						<!--</li>-->
						<li class="nav-item active">
						<i class="icon ion-ios-paper mobile-only"></i>
						<a class="nav-link" href="#">Messages <span class="sr-only">(current)</span></a>
						</li>
									
						<li class="nav-item active">
						<i class="icon ion-ios-paper mobile-only"></i>
							<a class="nav-link" href="#">Orders <span class="sr-only">(current)</span></a>
						</li>
										
						<li class="nav-item active">
						<i class="icon ion-ios-paper mobile-only"></i>
							<a class="nav-link" href="#">Explore <span class="sr-only">(current)</span></a>
						</li>
						

						<li class="nav-item">
						<i class="icon ion-ios-paper mobile-only"></i>
							<a class="nav-link" href="#">Support</a>
						</li>
						
						
						
						<li class="nav-item">
						<i class="icon ion-ios-paper mobile-only"></i>
							  <a href="{{ url('user/dashboard') }}"> Dashboard </a>
						</li>
						
                        <li class="nav-item">
						<i class="icon ion-ios-paper mobile-only"></i>
							  <a href="{{ url('/logout') }}"> logout </a>
						</li>
					</ul>

				</div>

				<!-- Actual search box -->
                            <form class="form-inline my-2 my-lg-0 ml-8 form-group has-search">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control mr-sm-2 searchh" style="color: white;" placeholder="Search for Perks">  <!--
                                    <input type="text" class="form-control mr-sm-2 nearr" placeholder="Nearby"> -->
                                    <input type="submit" class="form-control mr-sm-2" name="Go" value="Go" id="Go">
                            </form>
			</nav>
		</div>
		
		<div class="container-fluid cd-main-content custom-container">
		    <div class="row">
		        <div class="col-md-12">
                            <div class="submenu">
                                <ul>
                                    @foreach($homeCatArrayData as $catList)
                                        <li><a href="{{ $catList->cat_key }}">{{ $catList->name }}</a></li>             
                                    @endforeach
                                    
                                    <li class="moresub"><a href="#">More</a><i class="fa fa-caret-down"></i>
                                        <ul class="submenuarea">
                                            @foreach($homeCatMoreArrayData as $catMoreList)
                                                <li><a href="{{ $catMoreList->cat_key }}">{{ $catMoreList->name }}</a></li>    
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
	</header>

    <div class="container-fluid cd-main-content custom-container">
	<section class="">
	    <div class="most-left-section col-md-2" style="position:static;">
		<div class="profile-card">
                    <img src="images/user-1.jpg" alt="user" class="profile-photo">
                    <h5><a href="#" class="text-white">Sarah Cruiz</a></h5>
                    <a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
		</div>
			<!--profile card ends-->
			<ul class="nav-news-feed">
				<li><i class="icon ion-ios-paper"></i>
					<div><a href="#">Messages</a></div>
				</li>
				<li><i class="icon ion-ios-people"></i>
					<div><a href="#">Orders</a></div>
				</li>
				<li><i class="icon ion-ios-people-outline"></i>
					<div><a href="#">Following</a></div>
				</li>
				<li><i class="icon ion-chatboxes"></i>
					<div><a href="#">Followers</a></div>
				</li>
				<li><i class="icon ion-images"></i>
					<div><a href="#">Explore</a></div>
				</li>
				<li><i class="icon ion-ios-videocam"></i>
					<div><a href="#">Videos</a></div>
				</li>
			</ul>
			<!--news-feed links ends-->
			<div id="chat-block">
				<div class="title">Chat online</div>
				<ul class="online-users list-inline">
					<li><a href="#" title="Linda Lohan"><img src="images/user-2.jpg" alt="user"
								class="img-responsive profile-photo"><span class="online-dot"></span></a>
					</li>
					<li><a href="#" title="Sophia Lee"><img src="images/user-3.jpg" alt="user"
								class="img-responsive profile-photo"><span class="online-dot"></span></a>
					</li>
					<li><a href="#" title="John Doe"><img src="images/user-4.jpg" alt="user"
								class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
					<li><a href="#" title="Alexis Clark"><img src="images/user-5.jpg" alt="user"
								class="img-responsive profile-photo"><span class="online-dot"></span></a>
					</li>
					<li><a href="#" title="James Carter"><img src="images/user-6.jpg" alt="user"
								class="img-responsive profile-photo"><span class="online-dot"></span></a>
					</li>
					<li><a href="#" title="Robert Cook"><img src="images/user-7.jpg" alt="user"
								class="img-responsive profile-photo"><span class="online-dot"></span></a>
					</li>
					<li><a href="#" title="Richard Bell"><img src="images/user-8.jpg" alt="user"
								class="img-responsive profile-photo"><span class="online-dot"></span></a>
					</li>
					<li><a href="#" title="Anna Young"><img src="images/user-9.jpg" alt="user"
								class="img-responsive profile-photo"><span class="online-dot"></span></a>
					</li>
					<li><a href="#" title="Julia Cox"><img src="images/user-10.jpg" alt="user"
								class="img-responsive profile-photo"><span class="online-dot"></span></a>
					</li>
				</ul>
			</div>
			<!--chat block ends-->
		<div class="most-right-section">
			<div class="suggestions">
				<h4 class="grey">Who to Follow</h4>
				<div class="follow-user">
					<img src="images/user-11.jpg" alt="" class="profile-photo-sm pull-left">
					<div>
						<h5><a href="#">Diana Amber</a></h5>
						<a href="#" class="text-green">Add friend</a>
					</div>
				</div>
				<div class="follow-user">
					<img src="images/user-12.jpg" alt="" class="profile-photo-sm pull-left">
					<div>
						<h5><a href="#">Cris Haris</a></h5>
						<a href="#" class="text-green">Add friend</a>
					</div>
				</div>
				<div class="follow-user">
					<img src="images/user-13.jpg" alt="" class="profile-photo-sm pull-left">
					<div>
						<h5><a href="#">Brian Walton</a></h5>
						<a href="#" class="text-green">Add friend</a>
					</div>
				</div>
				<div class="follow-user">
					<img src="images/user-14.jpg" alt="" class="profile-photo-sm pull-left">
					<div>
						<h5><a href="#">Olivia Steward</a></h5>
						<a href="#" class="text-green">Add friend</a>
					</div>
				</div>
				<div class="follow-user">
					<img src="images/user-15 (1).jpg" alt="" class="profile-photo-sm pull-left">
					<div>
						<h5><a href="#">Sophia Page</a></h5>
						<a href="#" class="text-green">Add friend</a>
					</div>
				</div>
			</div>
		</div>


		</div>
	</section>
    
    
    @yield('content')
    
    
    

	<section class="">
	<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

	</section>
</div>

	<!-- Footer -->

	


	<!-- Stickey sections script -->
	<script type="text/javascript">
		var left = document.getElementById("chat-block");
		var stop = (left.offsetTop - 60);

		window.onscroll = function (e) {
			var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
			console.log(scrollTop, left.offsetTop);
			// left.offsetTop;

			if (scrollTop >= stop) {
				left.className = 'stick';
			} else {
				left.className = '';
			}

		}
$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});	</script>
</body>

</html>