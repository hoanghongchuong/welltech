@extends('admin.master')
@section('content')
@section('controller','Quản lý '.$trang)
@section('action','Edit')
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
  
    <div class="box">
    	@include('admin.messages_error')
        <div class="box-body">
        	<form method="post" action="backend/slider/edit?id={{$id}}&type={{ @$_GET['type'] }}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        		<input type="hidden" name="txtCom" value="{{ @$_GET['type'] }}"/>
        		<div class="nav-tabs-custom">
        			<ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Tiếng việt</a></li>
	                  	<li><a href="#tab_2" data-toggle="tab" aria-expanded="true">tiếng anh</a></li>
	                  	<!-- <li><a href="#tab_3" data-toggle="tab" aria-expanded="true">tiếng nhật</a></li>
	                  	<li><a href="#tab_4" data-toggle="tab" aria-expanded="true">tiếng hàn</a></li>
	                  	<li><a href="#tab_5" data-toggle="tab" aria-expanded="true">tiếng trung</a></li> -->
	                </ul>
        		</div>
        		<div class="tab-content">
	                <div class="tab-pane active" id="tab_1">
	                	<div class="row">
	                		<div class="col-md-6 col-xs-12">
								<div class="form-group @if ($errors->first('fImages')!='') has-error @endif">
									<div class="form-group">
										<img src="{{ asset('upload/hinhanh/'.$data->photo) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" class="img-responsive"  alt="NO PHOTO" />
										<input type="hidden" name="img_current" value="{!! @$data->photo !!}">
									</div>
									<label for="file">Chọn File ảnh</label>
							     	<input type="file" id="file" name="fImages" >
							    	<p class="help-block">Width:800px - Height: 326px</p>
							    	@if ($errors->first('fImages')!='')
							      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
							      	@endif
								</div>
								
								<div class="clearfix"></div>
						    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
							      	<label for="ten">Tên</label>
							      	<input type="text" name="name_vi" id="txtName" value="{{ $data->name_vi }}"  class="form-control" />
							      	@if ($errors->first('txtName')!='')
							      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
							      	@endif
								</div>
								<!-- <div class="form-group">
							      	<label for="alias">Đường dẫn tĩnh</label>
							      	<input type="text" name="txtLink" id="txtLink" value="{{ $data->link }}"  class="form-control" />
								</div> -->
								
							</div>
	                	</div>
	                	<div class="row">
	                		<div class="col-md-12">
	                			<div class="form-group">
							      	<label for="desc">Mô tả tiếng việt</label>
							      	<textarea name="content_vi" rows="5" id="txtContent" class="form-control">{{ $data->content_vi }}</textarea>
								</div>
	                		</div>
	                	</div>
	                </div>
	                <div class="tab-pane" id="tab_2">
	                	<div class="row">
	                		<div class="col-md-6 col-xs-12">
								
						    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
							      	<label for="ten">Tên</label>
							      	<input type="text" name="name_en" id="" value="{{ $data->name_en }}"  class="form-control" />
							      	@if ($errors->first('txtName')!='')
							      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
							      	@endif
								</div>
								<!-- <div class="form-group">
							      	<label for="alias">Đường dẫn tĩnh</label>
							      	<input type="text" name="txtLink" id="txtLink" value="{{ $data->link }}"  class="form-control" />
								</div> -->
								
		
							</div>
	                	</div>
	                	<div class="row">
	                		<div class="col-md-12">
	                			<div class="form-group">
							      	<label for="desc">Mô tả tiếng anh</label>
							      	<textarea name="content_en" rows="5" id="txtContent" class="form-control">{{ $data->content_en }}</textarea>
								</div>
	                		</div>
	                	</div>                	
	                </div>
	                <div class="tab-pane" id="tab_3">
	                	<div class="row">
	                		<div class="col-md-6 col-xs-12">
								
						    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
							      	<label for="ten">Tên</label>
							      	<input type="text" name="name_jp" id="" value="{{ $data->name_jp }}"  class="form-control" />
							      	@if ($errors->first('txtName')!='')
							      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
							      	@endif
								</div>
								<!-- <div class="form-group">
							      	<label for="alias">Đường dẫn tĩnh</label>
							      	<input type="text" name="txtLink" id="txtLink" value="{{ $data->link }}"  class="form-control" />
								</div> -->	
							</div>
							
	                	</div>
	                	<div class="row">
							<div class="col-md-12">
								<div class="form-group">
							      	<label for="desc">Mô tả tiếng nhật</label>
							      	<textarea name="content_jp" rows="5" id="txtContent" class="form-control">{{ $data->content_jp }}</textarea>
								</div>
							</div>	
						</div>	                	
	                </div>
	                <div class="tab-pane" id="tab_4">
	                	<div class="row">
	                		<div class="col-md-6 col-xs-12">
								
						    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
							      	<label for="ten">Tên</label>
							      	<input type="text" name="name_kr" id="" value="{{ $data->name_kr }}"  class="form-control" />
							      	@if ($errors->first('txtName')!='')
							      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
							      	@endif
								</div>
								<!-- <div class="form-group">
							      	<label for="alias">Đường dẫn tĩnh</label>
							      	<input type="text" name="txtLink" id="txtLink" value="{{ $data->link }}"  class="form-control" />
								</div> -->
									
							</div>
	                	</div>
	                	<div class="row">
	                		<div class="col-md-12">
	                			<div class="form-group">
							      	<label for="desc">Mô tả tiếng hàn</label>
							      	<textarea name="content_kr" rows="5" id="txtContent" class="form-control">{{ $data->content_kr }}</textarea>
								</div>
	                		</div>	
	                	</div>               	
	                </div>
	                <div class="tab-pane" id="tab_5">
	                	<div class="row">
	                		<div class="col-md-6 col-xs-12">
								
						    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
							      	<label for="ten">Tên</label>
							      	<input type="text" name="name_chn" id="" value="{{ $data->name_chn }}"  class="form-control" />
							      	@if ($errors->first('txtName')!='')
							      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
							      	@endif
								</div>
								<!-- <div class="form-group">
							      	<label for="alias">Đường dẫn tĩnh</label>
							      	<input type="text" name="txtLink" id="txtLink" value="{{ $data->link }}"  class="form-control" />
								</div>	 -->	
							</div>
	                	</div>
	                	<div class="row">
	                		<div class="col-md-12">
	                			<div class="form-group">
							      	<label for="desc">Mô tả tiếng trung</label>
							      	<textarea name="content_chn" rows="5" id="txtContent" class="form-control">{{ $data->content_chn }}</textarea>
								</div>
	                		</div>
	                	</div>      	
	                </div>
				</div>
      			
	            <div class="clearfix"></div>
	            <div class="row">
				    <div class="col-md-6">
				    	<!-- <div class="form-group">
						      <label for="ten">Số thứ tự</label>
						      <input type="number" min="1" name="stt" value="{!! isset($data->stt) ? $data->stt : (count($news)+1) !!}" class="form-control" style="width: 100px;">
					    </div> -->
					    <div class="row">
	                		<div class="col-md-12">
	                			<div class="form-group">
								    <label>
							        	<input type="checkbox" name="status" {!! (!isset($data->status) || $data->status==1)?'checked="checked"':'' !!}> Hiển thị
							    	</label>
							    </div>
	                		</div>
					    	
	                	</div>
					   
				    </div>
			    </div>
			    <div class="clearfix"></div>
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Cập nhật</button>
					    	<button type="button" class="btn btn-danger" onclick="javascript:window.location='backend/slider?type={{ @$_GET['type'] }}'">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</section><!-- /.content -->

@endsection()
