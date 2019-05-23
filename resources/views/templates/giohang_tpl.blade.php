@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb breadcrumbx">
                <li>
                    <a href="{{url('')}}">{{trans('label.home')}}</a>
                </li>                
                <li class="active">{{trans('label.cart')}}</li>
            </ol>
        </div>
    </div>
</div>

 <div class="content-home-cate" style="margin-bottom: 30px; margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="vk-page vk-page--shopcart">
                    <div class="vk-shopcart">
                        <h3 class="vk-shopcart__heading">{{trans('label.cart')}}</h3>
                        <form action="{{route('updateCart')}}" method="post" id="cartformpage">   
                            <input type="hidden" name="_token" value="{{csrf_token()}}" >
                            <div class="table-responsive">                                
                                <table class="table">                                    
                                    <thead>
                                        <tr>
                                            <th class="image">Image</th>
                                            <th>{{trans('label.product')}}</th>
                                            <th>{{trans('label.price')}}</th>
                                            <th>{{trans('label.number')}}</th>
                                            <th>{{trans('label.subtotal')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product_cart as $key=>$product)

                                        <tr>
                                            <td class="image">
                                                <img src="{{asset('upload/product/'.$product['options']['photo'])}}" alt="{{$product['name']}}" style="width: 100px;" />
                                            </td>
                                            <td>
                                                {{$product['name']}}
                                                <p><a href="{{url('xoa-gio-hang/'.$product['rowId'])}}" title="" id="{{$product['rowId']}}"><i class="fa fa-trash"></i> {{trans('label.delete')}}</a></p>
                                            </td>
                                            <td>
                                                @if($lang =='vi')
                                                {{number_format($product['price'])}} ₫
                                                @elseif($lang =='en')
                                                    $ {{number_format($product['price'])}}
                                                @endif
                                            </td>
                                            <td>
                                                <input type="number" class="form-control order-2" min="0" value="{{$product['qty']}}" id="{{ $product['rowId'] }}"  name="numb[{{$key}}]">
                                            </td>
                                            <td>
                                                {{number_format($product['price'] * $product['qty'])}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="vk-shopcart__button">
                                <div class="pull-left">
                                    <a href="{{url('thanh-toan')}}" title="" class="vk-btn btn-update-cart">{{trans('label.checkout')}}</a>
                                    <button class="vk-btn btn-update-cart">{{trans('label.update')}}</button>
                                    
                                </div>
                                <div class="vk-shopcart__total pull-right">
                                    {{trans('label.total_order')}}: 
                                    @if($lang =='vi')
                                    <span>{{number_format($total)}} đ</span>
                                    @elseif($lang =='en')
                                    <span> ${{number_format($total)}} </span>
                                    @endif
                                </div>
                            </div>
                        </form>                        
                    </div> 
                </div> 
            </div>
        </div>
    </div>
@endsection
