
$(document).ready(function (){
    $(".accordion").accordion({
        collapsible: true
    });

    $( ".datepicker, .datepickerCool" ).datepicker(

        {
        dateFormat: 'dd/mm/yy',
        minDate: -500,
        maxDate: 0

    });

                
 $('.cal').on('click', function(e) {
        var target = $(this).closest('.calendar').find('.datepicker');
        target.datepicker('show');
    });
                
});



           