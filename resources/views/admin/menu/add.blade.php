@extends('admin.master')
@section('content')
@section('controller','Thêm '.$trang)
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
        	<form method="post" action="{!! route('admin.menu.postAdd') !!}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        		<input type="hidden" name="txtCom" value="{{ @$_GET['type'] }}"/>
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Tiếng việt</a></li>
	                  	<li><a href="#tab_2" data-toggle="tab" aria-expanded="true">Tiếng anh</a></li>
	                  	<li><a href="#tab_3" data-toggle="tab" aria-expanded="true">Tiếng nhật</a></li>
	                  	<li><a href="#tab_4" data-toggle="tab" aria-expanded="true">Tiếng hàn</a></li>
	                  	<li><a href="#tab_5" data-toggle="tab" aria-expanded="true">Tiếng trung</a></li>
	                </ul>
	                <div class="tab-content">
	                  	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
			                    	
						        	<div class="form-group">
								      	<label for="ten">Danh mục cha</label>
								      	<select name="txtmenu" class="form-control">

								      		<option value="0">Chọn danh mục</option>
								      		<?php cate_news_parent($parent); ?>
								      	</select>
									</div>
							    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
								      	<label for="ten">Tên</label>
								      	<input type="text" name="txtName" id="txtName" value=""  class="form-control" />
								      	@if ($errors->first('txtName')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
								      	@endif
									</div>
									<div class="form-group">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="txtAlias" id="" value="" class="form-control" />
									</div>
									<p>Link mặc định có sẵn của các mục chính: <b>san-pham</b>, <b>gioi-thieu</b>, <b>tin-tuc</b>, <b>lien-he</b></p>
									
								</div>
							</div>
							<div class="clearfix"></div>
	                  	</div><!-- /.tab-pane -->
	                  	<div class="tab-pane" id="tab_2">
	                  		<div class="row">
		                    	<div class="col-md-6 col-xs-12">			                    	
									<div class="clearfix"></div>
							    	<div class="form-group">
								      	<label for="ten">Tên</label>
								      	<input type="text" name="name_en" value=""  class="form-control" />
									</div>
									
									<p>Link mặc định có sẵn của các mục chính: <b>san-pham</b>, <b>gioi-thieu</b>, <b>tin-tuc</b>, <b>lien-he</b></p>
									
								</div>
	                    	</div>
	                	</div>
	                	<div class="tab-pane" id="tab_3">
	                  		<div class="row">
		                    	<div class="col-md-6 col-xs-12">			                    	
									<div class="clearfix"></div>
							    	<div class="form-group">
								      	<label for="ten">Tên</label>
								      	<input type="text" name="name_jp" value=""  class="form-control" />
									</div>
									
									<p>Link mặc định có sẵn của các mục chính: <b>san-pham</b>, <b>gioi-thieu</b>, <b>tin-tuc</b>, <b>lien-he</b></p>
									
								</div>
	                    	</div>
	                	</div>
	                	<div class="tab-pane" id="tab_4">
	                  		<div class="row">
		                    	<div class="col-md-6 col-xs-12">			                    	
									<div class="clearfix"></div>
							    	<div class="form-group">
								      	<label for="ten">Tên</label>
								      	<input type="text" name="name_kr" value=""  class="form-control" />
									</div>
									
									<p>Link mặc định có sẵn của các mục chính: <b>san-pham</b>, <b>gioi-thieu</b>, <b>tin-tuc</b>, <b>lien-he</b></p>
									
								</div>
	                    	</div>
	                	</div>
	                	<div class="tab-pane" id="tab_5">
	                  		<div class="row">
		                    	<div class="col-md-6 col-xs-12">			                    	
									<div class="clearfix"></div>
							    	<div class="form-group">
								      	<label for="ten">Tên</label>
								      	<input type="text" name="name_chn" value=""  class="form-control" />
									</div>
									
									<p>Link mặc định có sẵn của các mục chính: <b>san-pham</b>, <b>gioi-thieu</b>, <b>tin-tuc</b>, <b>lien-he</b></p>
									
								</div>
	                    	</div>
	                	</div>
	                </div><!-- /.tab-content -->
	            </div>
	            <div class="clearfix"></div>
			    <div class="col-md-6">
			    	<div class="form-group">
					      <label for="ten">Số thứ tự</label>
					      <input type="number" min="1" name="stt" value="{!! isset($data->status) ? $data->stt : (count($parent)+1) !!}" class="form-control" style="width: 100px;">
				    </div>
				    
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
				    	<button type="button" onclick="javascript:window.location='backend/menu?type={{ @$_GET[type] }}'" class="btn btn-danger">Thoát</button>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /box -->
    
</section><!-- /.content -->
@endsection()
