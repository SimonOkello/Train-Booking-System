
$(document).ready(function (){
    $(".accordion").accordion({
        collapsible: true
    });

    $( ".datepicker, .datepickerSecond" ).datepicker(

        {
        dateFormat: 'dd/mm/yy',
        minDate: 0,
        maxDate: 500

    });

                
 $('.cal').on('click', function(e) {
        var target = $(this).closest('.calendar').find('.datepicker');
        target.datepicker('show');
    });
                
});



           