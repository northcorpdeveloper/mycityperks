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
<link rel="stylesheet" type="text/css" href="{{ asset('assetcityfront/media/logos/favicon.ico')}}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('assetcityfront/animate.css-main/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assetcityfront/css/style.css') }}">


<script type="text/javascript" href="{{ asset('assetcityfront/js/custom.js') }} "> </script>
	<!-- Load more button script-->
	<script src="{{ asset('assetcityfront/js/wow.min.js') }}"></script>
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
.masonry {
  display: flex;
  flex-flow: column wrap;
  margin-left: -8px; /* Adjustment for the gutter */
  counter-reset: brick;
  width: 100%;
}

. {
  overflow: hidden;
  border-radius: 5px;
  margin: 0 0 8px 8px;  /* Some Gutter */
  position: relative;
}


.-caption {
  padding: 1.5em;
  text-align: center;
}

.masonry-preloader {
  font-size: 2em;
  letter-spacing: 2px;
  text-transform: uppercase;
  opacity: .5;
  height: 3em;
  display: flex;
  justify-content: center;
 align-items: center;
}

.masonry-img {
  object-fit: cover;
  width: 100%;
  height: 100%;
  filter: brightness(50%);
}


@media (min-width: 576px){
  .modal-dialog {
    max-width: 400px;
    
    .modal-content {
      padding: 1rem;
    }
  }
}

.modal-header {
  .close {
    margin-top: -1.5rem;
  }
}

.form-title {
  margin: -2rem 0rem 2rem;
}

.btn-round {
  border-radius: 3rem;
}

.delimiter {
  padding: 1rem;  
}

.social-buttons {
  .btn {
    margin: 0 0.5rem 1rem;
  }
}

.signup-section {
  padding: 0.3rem 0rem;
}




.global-container{
	height:100%;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #ffffff;
}

form{
	padding-top: 5px;
	font-size: 14px;
	margin-top: 5px;
}

.card-title{ font-weight:300; }

.btn{
	font-size: 14px;
	margin-top:20px;
}


.login-form{ 
	max-width:330px;
	margin:10px;
}

.sign-up{
	text-align:center;
	padding:20px 0 0;
}

.alert{
	margin-bottom:-30px;
	font-size: 13px;
	margin-top:20px;
}
.loginfrm{
margin-top:30px;

}
</style>
</head>
<body>

	<!-- Header -->

	<header>
    <div class="container">
    <nav class="navbar navbar-expand-lg">
    <!-- Logo -->
            <a class="navbar-brand site-image" href="#"><img src="{{ asset('assetcityfront/images/logo.png') }}" alt=""></a>
            <a class="navbar-brand site-image mobilelogoo" href="#"><img src="{{ asset('assetcityfront/images/logo-ico.png') }}" alt=""></a>

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

                    <a class="navbar-brand site-image mobile-only" href="#"><img src="{{ asset('assetcityfront/images/images/logo-ico.png')}}" alt=""></a>
                    <div class="container mobile-only"><div class="col-12 navlogin">
                    <h3>Login Now</h3>
                    <form><input type="text" id="user"></input>
                    <input type="password"></input>
                    <input type="submit" id="submit"></input>
                    <p>Signup Is Disabled</p>
                    </form></div></div>


                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <i class="icon ion-ios-paper mobile-only"></i>
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                        <i class="icon ion-ios-paper mobile-only"></i>
                        <a class="nav-link" href="#">Explore <span class="sr-only">(current)</span></a>
                        </li>
                         <?php  $routeName = Route::currentRouteName();  $userId= Auth::user(); if(isset($userId) && !empty($userId)){ ?>
                            
                        <?php if($userId->user_type == 1){ ?>
                          
                         <li class="nav-item ">
                        <i class="icon ion-ios-paper mobile-only"></i>
                           <a href="{{ url('user/dashboard') }}"> Dashboard</a>
                        </li>
                        <?php }else{ ?>
                         <li class="nav-item ">
                        <i class="icon ion-ios-paper mobile-only"></i>
                           <a href="{{ url('customer/dashboard') }}"> Dashboard</a>
                        </li>
                        <?php } ?>
                            
                        <li class="nav-item ">
                        <i class="icon ion-ios-paper mobile-only"></i>
                           <a href="{{ url('/logout') }}"> logout</a>
                        </li>
                         <?php }else{ ?>
                            <li class="nav-item">
                                <i class="icon ion-ios-paper mobile-only"></i>
                                <a class="nav-link" data-toggle="modal" data-target="#loginModal">Login <span class="sr-only">(current)</span></a>
                            </li>
                            
                            <li class="nav-item">
                            <i class="icon ion-ios-paper mobile-only"></i>
                                    <a class="nav-link" data-toggle="modal" data-target="#signupModal" >Sign up Now <span class="sr-only">(current)</span></a>
                            </li>
                        
                        
                         <?php } ?>
                            
                        
					
                        <li class="nav-item">
                        <i class="icon ion-ios-paper mobile-only"></i>
                                <a class="nav-link" href="#">Contact</a>
                        </li>
                </ul>

        </div>

        <!-- Actual search box -->
        <form class="form-inline my-2 my-lg-0 ml-8 form-group has-search">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control mr-sm-2 searchh" placeholder="Search for Perks">
                <input type="text" class="form-control mr-sm-2 nearr" placeholder="Nearby">
                <input type="submit" class="form-control mr-sm-2" name="Go" value="Go" id="Go">
        </form>
