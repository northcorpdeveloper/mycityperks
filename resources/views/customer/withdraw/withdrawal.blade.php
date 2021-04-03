@extends('layouts.customer')
@section('title', ' Dashboard | mycityperks.com')

@section('content')
  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Withdraw</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Withdraw</li>
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
                            <div class="card-header">Withdraw</div>
						        <div class="card-body">
                                <!-- Credit Card -->
                                    <div id="pay-invoice">
                                        <div class="card-body">
                                              @if(session()->has('message'))
                                            <div class="alert alert-success" id="successMessage">
                                                {{ session()->get('message') }}
                                            </div>
                                            @endif
                                            <form method="post" class="form-horizontal form-label-left" action="{{ url('customer/save-widhdrawal')}}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                                                    <input type="number" required="required" name="amount" id="amount" step="any" onkeypress="return isNumberKeydata(event)" class="form-control" placeholder="0.00">       
                                                </div>
                                                <div class="form-group">
                                                    <label for="cc-name" class="control-label mb-1">Payment Methods</label>
													<select class="form-control" id="method" name="method" onchange="return changevalue()">
  	                                                    <option value="Stripe">Stripe</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                        <span id="payment-button-amount">Withdrawal</span>
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

  </section>
  
  
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
    $(document).ready(function(){
    $("#successMessage").delay(5000).slideUp(300);
});
</script>


@stop



