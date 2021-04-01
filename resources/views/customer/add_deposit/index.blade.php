@extends('layouts.customer')
@section('title', ' Dashboard | mycityperks.com')

@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Add Deposit</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="adddeposit">Add Deposit</a></li>
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



