$(document).ready(function($){
	$('#btn-submit-form').on('click', function(){
		$('.content-box-form').show();
    });
    $('#myModal').modal('show');

    $('.form-post-register').on('submit', function(){
        console.log('da click');
        $('.btn-send').attr("disabled", true);
    });

    $('.form-change').on('change', function(){
    	$('#filter_products').submit();
  	});

    $('#form-post-order').on('submit', function(){
        console.log('da click');
        $('.btn-send-post-order').attr("disabled", true);
    });


    //caculator
    var trElement = '';
    var defaultHoursOnDay = 1;
    var defaultDaysOnWeek = 7;
    var defaultQuantity = 1;
    var defaultMinutesOnHour = '';
    var trIndex = 0;
    
    function bindData(appliance, quantity, watts, minutesOnHour, hoursOnDay, daysOnWeek) {
        var avgTotal = hoursOnDay;
        var total = 0;
        trIndex ++;
        var maxHoursDay = watts * hoursOnDay;
        return '<tr class="row_item">'+
                    '<td><input type="text" name="appliance['+ trIndex +']" value="'+ appliance +'"></td>'+
                    '<td><input type="number" min="0" name="quantity['+ trIndex +']" value="' + quantity + '" class="quantity"></td>' +
                    '<td><input type="number" min="0" name="watts['+ trIndex +']" value="'+ watts +'" class="watt"></td>' +
                    '<td><input type="number" name="minutes_on_per_hour['+ trIndex +']" min="0" max="60" value="'+ minutesOnHour +'"></td>' +
                    '<td><input type="number" name="hours_on_per_day['+ trIndex +']" min="0" max="24" value="' + hoursOnDay + '" class="hoursOnDay"></td>' +
                    '<td><input type="number" name="days_on_per_week['+ trIndex +']" min="0" max="7" value="' + daysOnWeek + '"></td>' +
                    '<td><input type="text" name="avg_total['+ trIndex +']" value="'+avgTotal+'" disabled="disabled"></td>' +
                    '<td class="get_total" ><input type="text" name="total['+ trIndex +']" value="'+ maxHoursDay +'" disabled="disabled"></td>' +
                    '<td><input type="button" class="delete-button action primary button small" name="delete-button" value="X"></td>'+
                '</tr>';
    }
    // insert first element
    $('#add-row, .add-item').click(function() {
        var name = $(this).data('name') || '';
        var watt = $(this).data('watt') || '';
        $(bindData(name, defaultQuantity, watt, trIndex == 0 ? '' : defaultMinutesOnHour, trIndex == 0 ? '' :  defaultHoursOnDay, trIndex == 0 ? '' :  defaultDaysOnWeek)).insertBefore('#add-reset-row');
        totalMaxWatts();
    });
    $('#add-row').click();
    $('body').on('click', '.delete-button', function() {
        $(this).parents('tr').remove();        
        totalMaxWatts();
    });
    // get total watts
    function totalMaxWatts() {
        var total = 0;        
        $('.row_item').each(function(key, elm){            
           var max_watt = $(elm).find('.get_total input').val();           
           total += parseInt(max_watt);
           $('.setWatt').val(total); 
        });
    }
    $('body').on('keyup', '.quantity', function() {
        var quantity = $(this).val();
        var watt = $(this).parents('tr').find('.watt').val() || 0;
        var hoursOnDay = $(this).parents('tr').find('.hoursOnDay').val();        
        var result = quantity * watt * hoursOnDay;
        $(this).parents('tr').find('.get_total input').val(result);
        totalMaxWatts();
    });
    $('body').on('keyup', '.watt', function() {
        var watt = $(this).val();
        var quantity = $(this).parents('tr').find('.quantity').val() || 0;
        var hoursOnDay = $(this).parents('tr').find('.hoursOnDay').val();        
        var result = quantity * watt * hoursOnDay;
        $(this).parents('tr').find('.get_total input').val(result);
        totalMaxWatts();
    });
    $('body').on('keyup', '.hoursOnDay', function() {
        var hoursOnDay = $(this).val();
        var quantity = $(this).parents('tr').find('.quantity').val() || 0;
        var watt = $(this).parents('tr').find('.watt').val();        
        var result = quantity * watt * hoursOnDay;
        $(this).parents('tr').find('.get_total input').val(result);
        totalMaxWatts();
    });
});