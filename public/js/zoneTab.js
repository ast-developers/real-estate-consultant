$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();


    $('#submitForm').validate({ // initialize the plugin
        ignore: '',
        errorPlacement: function(error, element) {
            element.closest('.form-group').after(error);
        },
        rules: {
            'terms': {
                required: true,
            }
        },
        messages: {
            'terms': {
                required: "You must agree Terms and Conditions ",
            }
        },
        submitHandler: function(form) {

            console.log('test');
            form.submit();
            return false;
        },
    });

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        $active.next().addClass('active');
        $active.removeClass('active');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.prev().removeClass('disabled');
        $active.prev().addClass('active');
        $active.removeClass('active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}