</nav>
</div>
		
<div class="container-fluid cd-main-content custom-container">
<div class="row">
<div class="col-md-12">
<div class="submenu">
<ul>
<li><a href="#">cars &amp; Tructs</a></li>
<li><a href="#">Lorem Ispum</a></li>
<li><a href="#">Furniture</a></li>
<li><a href="#">Baby &amp; Kids</a></li>
<li class="moresub"><a href="#">More</a><i class="fa fa-caret-down"></i>

<ul class="submenuarea">
<li><a href="#">Nav Menu Item</a></li>
<li><a href="#">Nav Menu Item</a></li>
<li><a href="#">Nav Menu Item</a></li>
<li><a href="#">Nav Menu Item</a></li>
<li><a href="#">Nav Menu Item</a></li>
<li><a href="#">Nav Menu Item</a></li>
<li><a href="#">Nav Menu Item</a></li>
<li><a href="#">Nav Menu Item</a></li>
<li><a href="#">Nav Menu Item</a></li>
<li><a href="#">Nav Menu Item</a></li>
<li><a href="#">Nav Menu Item</a></li>
<li><a href="#">Nav Menu Item</a></li>
</ul></li>

</ul>

</div>
</div>
</div>
</div>
 </header>

<div id="content-block">
    <div class="head-bg">
        <div class="head-bg-img"></div>
        <div class="head-bg-content">
            <h1>Your Best Social Network Template</h1>
            <p>Donec in rhoncus tortor. Sed tristique auctor ligula vel viverra</p>
            
            <?php  $routeName = Route::currentRouteName();  $userId= Auth::user(); if(isset($userId) && !empty($userId)){ ?>
                        
                     
                        
                        <li class="nav-item active">
                        <i class="icon ion-ios-paper mobile-only"></i>
                           <a href="{{ url('/logout') }}"> logout </a>
                        </li>
                         <?php }else{ ?>
                        <a href="{{ url('auth/google') }}" class="btn color-1 size-1 hover-1"><i class="fa fa-google"></i>Sign in via Google</a>
                        <a class="be-register btn color-3 size-1 hover-6" data-toggle="modal" data-target="#signupModal"><i class="fa fa-lock"></i>sign up with email</a>  
            <?php } ?>
                            
                            
                            
            
        </div>	
    </div>
