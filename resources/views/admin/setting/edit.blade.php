@extends('admin.master')
@section('content')
@section('controller','Setting')
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
        	<form method="post" action="backend/setting/update" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        		
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
	                  	<!-- <li><a href="#tab_3" data-toggle="tab" aria-expanded="true">Footer</a></li> -->
	                  	<li><a href="#tab_4" data-toggle="tab" aria-expanded="true">Hình ảnh web</a></li>
	                  	<li><a href="#tab_2" data-toggle="tab" aria-expanded="true">SEO</a></li>
	                </ul>
	                <div class="tab-content">
	                  	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
									<div class="clearfix"></div>
							    	<div class="form-group hidden">
								      	<label for="ten">Tên website</label>
								      	<input type="text" name="txtName" id="txtName" value="{{ $data->name_vi }}"  class="form-control" />
									</div>
									
									<div class="form-group">
								      	<label for="ten">Tên công ty</label>
								      	<input type="text" name="txtCompany_vi" value="{!! old('txtCompany', isset($data) ? $data->company_vi : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Tên công ty(tiếng anh)</label>
								      	<input type="text" name="txtCompany_en" value="{!! old('txtCompany', isset($data) ? $data->company_en : null) !!}"  class="form-control" />
									</div>
									<!-- <div class="form-group">
								      	<label for="ten">Tên công ty(tiếng nhật)</label>
								      	<input type="text" name="txtCompany_jp" value="{!! old('txtCompany_jp', isset($data) ? $data->company_jp : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Tên công ty(tiếng hàn)</label>
								      	<input type="text" name="txtCompany_kr" value="{!! old('txtCompany_kr', isset($data) ? $data->company_kr : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Tên công ty(tiếng trung)</label>
								      	<input type="text" name="txtCompany_chn" value="{!! old('txtCompany_chn', isset($data) ? $data->company_chn : null) !!}"  class="form-control" />
									</div> -->
									<div class="form-group">
								      	<label for="ten">Địa chỉ</label>
								      	<input type="text" name="txtAddress_vi" value="{!! old('txtAddress', isset($data) ? $data->address_vi : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Địa chỉ(tiếng anh)</label>
								      	<input type="text" name="txtAddress_en" value="{!! old('txtAddress_en', isset($data) ? $data->address_en : null) !!}"  class="form-control" />
									</div>
									<!-- <div class="form-group">
								      	<label for="ten">Địa chỉ(tiếng nhật)</label>
								      	<input type="text" name="txtAddress_jp" value="{!! old('txtAddress', isset($data) ? $data->address_jp : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Địa chỉ(tiếng hàn)</label>
								      	<input type="text" name="txtAddress_kr" value="{!! old('txtAddress', isset($data) ? $data->address_kr : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Địa chỉ(tiếng trung)</label>
								      	<input type="text" name="txtAddress_chn" value="{!! old('txtAddress', isset($data) ? $data->address_chn : null) !!}"  class="form-control" />
									</div> -->
									<!-- <div class="form-group">
								      	<label for="ten">Website</label>
								      	<input type="text" name="txtWebsite" value="{!! old('txtWebsite', isset($data) ? $data->website : null) !!}"  class="form-control" />
									</div> -->
									<div class="form-group">
								      	<label for="ten">Email</label>
								      	<input type="text" name="txtEmail" value="{!! old('txtEmail', isset($data) ? $data->email : null) !!}"  class="form-control" />
									</div>
									<!-- <div class="form-group">
								      	<label for="ten">Email test</label>
								      	<input type="text" name="email_test" value="{!! old('email_test', isset($data) ? $data->email_test : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Email HR</label>
								      	<input type="text" name="email_hr" value="{!! old('email_hr', isset($data) ? $data->email_hr : null) !!}"  class="form-control" />
									</div> -->
									<div class="form-group">
								      	<label for="ten">Điện thoại</label>
								      	<input type="text" name="txtPhone" value="{!! old('txtPhone', isset($data) ? $data->phone : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Hotline</label>
								      	<input type="text" name="txtHotline" value="{!! old('txtHotline', isset($data) ? $data->hotline : null) !!}"  class="form-control" />
									</div>
									<!-- <div class="form-group">
								      	<label for="ten">Fax</label>
								      	<input type="text" name="txtFax" value="{!! old('txtFax', isset($data) ? $data->fax : null) !!}"  class="form-control" />
									</div> -->
									
									<!-- <div class="form-group">
								      	<label for="ten">Tọa độ</label>
								      	<input type="text" name="txtToado" value="{!! old('txtToado', isset($data) ? $data->toado : null) !!}"  class="form-control" />
									</div> -->
									<!-- <div class="form-group">
								      	<label for="ten">Tiêu đề index</label>
								      	<input type="text" name="txtTitle_index" value="{!! old('txtTitle_index', isset($data) ? $data->title_index : null) !!}"  class="form-control" />
									</div> -->
									<div class="form-group">
								      	<label for="ten">Copyright</label>
								      	<input type="text" name="txtCopyright" value="{!! old('txtCopyright', isset($data) ? $data->copyright : null) !!}"  class="form-control" />
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
									<div class="form-group">
								      	<label for="ten">Slogan(Tiếng việt)</label>
								      	<textarea name="slogan_vi" class="form-control" id="">{{$data->slogan_vi}}</textarea>
									</div>
									<div class="form-group">
								      	<label for="ten">Slogan(tiếng anh)</label>
								      	<textarea name="slogan_en" class="form-control" id="">{{$data->slogan_en}}</textarea>
									</div>
									<!-- <div class="form-group">
								      	<label for="ten">Slogan(tiếng nhập)</label>
								      	<textarea name="slogan_jp" class="form-control" id="">{{$data->slogan_jp}}</textarea>
									</div>
									<div class="form-group">
								      	<label for="ten">Slogan(tiếng hàn)</label>
								      	<textarea name="slogan_kr" class="form-control" id="">{{$data->slogan_kr}}</textarea>
									</div>
									<div class="form-group">
								      	<label for="ten">Slogan(tiếng trung)</label>
								      	<textarea name="slogan_chn" class="form-control" id="">{{$data->slogan_chn}}</textarea>
									</div> -->
									<div class="form-group">
								      	<label for="ten">Facebook</label>
								      	<input type="text" name="txtFacebook" value="{!! old('txtFacebook', isset($data) ? $data->facebook : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Zalo</label>
								      	<input type="text" name="zalo" value="{!! old('zalo', isset($data) ? $data->zalo : null) !!}"  class="form-control" />
									</div>
									<!-- <div class="form-group">
								      	<label for="ten">Twitter</label>
								      	<input type="text" name="txtTwitter" value="{!! old('txtTwitter', isset($data) ? $data->twitter : null) !!}"  class="form-control" />
									</div> -->
									<div class="form-group">
								      	<label for="ten">Google</label>
								      	<input type="text" name="txtGoogle" value="{!! old('txtGoogle', isset($data) ? $data->google : null) !!}"  class="form-control" />
									</div>
									<!-- <div class="form-group">
								      	<label for="ten">In</label>
								      	<input type="text" name="txtSkype" value="{!! old('txtSkype', isset($data) ? $data->skype : null) !!}"  class="form-control" />
									</div> -->
									<div class="form-group">
								      	<label for="ten">Youtube</label>
								      	<input type="text" name="txtYoutube" value="{!! old('txtYoutube', isset($data) ? $data->youtube : null) !!}"  class="form-control" />
									</div>
									<!-- <div class="form-group">
								      	<label for="desc">Code chat</label>
								      	<textarea name="txtCodechat" rows="5" class="form-control">{{ old('txtCodechat', isset($data) ? $data->codechat : null) }}</textarea>
									</div> -->
									<div class="form-group">
								      	<label for="desc">Link bản đồ</label>
								      	<textarea name="txtIframemap" rows="5" class="form-control">{{ old('txtIframemap', isset($data) ? $data->iframemap : null) }}</textarea>
									</div>
									<div class="form-group">
								      	<label for="desc">Analytics</label>
								      	<textarea name="txtAnalytics" rows="5" class="form-control">{{ old('txtAnalytics', isset($data) ? $data->analytics : null) }}</textarea>
									</div>
									<!-- <div class="form-group">
										<label>File CV Mẫu: {{$data->cv}}</label>
										<input type="file" name="file_cv" value="">
									</div> -->
									
								</div>
							</div>
							<div class="clearfix"></div>
	                  	</div><!-- /.tab-pane -->
	                  	
	                	<div class="tab-pane" id="tab_4">
	                		<div class="form-group">
								<div class="form-group">
									<img src="{{ asset('upload/hinhanh/'.$data->favico) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" width="100"  alt="NO PHOTO" />
								</div>
								<label for="file">Chọn file Favico</label>
							 	<input type="file" id="file" name="fImagesFavico" >
								<p class="help-block">Width:100px - Height: 100px</p>
							</div>
							<div class="form-group">
								<div class="form-group">
									<img src="{{ asset('upload/hinhanh/'.$data->photo) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" width="200"  alt="NO PHOTO" />
								</div>
								<label for="file">Chọn file logo</label>
							 	<input type="file" id="file" name="fImages" >
								<p class="help-block">Width:234px - Height: 51px</p>
							</div>
							<div class="form-group">
								<div class="form-group">
									<img src="{{ asset('upload/hinhanh/'.$data->logo) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" width="200"  alt="NO PHOTO" />
								</div>
								<label for="file">Chọn file logo footer</label>
							 	<input type="file" id="file" name="fImages_logo" >
								<p class="help-block">Width:234px - Height: 51px</p>
							</div>
	                	</div>

	                	<div class="tab-pane" id="tab_2">
	                  		<div class="row">
		                    	<div class="col-md-6 col-xs-12">
		                    		<div class="form-group">
								      	<label for="title">Title</label>
								      	<input type="text" name="txtTitle" value="{!! old('txtTitle', isset($data) ? $data->title_vi : null) !!}"  class="form-control" />
									</div>
		                    		<div class="form-group">
								      	<label for="keyword">Keyword</label>
								      	<textarea name="txtKeyword" rows="5" class="form-control">{!! old('txtKeyword', isset($data) ? $data->keyword_vi : null) !!}</textarea>
									</div>
									<div class="form-group">
								      	<label for="description">Description</label>
								      	<textarea name="txtDescription" rows="5" class="form-control">{!! old('txtDescription', isset($data) ? $data->description_vi : null) !!}</textarea>
									</div>
		                    	</div>
	                    	</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
	                </div><!-- /.tab-content -->
	            </div>
			    <div class="clearfix"></div>
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Cập nhật</button>
					    	<button type="button" class="btn btn-danger" onclick="javascript:window.location='backend'">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</section><!-- /.content -->
@endsection()
