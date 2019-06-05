<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$lang = Session::get('locale');
	?>
	<div class="" style="width: 100%; max-width: 850px; margin: 0 auto; border: 1px solid #348dcc; ">
		<div class="header" style="text-align: center; background: #348dcc; padding: 1px; color: #fff;"><h3 style="text-transform: uppercase; margin-top: 5px; margin-bottom: 2px">Thông báo đơn hàng</h3></div>	
		<div class="content" style="padding: 10px;">
			<p>Chào admin,</p>
			<p>Bạn vừa nhận được một đơn hàng từ <a href="" title="">{{$email}}</a></p>			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-left:1px solid #dcdcdc;border-right:1px solid #dcdcdc">
				<tbody>
					<tr>
						<td colspan="2" align="center" style="font-family:Arial,Helvetica,sans-serif;background-color:#f2f2f2;padding:8px 20px;border-top:1px solid #dcdcdc"><span style="font-size:13px;color:#252525;font-weight:bold">THÔNG TIN CHI TIẾT ĐƠN HÀNG</span></td>
					</tr>
					<tr>
						<td width="39%" align="right" style="padding:8px 10px 8px 20px;font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;border-bottom:1px solid #dcdcdc"><span>Người mua:</span></td>
						<td align="left" style="padding:8px 20px 8px 10px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#2525253;border-bottom:1px solid #dcdcdc"><strong>{{$full_name}}</strong></td>
					</tr>
					<tr>
						<td width="39%" align="right" style="padding:8px 10px 8px 20px;font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;border-bottom:1px solid #dcdcdc"><span>Email:</span></td>
						<td align="left" style="padding:8px 20px 8px 10px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#2525253;border-bottom:1px solid #dcdcdc"><strong>{{$email}}</strong></td>
					</tr>
					<tr>
						<td width="39%" align="right" style="padding:8px 10px 8px 20px;font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;border-bottom:1px solid #dcdcdc"><span>Số điện thoại:</span></td>
						<td align="left" style="padding:8px 20px 8px 10px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#2525253;border-bottom:1px solid #dcdcdc"><strong>{{$phone}}</strong></td>
					</tr>
					<tr>
						<td width="39%" align="right" style="padding:8px 10px 8px 20px;font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;border-bottom:1px solid #dcdcdc"><span>Địa chỉ</span></td>
						<td align="left" style="padding:8px 20px 8px 10px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#2525253;border-bottom:1px solid #dcdcdc"><strong>{{$address}}</strong></td>
					</tr>
					<tr>
						<td align="right" style="padding:8px 10px 8px 20px;font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;border-bottom:1px solid #dcdcdc"><span>Tổng tiền:</span></td>
						<td align="left" style="padding:8px 20px 8px 10px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#2525253;border-bottom:1px solid #dcdcdc"><font color="#cc0000"><b>{{number_format($total)}} &nbsp;</b></font>{{ $lang =='vi' ? "VND" : "$" }}</td>
					</tr>									
										
			  	</tbody>
			</table>
				
			<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-left:1px solid #dcdcdc;border-right:1px solid #dcdcdc; margin-top: 30px;">
				<thead>
	            	<tr role="row">
	            		<th class="t" rowspan="1" colspan="1">Stt</th>
	            		<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Tên sản phẩm: activate to sort column ascending">Tên sản phẩm</th>
	            		
	            		<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Số lượng: activate to sort column ascending">Số lượng</th>
	            		<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Đơn giá: activate to sort column ascending">Đơn giá</th>
	            </thead>
	            <tbody>
	            	@foreach(json_decode($detail) as $k=>$item)
	            	<tr>	            		
	            		<td>{{$k + 1}}</td>	            			            		
	            		<td>{{$item->product_name}}</td>            			            		
	            		<td style="text-align: center;">{{$item->product_numb}}</td>
	            		<td>{{ number_format($item->product_price) }}</td>        			            		
	            	</tr>
	            	@endforeach
	            	
	            </tbody>
			</table>
		</div>
		
	</div>
</body>
</html>
