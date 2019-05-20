@extends('admin.master')
@section('content')
@section('controller','Danh mục '.$trang)
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
                @if (session('status'))
                <div class="box-header">
                    <h3 class="box-title alert_thongbao text-green">{{ session('status') }}</h3>
                </div>
                @endif
                <!--<div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div>-->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>                                
                                <th class="text-center with_dieuhuong">Stt</th>                                
                                <th>Danh mục cha</th>                               
                                <th>Tên danh mục</th>
                                <!-- <th class="text-center with_dieuhuong">Hiển thị</th> -->
                                <th class="text-center with_dieuhuong">Sửa</th>
                                <th class="text-center with_dieuhuong">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $k=>$item)
                            <tr>
                                
                                <td class="text-center with_dieuhuong">{{$k+1}}</td>
                                
                                <td>
                                  <?php  $parent = DB::table('news_categories')->where('id', $item->parent_id)->where('com', @$_GET['type'])->first();
                                  ?>
                                  @if(!empty($parent))
                                    {{ $parent->name_vi }}
                                  @else
                                    {{ 'None' }}
                                  @endif
                                </td>
                                
                                <td>{{$item->name_vi}}<br>
                                    @if($_GET['type']=='tin-tuc')
                                        <a href=" {{url('tin-tuc/'.$item->alias_vi)}}" title=""> {{url('tin-tuc/'.$item->alias_vi)}}</a>
                                    @endif
                                    @if($_GET['type']=='du-an')
                                        <a href=" {{url('du-an/'.$item->alias_vi)}}" title=""> {{url('du-an/'.$item->alias_vi)}}</a>
                                    @endif
                                    @if($_GET['type']=='linh-vuc')
                                        <a href=" {{url('linh-vuc/'.$item->alias_vi)}}" title=""> {{url('linh-vuc/'.$item->alias_vi)}}</a>
                                    @endif
                               </td>
                                <!-- <td class="text-center with_dieuhuong">
                                  @if($item->status>0)
                                    <a href="backend/newscate/edit?id={{$item->id}}&hienthi={{ time() }}&type={{ @$_GET['type'] }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Bật</a>
                                  @else
                                    <a href="backend/newscate/edit?id={{$item->id}}&hienthi={{ time() }}&type={{ @$_GET['type'] }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Tắt</a>
                                  @endif
                                </td> -->
                                <td class="text-center with_dieuhuong">
                                  <i class="fa fa-pencil fa-fw"></i><a href="backend/newscate/edit?id={{$item->id}}&type={{ @$_GET['type'] }}">Edit</a>
                                </td>
                                <td class="text-center">
                                  <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/newscate/{{$item->id}}/delete?type={{ @$_GET['type'] }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer col-md-12">
                  <div class="col-md-6">
                    <input type="button" onclick="javascript:window.location='backend/newscate/add?type={{ @$_GET[type] }}'" value="Thêm" class="btn btn-primary" />
                    <button type="button" id="xoahet" class="btn btn-success">Xóa</button>
                    <input type="button" value="Thoát" onclick="javascript:window.location='admin'" class="btn btn-danger" />

                  </div>
                </div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@endsection()
