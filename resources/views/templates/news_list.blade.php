@extends('index')
@section('content')

<div class="vk-home__banner" >
    <img src="{{asset('upload/news/'.$data['background'])}}" alt="">
</div>
<nav aria-label="breadcrumb" class="nav-breadcrumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('')}}">{{trans('label.home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$data["name_".$lang]}}</li>
            </ol>
        </div>
    </div>
</nav>
<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav-left">
                    @foreach($cateNews as $k=>$cate_news)
                    <li class="@if($cate_news["id"] == $data["id"])active @endif">
                        <a class="nav-link active" href="{{url('tin-tuc/'.$cate_news["alias_"."vi"])}}">{{$cate_news["name_".$lang]}}</a>
                    </li>
                    @endforeach
                </ul>                        
            </div>
            <div class="col-md-9">
                <h1 class="title-about">{{$data["name_".$lang]}}</h1>
                <p><span class="under-line"></span></p>                        
                @foreach($news as $item)
                
                <div class="row mb-30">
                    <div class="col-sm-3">                                
                        <a href="{{url('tin-tuc/'.$item["alias_vi"].'.html')}}" class="vk-project-item__img">
                            <img src="{{asset('upload/news/'.$item["photo"])}}" alt="{{$item["name_".$lang]}}">
                            <!-- <span class="_title">VINHOMES SKYLAKE </span> -->
                        </a>
                    </div>    
                    <div class="col-sm-9 left-news">
                        <div class="name_news"><a href="{{url('tin-tuc/'.$item["alias_vi"].'.html')}}">{{$item["name_".$lang]}}</a></div>
                        <p class="date-create">{{date('d/m/Y', strtotime($item["created_at"]))}}</p>
                        <div class="short_content">
                            {!! $item['mota_'.$lang] !!}
                        </div>
                    </div>                            
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection