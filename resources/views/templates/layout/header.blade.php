<?php
    $setting = Cache::get('setting');
    // $menus = \App\Menu::where('parent_id', 0)->orderBy('stt','asc')->get()->toArray();
    // dd($menus);
    $categories = \App\ProductCate::where('com','san-pham')->where('parent_id',0)->get()->toArray();
    $lang = Session::get('locale');
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="img-logo"></a>
            </div>
            <div class="col-md-9">
                
                    <div class="box-right">
                        <span class="phone"><i class="fa fa-phone"></i>&nbsp {{$setting->phone}}</span>
                        <span class="shopping-cart"><a href=""><i class="fa fa-shopping-cart"></i>({{Cart::count()}})</a></span>
                        <span class="language">
                            <a href="{{url('lang/'.'en')}}"><img src="{{ asset('public/images/en.png')}}"></a> &nbsp
                            <a href="{{url('lang/'.'vi')}}"><img src="{{ asset('public/images/vi.png')}}"></a>
                        </span>
                    </div>
                
            </div>
        </div>
    </div>
</header>
<div class="menu-cate visible-md menu visible-lg">
    <div class="top-menu">  
        <div class="container">
            <div class="row">
               
                <ul class="navi">
                    <li><a href="{{url('')}}">Trang chủ</a></li>
                    <li>
                        <a href="{{url('gioi-thieu')}}">Giới thiệu</a>
                        <!-- <ul class="vk-menu__child gt">                                
                            <li><a href="#">Giới thiệu 1</a></li>
                            <li><a href="#">Giới thiệu 2</a></li>
                            <li><a href="#">Giới thiệu 3</a></li>
                            <li><a href="#">Giới thiệu 4</a></li>
                                                    
                        </ul> -->
                    </li>
                    <li>
                        <a href="">Sản phẩm <i class="fa fa-angle-down"></i></a>
                        
                        <ul class="vk-menu__child">  
                        @foreach($categories as $category)                             
                            <li>
                                <a href="{{url('san-pham/'.$category['alias_vi'])}}" class="title-cate-child">{{$category['name_'.$lang]}}</a>
                                <?php $category_chidls = \App\ProductCate::where('parent_id',$category['id'])->get()->toArray(); ?>
                                <ul class="sub-menu-list">
                                    @foreach($category_chidls as $child)                                    
                                    <li><a href="{{url('san-pham/'.$child['alias_'.$lang])}}" title="{{$child['name_'.$lang]}}">{{$child['name_'.$lang]}}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                        @endforeach                         
                        </ul>
                    </li>
                    <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>                            
                    <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
                </ul>
                <div class="box-search">
                    <input type="text" name="txtSearch">
                    <i class="fa fa-search"></i>
                </div>

            </div>
        </div>          
        
        
    </div>       
</div>
<!-- menu mobile -->
<div class="visible-xs visible-sm menu-mobile">
    <div class="vk-header__search">
        <div class="container">                
            <a href="#menuMobile" class="menu_Mobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
        </div>
    </div>
    <nav class="vk-header__menu-mobile">
        <ul class="vk-menu__mobile collapse" id="menuMobile">
            <li><a href="">Trang chủ</a></li>
            <li>
                <a href="#">Giới thiệu</a>
                <a href="#menu1" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu1">
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>                       
                </ul>
            </li>
            <li>
                <a href="#">Sản phẩm</a>

                <a href="#menu2" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu2">
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>                       
                </ul>
            </li>
            
            <li><a href="">Tin tức</a></li>                            
            <li><a href="">Liên hệ</a></li>
        </ul>
    </nav>        
</div>