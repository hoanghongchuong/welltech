<?php
    $setting = \App\Setting::where('id', 1)->first()->toArray();
    $lang = Session::get('locale');    
?>
<footer class="vk-footer">
    <div class="vk-footer__top">
        <div class="container">
            <div class="vk-footer__top-content row">
                <div class="col-lg-4 col-md-4">
                    <div class="vk-footer__item">
                        <a href="{{url('')}}" class="vk-footer__logo">
                            <img src="{{asset('upload/hinhanh/'.$setting['logo'])}}" alt="LOGO" class="img-logo-footer">
                        </a>
                        <div class="vk-footer__text">
                            <p>
                                {!! $setting['slogan_'.$lang] !!}
                            </p>
                        </div>
                    </div> <!--./item-->
                </div> <!--./col-->

                <div class="col-lg-4 col-md-4">
                    <div class="vk-footer__item">
                        <h2 class="vk-footer__heading">{{trans('label.contact')}}</h2>
                        <ul class="vk-footer__list vk-footer__list--style-2">
                            <li style="padding-left: 0px;"><h3 class="vk-footer__title">{{$setting['company_'.$lang]}}</h3></li>
                            <li><span class="_icon"><img class="" src="{{asset('public/images/map-i1.png')}}"></span> Address: {{$setting['address_'.$lang]}}
                            </li>
                            <li>
                                <i class="fa fa-map"></i>
                                <a href="https://www.google.com/maps/place/C%C3%B4ng+ty+C%E1%BB%95+ph%E1%BA%A7n+HCCorp/@20.9758751,105.8350653,174m/data=!3m2!1e3!4b1!4m5!3m4!1s0x3135adb5a5d00c9b:0x82160c6f2ac25d45!8m2!3d20.9758751!4d105.8356125" target="_blank">{{trans('label.link_map')}}</a>
                            </li>
                            <!-- <li><i class="_icon fa fa-envelope"></i> Email:
                                <a class="_hotline" href="mailto:info@hccorp.vn">info@hccorp.vn</a></li>
                            </li> -->
                        </ul>
                    </div> <!--./item-->
                </div> <!--./col-->

                <div class="col-lg-4 col-md-4">
                    <div class="vk-footer__item">
                        <h2 class="vk-footer__heading">Hotline</h2>
                       <!--  <h2 class="vk-footer__heading d-none d-lg-block">&nbsp;</h2> -->
                        <ul class="vk-footer__list vk-footer__list--style-2">
                            <li><i class="_icon fa fa-phone"></i> Phone: <a class="_hotline" href="tel:{{$setting['phone']}}">{{$setting['phone']}}</a>                                    </li>
                            <li><i class="_icon fa fa-phone"></i> Hotline: <a class="_hotline" href="tel:{{$setting['hotline']}}">{{$setting['hotline']}}</a>                                    </li>
                            <li><i class="_icon fa fa-envelope"></i> Email:
                                <a class="_hotline" href="mailto:{{$setting['email']}}">{{$setting['email']}}</a>
                            </li>
                            <li class="social">
                                <a href="" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                <a href="" target="_blank"><i class="fa fa-google"></i></a>
                                <a href="" target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>
                            <!-- <li><i class="_icon fa fa-envelope"></i> Email HR:
                                <a class="_hotline" href="mailto:hr@hccorp.vn">hr@hccorp.vn</a></li>
                            </li> -->
                            <!-- <li style="padding-left: 0">Số người truy cập: 123</li>
                            <li style="padding-left: 0">Số người đang online: 123</li> -->
                        </ul>
                    </div> <!--./item-->
                </div> <!--./col-->


            </div> <!--./top-content-->
        </div> <!--./container-->
    </div> <!--./top-->
</footer>
<div class="vk-footer__bot">
    <div class="container">
        <div class="vk-footer__bot-content">
            <div class="_right">
                © Copyright 2019. All rights reseverd
            </div>
            
        </div>
    </div>
</div> <!--./vk-footer__bot-->