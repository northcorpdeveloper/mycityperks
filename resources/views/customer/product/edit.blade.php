@extends('layouts.customer')
@section('title', ' Dashboard | mycityperks.com')

@section('content')
  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Product</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Edit Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

                @if (session('status'))
                  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     <strong> {{ session('status') }} </strong>
                  </div>
                @endif
                
                
<!--            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>-->


            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Company</strong><small> Form</small></div>
                            <div class="card-body card-block">
                                
                                <form method="post" action="{{url('customer/editProduct')}}" enctype="multipart/form-data"> 
                                   <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
                                <div class="form-group">
                                    <label for="product_name" class="form-control-label">Product Name*</label>
                                    <input type="text" name="name" id="product_name" placeholder="Enter your Product name" value="{{ $products['name'] }}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="product_category" class=" form-control-label">Product Category*</label>
                                    <select name="product_category" id="category_name" class="form-control" required="">
                                        <option value="">select Category</option>
                                        @foreach($productCategory as $product_cat_name)
                                        <option value="{{ $product_cat_name->id }}" @if($product_cat_name->id == $products['product_category']) selected  @endif >{{ $product_cat_name->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Price" class=" form-control-label">Price*</label>
                                    <input type="text" name="price" id="Price" placeholder="0.00" value="{{ $products['price'] }}" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="product_details" class=" form-control-label">Product Details*</label>
                                    <textarea name="description" id="description" class="form-control" value="{{ $products['description'] }}" placeholder="Product Details" required>{{ $products['description'] }}</textarea>
                                </div>

                                <div class="form-group">
                                      <img class="d-block" src="{{url('assetcityfront/images/'.$products->image)}}" alt="Card image cap" style="max-width: 394px; max-height: 200px;">
                                    
                                    <label for="product_image" class=" form-control-label">Product Image</label>
                                    <input type="file" name="image" id="product_image" placeholder="Product Image" class="form-control">
                                     <input type="hidden" name="old_image" id="old_product_image" value="{{ $products->image }}" class="form-control">
                                </div>
 
                                <div class="form-group">
                                    <label for="product_type" class=" form-control-label">Select Product type*</label>
                                    <select class="form-control" id="type" name="type" onchange="return changevaluepro()">
                                        <option value="product" @if($products['type'] == "product") selected  @endif >Simple Product</option>
                                        <option value="subscriptions" @if($products['type']=="subscriptions") selected  @endif >Subscription Product</option>                  
                                    </select>
                                </div>
                                
                                <div class="form-group" id="pro" style="display:none;">
                                    <label>Select Subscriptions type*</label>
                                    <select class="form-control" id="sub_type" name="sub_type" required="required">
                                        <option value="month">Monthly</option>
                                        <option value="year">Yearly</option>                  
                                    </select>
                                </div>
                                
                                
                            </div>
                            <div class="card-footer" style="text-align: center;">
                                
                                <input type="hidden" name="productID" value="{{ $products['id'] }}" >
                                <button type="submit" class="btn btn-primary btn-sm" style="border-radius:5px;min-width: 100px;">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm" style="border-radius:5px;min-width: 100px;">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                            
                                                      
                        </form>
                                
                        </div>
                        </div>
                        </div>
                       
                    </div>
                </div>
            </div>

        </div> <!-- .content -->


<script language="javascript" type="text/javascript">

    function changevaluepro(){
        if(document.getElementById('type').value=='subscriptions'){
            document.getElementById('pro').style.display='block';
            document.getElementById('sub_type').style.display='block';
        }else{
        document.getElementById('pro').style.display='none';
        document.getElementById('sub_type').style.display='none';
        }
    }
</script>

@endsection