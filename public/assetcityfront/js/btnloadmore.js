$( document ).ready(function() {
alert("Hello! I am an alert box!!");
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
		
var counter = 0;
$(document.body).on('touchmove', onScroll);
$(window).on('scroll', onScroll); 

function onScroll(){
    if ($(window).scrollTop() == $(document).height() - $(window).height() && counter < 3) {
        appendData();
    }
}

function appendData() {
    

    var html = '';
    for (i = 0; i < 12; i++) {
        html += '<div class="col-md-6 col-sm-6 test"><div class="friend-card"><img src="images/3.jpg" alt="profile-cover" class="img-responsive cover"><div class="card-info"><img src="images/user-4.jpg" alt="user" class="profile-photo-lg"><div class="friend-info"><a href="#" class="pull-right text-green">My Friend</a><h5><a href="#" class="profile-link">John Doe</a></h5><p>Traveler</p></div></div></div></div>';
    }
    $('#myScroll').append(html);
    counter++;

    if (counter == 2)
        $('#myScroll').append('<div class="col-md-6 col-sm-6 test"><div class="friend-card"><img src="images/image-issue.jpg" alt="profile-cover" class="img-responsive cover"><div class="card-info"><img src="images/user-3.jpg" alt="user" class="profile-photo-lg"><div class="friend-info"><a href="#" class="pull-right text-green">My Friend</a><h5><a href="#" class="profile-link">Sophia Lee</a></h5><p>Student at Harvard</p></div></div></div></div>');




    var thiss = '';


    for (e = 0; e < 12; e++) {
        thiss += '<div class="category-4 mix custom-column-5 test"> <div class="be-post"> <a href="page1.html" class="be-img-block"> <img src="images/p4.jpg" alt="omg"> </a> <a href="page1.html" class="be-post-title">Leaving Home - L Officiel Ukraine</a> <span> <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>, <a href="blog-detail-2.html" class="be-post-tag">Web Design</a> </span> <div class="author-post"> <img src="images/a3.png" alt="" class="ava-author"> <span>by <a href="page1.html">Hoang Nguyen</a> </span> </div> <div class="info-block"> <span> <i class="fa fa-thumbs-o-up"></i> 360 </span> <span> <i class="fa fa-eye"></i> 789 </span> <span> <i class="fa fa-comment-o"></i> 20 </span> </div> </div> </div> <div class="category-5 mix custom-column-5 test"> <div class="be-post"> <a href="page2.html" class="be-img-block"> <img src="images/p5.jpg" alt="omg"> </a> <a href="page2.html" class="be-post-title">Drive Your World</a> <span> <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>, <a href="blog-detail-2.html" class="be-post-tag">Web Design</a> </span> <div class="author-post"> <img src="images/a4.png" alt="" class="ava-author"> <span>by <a href="page2.html">Hoang Nguyen</a> </span> </div> <div class="info-block"> <span> <i class="fa fa-thumbs-o-up"></i> 360 </span> <span> <i class="fa fa-eye"></i> 789 </span> <span> <i class="fa fa-comment-o"></i> 20 </span> </div> </div> </div> <div class="category-6 mix custom-column-5 test"> <div class="be-post"> <a href="page1.html" class="be-img-block"> <img src="images/p13.jpg" alt="omg"> </a> <a href="page1.html" class="be-post-title">Fran Ewald for The Diaries Project</a> <span> <a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, <a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>, <a href="blog-detail-2.html" class="be-post-tag">Web Design</a> </span> <div class="author-post"> <img src="images/a5.png" alt="" class="ava-author"> <span>by <a href="page1.html">Hoang Nguyen</a> </span> </div> <div class="info-block"> <span> <i class="fa fa-thumbs-o-up"></i> 360 </span> <span> <i class="fa fa-eye"></i> 789 </span> <span> <i class="fa fa-comment-o"></i> 20 </span> </div> </div> </div>';
    }
    $('#myScrolltwo').append(thiss);
    counter++;

    if (counter == 2)
        $('#myScroll2').append('<div class="col-md-6 col-sm-6 test"><div class="friend-card"><img src="images/image-issue.jpg" alt="profile-cover" class="img-responsive cover"><div class="card-info"><img src="images/user-3.jpg" alt="user" class="profile-photo-lg"><div class="friend-info"><a href="#" class="pull-right text-green">My Friend</a><h5><a href="#" class="profile-link">Sophia Lee</a></h5><p>Student at Harvard</p></div></div></div></div>');
  
     
}
});

