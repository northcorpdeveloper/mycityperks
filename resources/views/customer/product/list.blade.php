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

                    <div class="col-md-3 post" id="post_{{ $productList->id }}">
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
                
                    <div class="row">
                        <div class="col-md-12" >
                            <center> <p class="load-more" style="padding: 5px 0px; font-size: 20px; color: #000 !important; max-width: 500px; cursor:pointer; ">Load More</p></center>
                             <input type="hidden" id="row" value="0">
                             <input type="hidden" id="all" value="{{ $allcount }}">
                        </div>
                    </div>  
                    <br>
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        alert();
    $('.load-more').click(function(){
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        var rowperpage = 8;
        row = row + rowperpage;

        if(row <= allcount){
            $("#row").val(row);

            $.ajax({
                url: '/getproductList',
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
                           var maxLength = 60;
                            var length3 = item.description;
                           var content = length3.length;
                           var shortcontent = '';
                           if(content > maxLength){
                               var shortcontent = length3.substring(0,maxLength)+"...";
                           }else{
                               var shortcontent = length3;
                           }
                           
                           var imgPath='';

                    
                    
                    html +='<div class="col-md-3 post" id="">';
                    html += '<div class="card">';
                    html += '<div class="card-body">';
                    html += '<div class="mx-auto d-block">';
                    html += '<img class="mx-auto d-block" src="https://mycityperks.com/customer-dashboard/upload/691616397989.jpg" alt="Card image cap">';
                    html += '<h5 class="text-sm-center mt-2 mb-1"></h5>';
                    html += '<div class=""></div>';
                            html +='</div>';
                            html +='<hr>';
                            html +='<div class="card-text text-sm-center">';
                                    
                            html +='</div>';
                            html +='</div>';
                            html +='<div class="card-footer">';
                            html +='<button type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i>&nbsp; Edit</button>';
                            html +='<button type="button" class="btn btn-success btn-sm" style="float: right;"><i class="fa fa-trash"></i>&nbsp; Delete</button>';
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