<div class="container-fluid cd-main-content custom-container">
    <div class="row">
        <div class="col-md-2 left-feild">
            <form action="./" class="input-search">
                <input type="text" required="" placeholder="Enter keyword">
                <i class="fa fa-search"></i>
                <input type="submit" value="">
            </form>				
        </div>			
    <div class="col-md-10 ">
        <div class="for-be-dropdowns">
            <div class="be-drop-down">
                    <i class="icon-projects"></i>
                    <span class="be-dropdown-content"> Projects	</span>
                    <ul class="drop-down-list" style="display: none;">
                            <li class="filter" data-filter=".category-1"><a data-type="category-1">Projects</a></li>
                            <li class="filter" data-filter=".category-2"><a data-type="category-2">Work in Progress</a></li>
                            <li class="filter" data-filter=".category-3"><a data-type="category-3">People</a></li>
                    </ul>
            </div>
    <div class="be-drop-down">
        <i class="icon-creative"></i>
        <span class="be-dropdown-content">All Creative Filds
        </span>
        <ul class="drop-down-list">
                <li class="filter" data-filter=".category-4"><a>Item - 1</a></li>
                <li class="filter" data-filter=".category-5"><a>Item - 2</a></li>
                <li class="filter" data-filter=".category-1"><a>Item - 3</a></li>
        </ul>
    </div>
    <div class="be-drop-down">
        <i class="icon-features"></i>
        <span class="be-dropdown-content">Features
        </span>
        <ul class="drop-down-list">
                <li class="filter" data-filter=".category-2"><a>Featured</a></li>
                <li class="filter" data-filter=".category-3"><a>Most Appreciated</a></li>
                <li class="filter" data-filter=".category-4"><a>Most Viewed</a></li>
                <li class="filter" data-filter=".category-5"><a>Most Discussed</a></li>
                <li class="filter" data-filter=".category-1"><a>Most Recent</a></li>
        </ul>
    </div>
    <div class="be-drop-down">
            <i class="icon-worldwide"></i>
            <span class="be-dropdown-content">Worldwide
            </span>
            <ul class="drop-down-list">
                    <li class="filter" data-filter=".category-2"><a>WorldWide</a></li>
                    <li class="filter" data-filter=".category-3"><a>United States</a></li>
                    <li class="filter" data-filter=".category-4"><a>Germany</a></li>
                    <li class="filter" data-filter=".category-5"><a>United Kingdom</a></li>
            </ul>
    </div>
