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
                                    
                                    
                                    <a href="{{ url('auth/google') }}">
                                        <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
                                    </a>
                                    
                                    
                                    
				</div>
                    </form>
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="#" class="text-info"> Sign Up</a>.</div>
      </div>
  </div>
</div>
</div>
    


<div class="modal fade loginfrm" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            
			<form method="POST" action="{{ route('register') }}">
                        @csrf
				<!-- to error: add class "has-danger" -->
				<div class="form-group">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                
				<div class="form-group">
					 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
				</div>
                                
                                <div class="form-group">

                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

				</div>
                                
                                <div class="form-group">
					  <input type="checkbox" id="user_type" name="user_type" value="2"><label for="email" class="col-form-label text-md-right">Are you content creator?</label>
				</div>
                                
                                

                                <div class="form-group " style="text-align: center;">
                                    <button type="submit" class="btn btn-primary" style="width:150px; padding:10px 2px;">
                                    {{ __('Register') }}
                                    </button> 
                                    
				</div>
                    </form>
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="#" class="text-info"> Sign Up</a>.</div>
      </div>
  </div>
</div>
</div>

    
    <script>
     $(document).ready(function() { 
         $('#signupModal').modal('show');
         $('#loginModal').modal('hide');
        $(function () {
           $('[data-toggle="tooltip"]').tooltip()
          })
        });
    
    
    </script>  
    
    <script>
     $(document).ready(function() { 
         $('#signupModal').modal('hide');
         $('#loginModal').modal('show');
        $(function () {
           $('[data-toggle="tooltip"]').tooltip()
          })
        });
    
    
    </script>
 




@stop