@extends('index')
@section('content')
<?php
$setting = \App\Setting::where('id', 1)->first()->toArray();

?>
<script src="{{ asset('public/js/jquery-3.2.1.min.js')}}" defer ></script>
<div class="content-box-form">
    <i class="fa fa-spinner fa-spin"></i>
</div>
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
                <form action="{{route('postContact')}}" method="post" accept-charset="utf-8" class="contact-frm form-post-register">
                    {{ csrf_field() }}
                    <div class="row">                        
                        <div class="col-md-6">
                            <label for="">{{trans('label.hoten')}}</label>
                                @if ($errors->first('name')!='')
                                    <span style="color: red">( {!! $errors->first('name'); !!})</span>
                                @endif                           
                            <input type="text" name="name" value=""  class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">{{trans('label.diachi')}}</label>
                            @if ($errors->first('address')!='')
                                <span style="color: red">( {!! $errors->first('address'); !!})</span>
                            @endif
                            <input type="text" name="address" value="" class="form-control" placeholder="">
                            
                        </div>
                        <div class="col-md-6">
                            <label for="">{{trans('label.phone')}}</label>
                            @if ($errors->first('phone')!='')
                                <span style="color: red">( {!! $errors->first('phone'); !!})</span>
                            @endif
                            <input type="text" name="phone" value="" class="form-control" placeholder="">
                            
                        </div>
                        <div class="col-md-6">
                            <label for="">{{trans('label.email')}}</label>
                            @if ($errors->first('email')!='')
                                <span style="color: red">( {!! $errors->first('email'); !!})</span>
                            @endif
                            <input type="email" name="email" value="" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="">{{trans('label.content')}}</label>
                            @if ($errors->first('content')!='')
                                <span style="color: red">( {!! $errors->first('content'); !!})</span>
                            @endif
                            <textarea name="content" rows="5" class="form-control" placeholder="{{trans('label.content')}}"></textarea>
                        </div>
                        <div class="text-md-right btn-gui col-md-12">
                            <button type="submit" class="btn bold more-btn btn-primary btn-send" id="btn-submit-form">{{trans('label.send')}}</button>
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

@if (session('message'))   
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <h5 class="modal-title">Modal title</h5> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4 class="flash-message">{{ session('message') }}</h4>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
   
@endif
@endsection