</div>				
</div>
</div>
</div>		
    <div class="container-fluid custom-container">
        <div class="row">		
    <div class="col-md-2 left-feild">
        <div class="be-vidget">
            <h3 class="letf-menu-article">
                Popular Creative Filds
            </h3>
            <div class="creative_filds_block">
                <div class="ul">
                    @foreach($PopularCategory as $PopularCategoryList)
                    <a data-filter=".category-{{ $PopularCategoryList->id }}" class="filter">{{ $PopularCategoryList->category_name }}</a>                 
                    @endforeach
                </div>
            </div>
        </div>
    <div class="be-vidget">
            <h3 class="letf-menu-article">
                    Popular Tags
            </h3>
        <div class="tags_block clearfix">
            <ul>
                <li><a data-filter=".category-6" class="filter">photoshop</a></li>
                <li><a data-filter=".category-1" class="filter">graphic</a></li>
                <li><a data-filter=".category-2" class="filter">art</a></li>
                <li><a data-filter=".category-3" class="filter">website</a></li>
                <li><a data-filter=".category-4" class="filter">logo</a></li>
                <li><a data-filter=".category-5" class="filter">identity</a></li>
                <li><a data-filter=".category-6" class="filter">logo design</a></li>
                <li><a data-filter=".category-1" class="filter">interactive</a></li>
                <li><a data-filter=".category-2" class="filter">blue</a></li>
                <li><a data-filter=".category-3" class="filter">branding</a></li>
            </ul>
        </div>
    </div>
    <div class="be-vidget">
        <h3 class="letf-menu-article">
                Filter By
        </h3>
        <div class="filter-block">
	<ul>
    <li><a><i class="fa fa-graduation-cap"></i>Schools</a>
            <div class="be-popup">
                    <h3 class="letf-menu-article">
                            Enter School
                    </h3>
                            <form action="./" class="input-search">
                                    <input class="filters-input ui-autocomplete-input" type="text" required="" placeholder="Start typing to see list" autocomplete="off">
                            </form>
                    <i class="fa fa-times"></i>
            </div>
    </li>
    <li><a><i class="fa fa-wrench"></i>Tools Used</a>
            <div class="be-popup">
                    <h3 class="letf-menu-article">
                            Tools
                    </h3>
                            <form action="./" class="input-search">
                                    <input class="filters-input ui-autocomplete-input" type="text" required="" placeholder="Start typing to see list" autocomplete="off">
                            </form>
                    <i class="fa fa-times"></i>
            </div>
    </li>
    <li><a><i class="fa fa-paint-brush"></i>Color</a>
        <div class="be-popup be-color-picker">
        <h3 class="letf-menu-article">
            Choose color
        </h3>
    <div class="for-colors">
        <ul class="colors  cfix">
            <li data-filter=".category-1" class="color filter color-0-0"></li>
            <li data-filter=".category-2" class="color filter color-0-1"></li>
            <li data-filter=".category-3" class="color filter color-0-2"></li>
            <li data-filter=".category-4" class="color filter color-0-3"></li>
            <li data-filter=".category-5" class="color filter color-0-4"></li>
            <li data-filter=".category-1" class="color filter color-0-5"></li>
            <li data-filter=".category-2" class="color filter color-0-6"></li>
            <li data-filter=".category-3" class="color filter color-0-7"></li>
            <li data-filter=".category-4" class="color filter color-0-8"></li>
            <li data-filter=".category-5" class="color filter color-0-9"></li>
            <li data-filter=".category-1" class="color filter color-0-10"></li>
            <li data-filter=".category-5" class="color filter color-0-11"></li>
            <li data-filter=".category-1" class="color filter color-1-0"></li>
            <li data-filter=".category-2" class="color filter color-1-1"></li>
            <li data-filter=".category-1" class="color filter color-1-2"></li>
            <li data-filter=".category-1" class="color filter color-1-3"></li>
            <li data-filter=".category-1" class="color filter color-1-4"></li>
            <li data-filter=".category-4" class="color filter color-1-5"></li>
            <li data-filter=".category-1" class="color filter color-1-6"></li>
            <li data-filter=".category-1" class="color filter color-1-7"></li>
            <li data-filter=".category-6" class="color filter color-1-8"></li>
            <li data-filter=".category-1" class="color filter color-1-9"></li>
            <li data-filter=".category-1" class="color filter color-1-10"></li>
            <li data-filter=".category-1" class="color filter color-1-11"></li>
            <li data-filter=".category-1" class="color filter color-2-0"></li>
            <li data-filter=".category-1" class="color filter color-2-1"></li>
            <li data-filter=".category-1" class="color filter color-2-2"></li>
            <li data-filter=".category-1" class="color filter color-2-3"></li>
            <li data-filter=".category-1" class="color filter color-2-4"></li>
            <li data-filter=".category-1" class="color filter color-2-5"></li>
            <li data-filter=".category-1" class="color filter color-2-6"></li>
            <li data-filter=".category-1" class="color filter color-2-7"></li>
            <li data-filter=".category-1" class="color filter color-2-8"></li>
            <li data-filter=".category-1" class="color filter color-2-9"></li>
            <li data-filter=".category-1" class="color filter color-2-10"></li>
            <li data-filter=".category-1" class="color filter color-2-11"></li>
            <li data-filter=".category-1" class="color filter color-3-0"></li>
            <li data-filter=".category-1" class="color filter color-3-1"></li>
            <li data-filter=".category-1" class="color filter color-3-2"></li>
            <li data-filter=".category-1" class="color filter color-3-3"></li>
            <li data-filter=".category-1" class="color filter color-3-4"></li>
            <li data-filter=".category-1" class="color filter color-3-5"></li>
            <li data-filter=".category-1" class="color filter color-3-6"></li>
            <li data-filter=".category-1" class="color filter color-3-7"></li>
            <li data-filter=".category-1" class="color filter color-3-8"></li>
            <li data-filter=".category-1" class="color filter color-3-9"></li>
            <li data-filter=".category-1" class="color filter color-3-10"></li>
            <li data-filter=".category-1" class="color filter color-3-11"></li>
            <li data-filter=".category-1" class="color filter color-4-0"></li>
            <li data-filter=".category-1" class="color filter color-4-1"></li>
            <li data-filter=".category-1" class="color filter color-4-2"></li>
            <li data-filter=".category-1" class="color filter color-4-3"></li>
            <li data-filter=".category-1" class="color filter color-4-4"></li>
            <li data-filter=".category-1" class="color filter color-4-5"></li>
            <li data-filter=".category-1" class="color filter color-4-6"></li>
            <li data-filter=".category-1" class="color filter color-4-7"></li>
            <li data-filter=".category-1" class="color filter color-4-8"></li>
            <li data-filter=".category-1" class="color filter color-4-9"></li>
            <li data-filter=".category-1" class="color filter color-4-10"></li>
            <li data-filter=".category-1" class="color filter color-4-11"></li>
            <li data-filter=".category-1" class="color filter color-5-0"></li>
            <li data-filter=".category-1" class="color filter color-5-1"></li>
            <li data-filter=".category-1" class="color filter color-5-2"></li>
            <li data-filter=".category-1" class="color filter color-5-3"></li>
            <li data-filter=".category-1" class="color filter color-5-4"></li>
            <li data-filter=".category-1" class="color filter color-5-5"></li>
            <li data-filter=".category-1" class="color filter color-5-6"></li>
            <li data-filter=".category-1" class="color filter color-5-7"></li>
            <li data-filter=".category-1" class="color filter color-5-8"></li>
            <li data-filter=".category-1" class="color filter color-5-9"></li>
            <li data-filter=".category-1" class="color filter color-5-10"></li>
            <li data-filter=".category-1" class="color filter color-5-11"></li>
            <li data-filter=".category-1" class="color filter color-6-0"></li>
            <li data-filter=".category-1" class="color filter color-6-1"></li>
            <li data-filter=".category-6" class="color filter color-6-2"></li>
            <li data-filter=".category-1" class="color filter color-6-3"></li>
            <li data-filter=".category-1" class="color filter color-6-4"></li>
            <li data-filter=".category-1" class="color filter color-6-5"></li>
            <li data-filter=".category-1" class="color filter color-6-6"></li>
            <li data-filter=".category-1" class="color filter color-6-7"></li>
            <li data-filter=".category-1" class="color filter color-6-8"></li>
            <li data-filter=".category-1" class="color filter color-6-9"></li>
            <li data-filter=".category-1" class="color filter color-6-10"></li>
            <li data-filter=".category-1" class="color filter color-6-11"></li>
            <li data-filter=".category-1" class="color filter color-7-0"></li>
            <li data-filter=".category-1" class="color filter color-7-1"></li>
            <li data-filter=".category-1" class="color filter color-7-2"></li>
            <li data-filter=".category-1" class="color filter color-7-3"></li>
            <li data-filter=".category-1" class="color filter color-7-4"></li>
            <li data-filter=".category-1" class="color filter color-7-5"></li>
            <li data-filter=".category-1" class="color filter color-7-6"></li>
            <li data-filter=".category-1" class="color filter color-7-7"></li>
            <li data-filter=".category-1" class="color filter color-7-8"></li>
            <li data-filter=".category-1" class="color filter color-7-9"></li>
            <li data-filter=".category-1" class="color filter color-7-10"></li>
            <li data-filter=".category-1" class="color filter color-7-11"></li>
            <li data-filter=".category-1" class="color filter color-8-0"></li>
            <li data-filter=".category-1" class="color filter color-8-1"></li>
            <li data-filter=".category-1" class="color filter color-8-2"></li>
            <li data-filter=".category-1" class="color filter color-8-3"></li>
            <li data-filter=".category-1" class="color filter color-8-4"></li>
            <li data-filter=".category-1" class="color filter color-8-5"></li>
            <li data-filter=".category-1" class="color filter color-8-6"></li>
            <li data-filter=".category-6" class="color filter color-8-7"></li>
            <li data-filter=".category-1" class="color filter color-8-8"></li>
            <li data-filter=".category-1" class="color filter color-8-9"></li>
            <li data-filter=".category-1" class="color filter color-8-10"></li>
            <li data-filter=".category-1" class="color filter color-8-11"></li>
            <li data-filter=".category-1" class="color filter color-9-0"></li>
            <li data-filter=".category-1" class="color filter color-9-1"></li>
            <li data-filter=".category-1" class="color filter color-9-2"></li>
            <li data-filter=".category-1" class="color filter color-9-3"></li>
            <li data-filter=".category-6" class="color filter color-9-4"></li>
            <li data-filter=".category-1" class="color filter color-9-5"></li>
            <li data-filter=".category-1" class="color filter color-9-6"></li>
            <li data-filter=".category-1" class="color filter color-9-7"></li>
            <li data-filter=".category-1" class="color filter color-9-8"></li>
            <li data-filter=".category-1" class="color filter color-9-9"></li>
            <li data-filter=".category-1" class="color filter color-9-10"></li>
            <li data-filter=".category-1" class="color filter color-9-11"></li>
	    </ul>
	</div>
	<i class="fa fa-times"></i>										
	</div>
	</li>
                    <li><a><i class="fa fa-camera-retro"></i>Visit Gallery</a>
                            <div class="be-popup">
                                <h3 class="letf-menu-article">
                                    Galerry
                                </h3>
                            <form action="./" class="input-search">
                            <input class="filters-input ui-autocomplete-input" type="text" required="" placeholder="Start typing to see list" autocomplete="off">
                        </form>
                        <i class="fa fa-times"></i>
                    </div>
                </li>
            </ul>
        </div>
        </div>
    </div>

    <?php /*------------------- Product section ----------- */ ?>

            @yield('content')

    <?php /* ------------------Product Section end --------- */ ?>

            
     </div>
    
       </div>
    </div>
	<!-- Footer -->
