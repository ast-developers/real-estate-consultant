$(document).ready(function () {

    // Click event of "Same as a Customer info" in Billing
    $('#same_customer_info').change(function () {
        copyCustomerInfo();
    });

    // Copy the Customer info to Billing Info on tab change
    $('.nav-tabs a').on('shown.bs.tab', function (event) {
        copyCustomerInfo();
    });

    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();

    // Form Validations
    $("#submitForm").validate({
        rules: {
            'customerInfo[first_name]': {
                required: true
            },
            'customerInfo[last_name]': {
                required: true
            },
            'customerInfo[mailing_address]': {
                required: true
            },
            'customerInfo[city]': {
                required: true
            },
            'customerInfo[state]': {
                required: true
            },
            'customerInfo[zip_code]': {
                required: true
            },
            'customerInfo[phone_number]': {
                required: true
            },
            'customerInfo[email]': {
                required: true,
                email: true
            },
            'billingInfo[first_name]': {
                required: true
            },
            'billingInfo[last_name]': {
                required: true
            },
            'billingInfo[mailing_address]': {
                required: true
            },
            'billingInfo[city]': {
                required: true
            },
            'billingInfo[state]': {
                required: true
            },
            'billingInfo[zip_code]': {
                required: true
            },
            'billingInfo[phone_number]': {
                required: true
            },
            'billingInfo[email]': {
                required: true,
                email: true
            },
            'terms':{
                required:true
            }


        }
    });

    /* This code handles all of the navigation stuff.
     ** Probably leave it. Credit to https://bootsnipp.com/snippets/featured/form-wizard-and-validation
     */
    var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    // Click Events of tab
    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');

            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    /*
     * Click event of Next button
     * Handles validating using jQuery validate.
     */
    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('ul.setup-panel li a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input,textarea"),
            isValid = true;

        //Loop through all inputs in this form group and validate them.
        for (var i = 0; i < curInputs.length; i++) {
            if (!$(curInputs[i]).valid()) {
                isValid = false;
            }
        }

        if (isValid) {
            //Progress to the next page.
            nextStepWizard.removeClass('disabled').trigger('click');

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            $active.next().addClass('active');
            $active.removeClass('active');

            nextTab($active);

        }
    });

    // Click event of Prev button
    $(".prev-step").click(function (e) {
        var $active = $('.wizard .nav-tabs li a.active');
        prevTab($active);
    });

    // Activate first tab
    $('ul.setup-panel li a.btn-primary').trigger('click');
});

// Function for copy Customer info to Billing Info
function copyCustomerInfo() {
    var tab = $(".tab-pane");
    var activeTab = $(".tab-pane.active ").find(".card-body");
    if ($('#same_customer_info').prop('checked')) {
        $(activeTab).find('#billingInfo_first_name').val(tab.find("#customerInfo_first_name").val());
        $(activeTab).find('#billingInfo_last_name').val(tab.find("#customerInfo_last_name").val());
        $(activeTab).find('#billingInfo_company_name').val(tab.find("#customerInfo_company_name").val());
        $(activeTab).find('#billingInfo_mailing_address').val(tab.find("#customerInfo_mailing_address").val());
        $(activeTab).find('#billingInfo_city').val(tab.find("#customerInfo_city").val());
        $(activeTab).find('#billingInfo_state').val(tab.find("#customerInfo_state").val());
        $(activeTab).find('#billingInfo_zip_code').val(tab.find("#customerInfo_zip_code").val());
        $(activeTab).find('#billingInfo_phone_number').val(tab.find("#customerInfo_phone_number").val());
        $(activeTab).find('#billingInfo_fax').val(tab.find("#customerInfo_fax").val());
        $(activeTab).find('#billingInfo_email').val(tab.find("#customerInfo_email").val());
    }
}

function nextTab(elem) {
    $(elem).closest('li.stepwizard-step').next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).closest('li.stepwizard-step').prev().find('a[data-toggle="tab"]').click();
}

