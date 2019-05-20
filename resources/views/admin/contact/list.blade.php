@extends('admin.master')
@section('content')
@section('action','List')
<!-- Content Header (Page header) -->
<script type="text/javascript">
    $(document).ready(function() {
    $("#chonhet").click(function(){
      var status=this.checked;
      $("input[name='chon']").each(function(){this.checked=status;})
    });

    $("#xoahet").click(function(){
      var listid="";
      $("input[name='chon']").each(function(){
        if (this.checked) listid = listid+","+this.value;
        })
      listid=listid.substr(1);   //alert(listid);
      if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
      hoi= confirm("Bạn có chắc chắn muốn xóa?");
      if (hoi==true) document.location = homeUrl()+"/admin/newsletter/"+listid+"/deleteList?type={{@$_GET[type]}}";
    });
    $("#send").click(function(){
      var listid="";
      $("input[name='chon[]']").each(function(){
        if (this.checked) listid = listid+","+this.value;
          })
      listid=listid.substr(1);   //alert(listid);
      if (listid=="") { alert("Bạn chưa chọn email nào"); return false;}
      hoi= confirm("Xác nhận muốn gửi thư đi?");
      if (hoi==true){
        document.frm.listid.value=listid;
        document.frm.submit();
      }
    });

  });
</script>
<section class="content-header">
    <h1>
        @yield('controller')
        <small>
            @yield('action')
        </small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="admin">
                <i class="fa fa-dashboard">
                </i>
                Home
            </a>
        </li>
        <li>
            <a href="javascript:">
                Quản lý
            </a>
        </li>
        <li class="active">
            liên hệ
        </li>
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
                            <table class="table table-bordered table-hover" id="example2">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            <input class="minimal" id="chonhet" name="chonhet" type="checkbox"/>
                                        </th>
                                        <th class="text-center with_dieuhuong">
                                            Stt
                                        </th>
                                        <!-- <th>Tên bài viết</th> -->
                                        <th>Họ tên</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Nội dung</th>
                                        <!-- <th>Ngày gửi</th> -->
                                        <!-- <th class="text-center with_dieuhuong">Hoạt động</th> -->
                                        <th class="text-center with_dieuhuong">
                                            Trạng thái
                                        </th>
                                        <th class="text-center with_dieuhuong">
                                            Xóa
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $k=>$item)
                                    <tr>
                                        <td>
                                            <input class="chon" id="chon" name="chon[]" type="checkbox" value="{{$item->id}}"/>
                                        </td>
                                        <td class="text-center with_dieuhuong">
                                            {{$k+1}}
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->content}}</td>
                                        <!-- <td><?=date('d/m/Y', strtotime($item->created_at))?></td> -->
                                        <!-- <td><img src="{{ asset('upload/hinhanh/'.$item->photo) }}" onerror="this.src='{{ asset('public/admin_assets/images/no-image.jpg') }}';" class="img_product"  alt="NO PHOTO" /></td> -->
                                        <td class="text-center with_dieuhuong">
                                            <button class="btn-toggle-status btn btn-{{ !$item->status? 'warning btn-access' : 'success' }} btn-sm" contact-id="{{ $item->id }}">
                                                @if(!$item->status)
                                                chưa xử lý
                                                @else
                                                đã xử lý
                                                @endif
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-trash-o fa-fw">
                                            </i>
                                            <a href="backend/contact/delete/{{$item->id}}" onclick="if(!confirm('Xác nhận xóa')) return false;">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <!-- <div class="box-footer col-md-12">
          <div class="row">
            <div class="col-md-6">
              <input type="button" onclick="javascript:window.location='admin/newsletter/add?type={{ @$_GET[type] }}'" value="Thêm" class="btn btn-primary" />
              <button type="button" id="xoahet" class="btn btn-success">Xóa</button>
              <input type="button" value="Thoát" onclick="javascript:window.location='admin'" class="btn btn-danger" />

            </div>
          </div>
        </div> -->
                        <div class="clearfix">
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
</section>
<!-- /.content -->
<script>
    $('.btn-toggle-status').on('click', function() {
        var btn = $(this);
        // if (btn.hasClass('btn-success')) {
        //     return;
        // }
        btn.attr('disabled', '');
        $.ajax({
            url: '{{ route("admin.contact.access") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                contact_id: btn.attr('contact-id')
            },
            success: function(res) {
                if (res == 1) {
                    btn.addClass('btn-success').removeClass('btn-warning');
                    btn.text('Đã xử lý');
                }
                if (res == 0) {
                    btn.addClass('btn-warning').removeClass('btn-success');
                    btn.text('Chưa xử lý');
                }
                btn.removeAttr('disabled', '');
            }
        });
    });
</script>
@endsection()
