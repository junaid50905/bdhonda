var ComponentsPickers = function () {

    var handleDatePickers = function () {

        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl: Metronic.isRTL(),
                autoclose: true,
                format: 'yyyy-mm-dd',
                todayHighlight: true,
            });
            //$('body').removeClass("modal-open"); // fix bug when inline picker is used in modal
        }
    }

    var handleColorPicker = function () {
        if (!jQuery().colorpicker) {
            return;
        }
        $('.colorpicker-default').colorpicker({
            format: 'hex'
        });
        $('.colorpicker-rgba').colorpicker();
    }


    return {
        //main function to initiate the module
        init: function () {
            handleDatePickers();
            handleColorPicker();
        }
    };

}();