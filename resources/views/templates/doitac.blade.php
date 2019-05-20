@extends('index')
@section('content')
<?php
   $banner = DB::table('banner_content')->where('position',4)->first();
?>
<div class="vk-home__banner" >
    <img src="{{asset('upload/banner/'.@$banner->image)}}" width="100%" alt="">
</div>
<nav aria-label="breadcrumb" class="nav-breadcrumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('')}}">{{ trans('label.home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ trans('label.partner')}}</li>
            </ol>
        </div>
    </div>
</nav>
<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
			    <ul class="nav-left nav-left-about">
			    	@foreach($categories_about as $cate_about)
				        <li class=""><a class="nav-link active" href="{{url('gioi-thieu',$cate_about['alias_'.$lang])}}">{{$cate_about['name_'.$lang]}}</a></li>
				    @endforeach
			        <li class="active"><a href="{{url('doi-tac-khach-hang')}}" title="" class="nav-link active">{{trans('label.partner')}}</a></li>
			    </ul>
			    
			</div>
            <div class="col-md-9">
                <h1 class="title-about">{{trans('label.doitac')}}</h1>
                <p><span class="under-line"></span></p>    
                <div class="list-partner">
                	<div class="row">
                		@foreach($partners as $partner)
	                	<div class="col-md-3 div-xs">
	                		<img src="{{ asset('upload/hinhanh/'.$partner->photo) }}">
	                	</div>
	                	@endforeach
                	</div>
                </div>
                <h1 class="title-about">{{trans('label.khachhang')}}</h1>
                <p><span class="under-line"></span></p>    
                <div class="list-partner">
                	<div class="row">
                		@foreach($customers as $partner)
	                	<div class="col-md-3 div-xs">
	                		<img src="{{ asset('upload/hinhanh/'.$partner->photo) }}">
	                	</div>
	                	@endforeach
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection