@extends('layouts.customer')
@section('title', ' Dashboard | mycityperks.com')

@section('content')
  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Orders Lists</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Orders Lists</li>
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

<?php 
   $userId= Auth::user()->id;
   $user_type= Auth::user()->user_type;
?>
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Active Orders</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SNo.</th>
                                            <th>Transaction ID</th>
                                            <th>@if($user_type ==2) Vendor @else User @endif</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; ?>
                                        @if(isset($orderData) && !empty($orderData))
                                        
                                        @foreach($orderData as $orderList)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $orderList->transaction_id }}</td>
                                            <td>{{ $orderList->name }}</td>
                                            <td>{{ $orderList->amount }}</td>
                                            <td>{{ $orderList->status }}</td>
                                            <td>{{ $orderList->datenew }}</td>
                                            <td><a href="#"><i class="fa fa-eye" style="color:orange;"></i></a> &nbsp; <a href="#"><i class="fa fa-edit" style="color:green;"></i></a> &nbsp;<a href="#"><i class="fa fa-trash" style="color:red;"></i></a></td>
                                            
                                        </tr>
                                        
                                        <?php  $i++; ?>
                                        @endforeach
                                        
                                        @else
                                        <tr>
                                            <td colspan="7">
                                            No Records Found !!!!
                                            </td>
                                        </tr>
                                          
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
                                <strong class="card-title">Orders History</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export2" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SNo.</th>
                                            <th>Transaction ID</th>
                                            <th>Vendor / User</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; ?>
                                    @if(isset($orderData) && !empty($orderData))
                                        @foreach($orderData as $orderList)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $orderList->transaction_id }}</td>
                                            <td>{{ $orderList->id }}</td>
                                            <td>{{ $orderList->amount }}</td>
                                            <td>{{ $orderList->status }}</td>
                                            <td>{{ $orderList->datenew }}</td>
                                        </tr>
                                        <?php  $i++; ?>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="7">
                                            No Records Found !!!!
                                            </td>
                                        </tr>
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

<script language="javascript" type="text/javascript">
function changevaluepro()
{
if(document.getElementById('type').value=='subscriptions')
{
document.getElementById('pro').style.display='block';
document.getElementById('sub_type').style.display='block';
}
else
{
document.getElementById('pro').style.display='none';
document.getElementById('sub_type').style.display='none';
}
}
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script>
    $(document).ready(function(){
        $(".deleteBTN").on("click", function(){
            var pid = $(this).attr("data-id");
            $.ajax({
                url: 'deleteProduct',
                type: 'post',
                dataType: 'json',
                data: {
                        "_token": "{{ csrf_token() }}",   
                        "pid":pid
                
                },
                success:function(data)
                {
                    alert(data);
                    location.reload();
                    //$('#student_table').DataTable().ajax.reload();
                },
                
            });
            
        });
    });
</script>


