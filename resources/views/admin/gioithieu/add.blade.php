@extends('admin.master')
@section('content')
@section('controller','Giới thiệu')
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
        	
        	<form name="frmAdd" method="post" action="{!! route('admin.gioithieu.postAdd') !!}">
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
					                <label for="file">File ảnh</label>
					                  <input type="file" id="file" name="fImages" >
					                  <p class="help-block">Width:225px - Height: 162px</p>
					                  @if ($errors->first('fImages')!='')
					                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
					                    @endif
					              </div>
					              
					            <div class="clearfix"></div>
		                  		<div class="col-md-6 col-xs-12">			                    	
							    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
								      	<label for="ten">Tên tiếng việt</label>
								      	<input type="text" id="txtName" name="name_vi" value=""  class="form-control" />
								      	
									</div>
									<div class="form-group @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="alias_vi" id="txtAlias" value=""  class="form-control" />
								      	
									</div>
									
								</div>								
							</div>
							<div class="row">
								<div class="form-group">
							      	<label for="desc">Nôi dung</label>
							      	<textarea name="content_vi" id="txtContent" rows="5" class="form-control"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" name="title_vi" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Description</label>
										<textarea name="description_vi" class="form-control"></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Keyword</label>
										<input type="text" name="keyword_vi" class="form-control">
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
								      	<input type="text" id="txtName_en" name="name_en" value=""  class="form-control" />
								      	
									</div>
									<div class="form-group hidden @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="alias_en" id="txtAlias_en" value=""  class="form-control" />
								      	
									</div>
									
								</div>								
							</div>
							<div class="row">
								<div class="form-group">
							      	<label for="desc">Nôi dung</label>
							      	<textarea name="content_en" id="txtContent" rows="5" class="form-control"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" name="title_en" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Description</label>
										<textarea name="description_en" class="form-control"></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Keyword</label>
										<input type="text" name="keyword_en" class="form-control">
									</div>
									
								</div>
							</div>
							<!-- <div class="row">
								<div class="box box-info">
					                <div class="box-header">
					                  	<h3 class="box-title">Nội dung</h3>
					                  	<div class="pull-right box-tools">
						                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
						                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
						                </div>
					                </div>
					                <div class="box-body pad">
					        			<textarea name="content_en" id="txtContent" cols="50" rows="5"></textarea>
					        		</div>
					        	</div>
							</div> -->
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
	                	<div class="tab-pane" id="tab_3">
	                  		<div class="row">
		                    	<div class="col-md-6 col-xs-12">			                    	
							    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
								      	<label for="ten">Tên tiếng nhật</label>
								      	<input type="text" id="txtName_jp" name="name_jp" value=""  class="form-control" />
								      	
									</div>
									<div class="form-group hidden @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="alias_jp" id="txtAlias_jp" value=""  class="form-control" />
								      	
									</div>
									
								</div>
	                    	</div>
	                    	<div class="row">
	                    		<div class="form-group">
							      	<label for="desc">Nôi dung</label>
							      	<textarea name="content_jp" id="txtContent" rows="5" class="form-control"></textarea>
								</div>
	                    	</div>
	                    	<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" name="title_jp" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Description</label>
										<textarea name="description_jp" class="form-control"></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Keyword</label>
										<input type="text" name="keyword_jp" class="form-control">
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
								      	<input type="text" id="txtName_kr" name="name_kr" value=""  class="form-control" />
								      	
									</div>
									<div class="form-group hidden @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="alias_kr" id="txtAlias_kr" value=""  class="form-control" />
								      	
									</div>
									
								</div>
	                    	</div>
	                    	<div class="row">
	                    		<div class="form-group">
							      	<label for="desc">Nôi dung</label>
							      	<textarea name="content_kr" id="txtContent" rows="5" class="form-control"></textarea>
								</div>
	                    	</div>
	                    	<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" name="title_kr" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Description</label>
										<textarea name="description_kr" class="form-control"></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Keyword</label>
										<input type="text" name="keyword_kr" class="form-control">
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
								      	<input type="text" id="txtName_chn" name="name_chn" value=""  class="form-control" />
								      	
									</div>
									<div class="form-group hidden @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="alias_chn" id="txtAlias_chn" value=""  class="form-control" />								      	
									</div>									
								</div>								
	                    	</div>
	                    	<div class="row">
	                    		<div class="form-group">
							      	<label for="desc">Nôi dung</label>
							      	<textarea name="content_chn" id="txtContent" rows="5" class="form-control"></textarea>
								</div>
	                    	</div>
	                    	<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" name="title_chn" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Description</label>
										<textarea name="description_chn" class="form-control"></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Keyword</label>
										<input type="text" name="keyword_chn" class="form-control">
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
					    	<button type="button" onclick="javascript:window.location='backend/about?type={{ @$_GET[type] }}'" class="btn btn-danger">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div>    
</section><!-- /.content -->

@endsection()
