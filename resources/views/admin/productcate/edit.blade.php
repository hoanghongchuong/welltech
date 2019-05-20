@extends('admin.master')
@section('content')
@section('controller','Dự án')
@section('action','Update')

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
        	<form method="post" action="backend/productcate/edit?id={{$id}}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
	                  	<li><a href="#tab_3" data-toggle="tab" aria-expanded="true">Tiếng anh</a></li>
	                  	<li><a href="#tab_2" data-toggle="tab" aria-expanded="true">SEO</a></li>
	                </ul>
	                <div class="tab-content">
	                  	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
			                    	<!-- <div class="form-group @if ($errors->first('fImages')!='') has-error @endif">
										<div class="form-group">
											<img src="{{ asset('upload/product/'.$data->photo) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" width="200"  alt="NO PHOTO" />
											<input type="hidden" name="img_current" value="{!! @$data->photo !!}">
										</div>
										<label for="file">Chọn File ảnh</label>
								     	<input type="file" id="file" name="fImages" >
								    	<p class="help-block">Width:225px - Height: 162px</p>
								    	@if ($errors->first('fImages')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
								      	@endif
									</div> -->
									
									<div class="clearfix"></div>
						        	<!-- <div class="form-group">
								      	<label for="ten">Danh mục cha</label>
								      	<select name="txtProductCate" class="form-control">

								      		<option value="0">Chọn danh mục</option>
								      		<?php cate_parent($parent,0,"--",$data["parent_id"]) ?>
								      	</select>
									</div> -->
							    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
								      	<label for="ten">Tên</label>
								      	<input type="text" name="txtName" id="txtName" value="{!! old('txtName', isset($data) ? $data->name : null) !!}"  class="form-control" />
								      	@if ($errors->first('txtName')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
								      	@endif
									</div>
									<div class="form-group hidden @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="txtAlias" id="txtAlias" value="{{ $data->alias }}"  class="form-control" />
								      	@if ($errors->first('txtAlias')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtAlias'); !!}</label>
								      	@endif
									</div>
									<!-- <div class="form-group">
										<label for="">Mô tả</label>
										<textarea name="description" rows="5" id="txtContent" class="form-control">{{$data->description}}</textarea>
									</div> -->
								</div>
							</div>
							<div class="clearfix"></div>
	                  	</div><!-- /.tab-pane -->
	                  	<div class="tab-pane" id="tab_3">
	                  		<div class="row">
		                    	<div class="col-md-6 col-xs-12">
		                    		<div class="form-group">
								      	<label for="txtTitle">Name</label>
								      	<input type="text" name="name_en" id="name_en" value="{{ isset($data->name_en) ? $data->name_en : '' }}"  class="form-control" />
									</div>
		                    		<!-- <div class="form-group">
										<label for="">Mô tả</label>
										<textarea name="mota_en" rows="5" id="txtContent" class="form-control">{!! isset($data->mota_en) ? $data->mota_en : '' !!}</textarea>
									</div> -->
									
		                    	</div>
	                    	</div>
	                    	<div class="clearfix"></div>
	                	</div>
	                  	<div class="tab-pane" id="tab_2">
	                  		<div class="row">
		                    	<div class="col-md-6 col-xs-12">
		                    		<div class="form-group">
								      	<label for="txtTitle">Title</label>
								      	<input type="text" name="txtTitle" value="{!! old('txtTitle', isset($data) ? $data->title : null) !!}"  class="form-control" />
									</div>
		                    		<div class="form-group">
								      	<label for="keyword">Keyword</label>
								      	<textarea name="txtKeyword" rows="5" class="form-control">{!! old('txtKeyword', isset($data) ? $data->keyword : null) !!}</textarea>
									</div>
									<div class="form-group">
								      	<label for="description">Description</label>
								      	<textarea name="txtDescription" rows="5" class="form-control">{!! old('txtDescription', isset($data) ? $data->description : null) !!}</textarea>
									</div>
		                    	</div>
		                    	<div class="col-md-6 col-xs-12">
		                    		<div class="form-group">
								      	<label for="txtTitle">Title english</label>
								      	<input type="text" name="title_en" value="{!! old('title_en', isset($data) ? $data->title_en : null) !!}"  class="form-control" />
									</div>
		                    		<div class="form-group">
								      	<label for="keyword">Keyword english</label>
								      	<textarea name="keyword_en" rows="5" class="form-control">{!! old('keyword_en', isset($data) ? $data->keyword_en : null) !!}</textarea>
									</div>
									<div class="form-group">
								      	<label for="description">Description english</label>
								      	<textarea name="description_en" rows="5" class="form-control">{!! old('description_en', isset($data) ? $data->description_en : null) !!}</textarea>
									</div>
		                    	</div>
	                    	</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
	                </div><!-- /.tab-content -->
	            </div>
	            <div class="clearfix"></div>
			    <div class="col-md-6">
			    	<div class="form-group">
					      <label for="ten">Số thứ tự</label>
					      <input type="number" min="1" name="stt" value="{!! isset($data->status) ? $data->stt : (count($parent)+1) !!}" class="form-control" style="width: 100px;">
				    </div>
				    <!-- <div class="form-group">
					    <label>
				        	<input type="checkbox" name="noibat" {!! (!isset($data->noibat) || $data->noibat==1)?'checked="checked"':'' !!}> Nổi bật
				    	</label>
				    </div> -->
				    <div class="form-group">
					    <label>
				        	<input type="checkbox" name="status" {!! (!isset($data->status) || $data->status==1)?'checked="checked"':'' !!}> Hiển thị
				    	</label>
				    </div>
			    	
			    </div>
			    <div class="clearfix"></div>
			    <div class="box-footer col-md-12 row">
					<div class="col-md-6">
				    	<button type="submit" class="btn btn-primary">Cập nhật</button>
				    	<button type="button" onclick="javascript:window.location='backend/productcate'" class="btn btn-danger">Thoát</button>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /box -->
    
</section><!-- /.content -->
@endsection()
