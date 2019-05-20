@extends('admin.master')
@section('content')
@section('controller','Tuyển dụng')
@section('action','Edit')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    @yield('controller')
    <small>@yield('action')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="javascript:">@yield('controller')</a></li>
    <li class="active">@yield('action')</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">  
    <div class="box">
      @include('admin.messages_error')
        <div class="box-body">          
          <form name="frmAdd" method="post" action="{!! route('tuyendung.postEdit',$data->id) !!}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Tiếng việt</a></li>
                      <li><a href="#tab_2" data-toggle="tab" aria-expanded="true">Tiếng anh</a></li>
                      <li><a href="#tab_3" data-toggle="tab" aria-expanded="true">Tiếng nhật</a></li>
                      <li><a href="#tab_4" data-toggle="tab" aria-expanded="true">Tiếng hàn</a></li>
                      <li><a href="#tab_5" data-toggle="tab" aria-expanded="true">Tiếng trung</a></li>
                      <!-- <li><a href="#tab_6" data-toggle="tab" aria-expanded="true">SEO</a></li> -->
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">  
                                <div class="form-group @if ($errors->first('fImages')!='') has-error @endif">
                                    <div class="form-group">
                                        <img src="{{ asset('upload/news/'.$data->photo) }}" class="image_upload_preview" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" width="200"  alt="NO PHOTO" />
                                        <input type="hidden" name="img_current" value="{!! @$data->photo !!}">
                                    </div>
                                    <label for="file">Chọn File ảnh</label>
                                    <input type="file" id="file" name="fImages" >
                                    <!-- <p class="help-block">Width:225px - Height: 162px</p> -->
                                    @if ($errors->first('fImages')!='')
                                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
                                    @endif
                                </div>            
                                <div class="form-group">
                                    <label for="ten">Tên tiếng việt</label>
                                    <input type="text" name="name_vi" id="txtName" value="{{$data->name_vi}}"  class="form-control" />
                                   
                                </div>
                                <div class="form-group">
                                    <label for="alias">Đường dẫn tĩnh</label>
                                    <input type="text" name="alias_vi" id="txtAlias" value="{{$data->alias_vi}}"  class="form-control" />
                                    
                                </div>
                                <div class="form-group">
                                    <label for="">Phòng ban:</label>
                                    <input type="text" name="room_vi" required="" value="{{$data->room_vi}}" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Số lượng</label>
                                    <input type="number" name="number" min="1" value="{{$data->number}}" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Ngày hết hạn</label>
                                    <input type="date" name="end_date" value="{{$data->end_date}}" class="form-control">
                                </div>                                                            
                            </div>                

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtTitle">Title</label>
                                    <input type="text" name="title_vi" value="{{$data->title_vi}}"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="keyword">Keyword</label>
                                    <textarea name="keyword_vi" rows="5" class="form-control">{{$data->keyword_vi}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description_vi" rows="5" class="form-control">{{$data->description_vi}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <textarea name="mota_vi" id="txtContent" rows="5" class="form-control">{!! $data->mota_vi !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="mota">Yêu cầu</label>
                                    <textarea name="yeucau_vi" id="txtContent" rows="5" class="form-control">{!! $data->yeucau_vi !!}</textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="mota">Chế độ đãi ngộ</label>
                                    <textarea name="chedo_vi" id="txtContent" rows="5" class="form-control">{!! $data->chedo_vi !!}</textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="mota">Hồ sơ</label>
                                    <textarea name="hoso_vi" id="txtContent" rows="5" class="form-control">{!! $data->hoso_vi !!}</textarea>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_2">
                        <div class="row">
                            <!-- <div class="col-md-6 col-xs-12">
                                
                                <div class="form-group hidden">
                                    <label for="alias">Đường dẫn tĩnh</label>
                                    <input type="text" name="txtAlias_en" id="txtAlias_en" value=""  class="form-control" />
                                </div>
                            </div> -->
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtTitle">Tên tiếng anh</label>
                                    <input type="text" name="name_en" id="name_en" value="{{$data->name_en}}"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="txtTitle">Phòng ban</label>
                                    <input type="text" name="room_en" id="" value="{{$data->room_en}}"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="txtTitle">Title</label>
                                    <input type="text" name="title_en" value="{{$data->title_en}}"  class="form-control" />
                                </div>
                                
                                <div class="form-group">
                                    <label for="keyword">Keyword</label>
                                    <textarea name="keyword_en" rows="5" class="form-control">{{$data->keyword_en}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description_en" rows="5" class="form-control">{{$data->description_en}}</textarea>
                                </div>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <textarea name="mota_en" id="txtContent" rows="5" class="form-control">{!! $data->mota_en !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="mota">Yêu cầu</label>
                                    <textarea name="yeucau_en" id="txtContent" rows="5" class="form-control">{!! $data->yeucau_en !!}</textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="mota">Chế độ đãi ngộ</label>
                                    <textarea name="chedo_en" id="txtContent" rows="5" class="form-control">{!! $data->chedo_en !!}</textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="mota">Hồ sơ</label>
                                    <textarea name="hoso_en" id="txtContent" rows="5" class="form-control">{!! $data->hoso_en !!}</textarea>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_3">
                        <div class="row">
                            <!-- <div class="col-md-6 col-xs-12">
                                
                                <div class="form-group hidden">
                                    <label for="alias">Đường dẫn tĩnh</label>
                                    <input type="text" name="txtAlias_jp" id="txtAlias_jp" value=""  class="form-control" />
                                </div>                  
                                
                            </div> -->
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtTitle">Tên tiếng nhật</label>
                                    <input type="text" name="name_jp" id="name_jp" value="{{$data->name_jp}}"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="txtTitle">Phòng ban</label>
                                    <input type="text" name="room_jp" id="name_chn" value="{{$data->room_jp}}"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="txtTitle">Title</label>
                                    <input type="text" name="title_jp" value="{{$data->title_jp}}"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="keyword">Keyword</label>
                                    <textarea name="keyword_jp" rows="5" class="form-control">{{$data->keyword_jp}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description_jp" rows="5" class="form-control">{{$data->description_jp}}</textarea>
                                </div>
                            </div>                    
                        </div>  
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <textarea name="mota_jp" id="txtContent" rows="5" class="form-control">{!!  $data->mota_jp!!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="mota">Yêu cầu</label>
                                    <textarea name="yeucau_jp" id="txtContent" rows="5" class="form-control">{!! $data->yeucau_jp !!}</textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="mota">Chế độ đãi ngộ</label>
                                    <textarea name="chedo_jp" id="txtContent" rows="5" class="form-control">{!! $data->chedo_jp !!}</textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="mota">Hồ sơ</label>
                                    <textarea name="hoso_jp" id="txtContent" rows="5" class="form-control">{!! $data->hoso_jp !!}</textarea>
                                </div>    
                            </div>
                        </div>           
                    </div>
                    <div class="tab-pane" id="tab_4">
                        <div class="row">
                            <!-- <div class="col-md-6 col-xs-12">
                                
                                <div class="form-group hidden">
                                    <label for="alias ">Đường dẫn tĩnh</label>
                                    <input type="text" name="txtAlias_kr" id="txtAlias_kr" value=""  class="form-control" />
                                </div>
                            </div> -->
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtTitle">Tên tiếng hàn</label>
                                    <input type="text" name="name_kr" id="name_kr" value="{{$data->name_kr}}"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="txtTitle">Phòng ban</label>
                                    <input type="text" name="room_kr" id="" value="{{$data->room_kr}}"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="txtTitle">Title</label>
                                    <input type="text" name="title_kr" value="{{$data->title_kr}}"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="keyword">Keyword</label>
                                    <textarea name="keyword_kr" rows="5" class="form-control">{{$data->keyword_kr}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description_kr" rows="5" class="form-control">{!! $data->description_kr !!}</textarea>
                                </div>
                            </div>                       
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <textarea name="mota_kr" id="txtContent" rows="5" class="form-control">{!! $data->mota_kr !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="mota">Yêu cầu</label>
                                    <textarea name="yeucau_kr" id="txtContent" rows="5" class="form-control">{!! $data->yeucau_kr !!}</textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="mota">Chế độ đãi ngộ</label>
                                    <textarea name="chedo_kr" id="txtContent" rows="5" class="form-control">{!! $data->chedo_kr !!}</textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="mota">Hồ sơ</label>
                                    <textarea name="hoso_kr" id="txtContent" rows="5" class="form-control">{!! $data->hoso_kr !!}</textarea>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_5">
                        <div class="row">
                            <!-- <div class="col-md-6 col-xs-12">
                                
                                <div class="form-group hidden">
                                    <label for="alias">Đường dẫn tĩnh</label>
                                    <input type="text" name="txtAlias_chn" id="txtAlias_chn" value=""  class="form-control" />
                                </div>
                            </div> -->
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtTitle">Tên tiếng trung</label>
                                    <input type="text" name="name_chn" id="name_chn" value="{{$data->name_chn}}"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="txtTitle">Phòng ban</label>
                                    <input type="text" name="room_chn" id="" value="{{$data->room_chn}}"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="txtTitle">Title</label>
                                    <input type="text" name="title_chn" value="{{$data->title_chn}}"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="keyword">Keyword</label>
                                    <textarea name="keyword_chn" rows="5" class="form-control">{{$data->keyword_chn}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description_chn" rows="5" class="form-control">{{$data->description_chn}}</textarea>
                                </div>
                            </div>                
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <textarea name="mota_chn" id="txtContent" rows="5" class="form-control">{!! $data->mota_chn !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="mota">Yêu cầu</label>
                                    <textarea name="yeucau_chn" id="txtContent" rows="5" class="form-control">{!! $data->yeucau_chn !!}</textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="mota">Chế độ đãi ngộ</label>
                                    <textarea name="chedo_chn" id="txtContent" rows="5" class="form-control">{!! $data->chedo_chn !!}</textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="mota">Hồ sơ</label>
                                    <textarea name="hoso_chn" id="txtContent" rows="5" class="form-control">{!! $data->hoso_chn !!}</textarea>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div><!-- /.tab-content -->
            </div>
            
          
          <div class="box-footer">
            <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <button type="button" onclick="javascript:window.location='{{route('tuyendung.index')}}'" class="btn btn-danger">Thoát</button>
              </div>
            </div>
          </div>
        </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</section><!-- /.content -->
@endsection()
