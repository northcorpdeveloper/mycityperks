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
                    <!--/.col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">Add Deposit</div>
                            <div class="card-body">
                            <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Add Deposit</h3>
                                        </div>
                                        <hr>
                                        <?php /*
                                        <form action="{{url('customer/charge')}}" method="post">
                                            {{ csrf_field() }}
                                            <input type="email" name="email" placeholder="Enter Email" />
                                            <input type="text" name="amount" placeholder="Enter Amount" />
                                            <input type="text" name="cc_number" placeholder="Card Number" />
                                            <input type="text" name="expiry_month" placeholder="Month" />
                                            <input type="text" name="expiry_year" placeholder="Year" />
                                            <input type="text" name="cvv" placeholder="CVV" />
                                            <input type="submit" name="submit" value="Submit" />
                                        </form>
                                         */ ?>
                                         
                                         @if(session()->has('message'))
                                            <div class="alert alert-success" id="successMessage">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                        
                                        <form method="post" id="logincan" name="logincan" class="form-horizontal form-label-left" action="{{url('customer/charge')}}">
                                            {{ csrf_field() }}
                                            <div class="form-group text-center">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                                                </ul>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                                                <input type="number" required="required" name="amount" id="amount" step="any" onkeypress="return isNumberKeydata(event)" class="form-control" placeholder="0.00">       
                                            </div>
                                                <div class="form-group">
                                                    <label for="cc-name" class="control-label mb-1">Payment Methods</label>
						    <select class="form-control" id="method" name="method" onchange="return changevalue()">
                                                        <option value="Authorize.net">Authorize.net</option>                   				
                                                    </select>
                                                </div>
						<div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" id="card_name" value="" name="card_name" placeholder="Name on card" class="form-control">        
                                                    </div>
                                                </div>
						<div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" id="card-number" value="" name="cc_number" placeholder="Card number" class="form-control">
                                                    </div>
                                                </div>
                                            
						<div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">Month / Year</label><br>
                                                    <select name="expiry_month" id="month" class="demoSelectBox" style="height: 38px;">
                                                        <option value="01" selected="selected">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>	  
                                                    </select> / 
                                                    <select name="expiry_year" id="year" class="demoSelectBox" style="height: 38px;">
                            							<option value="2010">2010</option>
                            							<option value="2011">2011</option>
                            							<option value="2012">2012</option>
                            							<option value="2013">2013</option>
                            							<option value="2014">2014</option>
                            							<option value="2015">2015</option>
                            							<option value="2016">2016</option>
                            							<option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025" selected="selected">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                    </select>   
                                                </div>
						<div class="form-group">
	                                            <input type="text" id="sec_code" value="" name="cvv" placeholder="Security code" class="form-control">            
                                                </div>
                                                <div>
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <span id="payment-button-amount">Add Deposit</span>
                                                    </button>
                                                </div>
                                        </form> 
                                    </div>
                                </div>

                            </div>									    
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
    $(document).ready(function(){
    $("#successMessage").delay(5000).slideUp(300);
});
</script>


 
@endsection




