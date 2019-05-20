@extends('admin.master')
@section('content')
@section('controller','Giới thiệu')
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
        	
        	<form name="frmAdd" method="post" action="backend/gioithieu/edit/{{$data->id}}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
	      		
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Tiếng việt</a></li>
	                  	<li><a href="#tab_2" data-toggle="tab" aria-expanded="true">tiếng anh</a></li>
	                  	<li><a href="#tab_3" data-toggle="tab" aria-expanded="true">tiếng nhật</a></li>
	                  	<li><a href="#tab_4" data-toggle="tab" aria-expanded="true">tiếng hàn</a></li>
	                  	<li><a href="#tab_5" data-toggle="tab" aria-expanded="true">tiếng trung</a></li>
	                  	<!-- <li><a href="#tab_6" data-toggle="tab" aria-expanded="true">SEO</a></li> -->
	                </ul>
	                <div class="tab-content">
	                  	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
	                  			<div class="form-group col-md-12 @if ($errors->first('fImages')!='') has-error @endif">
	                  				<img src="{{ asset('upload/banner/'.$data->image) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" width="200"  alt="NO PHOTO" />
											<input type="hidden" name="img_current" value="{!! @$data->image !!}">
									<p></p>
									<br>
					                <label for="file">File ảnh</label>
					                  <input type="file" id="file" name="fImages" >
					                  <!-- <p class="help-block">Width:225px - Height: 162px</p> -->
					                  @if ($errors->first('fImages')!='')
					                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
					                    @endif
					              </div>
					              
					            <div class="clearfix"></div>
		                  		<div class="col-md-6 col-xs-12">			                    	
							    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
								      	<label for="ten">Tên tiếng việt</label>
								      	<input type="text" id="txtName" name="name_vi" value="{{ $data->name_vi }}"  class="form-control" />
								      	
									</div>
									<div class="form-group @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="alias_vi" id="txtAlias" value="{{ $data->alias_vi }}"  class="form-control" />
								      	
									</div>
									
								</div>								
							</div>
							<div class="row">
								<div class="form-group">
							      	<label for="desc">Nôi dung</label>
							      	<textarea name="content_vi" id="txtContent" rows="5" class="form-control">
							      		{!! $data->content_vi !!}
							      	</textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" name="title_vi" value="{{ $data->title_vi }}" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Description</label>
										<textarea name="description_vi" class="form-control">{{ $data->description_vi }}</textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Keyword</label>
										<textarea name="keyword_vi" class="form-control">
											{{ $data->keyword_vi }}
										</textarea>
									</div>
									
								</div>
							</div>
							<div class="clearfix"></div>
	                  	</div><!-- /.tab-pane -->
	                  	<div class="tab-pane" id="tab_2">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">			                    	
							    	<div class="form-group">
								      	<label for="ten">Tên tiếng anh</label>
								      	<input type="text" id="txtName_en" name="name_en" value="{{ $data->name_en }}"  class="form-control" />
								      	
									</div>
									<div class="form-group hidden @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="alias_en" id="txtAlias" value="{{ $data->alias_en }}"  class="form-control" />
								      	
									</div>
									
								</div>								
							</div>
							<div class="row">
								<div class="form-group">
							      	<label for="desc">Nôi dung</label>
							      	<textarea name="content_en" id="txtContent" rows="5" class="form-control">
							      		{!! $data->content_en !!}
							      	</textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" name="title_en" value="{{ $data->title_en }}" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Description</label>
										<textarea name="description_en" class="form-control">
											{{$data->description_en}}
										</textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Keyword</label>
										<textarea name="keyword_en" class="form-control">
										{{ $data->keyword_en }}
									</textarea>
									</div>
									
									
								</div>
							</div>
							
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
	                	<div class="tab-pane" id="tab_3">
	                  		<div class="row">
		                    	<div class="col-md-6 col-xs-12">			                    	
							    	<div class="form-group  @if ($errors->first('txtName')!='') has-error @endif">
								      	<label for="ten">Tên tiếng nhật</label>
								      	<input type="text" id="txtName_jp" name="name_jp" value="{{ $data->name_jp }}"  class="form-control" />
								      	
									</div>
									<div class="form-group hidden @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="alias_jp" id="txtAlias" value=""  class="form-control" />
								      	
									</div>
									
								</div>
	                    	</div>
	                    	<div class="row">
	                    		<div class="form-group">
							      	<label for="desc">Nôi dung</label>
							      	<textarea name="content_jp" id="txtContent" rows="5" class="form-control">
							      		{!! $data->content_jp !!}
							      	</textarea>
								</div>
	                    	</div>
	                    	<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" name="title_jp" value="{{$data->title_jp}}" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Description</label>
										<textarea name="description_jp" class="form-control">{{$data->description_jp}}</textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Keyword</label>
										<textarea name="keyword_jp" class="form-control">
										{{ $data->keyword_jp }}
									</textarea>
									</div>
									
								</div>
							</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
	                	<div class="tab-pane" id="tab_4">
	                  		<div class="row">
		                    	<div class="col-md-6 col-xs-12">			                    	
							    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
								      	<label for="ten">Tên tiếng hàn</label>
								      	<input type="text" id="txtName_kr" name="name_kr" value="{{ $data->name_kr }}"  class="form-control" />
								      	
									</div>
									<div class="form-group hidden @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="alias_kr" id="txtAlias" value=""  class="form-control" />
								      	
									</div>
									
								</div>
	                    	</div>
	                    	<div class="row">
	                    		<div class="form-group">
							      	<label for="desc">Nôi dung</label>
							      	<textarea name="content_kr" id="txtContent" rows="5" class="form-control">
							      		{!! $data->content_kr !!}
							      	</textarea>
								</div>
	                    	</div>
	                    	<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" name="title_kr" value="{{$data->title_kr}}" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Description</label>
										<textarea name="description_kr" class="form-control">{{ $data->description_kr }}</textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Keyword</label>
										<textarea name="keyword_kr" class="form-control">
										{{ $data->keyword_kr }}
									</textarea>
									</div>
									
								</div>
							</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
	                	<div class="tab-pane" id="tab_5">
	                  		<div class="row">
		                    	<div class="col-md-6 col-xs-12">			                    	
							    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
								      	<label for="ten">Tên tiếng trung</label>
								      	<input type="text" id="txtName_chn" name="name_chn" value="{{ $data->name_chn }}"  class="form-control" />
								      	
									</div>
									<div class="form-group hidden @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="alias_chn" id="txtAlias" value=""  class="form-control" />								      	
									</div>									
								</div>								
	                    	</div>
	                    	<div class="row">
	                    		<div class="form-group">
							      	<label for="desc">Nôi dung</label>
							      	<textarea name="content_chn" id="txtContent" rows="5" class="form-control">
							      		{!! $data->content_chn !!}
							      	</textarea>
								</div>
	                    	</div>
	                    	<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" name="title_chn" value="{{$data->title_chn}}" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Description</label>
										<textarea name="description_chn" class="form-control">
											{{$data->description_chn}}
										</textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Keyword</label>
										<textarea name="keyword_chn" class="form-control">
										{{ $data->keyword_chn }}
									</textarea>
									</div>
									
								</div>
							</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
	                </div><!-- /.tab-content -->
	            </div>
	            <div class="clearfix"></div>
			    <div class="col-md-6">			    
				    <div class="form-group hidden">
					    <label>
				        	<input type="checkbox" name="status" checked="checked"> Hiển thị
				    	</label>
				    </div>			    	
			    </div>
			    <div class="clearfix"></div>
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Lưu</button>
					    	<!-- <button type="button" onclick="javascript:window.location='backend/about?type={{ @$_GET[type] }}'" class="btn btn-danger">Thoát</button> -->
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div>    
</section><!-- /.content -->

@endsection()
