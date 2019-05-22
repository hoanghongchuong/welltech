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
                
                <li class="active">{{trans('label.news')}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-home-cate" style="margin-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                 @foreach($news['data'] as $item)
                <div class="box-item-news">
                    <div class="col-xs-12 col-md-3">
                        <a href="{{url('tin-tuc/'.$item['alias_vi'].'.html')}}" title="{{$item['name_'.$lang]}}"><img src="{{asset('upload/news/'.$item['photo'])}}" alt="{{$item['name_'.$lang]}}"></a>
                    </div>
                    <div class="col-xs-12 col-md-9">
                        <a href="{{url('tin-tuc/'.$item['alias_vi'].'.html')}}" title="{{$item['name_'.$lang]}}">
                            <p class="name_news">{{$item["name_".$lang]}}</p>
                            
                        </a>
                        <div class="des_news">
                            {!! $item['mota_'.$lang] !!}
                        </div>
                        <p class="read-deail"><a href="{{url('tin-tuc/'.$item['alias_vi'].'.html')}}" title="{{trans('label.detail')}}">{{trans('label.detail')}}</a></p>
                    </div>
                </div>
                @endforeach
                <div class="paginations">
                    {!! $data_paginate->links() !!}
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