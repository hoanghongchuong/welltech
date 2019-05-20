@extends('index')
@section('content')
<?php
$setting = \App\Setting::where('id', 1)->first()->toArray();

?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb breadcrumbx">
                <li>
                    <a href="{{url('')}}">{{trans('label.home')}}</a>
                </li>
                
                <li class="active">{{trans('label.contact')}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-box">
    <div class="container">
        <div class="row info-company">
            <div class="col-sm-4">
                <h1 class="title-contact">{{trans('label.contact')}}</h1>
                <div class="name_company"><span class="_icon"></span> <span>{{$setting["company_".$lang]}}</span></div>
                <p>Address: {{$setting["address_".$lang]}}</p>
                <p>Phone: {{$setting["phone"]}}</p>
                <!-- <p>Fax: {{$setting["fax"]}}</p> -->
                <p>Hotline: {{$setting["hotline"]}}</p>
                <p>Email: {{$setting["email"]}}</p>
                <!-- <p>Email HR: {{$setting["email_hr"]}}</p> -->
            </div>
            <div class="col-sm-8">
                <h2 class="title-send">{{trans('label.send_message')}}</h2>
                @if (session('message'))
                <div class="box-header">
                    <h4 class="box-title text-green alert-success">{{ session('message') }}</h4>
                </div>
                @endif
                <form action="{{route('postContact')}}" method="post" accept-charset="utf-8" class="contact-frm">
                    {{ csrf_field() }}
                    <div class="row">                        
                        <div class="col-md-6">
                            <label for="">{{trans('label.hoten')}}</label>                           
                            <input type="text" name="name" value="" required="" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">{{trans('label.diachi')}}</label>
                            <input type="text" name="address" value="" required="" class="form-control" placeholder="">
                            
                        </div>
                        <div class="col-md-6">
                            <label for="">{{trans('label.phone')}}</label>
                            <input type="text" name="phone" required="" value="" class="form-control" placeholder="">
                            
                        </div>
                        <div class="col-md-6">
                            <label for="">{{trans('label.email')}}</label>
                            <input type="email" name="email" required="" value="" class="form-control" placeholder="">
                            
                        </div>
                        <div class="col-md-12">
                            <label for="">{{trans('label.content')}}</label>
                            <textarea name="content" rows="5" class="form-control" placeholder="{{trans('label.content')}}"></textarea>
                        </div>
                        <div class="text-md-right btn-gui col-md-12">
                            <button type="submit" class="btn bold more-btn btn-primary">{{trans('label.send')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="map-box">
        <div class="container">
            {!! $setting["iframemap"] !!}
        </div>
    </div>
</div>
@endsection
