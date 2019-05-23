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
                <div class="des">{!! $product_cate['mota_'.$lang] !!}</div>
            <div class="col-md-3">
                <div class="sidebar">
                    <nav class="sidebar-menu">
                        <ul id="menuMobile2" class="">
                            @foreach($cate_pro as $key=>$category)
                            <?php $cateChilds = \App\ProductCate::where('parent_id',$category['id'])->where('status',1)->get()->toArray(); ?>
                            <li>
                                <a href="{{url('san-pham/'.$category['alias_vi'])}}" class="filter-options-title">{{$category['name_'.$lang]}}</a>
                                <a href="#cate{{$key}}" data-toggle="collapse" class="_arrow-mobile flr"><i class="_icon fa fa-angle-down"></i></a>
                                <ul class="collapse text-capitalize" id="cate{{$key}}">
                                    @foreach($cateChilds as $childs)
                                    <li class=""><a href="{{url('san-pham/'.$childs['alias_vi'])}}">{{$childs['name_'.$lang]}}</a></li>
                                    @endforeach
                                    
                                </ul>
                            </li>
                            @endforeach
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
