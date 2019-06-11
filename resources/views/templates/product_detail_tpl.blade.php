@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    
?>

<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('')}}">{{trans('label.home')}}</a>
                </li>
                <li><a href="{{url('san-pham')}}">{{trans('label.product')}}</a></li>
                <li class="active">{{$data['name_'.$lang]}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="box-content-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12"> 
                @if($albums)   
                <div class="owl-slider ">                    
                    @foreach($albums as $album)  
                        <div class="item img-slider"><img src="{{asset('upload/hasp/'.$album['photo'])}}" alt="image"  draggable="false"/></div>
                        @endforeach                    
                        <!-- <div class="item img-slider"><img src="{{asset('public/images/p1.jpg')}}" alt="image"  draggable="false"/></div>                        -->
                </div>
                @else
                <div class="">                    
                    <div class="item img-slider"><img src="{{asset('upload/product/'.$data['photo'])}}" alt="image"  draggable="false"/></div>
                </div>
                @endif
                <div class="thumbnails-wrapper">
                    @foreach($albums as $album)
                    <div class="thumbnail"><a href="#">
                        <img src="{{asset('upload/hasp/'.$album['photo'])}}" alt="image"  draggable="false"/></a>
                    </div>
                    @endforeach
                </div>  
            </div>
            <div class="col-md-7 col-xs-12">
                <h1 class="product_name">{{$data['name_'.$lang]}}</h1>
                <div class="product-short-description">
                    {{$data['code']}}
                </div>
                <div class="price_detail">
                    @if($lang =='en')
                    $ {{$data['price_en']}}
                    @elseif($lang =='vi')
                        {{number_format($data['price_vi'])}} vnđ
                    @endif
                </div>
                <div class="box-add-cart vk-calculator">
                    <form action="{{route('addProductToCart')}}" method="post" accept-charset="utf-8">
                        {{csrf_field()}}
                        <input type="hidden" name="product_id" value="{{$data['id']}}" placeholder="">
                        <span class="qty">QTY</span> &nbsp;<input type="number" name="product_numb" value="1" min="1" class="">
                        <button type="submit" class="vk-btn">{{trans('label.add_cart')}}</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 30px; margin-top: 20px;">
            <h4 class="detail_contentx col-md-12"><span>{{trans('label.detail')}}</span></h4>
            <div class="content_detail_product col-md-12">
                {!! $data['content_'.$lang] !!}
            </div>
        </div>
        @if(count($relatedProducts) > 0)
        <div class="row">
            <h4 class="detail_contentx">{{trans('label.related_product')}}</h4>
            <div class="owl-carousel owl-carousel-slider owl-carousel-product detail_item_product owl-theme">
                @foreach($relatedProducts as $item)
                <div class="item">
                    <div class="box-item-product">
                        <a href="{{url('san-pham/'.$item['alias_vi'].'.html')}}" title="{{$item['name_'.$lang]}}"><img src="{{asset('upload/product/'.$item['photo'])}}" alt="{{$item['name_'.$lang]}}">
                        </a>
                        <div class="footer-cate">
                            <p class="name_product"><a href="{{url('san-pham/'.$item['alias_vi'].'.html')}}" title="{{$item['name_'.$lang]}}">{{$item['name_'.$lang]}}</a></p>
                            <div class="price">
                                @if($lang =='vi') {{number_format($item['price_vi'])}} vnđ
                                @elseif($lang =='en') $ {{$item['price_en']}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach               
            </div>
        </div>
        @endif       
    </div>
</div>


@endsection
