@extends('admin.master')
@section('content')
@section('controller','Danh mục '.$trang)
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
        	
        	<form name="frmAdd" method="post" action="{!! route('admin.newscate.postAdd') !!}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
	      		<input type="hidden" name="txtCom" value="{{ @$_GET['type'] }}"/>
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
		                  			<!-- <div class="form-group col-md-12 @if ($errors->first('fImages')!='') has-error @endif">
										<label for="file">File ảnh</label>
								     	<input type="file" id="file" name="fImages" >
								    	<p class="help-block">Width:800px - Height: 326px</p>
								    	@if ($errors->first('fImages')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
								      	@endif
									</div> -->
								<div class="form-group col-md-12 @if ($errors->first('fImagesBg')!='') has-error @endif">
									<label for="file">File background</label>
							     	<input type="file" id="file" name="fImagesBg" >
							    	<p class="help-block">Width:225px - Height: 162px</p>
							    	@if ($errors->first('fImagesBg')!='')
							      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImagesBg'); !!}</label>
							      	@endif
								</div>
		                    	<div class="form-group">
							      	<label for="ten">Danh mục cha</label>
							      	<select name="txtNewsCate" class="form-control">
							      		<option value="0">Chọn danh mục</option>
							      		<?php cate_news_parent($parent); ?>
							      	</select>
								</div>
									<div class="clearfix"></div>
							    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
								      	<label for="ten">Tên tiếng việt</label>
								      	<input type="text" name="txtName" id="txtName" value=""  class="form-control" />
								      	@if ($errors->first('txtName')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
								      	@endif
									</div>
									<div class="form-group @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="txtAlias" id="txtAlias" value=""  class="form-control" />
								      	@if ($errors->first('txtAlias')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtAlias'); !!}</label>
								      	@endif
									</div>
									
									<div class="form-group">
								      	<label for="mota">Mô tả</label>
								      	<textarea name="mota_vi" rows="5" class="form-control"></textarea>
									</div>
									
									<input type="hidden" name="txtCom" value="{{ @$_GET['type'] }}"/>
								</div>
								<!-- <div class="col-md-6 col-xs-12">
									<div class="col-md-6 col-xs-12">
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
									</div>
								</div> -->

								<div class="col-md-6 col-xs-12">
		                    		<div class="form-group">
								      	<label for="txtTitle">Title</label>
								      	<input type="text" name="txtTitle" value=""  class="form-control" />
									</div>
		                    		<div class="form-group">
								      	<label for="keyword">Keyword</label>
								      	<textarea name="txtKeyword" rows="5" class="form-control"></textarea>
									</div>
									<div class="form-group">
								      	<label for="description">Description</label>
								      	<textarea name="txtDescription" rows="5" class="form-control"></textarea>
									</div>
		                    	</div>
							</div>
							
							<div class="row">
						    	<div class="col-md-12">
						    		<div class="form-group">
									    <label>
								        	<input type="checkbox" name="status" checked="checked"> Hiển thị
								    	</label>
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
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="txtAlias_en" id="txtAlias_en" value=""  class="form-control" />
									</div>
									
									<div class="form-group">
								      	<label for="mota">Mô tả</label>
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
								<div class="col-md-6 col-xs-12">
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
							</div>
							<!-- <div class="row">
						    	<div class="col-md-12">
						    		<div class="form-group">
									    <label>
								        	<input type="checkbox" name="status_en" checked="checked"> Hiển thị
								    	</label>
								    </div>
						    	</div>
						    </div> -->
							<div class="clearfix"></div>
	                  	</div>
	                  	<div class="tab-pane" id="tab_3">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
		                  			<div class="form-group">
								      	<label for="txtTitle">Tên tiếng nhật</label>
								      	<input type="text" name="name_jp" id="name_jp" value=""  class="form-control" />
									</div>
									<div class="form-group hidden">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="txtAlias_jp" id="txtAlias_jp" value=""  class="form-control" />
									</div>									
									<div class="form-group">
								      	<label for="mota">Mô tả</label>
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
								<div class="col-md-6 col-xs-12">
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
							</div>
							<!-- <div class="row">
						    	<div class="col-md-12">
						    		<div class="form-group">
									    <label>
								        	<input type="checkbox" name="status_en" checked="checked"> Hiển thị
								    	</label>
								    </div>
						    	</div>
						    </div> -->
							<div class="clearfix"></div>
	                  	</div>
	                  	<div class="tab-pane" id="tab_4">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
		                  			<div class="form-group">
								      	<label for="txtTitle">Tên tiếng hàn</label>
								      	<input type="text" name="name_kr" id="name_kr" value=""  class="form-control" />
									</div>
									<div class="form-group ">
								      	<label for="alias hidden">Đường dẫn tĩnh</label>
								      	<input type="text" name="txtAlias_kr" id="txtAlias_kr" value=""  class="form-control" />
									</div>									
									<div class="form-group">
								      	<label for="mota">Mô tả</label>
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
								<div class="col-md-6 col-xs-12">
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
							</div>
							<!-- <div class="row">
						    	<div class="col-md-12">
						    		<div class="form-group">
									    <label>
								        	<input type="checkbox" name="status_en" checked="checked"> Hiển thị
								    	</label>
								    </div>
						    	</div>
						    </div> -->
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
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="txtAlias_chn" id="txtAlias_chn" value=""  class="form-control" />
									</div>									
									<div class="form-group">
								      	<label for="mota">Mô tả</label>
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
								<div class="col-md-6 col-xs-12">
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
							</div>
							<!-- <div class="row">
						    	<div class="col-md-12">
						    		<div class="form-group">
									    <label>
								        	<input type="checkbox" name="status_en" checked="checked"> Hiển thị
								    	</label>
								    </div>
						    	</div>
						    </div> -->
							<div class="clearfix"></div>
	                  	</div>
	                </div><!-- /.tab-content -->
	            </div>
	            <div class="clearfix"></div>
			    <div class="col-md-6">
			    	<div class="form-group">
					    <label for="ten">Số thứ tự</label>
					    <input type="number" min="1" name="stt" value="{!! count($parent)+1 !!}" class="form-control" style="width: 100px;">
				    </div>			    	
			    </div>
			    <div class="clearfix"></div>
			    
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Lưu</button>
					    	<button type="button" onclick="javascript:window.location='backend/newscate?type={{ @$_GET[type] }}'" class="btn btn-danger">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</section><!-- /.content -->
@endsection()
