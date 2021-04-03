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


            <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                @foreach($productData as $productList)

                    <div class="col-md-3 post" id="post_{{ $productList->id }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="mx-auto d-block" src="{{url('assetcityfront/images/'.$productList->image)}}" alt="Card image cap" style="max-height:165px">
                                    <h5 class="text-sm-center mt-2 mb-1" style="min-height: 50px;">{{ $productList->name }}</h5>
                                    <div class="" style="min-height: 50px;"> {{ substr($productList->description,0,40) }}</div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    Price-{{ $productList->price }}$
                                </div>
                            </div>
                            <!--<div class="card-footer">-->
                            <!--    <a href="edit?id={{ $productList->id }}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i>&nbsp; Edit</button></a>-->
                            <!--    <button type="button" class="btn btn-danger btn-sm deleteBTN" data-id="{{ $productList->id }}" style="float: right;"><i class="fa fa-trash"></i>&nbsp; Delete</button>-->
                            <!--</div>-->
                        </div>
                    </div>
                    
                @endforeach    
                    

                </div><!-- .row -->
                
                    <div class="row">
                        <div class="col-md-12" >
                            @if($allcount > 8)
                            <center> <p class="load-more" style="padding: 5px 0px; font-size: 20px; color: #000 !important; max-width: 500px; cursor:pointer; ">Load More</p></center>
                             
                             <input type="hidden" id="row" value="0">
                             <input type="hidden" id="all" value="{{ $allcount }}">
                             
                            @endif 
                        </div>
                    </div>  
                    <br>
            </div><!-- .animated -->
        </div>
            
            


        </div> <!-- .content -->

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
    $('.load-more').click(function(){
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        var rowperpage = 8;
        row = row + rowperpage;

        if(row <= allcount){
            $("#row").val(row);

            $.ajax({
                url: 'getproductList',
                type: 'post',
                dataType: 'json',
                data: {
                        "_token": "{{ csrf_token() }}",   
                        "row":row
                
                },
                beforeSend:function(){
                    $(".load-more").text("Loading...");
                },
                success: function(response){
                    setTimeout(function() {
                    var html='';
                    $.each(response, function(i, item) {
                           var maxLength = 40;
                            var length3 = item.description;
                           var content = length3.length;
                           var shortcontent = '';
                           if(content > maxLength){
                               var shortcontent = length3.substring(0,maxLength)+"...";
                           }else{
                               var shortcontent = length3;
                           }
                           
                           if(item.image !="")
                           {
                             var imgPath='{{url('assetcityfront/images/')}}/'+item.image;  
                           }else{
                               var imgPath='{{url('assetcityfront/images/')}}/p15.jpg';
                               
                           }

                    html +='<div class="col-md-3 post" id="post_'+item.id+'">';
                    html += '<div class="card">';
                    html += '<div class="card-body">';
                    html += '<div class="mx-auto d-block">';
                    html += '<img class="mx-auto d-block" src="'+imgPath+'" alt="Card image cap" style="max-height:165px">';
                    html += '<h5 class="text-sm-center mt-2 mb-1" style="min-height: 50px;">'+item.name+'</h5>';
                    html += '<div class="" style="min-height: 50px;">'+shortcontent+'</div>';
                            html +='</div>';
                            html +='<hr>';
                            html +='<div class="card-text text-sm-center">Price- '+item.price+'$</div>';
                            html +='</div>';
                            html +='<div class="card-footer">';
                            html +='<a href="edit?id='+item.id+'"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i>&nbsp; Edit</button></a>';
                            html +='<button type="button" class="btn btn-danger btn-sm deleteBTN " data-id="'+item.id+'" style="float: right;"><i class="fa fa-trash"></i>&nbsp; Delete</button>';
                            html +='</div>';
                        html +='</div>';
                    html +='</div>';
 
                    });
                    
                    
                        $(".post:last").after(html).show().fadeIn("slow");

                        var rowno = row + rowperpage;

                        // checking row value is greater than allcount or not
                        if(rowno > allcount){

                            // Change the text and background
                            $('.load-more').text("Hide");
                            $('.load-more').css("background","darkorchid");
                            $('.load-more').hide();

                        }else{
                            $(".load-more").text("Load more");
                        }
                    }, 2000);

                }
            });
        }else{
            $('.load-more').text("Loading...");

            // Setting little delay while removing contents
            setTimeout(function() {

                // When row is greater than allcount then remove all class='post' element after 3 element
                $('.post:nth-child(3)').nextAll('.post').remove();

                // Reset the value of row
                $("#row").val(0);

                // Change the text and background
                $('.load-more').text("Load more");
                $('.load-more').css("background","#15a9ce");
                
            }, 2000);


        }

    });

});

</script>

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

@endsection
