@extends('admin.master')
@section('content')
@section('controller','Bài viết '.$trang)
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

        	<form name="frmAdd" method="post" action="{!! route('admin.news.postAdd') !!}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
				<input type="hidden" name="txtCom" value="{{ @$_GET['type'] }}"/>
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Tiếng việt</a></li>
	                  	<li><a href="#tab_2" data-toggle="tab" aria-expanded="true">Tiếng anh</a></li>
	                  	<!-- <li><a href="#tab_3" data-toggle="tab" aria-expanded="true">Tiếng nhật</a></li>
	                  	<li><a href="#tab_4" data-toggle="tab" aria-expanded="true">Tiếng hàn</a></li>
	                  	<li><a href="#tab_5" data-toggle="tab" aria-expanded="true">Tiếng trung</a></li> -->
	                </ul>
	                <div class="tab-content">
	                  	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
			                    	@if (count($errors) > 0)
						        		<div class="form-group has-error">
						        			@foreach ($errors->all() as $error)
						        			<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $error !!}</label><br>
						        			@endforeach
						        		</div>
						        	@endif
						        	
									<div class="form-group col-md-12 @if ($errors->first('fImages')!='') has-error @endif">
										<label for="file">File ảnh</label>
								     	<input type="file" id="file" name="fImages" >
								    	<p class="help-block">Width:225px - Height: 162px</p>
								    	@if ($errors->first('fImages')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
								      	@endif
									</div>
									
									<div class="clearfix"></div>
									@if($_GET['type']!='tin-tuc')										
									<div class="form-group">
								      	<label for="ten">Danh mục cha</label>
								      	<select name="txtNewsCate" class="form-control">

								      		<option value="0">Chọn danh mục</option>
								      		<?php cate_parent($parent, 0, "--", 0)?>
								      	</select>
									</div>
									@endif
							    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
								      	<label for="ten">Tên</label>
								      	<input type="text" id="txtName" name="txtName" value=""  class="form-control" />
								      	@if ($errors->first('txtName')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
								      	@endif
									</div>
									<div class="form-group @if($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="txtAlias" id="txtAlias" value=""  class="form-control" />
								      	@if ($errors->first('txtAlias')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtAlias'); !!}</label>
								      	@endif
									</div>									
									<div class="form-group">
								      	<label for="desc">Mô tả</label>
								      	<textarea name="txtDesc" rows="5" class="form-control"></textarea>
									</div>
									
								</div>
								<div class="col-md-6 col-xs-12">
		                    		<div class="form-group">
								      	<label for="txtTitle">Title</label>
								      	<input type="text" name="title_vi" value=""  class="form-control" />
									</div>
		                    		<div class="form-group">
								      	<label for="keyword">Keyword</label>
								      	<textarea name="keyword_vi" rows="5" class="form-control"></textarea>
									</div>
									<div class="form-group">
								      	<label for="description">Description</label>
								      	<textarea name="description_vi" rows="5" class="form-control"></textarea>
									</div>
		                    	</div>
								<!-- <div class="col-md-6 col-xs-12">
									@if($_GET['type']=='dich-vu')
									<div class="form-group col-md-12 @if ($errors->first('fImagesBg')!='') has-error @endif">
										<label for="file">File background</label>
								     	<input type="file" id="file" name="fImagesBg" >
								    	<p class="help-block">Width:225px - Height: 162px</p>
								    	@if ($errors->first('fImagesBg')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImagesBg'); !!}</label>
								      	@endif
									</div>
									@endif
								</div> -->
							</div>							
							<div class="row">
								<div class="col-md-12">
									<div class="box box-info">
						                <div class="box-header">
						                  	<h3 class="box-title">Nội dung</h3>
						                  	<div class="pull-right box-tools">
							                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
							                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
							                </div>
						                </div>
						                <div class="box-body pad">
						        			<textarea name="content_vi" id="txtContent" cols="50" rows="5"></textarea>
						        		</div>
						        	</div>
						        	
								</div>
							</div>
							
							<div class="clearfix"></div>

	                  	</div><!-- /.tab-pane -->
	                  	<div class="tab-pane" id="tab_2">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
			                    	
		                    		<div class="form-group">
								      	<label for="txtTitle">Tên tiếng anh</label>
								      	<input type="text" name="name_en" id="name_en" value=""  class="form-control" />
									</div>
									<div class="form-group hidden">
								      	<label for="alias">đường dẫn</label>
								      	<input type="text" name="txtAlias_en" id="txtAlias_en" value=""  class="form-control" />
									</div>
			                    	
									<div class="form-group">
								      	<label for="desc">Mô tả</label>
								      	<textarea name="mota_en" rows="5" class="form-control"></textarea>
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
		                    		<div class="form-group">
								      	<label for="txtTitle">Title</label>
								      	<input type="text" name="title_en" value=""  class="form-control" />
									</div>
		                    		<div class="form-group">
								      	<label for="keyword">Keyword</label>
								      	<textarea name="keyword_en" rows="5" class="form-control"></textarea>
									</div>
									<div class="form-group">
								      	<label for="description">Description</label>
								      	<textarea name="description_en" rows="5" class="form-control"></textarea>
									</div>
		                    	</div>
							</div>							
							<div class="row">
								<div class="col-md-12">
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
								</div>
							</div>							
							
	                    	<div class="clearfix"></div>
	                	</div>
	                	<!-- <div class="tab-pane" id="tab_3">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
			                    	
		                    		<div class="form-group">
								      	<label for="txtTitle">Tên tiếng nhật</label>
								      	<input type="text" name="name_jp" id="name_jp" value=""  class="form-control" />
									</div>
									<div class="form-group hidden">
								      	<label for="alias">đường dẫn</label>
								      	<input type="text" name="alias_jp" id="alias_jp" value=""  class="form-control" />
									</div>
			                    	
									<div class="form-group">
								      	<label for="desc">Mô tả</label>
								      	<textarea name="mota_jp" rows="5" class="form-control"></textarea>
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
		                    		<div class="form-group">
								      	<label for="txtTitle">Title</label>
								      	<input type="text" name="title_jp" value=""  class="form-control" />
									</div>
		                    		<div class="form-group">
								      	<label for="keyword">Keyword</label>
								      	<textarea name="keyword_jp" rows="5" class="form-control"></textarea>
									</div>
									<div class="form-group">
								      	<label for="description">Description</label>
								      	<textarea name="description_jp" rows="5" class="form-control"></textarea>
									</div>
		                    	</div>
							</div>							
							<div class="row">
								<div class="col-md-12">
									<div class="box box-info">
						                <div class="box-header">
						                  	<h3 class="box-title">Nội dung</h3>
						                  	<div class="pull-right box-tools">
							                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
							                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
							                </div>
						                </div>
						                <div class="box-body pad">
						        			<textarea name="content_jp" id="txtContent" cols="50" rows="5"></textarea>
						        		</div>
						        	</div>						        	
								</div>
							</div>							
							
	                    	<div class="clearfix"></div>
	                	</div>
	                	
						<div class="tab-pane" id="tab_4">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
			                    	
		                    		<div class="form-group">
								      	<label for="txtTitle">Tên tiếng hàn</label>
								      	<input type="text" name="name_kr" id="name_kr" value=""  class="form-control" />
									</div>
									<div class="form-group hidden">
								      	<label for="alias">đường dẫn</label>
								      	<input type="text" name="alias_kr" id="alias_kr" value=""  class="form-control" />
									</div>
			                    	
									<div class="form-group">
								      	<label for="desc">Mô tả</label>
								      	<textarea name="mota_kr" rows="5" class="form-control"></textarea>
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
		                    		<div class="form-group">
								      	<label for="txtTitle">Title</label>
								      	<input type="text" name="title_kr" value=""  class="form-control" />
									</div>
		                    		<div class="form-group">
								      	<label for="keyword">Keyword</label>
								      	<textarea name="keyword_kr" rows="5" class="form-control"></textarea>
									</div>
									<div class="form-group">
								      	<label for="description">Description</label>
								      	<textarea name="description_kr" rows="5" class="form-control"></textarea>
									</div>
		                    	</div>
							</div>							
							<div class="row">
								<div class="col-md-12">
									<div class="box box-info">
						                <div class="box-header">
						                  	<h3 class="box-title">Nội dung</h3>
						                  	<div class="pull-right box-tools">
							                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
							                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
							                </div>
						                </div>
						                <div class="box-body pad">
						        			<textarea name="content_kr" id="txtContent" cols="50" rows="5"></textarea>
						        		</div>
						        	</div>						        	
								</div>
							</div>							
							
	                    	<div class="clearfix"></div>
	                	</div>
	                	<div class="tab-pane" id="tab_5">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
			                    	
		                    		<div class="form-group">
								      	<label for="txtTitle">Tên tiếng trung</label>
								      	<input type="text" name="name_chn" id="name_chn" value=""  class="form-control" />
									</div>
									<div class="form-group hidden">
								      	<label for="alias">đường dẫn</label>
								      	<input type="text" name="alias_chn" id="alias_chn" value=""  class="form-control" />
									</div>
			                    	
									<div class="form-group">
								      	<label for="desc">Mô tả</label>
								      	<textarea name="mota_chn" rows="5" class="form-control"></textarea>
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
		                    		<div class="form-group">
								      	<label for="txtTitle">Title</label>
								      	<input type="text" name="title_chn" value=""  class="form-control" />
									</div>
		                    		<div class="form-group">
								      	<label for="keyword">Keyword</label>
								      	<textarea name="keyword_chn" rows="5" class="form-control"></textarea>
									</div>
									<div class="form-group">
								      	<label for="description">Description</label>
								      	<textarea name="description_chn" rows="5" class="form-control"></textarea>
									</div>
		                    	</div>
							</div>							
							<div class="row">
								<div class="col-md-12">
									<div class="box box-info">
						                <div class="box-header">
						                  	<h3 class="box-title">Nội dung</h3>
						                  	<div class="pull-right box-tools">
							                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
							                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
							                </div>
						                </div>
						                <div class="box-body pad">
						        			<textarea name="content_chn" id="txtContent" cols="50" rows="5"></textarea>
						        		</div>
						        	</div>						        	
								</div>
							</div>							
							
	                    	<div class="clearfix"></div>
	                	</div> -->
	                </div>
	            </div>
	            <div class="clearfix"></div>

			    <div class="col-md-6">
			    	@if($_GET['type']=='tin-tuc')
			    	<div class="form-group">
					    <label>
				        	<input type="checkbox" name="noibat" >
				        	Tin hot
				    	</label>
					</div>
					@endif
			    	<div class="form-group hidden">
					      <label for="ten">Số thứ tự</label>
					      <input type="number" min="1" name="stt" value="{!! count($data)+1 !!}" class="form-control" style="width: 100px;">
				    </div>

				    <div class="form-group">
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
					    	<button type="button" onclick="javascript:window.location='backend/news?type={{ @$_GET[type] }}'" class="btn btn-danger">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</section><!-- /.content -->

@endsection()
