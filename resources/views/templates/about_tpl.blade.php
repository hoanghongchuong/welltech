@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');    
    $banner = DB::table('banner_content')->where('position', 5)->first();
?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb breadcrumbx">
                <li>
                    <a href="{{url('')}}">{{trans('label.home')}}</a>
                </li>
                
                <li class="active">{{trans('label.about')}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="box-home">
    <div class="container">
        <h1 class="title_home">{{$data['name_'.$lang]}}</h1>
        <!-- <div class="dongke"><span></span></div> -->
        <div class="box-about">
            {!! $data['content_'.$lang] !!}
        </div>
    </div>
</div>

@endsection
