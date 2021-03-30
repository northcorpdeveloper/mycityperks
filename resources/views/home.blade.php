@extends('layouts.frontpage')

@section('content')

<div class="col-md-10">
    <div id="myScrolltwo" class="row _post-container_">
        @foreach($productList as $p_val)
        <div class="wow category-1 mix custom-column-5 post" id="post_{{ $p_val->id }}" data-wow-duration="2s">
            <div class="be-post">
                <a href="#" class="be-img-block">
                    <div style="max-height:172px;">
                       <img src="{{ asset('assetcityfront/images/'.$p_val->image) }}" alt="omg">
                    </div>
                </a>
                <a href="#" class="be-post-title">{{ $p_val->name }}</a>
                <span style="min-height: 40px;">
                    
                 <?php   $content = $p_val->description;
    $shortcontent = substr($content, 0, 60)."...";
    ?>
                    {{ $shortcontent }}
                </span>
                <div class="author-post">
                    <img src="{{ asset('assetcityfront/images/a1.png') }}" alt="" class="ava-author">
                    <span>by <a href="page1.html">{{ $p_val->username }}</a></span> 
                </div>
                <div class="info-block">
                    <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                    <span><i class="fa fa-eye"></i> 789</span>
                    <span><i class="fa fa-comment-o"></i> 20</span>
                    <span style="float:right; font-size: 20px; font-weight: 800;"><i class="fa fa-rupee"></i> {{ $p_val->price }}</span>
                </div>
            </div>
        </div>
    @endforeach

</div>
        
    <div class="row">
        <div class="col-md-12" >
            <center> <p class="load-more" style="padding: 5px 0px; font-size: 20px; color: #000 !important; max-width: 500px; cursor:pointer; ">Load More</p></center>
             <input type="hidden" id="row" value="0">
             <input type="hidden" id="all" value="{{ $allcount }}">
        </div>
    </div>  
    <br>    
        
        
</div>

@stop