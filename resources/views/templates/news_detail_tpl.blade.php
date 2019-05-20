@extends('index')
@section('content')
<?php
   
?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb breadcrumbx">
                <li>
                    <a href="{{url('')}}">{{trans('label.home')}}</a>
                </li>
                
                <li class="{{url('tin-tuc')}}">{{trans('label.news')}}</li>
                <li class="active">{{$data['name_'.$lang]}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-home-cate" style="margin-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h1 class="name_detail_news">{{$data['name_'.$lang]}}</h1>
                <div class="detail_news_box">
                    {!! $data['content_'.$lang] !!}
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <h3 class="news_hot">Tin nổi bật</h3>
                <div class="list-hot-news">
                    @foreach($hots as $hot)
                    <p><a href="{{url('tin-tuc/'.$hot['alias_vi'].'.html')}}" title="{{$hot['name_'.$lang]}}">{{$hot['name_'.$lang]}}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@endsection