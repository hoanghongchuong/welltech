@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $products = \App\Products::where('com','san-pham')->get();
    // dd($products);
?>
<div class="load-caculator solar-calculator-wrapper">
	<div class="container">
		<div class="row">
			<div id="load-calc-wrap table-responsive">
			    <table id="load-calc" class="table">
			        <thead>
				        <tr>
				            <th>Appliance</th>
				            <th>Quantity</th>
				            <th>Watts</th>
				            <th>Minutes On/Hour</th>
				            <th>Hours On/Day</th>
				            <th>Days On/Week</th>
				            <th>Average Watt Hours/Day</th>
				            <th>Max Watt Hours/Day</th>
				            <th>&nbsp;</th>
				        </tr>
				    </thead>
			        <tbody id="tr-content">
				        
				        <!-- <tr>
				            <td><input type="text" name="appliance"></td>
				            <td><input type="number" min="0" name="quantity"></td>
				            <td><input type="number" min="0" name="watts"></td>
				            <td><input type="number" name="minutes-on-per-hour" min="0" max="60"></td>
				            <td><input type="number" name="hours-on-per-day" min="0" max="24"></td>
				            <td><input type="number" name="days-on-per-week" min="0" max="7"></td>
				            <td><input type="text" name="avg-total" value="0" disabled="disabled"></td>
				            <td><input type="text" name="total" value="0" disabled="disabled"></td>
				            <td><input type="button" class="delete-button action primary button small" name="delete-button" value="X">
				            </td>
				        </tr> -->
				        <tr id="add-reset-row">
				            <td colspan="1">
				                <input class="button-control action primary button small" id="add-row" type="button" value="Add Appliance"><br>
				                <input class="button-control action primary button small" id="add-row-from-load-chart" type="button" value="Add Appliance from Load Chart"><br>
				                <input class="button-control action primary button small" id="reset-all" value="Reset" type="reset"> <br>
				            </td>
				            <td colspan="6">
				                Total Average Watt-Hours/Day: <input id="total-average-watt-hours-per-day" type="text" value="0" readonly=""><br>
				                Total Max Watt-Hours/Day: <input id="total-max-watt-hours-per-day" type="text" value="0" readonly=""><br>
				            </td>
				        </tr>
			        </tbody>
				</table>
			</div>
			<div class="solar-calculator-items">
				<div class="header-calculator">
					<div class="col-md-4">
						<div class="pull-left"><span class="title-pro">Appliance</span></div>
						<div class="pull-right"><span class="title-pro">Watts</span></div>
					</div>
					<div class="col-md-4">
						<div class="pull-left"><span class="title-pro">Appliance</span></div>
						<div class="pull-right"><span class="title-pro">Watts</span></div>
					</div>
					<div class="col-md-4">
						<div class="pull-left"><span class="title-pro">Appliance</span></div>
						<div class="pull-right"><span class="title-pro">Watts</span></div>
					</div>
				</div>

				@foreach($products as $item)
				<div class="col-md-4 col-lg-4 box-item">
					<div class="info-item">
						<div class="pull-left">
							<input type="button" class="action primary button small solar-calculator-items add-item" value="+" data-name="{{ $item->name_vi }}" data-watt="{{$item->id}}"> <span class="appliance-name">{{$item->name_vi}}</span>
						</div>						
						<div class="pull-right">{{$item->id}}</div>
					</div>					
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection