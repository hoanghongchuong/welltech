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
                <h1>Backup Power Kits</h1>
                <div class="des">We are in the process of designing and updating a new group of backup power kits. These will be available very soon, so keep checking back for updates. Please email us or give us a call if you need a kit custom designed to your needs.</div>
            </div>
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
                        <div class="box-item-product col-md-3 col-xs-6">
                            <a href="" title=""><img src="images/p1.jpg" alt="">
                            </a>
                            <div class="footer-cate">
                                <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh 48 Volt Lithium Ferro Phosphate Battery</a></p>
                                <div class="price">
                                    $ 200000
                                </div>
                            </div>
                        </div>
                        <div class="box-item-product col-md-3 col-xs-6">
                            <a href="" title=""><img src="images/p1.jpg" alt="">
                            </a>
                            <div class="footer-cate">
                                <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh 48 Volt Lithium Ferro Phosphate Battery Lithium Ferro Phosphate Battery</a></p>
                                <div class="price">
                                    $ 200000
                                </div>
                            </div>
                        </div>
                        <div class="box-item-product col-md-3 col-xs-6">
                            <a href="" title=""><img src="images/p1.jpg" alt="">
                            </a>
                            <div class="footer-cate">
                                <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh 48 Volt Lithium Ferro Phosphate Battery Lithium Ferro Phosphate Battery Lithium Ferro Phosphate Battery</a></p>
                                <div class="price">
                                    $ 200000
                                </div>
                            </div>
                        </div>
                        <div class="box-item-product col-md-3 col-xs-6">
                            <a href="" title=""><img src="images/p1.jpg" alt="">
                            </a>
                            <div class="footer-cate">
                                <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh </a></p>
                                <div class="price">
                                    $ 200000
                                </div>
                            </div>
                        </div>
                        <div class="box-item-product col-md-3 col-xs-6">
                            <a href="" title=""><img src="images/p1.jpg" alt="">
                            </a>
                            <div class="footer-cate">
                                <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh 48 Volt Lithium Ferro Phosphate Battery</a></p>
                                <div class="price">
                                    $ 200000
                                </div>
                            </div>
                        </div>
                        <div class="box-item-product col-md-3 col-xs-6">
                            <a href="" title=""><img src="images/p1.jpg" alt="">
                            </a>
                            <div class="footer-cate">
                                <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh</a></p>
                                <div class="price">
                                    $ 200000
                                </div>
                            </div>
                        </div>
                        <div class="box-item-product col-md-3 col-xs-6">
                            <a href="" title=""><img src="images/p1.jpg" alt="">
                            </a>
                            <div class="footer-cate">
                                <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh 48 Volt Lithium Ferro Phosphate Battery</a></p>
                                <div class="price">
                                    $ 200000
                                </div>
                            </div>
                        </div>
                        <div class="box-item-product col-md-3 col-xs-6">
                            <a href="" title=""><img src="images/p1.jpg" alt="">
                            </a>
                            <div class="footer-cate">
                                <p class="name_product"><a href="" title="">Simpliphi PHI-3.5-48-60 3.5kWh 48 Volt Lithium Ferro Phosphate Battery Lithium Ferro Phosphate Battery</a></p>
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
@endsection
