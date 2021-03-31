@extends('layouts.customer')
@section('title', ' Dashboard | mycityperks.com')

@section('content')
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
                <div class="input-group">
                    <select class="form-control" id="country" name="country">
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
                    <input type="text" name="zipcode" id="zipcode" value="0" class="form-control" placeholder="Enter Zipcode">
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
                            <option value="01" selected="selected">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
							  
							  
                        </select> / <select name="year" id="year" class="demoSelectBox" style="height: 38px;">
                            <option value="2010" selected="selected">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018" selected="selected">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020" selected="selected">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
														
                                                            
                    </div>
                </div>
													
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" id="sec_code" value="" name="sec_code" placeholder="Security code" class="form-control">
                                                            
                    </div>
                </div>
													
            </div>
												
												
            <div class="form-actions form-group"><button type="button" class="btn btn-secondary btn-sm" onclick="updateAccountDetails();" id="save_account_btn" name="save_account_btn">Save</button></div>

														   
	</form>
                </div>
            </div>
         </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header" style="color:#00FF00;font-weight:bold;">Change Password</div>
                        <div class="card-body card-block">
                            <form name="newform" id="change_password_from" class="form-horizontal form-label-left" method="post" action="process.php">

                                <input type="hidden" value="change_password" name="change_password">
                                <div class="form-group">
                                    <div class="input-group">

                                <input type="password" name="password" id="password" value="" class="form-control" placeholder="Password" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">

                                    <input type="password" name="cpassword" id="cpassword" value="" class="form-control" placeholder="Confirm Password" required="required">
                                    </div>
                                </div>

                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Change Password</button></div>
                            </form>
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
<script type="text/javascript">
    var countryID = $('#country').val();
    $('#country').change(function(){
    var countryID = $(this).val(); 

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
                    $("#state").append('<option value="'+item.id+'">'+item.name+'</option>');
                });
           
            }else{
               $("#state").empty();
            }
           }
        });
        
   });

</script>
      
 
@endsection

@section('scripts')
<script src="{{ asset('js/account.js') }}" ></script>

@endsection


