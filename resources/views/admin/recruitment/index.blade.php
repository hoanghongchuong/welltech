@extends('admin.master')
@section('content')
@section('controller',''.$trang)
@section('action','List')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    @yield('controller')
    <small>@yield('action')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="javascript:">@yield('controller')</a></li>
    <li class="active">@yield('action')</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        @include('admin.messages_error')

        <!--<div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>-->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>                   
                    <th class="text-center with_dieuhuong">Stt</th>                        
                    <th>Tên</th>                        
                    <th>Phòng ban</th>                    
                    <th>Số lượng</th> 
                    <th class="text-center with_dieuhuong">Sửa</th>
                    <th class="text-center with_dieuhuong">Xóa</th>
                </tr>
            </thead>
            <tbody>
              @foreach($data as $k=>$item)
              <tr>               
                <td class="text-center with_dieuhuong">{{$k+1}}</td>
                <td>
                    {{$item->name_vi}}<br>                  
                    <a href=" {{url('tuyen-dung/'.$item->alias_vi.'.html')}}" title=""> {{url('tuyen-dung/'.$item->alias_vi.'.html')}}</a>
                </td>
                <th>{{$item->room_vi}}</th>
                <th>{{ $item->number }}</th>
                <td class="text-center with_dieuhuong">
                  <i class="fa fa-pencil fa-fw"></i><a href="{{ route('tuyendung.edit',$item->id) }}">Edit</a>
                </td>
                <td class="text-center">
                  <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="{{ route('delete.tuyendung',$item->id) }}}">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- /.box-body -->
        <div class="box-footer col-md-12">
          <div class="row">
            <div class="col-md-6">
              <input type="button" onclick="javascript:window.location='{{route('tuyendung.create')}}'" value="Thêm" class="btn btn-primary" />
              <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />

            </div>
          </div>
        </div>
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
@endsection()
