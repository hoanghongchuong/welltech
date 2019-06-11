@extends('index')
@section('content')

<nav aria-label="breadcrumb" class="nav-breadcrumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('')}}">{{trans('label.home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{trans('label.timkiem')}}</li>
            </ol>
        </div>
    </div>
</nav>
<div class="content-box">
    <div class="container">
        <div class="row">           
            <div class="col-md-9">
               <div class="list-product-item mt-0">
                    @foreach($data as $item)
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
                    
            </div>
            </div>
        </div>
    </div>
</div>

@endsection