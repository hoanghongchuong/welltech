$(document).ready(function($) {
    $('#btn-submit-form').on('click', function() {
        $('.content-box-form').show();
    });
    $('#myModal').modal('show');
    $('.form-post-register').on('submit', function() {
        console.log('da click');
        $('.btn-send').attr("disabled", true);
    });
    $('.form-change').on('change', function() {
        $('#filter_products').submit();
    });
    $('#form-post-order').on('submit', function() {
        console.log('da click');
        $('.btn-send-post-order').attr("disabled", true);
    });
    //caculator
    var trElement = '';
    var defaultHoursOnDay = 1;
    var defaultDaysOnWeek = 7;
    var defaultQuantity = 1;
    var defaultMinutesOnHour = '';
    var trIndex = -1;

    function bindData(appliance, quantity, watts, minutesOnHour, hoursOnDay, daysOnWeek) {
        var avgTotal = hoursOnDay;
        var total = 0;
        var maxHoursDay = watts * hoursOnDay;
        return '<tr class="row_item" index="' + trIndex + '">' + '<td><input type="text" name="appliance[' + trIndex + ']" value="' + appliance + '"></td>' + '<td><input type="number" min="0" name="quantity[' + trIndex + ']" value="' + quantity + '" class="changeable"></td>' + '<td><input type="number" min="0" name="watts[' + trIndex + ']" value="' + watts + '"  class="changeable"></td>' + '<td><input type="number" name="minutes_on_per_hour[' + trIndex + ']" min="0" max="60" value="' + minutesOnHour + '"  class="changeable"></td>' + '<td><input type="number" name="hours_on_per_day[' + trIndex + ']" min="0" max="24" value="' + hoursOnDay + '"  class="changeable"></td>' + '<td><input type="number" name="days_on_per_week[' + trIndex + ']" min="0" max="7" value="' + daysOnWeek + '"  class="changeable"></td>' + '<td><input type="text" name="avg_total[' + trIndex + ']" value="' + avgTotal + '" disabled="disabled"></td>' + '<td class="get_total" ><input type="text" name="total[' + trIndex + ']" value="' + maxHoursDay + '" disabled="disabled"></td>' + '<td><input type="button" class="delete-button action primary button small" name="delete-button" value="X"></td>' + '</tr>';
    }
    var defaultResult = {
        quantity: defaultQuantity,
        watts: 0,
        minutes_on_per_hour: defaultMinutesOnHour || 0,
        hours_on_per_day: defaultHoursOnDay,
        days_on_per_week: defaultDaysOnWeek
    };
    var result = {};
    // insert first element
    $('#add-row, .add-item').click(function() {
        trIndex++;
        result[trIndex] = defaultResult;
        var name = $(this).data('name') || '';
        var watt = $(this).data('watt') || '';
        result[trIndex].watts = watt;
        result[trIndex].quantity = defaultQuantity;
        $(bindData(name, defaultQuantity, watt, trIndex == 0 ? '' : defaultMinutesOnHour, trIndex == 0 ? '' : defaultHoursOnDay, trIndex == 0 ? '' : defaultDaysOnWeek)).insertBefore('#add-reset-row');
        calculateTotal()
    });
    $('#add-row').click();
    $('body').on('click', '.delete-button', function() {
        $(this).parents('tr').remove();
    });
    var resultTotalEnd = 0;
    $('body').on('keyup', ".changeable", function() {
        var currentIndex = parseInt($(this).parents('tr').attr('index'));
        result[currentIndex][$(this).attr('name').replace(/\[|\]|[0-9]/g, '')] = parseInt($(this).val()) || 0;
        var resultTotalEnd = result[currentIndex].watts * result[currentIndex].hours_on_per_day * result[currentIndex].quantity;
        $(this).parents('tr').find('.get_total input').val(resultTotalEnd);
        calculateTotal();
    });

    function calculateTotal() {
        var total = 0;
        $('body').find('.get_total input').each(function() {
            total += parseInt($(this).val() || 0);
            $('#total-max-watt-hours-per-day').val(total);
        })
    }
});