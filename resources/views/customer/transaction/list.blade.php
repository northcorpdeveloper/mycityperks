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

        <div class="content mt-3">

<!--            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>-->


            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Transactions</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SNo.</th>
                                            <th>Transaction ID</th>
                                            <th>Amount</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php $i=1; ?>
                                        @if(isset($transactionData) && !empty($transactionData))
                                        @foreach($transactionData as $tnxtData)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $tnxtData->transaction_id }}</td>
                                            <td>{{ $tnxtData->amount }}</td>
                                            <td style="color:red;">{{ strtoupper($tnxtData->type) }}</td>
                                            <td>{{ $tnxtData->created_at }}</td>
                                        </tr>
                                        <?php $i++; ?>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Authorize.net Transactions</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export2" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SNo.</th>
                                            <th>Transaction ID</th>
                                            <th>Amount</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; ?>
                                        @if(isset($transactionAuthorizeData) && !empty($transactionAuthorizeData))
                                        @foreach($transactionAuthorizeData as $tnxtAuthorizeData)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $tnxtAuthorizeData->transaction_id }}</td>
                                            <td>{{ $tnxtAuthorizeData->amount }}</td>
                                            <td style="color:green;">{{ strtoupper($tnxtAuthorizeData->type) }}</td>
                                            <td>{{ $tnxtAuthorizeData->created_at }}</td>
                                        </tr>
                                        <?php $i++; ?>
                                        @endforeach
                                        @endif
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->

        </div> <!-- .content -->
  </section>
@stop




