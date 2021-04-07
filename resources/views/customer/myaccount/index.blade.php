@extends('layouts.customer')
@section('title', ' Dashboard | mycityperks.com')

@section('content')

  <style>
  
  #wrapper {
  font-family: Lato;
  font-size: 14px;
  text-align: center;
  box-sizing: border-box;
  color: #333;
  }
  
  #dialog {
    
    
    padding: 20px 30px;
    display: inline-block;
    box-shadow: 0 0 4px #ccc;
    background-color: #FAF8F8;
    overflow: hidden;
    position: relative;
    max-width: 550px;
    
    h3 {
      margin: 0 0 10px;
      padding: 0;
      line-height: 1.25;
    }
    
    span {
      font-size: 90%;
    }
    
    #form {
      max-width: 240px;
      margin: 25px auto 0;
      
      input {
        margin: 0 5px;
        text-align: center;
        line-height: 80px;
        font-size: 50px;
        border: solid 1px #ccc;
        box-shadow: 0 0 5px #ccc inset;
        outline: none;
        width: 20%;
        transition: all .2s ease-in-out;
        border-radius: 3px;
        
        &:focus {
          border-color: purple;
          box-shadow: 0 0 5px purple inset;
        }
        
        &::selection {
          background: transparent;
        }
      }
      
      button {
        margin:  30px 0 50px;
        width: 100%;
        padding: 6px;
        background-color: #B85FC6;
        border: none;
        text-transform: uppercase;
      }
    }
    
    button {
      &.close {
        border: solid 2px;
        border-radius: 30px;
        line-height: 19px;
        font-size: 120%;
        width: 22px;
        position: absolute;
        right: 5px;
        top: 5px;
      }           
    }
    
    div {
      position: relative;
      z-index: 1;
    }
    
    img {
      position: absolute;
      bottom: -70px;
      right: -63px;
    }
  }
}


  </style>
  <div class="breadcrumbs">
      
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>My account</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">My account</li>
                        </ol>
                    </div>
                </div>
            </div>
      <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert" style="display:none" id="updateDataErrorMessage">
                   You are successfully logged in to dashboard.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn"> 

                <div class="row">
                    
                    
                <div class="col-lg-6">
                <div class="card">
                <div class="card-header" style="color:#00FF00;font-weight:bold;">Personal Information</div>
													             
		<div class="card-body card-block">
            <form id="accountDetails" data-parsley-validate="" class="form-horizontal form-label-left" method="post" name="accountDetails">
                <div class="alert alert-success alert-dismissible" style="display:none" id="updateDataSuccessMessage"></div>
                <div class="alert alert-danger alert-dismissible" style="display:none" id="updateDataErrorMessage"></div>
            
            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="fname" id="fname"  placeholder="Enter Full Name" class="form-control" value="{{$user_data->name}}">
                    <div class="invalid-feedback" id="error_validation_fname"></div>
                </div>
            </div>
                                                                
            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="email" id="email" readonly="readonly" value="{{$user_data->email}}" class="form-control" placeholder="Enter Your Email">
                                                                        
                </div>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-group">
                            <input type="text" name="mobile" id="mobile" value="{{$user_data->mobile}}" class="form-control" placeholder="mobile">
                            
                            <input type="hidden" name="oldmobile" id="oldmobile" value="{{$user_data->mobile}}" class="form-control">
                            
                            <input type="hidden" name="oldverification_code" id="oldverification_code" value="{{$user_data->verification_code}}" class="form-control">
                            
                            <input type="hidden" name="is_verification_old" id="is_verification_old" value="{{$user_data->is_verification}}" class="form-control">
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            @if($user_data->is_verification !=1)
                                
                            <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                            Click and Verify
                            </button>
                            @else
                            
                            <label style="color:green; font-size:15px;">Verified</label>
                            @endif
                        </div>
                    </div> 
                </div>
                
            </div>
            
            
            <div class="form-group">
                <div class="input-group">
                    <select class="form-control" id="country" name="country" onchange="getCountryStates(this.value,'');">
                        <option value="">Select Country</option>
                        @foreach($countriesList as $allcountries)
                        <option value="{{ $allcountries->id }}" @if($allcountries->id == $user_data->country) selected @endif >{{ $allcountries->name }}</option>
                        @endforeach
                    </select>
                                                                        
                </div>
            </div>
            
            <div class="form-group">
                <div class="input-group">
                    <select class="form-control" id="state" name="state">
                        <option value="">Select States</option>
                    </select>
                                                                        
                </div>
            </div>
            
            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="city" id="city" value="{{ $user_data->city }}" class="form-control" placeholder="Enter City Name">

                </div>
            </div>
            
            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="zipcode" id="zipcode" value="{{ $user_data->zipcode }}" class="form-control" placeholder="Enter Zipcode">
                </div>
            </div>
            
            <div class="card-header" style="color:#00FF00;font-weight:bold;">Bank Details</div><br>
		<div class="form-group">
                    <div class="input-group">
                        <input type="text" id="account_title" value="{{ $user_data->account_title }}" name="account_title" placeholder="Account Title" class="form-control">
                    </div>
                </div>
            
            <div class="form-group">
                <div class="input-group">
                    <input type="text" id="account_number" value="{{ $user_data->account_number }}" name="account_number" placeholder="Account Number" class="form-control">
                </div>
            </div>
            
            <div class="form-group">
                <div class="input-group">
                    <textarea name="bank_address" id="bank_address" class="form-control" placeholder="Bank Address">{{ $user_data->bank_address }}</textarea>
                </div>
            </div>
            
            <div class="card-header" style="color:#00FF00;font-weight:bold;">Credit Card</div><br>
		<div class="form-group">
                    <div class="input-group">
                        <input type="text" id="card_name" value="{{ $user_data->card_name }}" name="card_name" placeholder="Name on card" class="form-control">        
                    </div>
                </div>
            
            <div class="form-group">
                <div class="input-group">
                    <input type="text" id="card_number" value="{{ $user_data->card_number }}" name="card_number" placeholder="Card number" class="form-control">
                                                                        
                </div>
            </div>
            
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <select name="month" id="month" class="demoSelectBox" style="height: 38px;">
                            
                        <?php for($i=1; $i<13; $i++){ 
                        
                           if($i < 10){
                               $mnt="0".$i;
                           }else{
                             $mnt=$i;  
                           }
                        
                        ?>
                            <option value="{{ $mnt }}"  @if($i==$user_data->expiry_month) selected @endif >{{ $mnt}}</option>
                         <?php } ?>   

							  
							  
                        </select> / <select name="year" id="year" class="demoSelectBox" style="height: 38px;">
                            <?php 
                           
                              for($y=1980; $y<2035; $y++){ 
                        
                           
                        
                             ?>
                            <option value="{{ $y }}" @if($y==$user_data->expiry_year) selected @endif >{{ $y }}</option>
                         <?php } ?> 
                        </select>
														
                                                            
                    </div>
                </div>
													
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" id="sec_code" value="{{ $user_data->sec_code}}" name="sec_code" placeholder="Security code" class="form-control">
                                                            
                    </div>
                </div>
													
            </div>
												
												
            <div class="form-actions form-group"><button type="button" class="btn btn-secondary btn-sm" onclick="updateAccountDetails();" id="save_account_btn" name="save_account_btn">Save</button></div>

														   
	</form>
	
	         <p id="addDiscountSuccessMessage"></p>
                </div>
            </div>
         </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-header" style="color:#00FF00;font-weight:bold;">Change Password</div>
                        <div class="card-body card-block"> 
                            
                            <div class="col-sm-12">
                                <div class="alert  alert-success alert-dismissible fade show" role="alert" style="display:none" id="PasswordupdateDataSuccessMessage">
                                   Password change successfully.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            </div>
                            <form name="newform" id="change_password_from" class="form-horizontal form-label-left" method="post">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <!--   <input type="hidden" value="change_password" name="change_password">-->
                                <div class="form-group">
                                    <div class="input-group">

                                        <input type="password" name="password" id="password" value="" class="form-control" placeholder="Password" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">

                                    <input type="password" name="cpassword" id="cpassword" value="" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="changePasswordFormAlert" id="CheckPasswordMatch">
                                        
                                        
                                    </div>
                                </div>
                               
                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm" id="chkPassword22">Change Password</button></div>
                            </form>
                        </div>
                    </div>

                </div>
                </div>

                
            </div>
            
            
            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div id="wrapper">
                                  <div id="dialog">
                                    <button class="close">×</button>
                                    <h5>Please enter the 4-digit verification code we sent via SMS:</h5>
                                    <span>(we want to make sure it's you before we contact our movers)</span>
                                    <div id="form">
                                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" /><input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" /><input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                      <button class="btn btn-primary btn-embossed">Verify</button>
                                    </div>
                                    
                                    <div>
                                      Didn't receive the code?<br />
                                      <a href="#">Send code again</a><br />
                                    </div>
                                    
                                  </div>
                                </div>
                        </div>
                    </div>
                </div>
                
                
                
                
        </div>

        <div class="modal fade" id="accountDataUpdatedDialog" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Success</h5>
                        
                    </div>
                    
                    <div class="modal-body">
                        <h5>Account Updated</h5>
                    </div>
                    <div class="modal-footer center-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script>  
/*
$(function() {
  'use strict';

  var body = $('body');

  function goToNextInput(e) {
    var key = e.which,
      t = $(e.target),
      sib = t.next('input');

    if (key != 9 && (key < 48 || key > 57)) {
      e.preventDefault();
      return false;
    }

    if (key === 9) {
      return true;
    }

    if (!sib || !sib.length) {
      sib = body.find('input').eq(0);
    }
    sib.select().focus();
  }

  function onKeyDown(e) {
    var key = e.which;

    if (key === 9 || (key >= 48 && key <= 57)) {
      return true;
    }

    e.preventDefault();
    return false;
  }
  
  function onFocus(e) {
    $(e.target).select();
  }

  body.on('keyup', 'input', goToNextInput);
  body.on('keydown', 'input', onKeyDown);
  body.on('click', 'input', onFocus);

});

*/
 </script>
 
 

  <script>
    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#cpassword").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("<p style='color:red;'>Passwords does not match!</p>");
        else
            $("#CheckPasswordMatch").html("<p style='color:green;'>Passwords match.</p>");
    }
    $(document).ready(function () {
       $("#cpassword").keyup(checkPasswordMatch);
    });
    </script>
    
    <script>
    $(document).ready(function () {
        $("#change_password_from").submit(function(e){
        e.preventDefault();
        $("#CheckPasswordMatch").hide();
        password = $("#password").val();
        conformPassword = $("#cpassword").val();
        
        if(password == conformPassword){
        $.ajax({
                url: "{{url('customer/change-password')}}",
                type: 'post',
                dataType: 'json',
                data: {
                        "_token": "{{ csrf_token() }}",   
                        "password":password,
                        "conformPassword":conformPassword
                
                },
           success:function(res){ 
            
                        if(res.status == 'fail'){
                            var errors = getResponseErrors(msg,'<br/>','error_validation_');
                            if(errors != ''){
                                jQuery("#updateDataErrorMessage").html(res.message).show();
                                  setTimeout(function(){ jQuery("#updateDataErrorMessage").html('').hide(); }, 3000);
                            }else{ 
                               jQuery("#updateDataErrorMessage").html(res.message).show();
                               setTimeout(function(){ jQuery("#updateDataErrorMessage").html('').hide(); }, 3000);
                            }
                         }else{
                            jQuery("#PasswordupdateDataSuccessMessage").html(res.message).show();
                            //alert(res.message);
                            setTimeout(function(){ jQuery("#PasswordupdateDataSuccessMessage").html('').hide(); }, 3000);
                            
                            
                         }
                         $("#change_password_from")[0].reset();
        }
    });
    }else{
       $("#CheckPasswordMatch").html("<p style='color:red;'>Passwords does not match!</p>");
    }
    });
    });
    </script>
    
<script type="text/javascript">
    function getCountryStates(countryID, selectedId){
        $.ajax({
                url: 'getStateData',
                type: 'post',
                dataType: 'json',
                data: {
                        "_token": "{{ csrf_token() }}",   
                        "countryID":countryID
                
                },
           success:function(res){ 
            if(res){
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                $.each(res, function(i, item) {
                    if(selectedId == item.id){
                        var selected="selected";
                    }else{
                        var selected="";
                    }
                    $("#state").append('<option value="'+item.id+'" '+selected+'>'+item.name+'</option>');
                });
           
            }else{
               $("#state").empty();
            }
           }
        });
        
        
    }


</script>

<script>
$( document ).ready(function() {
       getCountryStates("{{$user_data->country}}","{{$user_data->user_state}}"); 
    });
</script>    
 
@endsection

@section('scripts')
<script src="{{ asset('js/account.js') }}" ></script>

@endsection