<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

<script>
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
});
function masonry(grid, gridCell, gridGutter, dGridCol, tGridCol, mGridCol) {
  var g = document.querySelector(grid),
      gc = document.querySelectorAll(gridCell),
      gcLength = gc.length,
      gHeight = 0,
      i;
  
  for(i=0; i<gcLength; ++i) {
    gHeight+=gc[i].offsetHeight+parseInt(gridGutter);
  }
  
  if(window.screen.width >= 1024)
    g.style.height = gHeight/dGridCol + gHeight/(gcLength+1) + "px";
  else if(window.screen.width < 1024 && window.screen.width >= 768)
    g.style.height = gHeight/tGridCol + gHeight/(gcLength+1) + "px";
  else
    g.style.height = gHeight/mGridCol + gHeight/(gcLength+1) + "px";
}

var masonryGrid = document.querySelector('.masonry');
masonryGrid.insertAdjacentHTML("afterend", "<div class='masonry-preloader'>Loading...</div>");
var masonryPreloader = document.querySelector('.masonry-preloader');

["resize", "load"].forEach(function(event) {
  // Adding little preloader information
  masonryGrid.style.display="none";
  window.addEventListener(event, function() {
    imagesLoaded( document.querySelector('.masonry'), function() {
      masonryGrid.style.display="flex";
      masonryPreloader.style.display="none";
      // A masonry grid with 8px gutter, with 4 columns on desktop, 2 on tablet, and 1 column on mobile devices.
      masonry(".masonry", ".", 0, 4, 2, 1);
      console.log("Loaded");
    });
  }, false);
});

