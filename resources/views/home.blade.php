@extends('layouts.frontpage')

@section('content')

<div class="col-md-10">
    <div id="myScrolltwo" class="row _post-container_">
        @foreach($productList as $p_val)
        <div class="wow category-1 mix custom-column-5 post" id="post_{{ $p_val->id }}" data-wow-duration="2s">
            <div class="be-post">
                <a href="#" class="be-img-block">
                    <div style="max-height:172px;">
                       <img src="{{ asset('assetcityfront/images/'.$p_val->image) }}" alt="omg">
                    </div>
                </a>
                <a href="#" class="be-post-title">{{ $p_val->name }}</a>
                <span style="min-height: 40px;">
                    
                 <?php   $content = $p_val->description;
    $shortcontent = substr($content, 0, 60)."...";
    ?>
                    {{ $shortcontent }}
                </span>
                <div class="author-post">
                    <img src="{{ asset('assetcityfront/images/a1.png') }}" alt="" class="ava-author">
                    <span>by <a href="page1.html">{{ $p_val->username }}</a></span> 
                </div>
                <div class="info-block">
                    <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                    <span><i class="fa fa-eye"></i> 789</span>
                    <span><i class="fa fa-comment-o"></i> 20</span>
                    <span style="float:right; font-size: 20px; font-weight: 800;"><i class="fa fa-rupee"></i> {{ $p_val->price }}</span>
                </div>
            </div>
        </div>
    @endforeach

</div>
        
    <div class="row">
        <div class="col-md-12" >
            <center> <p class="load-more" style="padding: 5px 0px; font-size: 20px; color: #000 !important; max-width: 500px; cursor:pointer; ">Load More</p></center>
             <input type="hidden" id="row" value="0">
             <input type="hidden" id="all" value="{{ $allcount }}">
        </div>
    </div>  
    <br>    
        
        
</div>




<div class="modal fade loginfrm" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="margin: 10px 10%;">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body login-form">
        <div class="form-title text-center">
<!--          <h4>Login</h4>-->
        </div>
        <div class="d-flex flex-column global-container">
<!--          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="email1"placeholder="Your email address...">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password1" placeholder="Your password...">
            </div>
            <button type="button" class="btn btn-info btn-block btn-round">Login</button>
          </form>-->



			<form method="POST" action="{{ route('login') }}">
                        @csrf
				<!-- to error: add class "has-danger" -->
				<div class="form-group">
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>
				         @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                
                                </div>
				<div class="form-group">
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*****">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
				</div>
                                
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
				</div>

                                <div class="form-group " style="text-align: center;">
                                    <button type="submit" class="btn btn-primary" style="width:150px; padding:10px 2px;">
                                    {{ __('Login') }}
                                    </button> 
                                    


                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}" style="color:red; font-size: 12px;">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                    @endif
				</div>
                    </form>


          
<!--          <div class="text-center text-muted delimiter">or use a social network</div>
          <div class="d-flex justify-content-center social-buttons">
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
              <i class="fab fa-facebook"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
              <i class="fab fa-linkedin"></i>
            </button>
          </di>
        </div>-->
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
      </div>
  </div>
</div>
    
    
    <script>
     $(document).ready(function() { 
         $('#loginModal').modal('show');
        $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
    
    
    </script>  






@stop