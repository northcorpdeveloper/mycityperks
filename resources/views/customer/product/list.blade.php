@extends('layouts.customer')
@section('title', ' Dashboard | mycityperks.com')

@section('content')
  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Product Lists</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Product Lists</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                @foreach($productData as $productList)

                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="mx-auto d-block" src="https://mycityperks.com/customer-dashboard/upload/691616397989.jpg" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">{{ $productList->name }}</h5>
                                    <div class=""> {{ substr($productList->description,0,40) }}</div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    Price-{{ $productList->price }}$
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i>&nbsp; Edit</button>
                                <button type="button" class="btn btn-success btn-sm" style="float: right;"><i class="fa fa-trash"></i>&nbsp; Delete</button>
                            </div>
                        </div>
                    </div>
                    
                @endforeach    
                    

                </div><!-- .row -->
            </div><!-- .animated -->
        </div>
            
            
            
            
            
            
            
            
            
            
            
            

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