</script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

<script>
	$(document).ready(function(){
    // Load more data
    $('.load-more').click(function(){
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        var rowperpage = 8;
        row = row + rowperpage;

        if(row <= allcount){
            $("#row").val(row);

            $.ajax({
                url: 'getproductData',
                type: 'post',
                dataType: 'json',
                data: {
                        "_token": "{{ csrf_token() }}",   
                        "row":row
                
                },
                beforeSend:function(){
                    $(".load-more").text("Loading...");
                },
                success: function(response){
                    setTimeout(function() {
                    var html='';
                    $.each(response, function(i, item) {
                           var maxLength = 60;
                            var length3 = item.description;
                           var content = length3.length;
                           var shortcontent = '';
                           if(content > maxLength){
                               var shortcontent = length3.substring(0,maxLength)+"...";
                           }else{
                               var shortcontent = length3;
                           }
                           
                           var imgPath=''
                           imgPath ='https://mycityperks.com/assetcityfront/images/'+item.image;
                           
                        html += '<div class="wow category-1 mix custom-column-5 " data-wow-duration="2s"><div class="be-post"><a href="page1.html" class="be-img-block"><div style="max-height:172px;">';
                        html += '<img src="'+imgPath+'" alt="omg"></div></a>';
                        html += ' <a href="#" class="be-post-title">'+item.name+'</a>';
                        html += '<span style="min-height: 40px;">'+shortcontent+'</span>';
                        html += '<div class="author-post">';
                        html += '<img src="https://mycityperks.com/assetcityfront/images/a1.png" alt="" class="ava-author">';
                        html +='<span>by <a href="page1.html">'+item.username+'</a></span>'; 
                        html +='</div><div class="info-block">';
                        html +='<span><i class="fa fa-thumbs-o-up"></i> 360</span>';
                        html +='<span><i class="fa fa-eye"></i> 789</span>';
                        html +='<span><i class="fa fa-comment-o"></i> 20</span>';
                        html +='<span style="float: right; font-size: 20px;">$ '+item.price+'</span>';
                        html +='</div></div></div>'; 
                    });
                    
                    
                        $(".post:last").after(html).show().fadeIn("slow");

                        var rowno = row + rowperpage;

                        // checking row value is greater than allcount or not
                        if(rowno > allcount){

                            // Change the text and background
                            $('.load-more').text("Hide");
                            $('.load-more').css("background","darkorchid");
                            $('.load-more').hide();

                        }else{
                            $(".load-more").text("Load more");
                        }
                    }, 2000);

                }
            });
        }else{
            $('.load-more').text("Loading...");

            // Setting little delay while removing contents
            setTimeout(function() {

                // When row is greater than allcount then remove all class='post' element after 3 element
                $('.post:nth-child(3)').nextAll('.post').remove();

                // Reset the value of row
                $("#row").val(0);

                // Change the text and background
                $('.load-more').text("Load more");
                $('.load-more').css("background","#15a9ce");
                
            }, 2000);


        }

    });

});

</script>


</body>

</html>

