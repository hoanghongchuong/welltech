@extends('index')
@section('content')
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb breadcrumbx">
                <li>
                    <a href="{{url('')}}">{{trans('label.home')}}</a>
                </li>
                <li class="active"><a href="{{url('san-pham')}}">{{trans('label.product')}}</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="box-des-category">
                <h1>{{$product_cate['name_'.$lang]}}</h1>
                <div class="des">{!! $product_cate['mota_'.$lang] !!}
            <div class="col-md-3">
                <div class="sidebar">
                    <nav class="sidebar-menu">
                        <ul id="menuMobile2" class="">
                            <li>
                                <a href="#" class="filter-options-title">Category</a>
                                <a href="#cate1" data-toggle="collapse" class="_arrow-mobile flr"><i class="_icon fa fa-angle-down"></i></a>
                                <ul class="collapse text-capitalize" id="cate1">
                                    <li class=""><a href="#">Công trình 1</a></li>
                                    <li><a href="#">Công trình 1</a></li>
                                    <li><a href="#">Công trình 1</a></li>
                                    <li><a href="#">Công trình 1</a></li>
                                    <li><a href="#">Công trình 1</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="filter-options-title">Danh mục 2</a>
                                <a href="#cate2" data-toggle="collapse" class="_arrow-mobile flr"><i class="_icon fa fa-angle-down"></i></a>
                                <ul class="collapse text-capitalize" id="cate2">
                                    <li><a href="#">Công trình 1</a></li>
                                    <li><a href="#">Công trình 1</a></li>
                                    <li><a href="#">Công trình 1</a></li>
                                    <li><a href="#">Công trình 1</a></li>
                                    <li><a href="#">Công trình 1</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="filter-options-title">Danh mục 3</a>
                                <a href="#cate3" data-toggle="collapse" class="_arrow-mobile flr"><i class="_icon fa fa-angle-down"></i></a>
                                <ul class="collapse text-capitalize" id="cate3">
                                    <li><a href="#">Công trình 1</a></li>
                                    <li><a href="#">Công trình 1</a></li>
                                    <li><a href="#">Công trình 1</a></li>
                                    <li><a href="#">Công trình 1</a></li>
                                    <li><a href="#">Công trình 1</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="" class="filter-options-title" title="">Danh mục 4</a></li>
                            <li><a href="" class="filter-options-title" title="">Danh mục 5</a></li>
                            <li><a href="" class="filter-options-title" title="">Danh mục 6</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-9">
                <div class="box-filter-product">
                    <div class="vk-filter">
                        <div class="vk-filter__item">
                            <span class="mr-1">Hiển thị</span>
                            <select name="view" id="" class="form-control form-change">
                                <option value="9">9</option>
                                <option value="12">12</option>
                                <option value="15">15</option>
                            </select>
                            <!-- <span class="ml-1">Sản phẩm</span> -->
                        </div>

                        <div class="vk-filter__item">
                            <span class="mr-1">Sort By</span>                        
                            <select name="sort" id="product_filter" class="form-control form-change">
                                <option value="asc">Product name</option>
                                <option value="desc">Price</option>
                               
                            </select>
                        </div>
                    </div>                        
                </div>
                <div class="list-product-item mt-0">
                        @foreach($products['data'] as $item)
                        <div class="box-item-product col-md-3 col-xs-6">
                            <a href="{{url('san-pham/'.$item['alias_vi'].'.html')}}" title="{{$item['name_'.$lang]}}">
                                <img src="{{asset('upload/product/'.$item['photo'])}}" alt="{{$item['name_'.$lang]}}">
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
                        
                        @endforeach
                        <div class="paginations">{!! $data_paginate->links() !!}</div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
