@extends('admin.master')
@section('content')
@section('controller','Quản lý '.$trang)
@section('action','Add')
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
        	
        	<form name="frmAdd" method="post" action="{!! route('admin.slider.postAdd') !!}" enctype="multipart/form-data">
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
	                <div class="tab-content">
	                	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
	                  			<div class="col-md-6 col-xs-12">
									<div class="form-group col-md-12 @if ($errors->first('fImages')!='') has-error @endif">
										<label for="file">File ảnh</label>
								     	<input type="file" id="file" name="fImages" >
								    	<!-- <p class="help-block">Width:800px - Height: 326px</p> -->
								    	@if ($errors->first('fImages')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
								      	@endif
									</div>
									<!-- <div class="form-group col-md-12 @if ($errors->first('fImages2')!='') has-error @endif">
										<label for="file">File icon</label>
								     	<input type="file" id="file" name="fImages2" >
								    	<p class="help-block">Width:61px - Height: 61px</p>
								    	@if ($errors->first('fImages2')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages2'); !!}</label>
								      	@endif
									</div> -->
									<div class="clearfix"></div>
							    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
								      	<label for="ten">Tên</label>
								      	<input type="text" id="txtName" name="txtName" value=""  class="form-control" />
								      	@if ($errors->first('txtName')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
								      	@endif
									</div>
									<!-- <div class="form-group">
								      	<label for="alias">Link liên kết</label>
								      	<input type="text" name="txtLink" id="txtLink" value=""  class="form-control" />
									</div> -->
									
								</div>
	                  		</div>
	                  		<div class="row">
	                  			<div class="col-md-12">
	                  				<div class="form-group">
								      	<label for="desc">Mô tả</label>
								      	<textarea name="content_vi" rows="5" class="form-control"></textarea>
									</div>
	                  			</div>
	                  		</div>
	                  		
	                  	</div>
	                  	<div class="tab-pane" id="tab_2">
	                  		<div class="row">
	                  			<div class="col-md-12 col-xs-12">
									<div class="form-group">
								      	<label for="desc">Mô tả tiếng anh</label>
								      	<textarea name="content_en" rows="5" class="form-control"></textarea>
									</div>
								</div>
	                  		</div>	                  		
	                  	</div>
	                  	<div class="tab-pane" id="tab_3">
	                  		<div class="row">
	                  			<div class="col-md-12 col-xs-12">
									<div class="form-group">
								      	<label for="desc">Mô tả tiếng nhật</label>
								      	<textarea name="content_jp" rows="5" class="form-control"></textarea>
									</div>
								</div>
	                  		</div>	                  		
	                  	</div>
	                  	<div class="tab-pane" id="tab_4">
	                  		<div class="row">
	                  			<div class="col-md-12 col-xs-12">
									<div class="form-group">
								      	<label for="desc">Mô tả tiếng hàn</label>
								      	<textarea name="content_kr" rows="5" class="form-control"></textarea>
									</div>
								</div>
	                  		</div>	                  		
	                  	</div>
	                  	<div class="tab-pane" id="tab_5">
	                  		<div class="row">
	                  			<div class="col-md-12 col-xs-12">
									<div class="form-group">
								      	<label for="desc">Mô tả tiếng trung</label>
								      	<textarea name="content_chn" rows="5" class="form-control"></textarea>
									</div>
								</div>
	                  		</div>	                  		
	                  	</div>
	                </div>
        		</div>
          		
	            <div class="clearfix"></div>
			    <div class="col-md-6">
			    	<div class="form-group hidden-print">
					      <label for="ten">Số thứ tự</label>
					      <input type="number" min="1" name="stt" value="{!! count($data)+1 !!}" class="form-control" style="width: 100px;">
				    </div>
				    <div class="row">
              			<div class="form-group">
						    <label>
					        	<input type="checkbox" name="status" checked="checked"> Hiển thị
					    	</label>
					    </div>
              		</div>
				    
			    	
			    </div>			    
				<div class="clearfix"></div>
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Lưu</button>
					    	<button type="button" onclick="javascript:window.location='backend/slider?type={{ @$_GET[type] }}'" class="btn btn-danger">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</section><!-- /.content -->

@endsection()
