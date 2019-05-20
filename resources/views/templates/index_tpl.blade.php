@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$lang = Session::get('locale');
?>
<div class="slider">
    <div id="carousel-id1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $k=>$slider)
            <div class="item @if($k==0)active @endif">
                <img  alt="Third slide" src="{{asset('upload/hinhanh/'.@$slider['photo'])}}">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>{{@$slider['name_'.$lang]}}</h2>
                        <p>{!! @$slider['content_'.$lang] !!}</p>
                        <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Read more</a></p> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#carousel-id1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>            
</div>
<div class="why-choose">
    <div class="container">
        <div class="row">
            <div class="title-why-choose">Tại sao chọn chúng tôi</div>
            <div class="dongke"><span></span></div>
            <div class="box-item">
                <div class="col-md-4">
                    <div class="box">
                        <img src="images/icon1.png">
                        <p class="name">Bảo vệ môi trường</p>
                        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <img src="images/icon2.png">
                        <p class="name">Tiết kiệm điện năng</p>
                        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <img src="images/icon3.png">
                        <p class="name">Chất lượng cao</p>
                        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('upload/hinhanh/'.$about_home['photo'])}}" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="title-about">{{$about_home['name_'.$lang]}}</div>
                <div class="des">{!! $about_home['mota_'.$lang] !!}</div>
                <div class="read-more"><a href="{{url('gioi-thieu')}}">{{trans('label.docthem')}}</a></div>
            </div>
        </div>
    </div>
</div>
<div class="hot-proudct-box">
    <div class="container">
        <div class="row">
            <div class="title-why-choose">Sản phẩm nổi bật</div>
            <div class="dongke"><span></span></div>
            <div class="list-product-item">
                <div class="owl-carousel owl-theme owl-carousel-product owl-carousel-product1">
                    <div class="item">
                        <a href="" title=""><img src="images/p1.jpg" alt="">
                        </a>
                        <div class="footer-cate">
                            <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh 48 Volt Lithium Ferro Phosphate Battery</a></p>
                            <div class="price">
                                $ 200000
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="" title=""><img src="images/p3.jpg" alt="">
                        </a>
                        <div class="footer-cate">
                            <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh 48 Volt Lithium Ferro Phosphate Battery</a></p>
                            <div class="price">
                                $ 200000
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="" title=""><img src="images/p2.png" alt="">
                        </a>
                        <div class="footer-cate">
                            <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh 48 Volt Lithium Ferro Phosphate Battery</a></p>
                            <div class="price">
                                $ 200000
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="" title=""><img src="images/p1.jpg" alt="">
                        </a>
                        <div class="footer-cate">
                            <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh 48 Volt Lithium Ferro Phosphate Battery</a></p>
                            <div class="price tac">
                                <span class="price">$ 200000</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="" title=""><img src="images/p3.jpg" alt="">
                        </a>
                        <div class="footer-cate">
                            <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh 48 Volt Lithium Ferro Phosphate Battery</a></p>
                            <div class="price">
                                $ 200000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hot-news">
    <div class="container">
        <div class="row">
            <div class="title-why-choose">Tin nổi bật</div>
            <div class="dongke"><span></span></div>
            <div class="list-hot-item">
                <div class="col-md-6 left">
                    <div class="box-item-news">
                        <a href="{{url('tin-tuc/'.@$hot_news[0]['alias_vi'].'.html')}}"><img src="{{asset('upload/news/'.@$hot_news[0]['photo'])}}"></a>
                        <div class="name-news fix-name">
                            <a href="{{url('tin-tuc/'.@$hot_news[0]['alias_vi'].'.html')}}">{{@$hot_news[0]['name_'.$lang]}}</a>
                        </div>
                        <div class="des-news pdl-15 pdr-15 ">
                            {!!@$hot_news[0]['mota_'.$lang]!!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="box-item-news">
                        <div class="col-md-4 pdl-0 pdr-0">
                            <a href="{{url('tin-tuc/'.@$hot_news[1]['alias_vi'].'.html')}}"><img src="{{asset('upload/news/'.@$hot_news[1]['photo'])}}"></a>
                        </div>
                        <div class="col-md-7 pdr-0 pdl-0">
                            <div class="name-news">
                                <a href="{{url('tin-tuc/'.@$hot_news[1]['alias_vi'].'.html')}}">{{@$hot_news[1]['name_'.$lang]}}</a>
                            </div>
                            <div class="des-news pdl-15 pdr-15 ">
                                    {!!@$hot_news[1]['mota_'.$lang]!!}
                            </div>
                        </div>
                    </div>
                    <div class="box-item-news">
                        <div class="col-md-4 pdl-0 pdr-0">
                            <a href="{{url('tin-tuc/'.@$hot_news[2]['alias_vi'].'.html')}}"><img src="{{asset('upload/news/'.@$hot_news[2]['photo'])}}"></a>
                        </div>
                        <div class="col-md-7 pdr-0 pdl-0">
                            <div class="name-news">
                                <a href="{{url('tin-tuc/'.@$hot_news[2]['alias_vi'].'.html')}}">{{@$hot_news[2]['name_'.$lang]}}</a>
                            </div>
                            <div class="des-news pdl-15 pdr-15 ">
                                    {!!@$hot_news[2]['mota_'.$lang]!!}
                            </div>
                        </div>
                    </div>
                    <div class="box-item-news">
                        <div class="col-md-4 pdl-0 pdr-0">
                            <a href="{{url('tin-tuc/'.@$hot_news[3]['alias_vi'].'.html')}}"><img src="{{asset('upload/news/'.@$hot_news[3]['photo'])}}"></a>
                        </div>
                        <div class="col-md-7 pdr-0 pdl-0">
                            <div class="name-news">
                                <a href="{{url('tin-tuc/'.@$hot_news[3]['alias_vi'].'.html')}}">{{@$hot_news[3]['name_'.$lang]}}</a>
                            </div>
                            <div class="des-news pdl-15 pdr-15 ">
                                    {!!@$hot_news[3]['mota_'.$lang]!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="feedback">
    <div class="container">
        <div class="row">
            <div class="list-feedback">
                <div class="owl-carousel owl-theme owl-carousel-feedback owl-carousel-product1">
                    @foreach($feedbacks as $k=>$fb)
                    <div class="item @if($k==0)active @endif">
                        <div class="des">{!! $fb['content_'.$lang] !!}</div>
                        <div class="name-feedback">{{$fb['name_'.$lang]}}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!--./content-->
@endsection
