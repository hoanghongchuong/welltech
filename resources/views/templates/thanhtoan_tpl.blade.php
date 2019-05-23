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
                <li class="active">{{trans('label.checkout')}}</li>
            </ol>
        </div>
    </div>
</div>

<div class="my-a-w-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="a-w-title">
                    <h1>{{trans('label.checkout')}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area start -->
<div class="cart-main-area" style="margin-bottom: 30px;">
    <style>
        .cf-input{background:#f5f5f5;width:100%;padding:9px 15px;font-size:13px;color:#222;margin-bottom:15px;border:none;height:40px}
        .cf-sub{color:#fff;font-size:18px;font-family:'Linotte';background:#232323;padding:10px 25px;margin-bottom:25px;border:none;width:100%;text-align:center;text-transform:uppercase}
        .bread-fe h1{font-size:16px;font-weight:400}
        .bread-fe{background-color:#ededed;border-top:2px solid #767676;padding:15px 0}
        /*.cart{padding:60px 0}*/
        .cart h2{border-bottom:2px solid #ddd;font-family:'Linotte';font-size:18px;font-weight:600;padding-bottom:20px;margin-bottom:20px}
        thead th{text-align:center}
        .cart-info h3{font-size:16px;font-weight:600;margin-bottom:15px;text-transform:uppercase}
        .info-total{border:solid 1px #aeaeae;padding:30px 15px}
        .info-total span{font-family:'Linotte'}
        .info-total div:first-child{margin-bottom:10px}
        .total{color:#ff4200;font-size:16px;font-weight:700}
        .order{background-color:#820024;border:2px solid transparent;color:#fff;display:inline-block;width:100%;padding:10px 0;margin-top:20px;text-align:center;text-transform:uppercase;transition:all .5s ease}
        .order:hover,.order:focus{border-color:#820024;background:#fff;color:#820024}
        .radio-inline{padding:10px 0;width:100%}
        .radio-inline input{position:absolute;visibility:hidden;margin-left:0!important}
        .radio-inline input[type=checkbox] + span,.radio-inline input[type=radio] + span{position:relative;padding-left:30px}
        .radio-inline input[type=checkbox] + span:before,.radio-inline input[type=radio] + span:before{border:1px solid #b7b7b7;width:18px;height:18px;content:' ';position:absolute;left:0;top:0;border-radius:50%}
        .radio-inline input[type=checkbox]:checked + span:after,.radio-inline input[type=radio]:checked + span:after{background:#820024;width:10px;height:10px;position:absolute;left:4px;top:4px;border-radius:50%;content:' '}
        .radio label{padding-left:0}
        .toHide{display:none}
        .form-info .cf-input{border:solid 1px #aeaeae;background:transparent}
        .form-info label{font-family:'Linotte';margin-bottom:10px}
        .form-info label span{color:#ef0000}
        .btn-order{background-color:#820024;border:1px solid #820024;color:#fff;font-size:16px;margin-top:20px;padding:10px 60px;text-transform:uppercase;transition:all .4s ease}
        .btn-order:hover,.btn-order:focus{background:#fff;color:#820024}
        .order-right h4{background-color:#e1e1e1;font-size:16px;font-family:'Linotte';padding:15px;text-transform:uppercase}
        .order-right h4 span{text-transform:lowercase}
        .order-table .table{margin-bottom:0}
        .order-table .table th{font-family:'Linotte';text-align:left}
        .order-table .table thead{background-color:#f6f6f6}
        .order-table .table tr td:not(:first-child){text-align:center}
        .order-table .table tr td:first-child{font-size:13px}
        .order-table table tbody tr{border:none}
        .note{color:#ef0000;padding:10px}
        .bot{background-color:#f6f6f6;font-size:16px}
        .tranform{color:#000ad2;margin-top:10px}
        .money-total{background-color:#f6f6f6;padding:12px 15px;margin:20px 0}
        .money-total span:last-child{color:#ff4200;font-size:20px}
        .order-table tbody{border:solid 1px #aeaeae;border-top:none}
        .payment{border:solid 1px #aeaeae;border-top:none;padding:20px 12px}
        .payment-title{margin-bottom:0}
        .bank-brief{margin-left:15px}
        .live{padding:0 0 0 12px}
    </style>

<section class="cart">
    <div class="container">
        <form action="{{route('postOrder')}}" method="post" accept-charset="utf-8">
            <input type="hidden" name="_token" value="{{csrf_token()}}">        
            <div class="row">
                <div class="col-md-6">
                    <h2>{{ trans('label.shipping_address') }}</h2>                                
                        <div class="form-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{trans('label.hoten')}} <span>*</span></label>
                                    <input type="text" class="cf-input" name="full_name" placeholder="" required="">
                                </div>
                                <div class="col-md-6">
                                    <label>{{trans('label.phone')}} <span>*</span></label>
                                    <input type="text" name="phone" class="cf-input" placeholder="" required="">
                                </div>
                            </div>
                            <label>Email <span>*</span></label>
                            <input type="text" class="cf-input" name="email" placeholder="" required="">

                            <label>{{trans('label.diachi')}} <span>*</span></label>
                            <input type="text" class="cf-input" name="address" placeholder="" required="">
                            <label>{{trans('label.content')}}</label>
                            <textarea name="note" id="" cols="30" rows="8" class="cf-input" placeholder="" required=""></textarea>
                            <div class="flex-center-center">
                                <button class="btn-order">{{trans('label.send_order')}}</button>
                            </div>
                        </div>
                </div>
                <div class="col-md-6 order-right">
                    <h4>{{trans('label.donhang')}}  <span>( {{Cart::count()}} {{trans('label.product')}})</span></h4>
                    <div class="order-table">
                        <table class="table">
                            <thead>
	                            <tr>
	                                <th>{{trans('label.product')}}</th>
	                                <th>{{trans('label.number')}}</th>
	                                <th>
	                                	@if($lang =='vi')
	                                	{{trans('label.price')}} (đ)
	                                	@elseif($lang =='en')
	                                	{{trans('label.price')}} ($)
	                                	@endif
	                                </th>
	                            </tr>
                            </thead>
                            <tbody>
                               	@foreach($product_cart as $key=>$product)
                                <tr>
                                    <td>{{$product['name']}}</td>
                                    <td>{{$product['qty']}}</td>
                                    <td>
                                        {{number_format($product['price'])}}
                                        
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="flex-center-between money-total">
                        <span style="color: #000; font-size: 18px;">
                            {{trans('label.total_order')}}: 
                        </span>
                            <span style="color: #14793C; font-weight: bold">
                            	@if($lang =='vi')
	                            {{number_format($total)}} đ
	                            @elseif($lang =='en')
								$ {{number_format($total)}}
	                            @endif
                        	</span>
                        </div>
                    </div>
                    <!-- <h4 class="payment-title">Phương thức thanh toán</h4>

                    <div class="payment">
                        <label class="radio-inline">
                            <input type="radio" name="payment_method" class="bank-input" value="0">
                            <span>Thanh toán trực tiếp</span>
                        </label>
                        <div class="toHide live" id="input-1">
                            <p>Nhân viên của chúng tôi giao hàng đến quý khách, quý khách sẽ thanh toán đầy đủ 100% số tiền trực tiếp cho nhân viên của chúng tôi.</p>
                        </div>
                        <label class="radio-inline">
                            <input type="radio" name="payment_method" class="bank-input" value="1">
                            <span>Chuyển khoản ngân hàng</span>
                        </label>
                        <div class="bank toHide" id="input-2">
                            <div class="row">
                               
                                <div class="col-md-6">
                                    <div class="flex">
                                        <img src="" title="" alt="">
                                        <div class="bank-brief">
                                           
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </form>
    </div>
</section>
@endsection