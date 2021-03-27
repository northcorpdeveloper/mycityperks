@extends('layouts.user')
@section('title', ' Dashboard | mycityperks.com')
@section('content') 
<section class="">
		<div class="middle-section col-md-10">

			<!-- Post Create Box -->

			<div class="create-post">
				<div class="row">
					<div class="col-md-7 col-sm-7">
						<div class="form-group">
							<img src="images/user-1.jpg" alt="" class="profile-photo-md">
							<textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control"
								placeholder="Write what you wish"></textarea>
						</div>
					</div>
					<div class="col-md-5 col-sm-5">
						<div class="tools">
							<ul class="publishing-tools list-inline">
								<li><a href="#"><i class="ion-compose"></i></a></li>
								<li><a href="#"><i class="ion-images"></i></a></li>
								<li><a href="#"><i class="ion-ios-videocam"></i></a></li>
								<li><a href="#"><i class="ion-map"></i></a></li>
							</ul>
							<button class="btn btn-primary pull-right">Publish</button>
						</div>
					</div>
				</div>
			</div><!-- Post Create Box End -->

			<!--  Friend List -->

			<div class="friend-list">
				<div class="row contents" id="myScroll" >
					<div class="col-md-6 col-sm-6">
						<div class="friend-card">
							<img src="images/image-issue.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-3.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Sophia Lee</a></h5>
									<p>Student at Harvard</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="friend-card">
							<img src="images/3.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-4.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">John Doe</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="friend-card">
							<img src="images/4 (1).jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-10.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Julia Cox</a></h5>
									<p>Art Designer</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="friend-card">
							<img src="images/5.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-7.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="timelime.html" class="profile-link">Robert Cook</a></h5>
									<p>Photographer at Photography</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/6.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-8.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Richard Bell</a></h5>
									<p>Graphic Designer at Envato</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/7.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-2.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Linda Lohan</a></h5>
									<p>Software Engineer</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/8.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-9.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Anna Young</a></h5>
									<p>Musician</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/9.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-6.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">James Carter</a></h5>
									<p>CEO at IT Farm</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/5.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-7.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="timelime.html" class="profile-link">Robert Cook</a></h5>
									<p>Photographer at Photography</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/6.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-8.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Richard Bell</a></h5>
									<p>Graphic Designer at Envato</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/7.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-2.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Linda Lohan</a></h5>
									<p>Software Engineer</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/8.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-9.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Anna Young</a></h5>
									<p>Musician</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/9.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-6.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">James Carter</a></h5>
									<p>CEO at IT Farm</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>

							<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>

							<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
					</div>

<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>
<div class="wow slideInUp col-md-6 col-sm-6" data-wow-duration="2s">
						<div class="friend-card">
							<img src="images/10.jpg" alt="profile-cover" class="img-responsive cover">
							<div class="card-info">
								<img src="images/user-5.jpg" alt="user" class="profile-photo-lg">
								<div class="friend-info">
									<a href="#" class="pull-right text-green">Fitness </a><a href="#" class="pull-right text-green">Health, </a><a href="#" class="pull-right text-green">Beauty, </a>
									<div class="uname">@robertcook</div><h5><a href="#" class="profile-link">Alexis Clark</a></h5>
									<p>Traveler</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too</p>
								</div>
							</div>
						</div>
</div>

				</div>
			</div>
		</div>
	</section>
  </section>
@stop
