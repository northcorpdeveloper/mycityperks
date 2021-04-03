@extends('layouts.customer')
@section('title', ' Dashboard | mycityperks.com')

@section('content')
  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Transactions</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Transactions</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
        <div class="row">
         
            <div class="col-md-12">
                <div class="card  card-plain">
                    <div class="card-header">
                        <h4 class="card-title">Withdraws</h4>
    					<a href="{{ url('customer/withdrawal') }}">
                      	     <button type="button" id="myBtn" class="btn btn-fill btn-primary" style="padding-left: 10px;padding-right: 10px;margin-left: 25px;float:right">Withdraw </button>Amount 
                      	</a>
    				    <a href="https://dashboard.stripe.com/express/oauth/authorize?response_type=code&amp;client_id=ca_J2lZy6pvFGj1zwgm5S75QnuQ7Vu79Llv&amp;scope=read_write">
    				         <button type="button" id="myBtn" class="btn btn-fill btn-primary" style="padding-left: 10px;padding-right: 10px;margin-left: 25px;float:right">Connect To Strip</button>
                        </a>
    			    </div>
                    
                    <div class="card-body">
    			        <table id="bootstrap-data-table-export" class="table table-striped table-bordered dataTable no-footer">
                            <thead>
                                <tr>
    								<th>#</th>
    								<th>Transaction ID</th>
    								<th>Amount</th>
    								<th>type</th>
    								<th>Date</th>
    							</tr>
                            </thead>
                            
                            <tbody>
                                <?php $i=1; ?>
                                @if(isset($withdrawsData) && !empty($withdrawsData))
                                
                                   @foreach($withdrawsData as $withdrawsList)
                                    <tr>
                                       <td>{{ $i }}</td>
                                       <td>{{ $withdrawsList->transactionid }}</td>
                                       <td>{{ $withdrawsList->amount }}</td>
                                       <td>{{ $withdrawsList->type }}</td>
                                       <td>{{ $withdrawsList->datenew }}</td>
                                        
                                    </tr>
                                      
                                   <?php $i++; ?>
                                   @endforeach
                                
                                @endif
                                
                                
                                
    							<tr>
                                    <td colspan="5" style="text-align:center;">No Records Found </td>
                                </tr>
                      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
      

  </section>
@stop



