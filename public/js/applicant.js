$('.disability').on('change', function() {
    if ($(this).val() == 4) {
        $(this).after("<input type='text' placeholder='Please specifiy here...' class='form-control disability-others mt-2 !text-xs !py-2.5 !text-gray-500 border-light-emphasis'\
                                    id='inputEmail4'>");

    } else {
        $(this).next().remove();
    }
});

$('.employed').on('change', function() {
    if ($('.employed').is(':checked')) {
        $('.employed-status').removeClass('d-none');
        if (!$('.unemployed-status').hasClass('d-none')) {
            $('.unemployed-status').addClass('d-none');
        }
    }
});

$('.unemployed').on('change', function() {
    if ($('.unemployed').is(':checked')) {
        $('.unemployed-status').removeClass('d-none');
        if (!$('.employed-status').hasClass('d-none')) {
            $('.employed-status').addClass('d-none');
        }
    }
});



$('.yes_actively_looking_for_work').on('change', function() {
    if ($('.yes_actively_looking_for_work').is(':checked')) {
        $('.is_actively_looking_for_work').removeClass('d-none');
    }
});

$('.not_actively_looking_for_work').on('change', function() {
    if ($('.not_actively_looking_for_work').is(':checked')) {
        $('.is_actively_looking_for_work').addClass('d-none');
    }
});

$('.yes_when_to_work').on('change', function() {
    if ($('.yes_when_to_work').is(':checked')) {
        $('.is_not_when_to_work').addClass('d-none');
    }
});

$('.no_when_to_work').on('change', function() {
    if ($('.no_when_to_work').is(':checked')) {
        $('.is_not_when_to_work').removeClass('d-none');
    }
});

$('.yes_4ps_beneficiary').on('change', function() {
    if ($('.yes_4ps_beneficiary').is(':checked')) {
        $('.is_4ps_beneficiary').removeClass('d-none');
    }
});

$('.no_4ps_beneficiary').on('change', function() {
    if ($('.no_4ps_beneficiary').is(':checked')) {
        $('.is_4ps_beneficiary').addClass('d-none');
    }
});

$('.unemployed-status-select').on('change', function() {
    if ($(this).val() == 7) {
        $(this).after("<input type='text' placeholder='Please specifiy here...' class='form-control mt-2 !text-xs !py-2.5 !text-gray-500 border-light-emphasis'\
                                    id='inputEmail4'>");
    } else {
        $(this).next().remove();
    }

});

$('.local_preferred_work_location').on('change', function() {
    if ($(this).is(':checked')) {
        $('.islocal_preferred_work_location').removeAttr('disabled');
    }

});

$('.overseas_preferred_work_location').on('change', function() {
    if ($(this).is(':checked')) {
        $('.isoverseas_preferred_work_location').removeAttr('disabled');
    }

});

var my_handlers = {

    fill_pob_provinces: function() {

        var region_code = $(this).val();
        $('.pob_province').ph_locations('fetch_list', [{
            "region_code": region_code
        }]);
    },

    fill_pob_cities: function() {

        var province_code = $(this).val();
        $('.pob_city').ph_locations('fetch_list', [{
            "province_code": province_code
        }]);
    },


    fill_pob_barangays: function() {

        var city_code = $(this).val();
        $('.pob_barangay').ph_locations('fetch_list', [{
            "city_code": city_code
        }]);
    },

    fill_pa_provinces: function() {

        var region_code = $(this).val();
        $('.pob_province').ph_locations('fetch_list', [{
            "region_code": region_code
        }]);
    },

    fill_pa_cities: function() {

        var province_code = $(this).val();
        $('.pa_city').ph_locations('fetch_list', [{
            "province_code": province_code
        }]);
    },


    fill_pa_barangays: function() {

        var city_code = $(this).val();
        $('.pa_barangay').ph_locations('fetch_list', [{
            "city_code": city_code
        }]);
    }
};

$(function() {
    $('.pob_province').on('change', my_handlers.fill_pob_cities);
    $('.pob_city').on('change', my_handlers.fill_pob_barangays);

    $('.pob_province').ph_locations({
        'location_type': 'provinces'
    });
    $('.pob_city').ph_locations({
        'location_type': 'cities'
    });
    $('.pob_barangay').ph_locations({
        'location_type': 'barangays'
    });

    $('.pob_province').ph_locations('fetch_list');

    $('.pa_province').on('change', my_handlers.fill_pa_cities);
    $('.pa_city').on('change', my_handlers.fill_pa_barangays);

    $('.pa_province').ph_locations({
        'location_type': 'provinces'
    });
    $('.pa_city').ph_locations({
        'location_type': 'cities'
    });
    $('.pa_barangay').ph_locations({
        'location_type': 'barangays'
    });

    $('.pa_province').ph_locations('fetch_list');

});



// 

var count = 9;
console.log(count);
// counter
var counter = () => {
    switch (count) {
        case 1:
            $('.button-1').removeClass('d-none');
            $('.button-1').addClass('d-block');
            $('.next-button').removeClass('d-none');
            $('.next-button').addClass('d-flex');
            $('.prev-button').addClass('d-none');
            $('.submit-button').addClass('d-none');
            $('.step-1').removeClass('d-none');
            $('.step-1').addClass('d-block');
            $('.step-2').addClass('d-none');
            $('.step-3').addClass('d-none');
            $('.step-4').addClass('d-none');
            $('.step-5').addClass('d-none');
            $('.step-6').addClass('d-none');
            $('.step-7').addClass('d-none');
            $('.step-8').addClass('d-none');
            $('.step-9').addClass('d-none');
            $('.step-10').addClass('d-none');
            $('.nav-1').removeClass('!text-gray-400');
            $('.nav-1').addClass('text-pink-400');
            $('.nav-2').addClass('!text-gray-400');
            $('.nav-3').addClass('!text-gray-400');
            $('.nav-4').addClass('!text-gray-400');
            $('.nav-5').addClass('!text-gray-400');
            $('.nav-6').addClass('!text-gray-400');
            $('.nav-7').addClass('!text-gray-400');
            $('.nav-8').addClass('!text-gray-400');
            $('.nav-9').addClass('!text-gray-400');
            $('.nav-10').addClass('!text-gray-400');
            $('.counter-1').removeClass('!text-gray-500');
            $('.counter-1').addClass('text-pink-500');
            $('.counter-1').attr('style', 'border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;');
            $('.counter-2').addClass('!text-gray-500');
            $('.counter-2').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-3').addClass('!text-gray-500');
            $('.counter-3').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-4').addClass('!text-gray-500');
            $('.counter-4').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-5').addClass('!text-gray-500');
            $('.counter-5').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-6').addClass('!text-gray-500');
            $('.counter-6').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-7').addClass('!text-gray-500');
            $('.counter-7').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-8').addClass('!text-gray-500');
            $('.counter-8').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-9').addClass('!text-gray-900');
            $('.counter-9').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-10').addClass('!text-gray-900');
            $('.counter-10').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            break;
        
        case 2:
            $('.button-1').addClass('d-none');
            $('.button-1').removeClass('d-block');
            $('.next-button').removeClass('d-none');
            $('.next-button').addClass('d-flex');
            $('.prev-button').removeClass('d-none');
            $('.prev-button').addClass('d-flex');
            $('.submit-button').addClass('d-none');
            $('.step-1').removeClass('d-block');
            $('.step-1').addClass('d-none');
            $('.step-2').removeClass('d-none');
            $('.step-2').addClass('d-block');
            $('.step-3').addClass('d-none');
            $('.step-4').addClass('d-none');
            $('.step-5').addClass('d-none');
            $('.step-6').addClass('d-none');
            $('.step-7').addClass('d-none');
            $('.step-8').addClass('d-none');
            $('.step-9').addClass('d-none');
            $('.step-10').addClass('d-none');
            $('.nav-1').removeClass('!text-gray-400');
            $('.nav-1').addClass('text-pink-400');
            $('.nav-2').addClass('!text-gray-400');
            $('.nav-3').addClass('!text-gray-400');
            $('.nav-4').addClass('!text-gray-400');
            $('.nav-5').addClass('!text-gray-400');
            $('.nav-6').addClass('!text-gray-400');
            $('.nav-7').addClass('!text-gray-400');
            $('.nav-8').addClass('!text-gray-400');
            $('.nav-9').addClass('!text-gray-400');
            $('.nav-10').addClass('!text-gray-400');
            $('.counter-1').removeClass('!text-gray-500');
            $('.counter-1').addClass('text-pink-500');
            $('.counter-1').attr('style', 'border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;');
            $('.counter-2').addClass('!text-gray-500');
            $('.counter-2').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-3').addClass('!text-gray-500');
            $('.counter-3').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-4').addClass('!text-gray-500');
            $('.counter-4').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-5').addClass('!text-gray-500');
            $('.counter-5').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-6').addClass('!text-gray-500');
            $('.counter-6').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-7').addClass('!text-gray-500');
            $('.counter-7').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-8').addClass('!text-gray-500');
            $('.counter-8').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-9').addClass('!text-gray-900');
            $('.counter-9').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-10').addClass('!text-gray-900');
            $('.counter-10').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            break;
        case 3:
            $('.button-1').addClass('d-none');
            $('.button-1').removeClass('d-block');
            $('.next-button').removeClass('d-none');
            $('.next-button').addClass('d-flex');
            $('.prev-button').removeClass('d-none');
            $('.prev-button').addClass('d-flex');
            $('.submit-button').addClass('d-none');
            $('.step-1').removeClass('d-block');
            $('.step-1').addClass('d-none');
            $('.step-2').removeClass('d-block');
            $('.step-2').addClass('d-none');
            $('.step-3').removeClass('d-none');
            $('.step-3').addClass('d-block');
            $('.step-4').addClass('d-none');
            $('.step-5').addClass('d-none');
            $('.step-6').addClass('d-none');
            $('.step-7').addClass('d-none');
            $('.step-8').addClass('d-none');
            $('.step-9').addClass('d-none');
            $('.step-10').addClass('d-none');
            $('.nav-1').removeClass('text-pink-400');
            $('.nav-1').addClass('!text-gray-400');
            $('.nav-2').removeClass('!text-gray-400');
            $('.nav-2').addClass('text-pink-400');
            $('.nav-3').addClass('!text-gray-400');
            $('.nav-4').addClass('!text-gray-400');
            $('.nav-5').addClass('!text-gray-400');
            $('.nav-6').addClass('!text-gray-400');
            $('.nav-7').addClass('!text-gray-400');
            $('.nav-8').addClass('!text-gray-400');
            $('.counter-1').removeClass('text-pink-500');
            $('.counter-1').addClass('!text-gray-500');
            $('.counter-1').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-2').removeClass('!text-gray-500');
            $('.counter-2').addClass('text-pink-500');
            $('.counter-2').attr('style', 'border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;');
            $('.counter-3').addClass('!text-gray-500');
            $('.counter-3').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-4').addClass('!text-gray-500');
            $('.counter-4').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-5').addClass('!text-gray-500');
            $('.counter-5').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-6').addClass('!text-gray-500');
            $('.counter-6').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-7').addClass('!text-gray-500');
            $('.counter-7').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-8').addClass('!text-gray-500');
            $('.counter-8').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-9').addClass('!text-gray-900');
            $('.counter-9').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-10').addClass('!text-gray-900');
            $('.counter-10').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            break;
        case 4:
            $('.button-1').addClass('d-none');
            $('.button-1').removeClass('d-block');
            $('.next-button').removeClass('d-none');
            $('.next-button').addClass('d-flex');
            $('.prev-button').removeClass('d-none');
            $('.prev-button').addClass('d-flex');
            $('.submit-button').addClass('d-none');
            $('.step-1').removeClass('d-block');
            $('.step-1').addClass('d-none');
            $('.step-2').removeClass('d-block');
            $('.step-2').addClass('d-none');
            $('.step-3').removeClass('d-block');
            $('.step-3').addClass('d-none');
            $('.step-4').removeClass('d-none');
            $('.step-4').addClass('d-block');
            $('.step-5').addClass('d-none');
            $('.step-6').addClass('d-none');
            $('.step-7').addClass('d-none');
            $('.step-8').addClass('d-none');
            $('.step-9').addClass('d-none');
            $('.step-10').addClass('d-none');
            $('.nav-1').removeClass('text-pink-400');
            $('.nav-1').addClass('!text-gray-400');
            $('.nav-2').removeClass('text-pink-400');
            $('.nav-2').addClass('!text-gray-400');
            $('.nav-3').removeClass('!text-gray-400');
            $('.nav-3').addClass('text-pink-400');
            $('.nav-4').addClass('!text-gray-400');
            $('.nav-5').addClass('!text-gray-400');
            $('.nav-6').addClass('!text-gray-400');
            $('.nav-7').addClass('!text-gray-400');
            $('.nav-8').addClass('!text-gray-400');
            $('.counter-1').removeClass('text-pink-500');
            $('.counter-1').addClass('!text-gray-500');
            $('.counter-1').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-2').removeClass('text-pink-500');
            $('.counter-2').addClass('!text-gray-500');
            $('.counter-2').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-3').removeClass('!text-gray-500');
            $('.counter-3').addClass('text-pink-500');
            $('.counter-3').attr('style', 'border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;');
            $('.counter-4').addClass('!text-gray-500');
            $('.counter-4').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-5').addClass('!text-gray-500');
            $('.counter-5').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-6').addClass('!text-gray-500');
            $('.counter-6').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-7').addClass('!text-gray-500');
            $('.counter-7').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-8').addClass('!text-gray-500');
            $('.counter-8').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-9').addClass('!text-gray-900');
            $('.counter-9').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-10').addClass('!text-gray-900');
            $('.counter-10').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            break;
        case 5:
            $('.button-1').addClass('d-none');
            $('.button-1').removeClass('d-block');
            $('.next-button').removeClass('d-none');
            $('.next-button').addClass('d-flex');
            $('.prev-button').removeClass('d-none');
            $('.prev-button').addClass('d-flex');
            $('.submit-button').addClass('d-none');
            $('.step-1').removeClass('d-block');
            $('.step-1').addClass('d-none');
            $('.step-2').removeClass('d-block');
            $('.step-2').addClass('d-none');
            $('.step-3').removeClass('d-block');
            $('.step-3').addClass('d-none');
            $('.step-4').removeClass('d-block');
            $('.step-4').addClass('d-none');
            $('.step-5').removeClass('d-none');
            $('.step-5').addClass('d-block');
            $('.step-6').addClass('d-none');
            $('.step-7').addClass('d-none');
            $('.step-8').addClass('d-none');
            $('.step-9').addClass('d-none');
            $('.step-10').addClass('d-none');
            $('.nav-1').removeClass('text-pink-400');
            $('.nav-1').addClass('!text-gray-400');
            $('.nav-2').removeClass('text-pink-400');
            $('.nav-2').addClass('!text-gray-400');
            $('.nav-3').removeClass('text-pink-400');
            $('.nav-3').addClass('!text-gray-400');
            $('.nav-4').removeClass('!text-gray-400');
            $('.nav-4').addClass('text-pink-400');
            $('.nav-5').addClass('!text-gray-400');
            $('.nav-6').addClass('!text-gray-400');
            $('.nav-7').addClass('!text-gray-400');
            $('.nav-8').addClass('!text-gray-400');
            $('.counter-1').removeClass('text-pink-500');
            $('.counter-1').addClass('!text-gray-500');
            $('.counter-1').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-2').removeClass('text-pink-500');
            $('.counter-2').addClass('!text-gray-500');
            $('.counter-2').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-3').removeClass('text-pink-500');
            $('.counter-3').addClass('!text-gray-500');
            $('.counter-3').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-4').removeClass('!text-gray-500');
            $('.counter-4').addClass('text-pink-500');
            $('.counter-4').attr('style', 'border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;');
            $('.counter-5').addClass('!text-gray-500');
            $('.counter-5').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-6').addClass('!text-gray-500');
            $('.counter-6').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-7').addClass('!text-gray-500');
            $('.counter-7').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-8').addClass('!text-gray-500');
            $('.counter-8').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-9').addClass('!text-gray-900');
            $('.counter-9').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-10').addClass('!text-gray-900');
            $('.counter-10').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            break;
        case 6:
            $('.button-1').addClass('d-none');
            $('.button-1').removeClass('d-block');
            $('.next-button').removeClass('d-none');
            $('.next-button').addClass('d-flex');
            $('.prev-button').removeClass('d-none');
            $('.prev-button').addClass('d-flex');
            $('.submit-button').addClass('d-none');
            $('.step-1').removeClass('d-block');
            $('.step-1').addClass('d-none');
            $('.step-2').removeClass('d-block');
            $('.step-2').addClass('d-none');
            $('.step-3').removeClass('d-block');
            $('.step-3').addClass('d-none');
            $('.step-4').removeClass('d-block');
            $('.step-4').addClass('d-none');
            $('.step-5').removeClass('d-block');
            $('.step-5').addClass('d-none');
            $('.step-6').removeClass('d-none');
            $('.step-6').addClass('d-block');
            $('.step-7').addClass('d-none');
            $('.step-8').addClass('d-none');
            $('.step-9').addClass('d-none');
            $('.step-10').addClass('d-none');
            $('.nav-1').removeClass('text-pink-400');
            $('.nav-1').addClass('!text-gray-400');
            $('.nav-2').removeClass('text-pink-400');
            $('.nav-2').addClass('!text-gray-400');
            $('.nav-3').removeClass('text-pink-400');
            $('.nav-3').addClass('!text-gray-400');
            $('.nav-4').removeClass('text-pink-400');
            $('.nav-4').addClass('!text-gray-400');
            $('.nav-5').removeClass('!text-gray-400');
            $('.nav-5').addClass('text-pink-500');
            $('.nav-6').addClass('!text-gray-400');
            $('.nav-7').addClass('!text-gray-400');
            $('.nav-8').addClass('!text-gray-400');
            $('.counter-1').removeClass('text-pink-500');
            $('.counter-1').addClass('!text-gray-500');
            $('.counter-1').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-2').removeClass('text-pink-500');
            $('.counter-2').addClass('!text-gray-500');
            $('.counter-2').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-3').removeClass('text-pink-500');
            $('.counter-3').addClass('!text-gray-500');
            $('.counter-3').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-4').removeClass('text-pink-500');
            $('.counter-4').addClass('!text-gray-500');
            $('.counter-4').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-5').removeClass('!text-gray-500');
            $('.counter-5').addClass('text-pink-500');
            $('.counter-5').attr('style', 'border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;');
            $('.counter-6').addClass('!text-gray-500');
            $('.counter-6').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-7').addClass('!text-gray-500');
            $('.counter-7').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-8').addClass('!text-gray-500');
            $('.counter-8').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-9').addClass('!text-gray-900');
            $('.counter-9').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-10').addClass('!text-gray-900');
            $('.counter-10').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            break;
        case 7:
            $('.button-1').addClass('d-none');
            $('.button-1').removeClass('d-block');
            $('.next-button').removeClass('d-none');
            $('.next-button').addClass('d-flex');
            $('.prev-button').removeClass('d-none');
            $('.prev-button').addClass('d-flex');
            $('.submit-button').addClass('d-none');
            $('.step-1').removeClass('d-block');
            $('.step-1').addClass('d-none');
            $('.step-2').removeClass('d-block');
            $('.step-2').addClass('d-none');
            $('.step-3').removeClass('d-block');
            $('.step-3').addClass('d-none');
            $('.step-4').removeClass('d-block');
            $('.step-4').addClass('d-none');
            $('.step-5').removeClass('d-block');
            $('.step-5').addClass('d-none');
            $('.step-6').removeClass('d-block');
            $('.step-6').addClass('d-none');
            $('.step-7').removeClass('d-none');
            $('.step-7').addClass('d-block');
            $('.step-8').addClass('d-none');
            $('.step-9').addClass('d-none');
            $('.step-10').addClass('d-none');
            $('.nav-1').removeClass('text-pink-400');
            $('.nav-1').addClass('!text-gray-400');
            $('.nav-2').removeClass('text-pink-400');
            $('.nav-2').addClass('!text-gray-400');
            $('.nav-3').removeClass('text-pink-400');
            $('.nav-3').addClass('!text-gray-400');
            $('.nav-4').removeClass('text-pink-400');
            $('.nav-4').addClass('!text-gray-400');
            $('.nav-5').removeClass('!text-gray-400');
            $('.nav-5').addClass('text-pink-500');
            $('.nav-6').addClass('!text-gray-400');
            $('.nav-7').addClass('!text-gray-400');
            $('.nav-8').addClass('!text-gray-400');
            $('.counter-1').removeClass('text-pink-500');
            $('.counter-1').addClass('!text-gray-500');
            $('.counter-1').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-2').removeClass('text-pink-500');
            $('.counter-2').addClass('!text-gray-500');
            $('.counter-2').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-3').removeClass('text-pink-500');
            $('.counter-3').addClass('!text-gray-500');
            $('.counter-3').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-4').removeClass('text-pink-500');
            $('.counter-4').addClass('!text-gray-500');
            $('.counter-4').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-5').removeClass('!text-gray-500');
            $('.counter-5').addClass('text-pink-500');
            $('.counter-5').attr('style', 'border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;');
            $('.counter-6').addClass('!text-gray-500');
            $('.counter-6').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-7').addClass('!text-gray-500');
            $('.counter-7').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-8').addClass('!text-gray-500');
            $('.counter-8').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-9').addClass('!text-gray-900');
            $('.counter-9').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-10').addClass('!text-gray-900');
            $('.counter-10').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            break;
        case 8:
            $('.button-1').addClass('d-none');
            $('.button-1').removeClass('d-block');
            $('.next-button').removeClass('d-none');
            $('.next-button').addClass('d-flex');
            $('.prev-button').removeClass('d-none');
            $('.prev-button').addClass('d-flex');
            $('.submit-button').addClass('d-none');
            $('.step-1').removeClass('d-block');
            $('.step-1').addClass('d-none');
            $('.step-2').removeClass('d-block');
            $('.step-2').addClass('d-none');
            $('.step-3').removeClass('d-block');
            $('.step-3').addClass('d-none');
            $('.step-4').removeClass('d-block');
            $('.step-4').addClass('d-none');
            $('.step-5').removeClass('d-block');
            $('.step-5').addClass('d-none');
            $('.step-6').removeClass('d-block');
            $('.step-6').addClass('d-none');
            $('.step-7').removeClass('d-block');
            $('.step-7').addClass('d-none');
            $('.step-8').removeClass('d-none');
            $('.step-8').addClass('d-block');
            $('.step-9').addClass('d-none');
            $('.step-10').addClass('d-none');
            $('.nav-1').removeClass('text-pink-400');
            $('.nav-1').addClass('!text-gray-400');
            $('.nav-2').removeClass('text-pink-400');
            $('.nav-2').addClass('!text-gray-400');
            $('.nav-3').removeClass('text-pink-400');
            $('.nav-3').addClass('!text-gray-400');
            $('.nav-4').removeClass('text-pink-400');
            $('.nav-4').addClass('!text-gray-400');
            $('.nav-5').removeClass('text-pink-500');
            $('.nav-5').addClass('!text-gray-400');
            $('.nav-6').removeClass('!text-gray-400');
            $('.nav-6').addClass('text-pink-500');
            $('.nav-7').addClass('!text-gray-400');
            $('.nav-8').addClass('!text-gray-400');
            $('.counter-1').removeClass('text-pink-500');
            $('.counter-1').addClass('!text-gray-500');
            $('.counter-1').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-2').removeClass('text-pink-500');
            $('.counter-2').addClass('!text-gray-500');
            $('.counter-2').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-3').removeClass('text-pink-500');
            $('.counter-3').addClass('!text-gray-500');
            $('.counter-3').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-4').removeClass('text-pink-500');
            $('.counter-4').addClass('!text-gray-500');
            $('.counter-4').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-5').removeClass('text-pink-500');
            $('.counter-5').addClass('!text-gray-500');
            $('.counter-5').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-6').removeClass('!text-gray-500');
            $('.counter-6').addClass('text-pink-500');
            $('.counter-6').attr('style', 'border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;');
            $('.counter-7').addClass('!text-gray-500');
            $('.counter-7').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-8').addClass('!text-gray-500');
            $('.counter-8').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-9').addClass('!text-gray-900');
            $('.counter-9').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-10').addClass('!text-gray-900');
            $('.counter-10').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            break;
        case 9:
            $('.button-1').addClass('d-none');
            $('.button-1').removeClass('d-block');
            $('.next-button').removeClass('d-none');
            $('.next-button').addClass('d-flex');
            $('.prev-button').removeClass('d-none');
            $('.prev-button').addClass('d-flex');
            $('.submit-button').addClass('d-none');
            $('.step-1').removeClass('d-block');
            $('.step-1').addClass('d-none');
            $('.step-2').removeClass('d-block');
            $('.step-2').addClass('d-none');
            $('.step-3').removeClass('d-block');
            $('.step-3').addClass('d-none');
            $('.step-4').removeClass('d-block');
            $('.step-4').addClass('d-none');
            $('.step-5').removeClass('d-block');
            $('.step-5').addClass('d-none');
            $('.step-6').removeClass('d-block');
            $('.step-6').addClass('d-none');
            $('.step-7').removeClass('d-block');
            $('.step-7').addClass('d-none');
            $('.step-8').removeClass('d-block');
            $('.step-8').addClass('d-none');
            $('.step-9').removeClass('d-none');
            $('.step-9').addClass('d-block');
            $('.step-10').addClass('d-none');
            $('.nav-1').removeClass('text-pink-400');
            $('.nav-1').addClass('!text-gray-400');
            $('.nav-2').removeClass('text-pink-400');
            $('.nav-2').addClass('!text-gray-400');
            $('.nav-3').removeClass('text-pink-400');
            $('.nav-3').addClass('!text-gray-400');
            $('.nav-4').removeClass('text-pink-400');
            $('.nav-4').addClass('!text-gray-400');
            $('.nav-5').removeClass('text-pink-500');
            $('.nav-5').addClass('!text-gray-400');
            $('.nav-6').removeClass('text-pink-500');
            $('.nav-6').addClass('!text-gray-400');
            $('.nav-7').removeClass('!text-gray-400');
            $('.nav-7').addClass('text-pink-500');
            $('.nav-8').addClass('!text-gray-400');
            $('.counter-1').removeClass('text-pink-500');
            $('.counter-1').addClass('!text-gray-500');
            $('.counter-1').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-2').removeClass('text-pink-500');
            $('.counter-2').addClass('!text-gray-500');
            $('.counter-2').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-3').removeClass('text-pink-500');
            $('.counter-3').addClass('!text-gray-500');
            $('.counter-3').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-4').removeClass('text-pink-500');
            $('.counter-4').addClass('!text-gray-500');
            $('.counter-4').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-5').removeClass('text-pink-500');
            $('.counter-5').addClass('!text-gray-500');
            $('.counter-5').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-6').removeClass('text-pink-500');
            $('.counter-6').addClass('!text-gray-500');
            $('.counter-6').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-7').removeClass('!text-gray-500');
            $('.counter-7').addClass('text-pink-500');
            $('.counter-7').attr('style', 'border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;');
            $('.counter-8').addClass('!text-gray-500');
            $('.counter-8').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-9').addClass('!text-gray-900');
            $('.counter-9').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-10').addClass('!text-gray-900');
            $('.counter-10').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            break;
        case 10:
            $('.button-1').addClass('d-none');
            $('.button-1').removeClass('d-block');
            $('.next-button').removeClass('d-flex');
            $('.next-button').addClass('d-none');
            $('.prev-button').removeClass('d-none');
            $('.prev-button').addClass('d-flex');
            $('.submit-button').removeClass('d-none');
            $('.submit-button').addClass('d-block');
            $('.step-1').removeClass('d-block');
            $('.step-1').addClass('d-none');
            $('.step-2').removeClass('d-block');
            $('.step-2').addClass('d-none');
            $('.step-3').removeClass('d-block');
            $('.step-3').addClass('d-none');
            $('.step-4').removeClass('d-block');
            $('.step-4').addClass('d-none');
            $('.step-5').removeClass('d-block');
            $('.step-5').addClass('d-none');
            $('.step-6').removeClass('d-block');
            $('.step-6').addClass('d-none');
            $('.step-7').removeClass('d-block');
            $('.step-7').addClass('d-none');
            $('.step-8').removeClass('d-block');
            $('.step-8').addClass('d-none');
            $('.step-9').removeClass('d-block');
            $('.step-9').addClass('d-none');
            $('.step-10').removeClass('d-none');
            $('.step-10').addClass('d-block');
            $('.nav-1').removeClass('text-pink-400');
            $('.nav-1').addClass('!text-gray-400');
            $('.nav-2').removeClass('text-pink-400');
            $('.nav-2').addClass('!text-gray-400');
            $('.nav-3').removeClass('text-pink-400');
            $('.nav-3').addClass('!text-gray-400');
            $('.nav-4').removeClass('text-pink-400');
            $('.nav-4').addClass('!text-gray-400');
            $('.nav-5').removeClass('text-pink-500');
            $('.nav-5').addClass('!text-gray-400');
            $('.nav-6').removeClass('text-pink-500');
            $('.nav-6').addClass('!text-gray-400');
            $('.nav-7').removeClass('text-pink-500');
            $('.nav-7').addClass('!text-gray-400');
            $('.nav-8').removeClass('!text-gray-400');
            $('.nav-8').addClass('text-pink-500');
            $('.counter-1').removeClass('text-pink-500');
            $('.counter-1').addClass('!text-gray-500');
            $('.counter-1').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-2').removeClass('text-pink-500');
            $('.counter-2').addClass('!text-gray-500');
            $('.counter-2').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-3').removeClass('text-pink-500');
            $('.counter-3').addClass('!text-gray-500');
            $('.counter-3').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-4').removeClass('text-pink-500');
            $('.counter-4').addClass('!text-gray-500');
            $('.counter-4').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-5').removeClass('text-pink-500');
            $('.counter-5').addClass('!text-gray-500');
            $('.counter-5').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-6').removeClass('text-pink-500');
            $('.counter-6').addClass('!text-gray-500');
            $('.counter-6').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-7').removeClass('text-pink-500');
            $('.counter-7').addClass('!text-gray-500');
            $('.counter-7').attr('style', 'border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;');
            $('.counter-8').removeClass('!text-gray-500');
            $('.counter-8').addClass('text-pink-500');
            $('.counter-8').attr('style', 'border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;');
            break;
        default:
            break;
    }

}

counter();

$('.next-button').on('click', function() {
    
    switch (count) {
        case 1:
            validate_step_1();
            break;
        case 2:
            validate_step_2();
            break;
        case 3:
            validate_step_3();
            break;
        case 4:
            validate_step_4();
            break;
        case 5:
            validate_step_5();
            break;
        case 6:
            validate_step_6();
            break;
        case 7:
            validate_step_7();
            break;
        case 8:
            validate_step_8();
            break;
        case 9:
            validate_step_9();
            break;
        default:
            break;
    }
});

$('.prev-button').on('click', function() {
    count--;
    counter();
});

$('.submit-button').on('click', function() {
    if(count == 10) {
        validate_step_10();
    }
});

var validate_step_1 = () => {
    var data = {
        'surname': $('.pi_surname').val(),
        'firstname': $('.pi_firstname').val(),
        'middlename': $('.pi_middlename').val(),
        'suffix': $('.pi_suffix').val(),
        'birthdate': $('.pi_date_of_birth').val(),
        'civil_status': $('.pi_civil_status').val(),
        'height': $('.pi_height').val(),
        'religion': $('.pi_religion').val(),
        'sex': $('.pi_sex').val(),
        'is_actively_looking_for_work': $('.pi_looking_for_work').val(),
        'find_job_duration': $('.pi_is_actively_looking_for_work').val(),
        'is_willing_to_work_immidiately': $('.pi_when_to_work').val(),
        'when_to_start_working': $('.pi_not_when_to_work').val(),
        'is_4Ps': $('.pi_4ps_beneficiary').val(),
        'household_id_4ps': $('.pi_4ps_household_id').val(),
        'pob_province': $('.pob_province :selected').text(),
        'pob_city': $('.pob_city :selected').text(),
        'pob_barangay': $('.pob_barangay :selected').text(),
        'pop_street': $('.pop_street').val(),
        'pa_province': $('.pob_province :selected').text(),
        'pa_city': $('.pob_city :selected').text(),
        'pa_barangay': $('.pob_barangay :selected').text(),
        'pa_street': $('.pa_street').val(),
    }

    $.ajax({
        type: 'POST',
        url: "/api/v2/applicant-validator/step-1",
        data: data,
        dataType: 'json',
        success: function(response) {
            console.log(data);
            console.log(response);
            if(response.status == 400) {
                if(typeof response.errors.surname !== 'undefined') {
                    $.each(response.errors.surname, function(key, err_values) {
                        $('.pi_surname-error').text(err_values);
                    });
                }

                if(typeof response.errors.firstname !== 'undefined') {
                    $.each(response.errors.firstname, function(key, err_values) {
                        $('.pi_firstname-error').text(err_values);
                    });
                }

                if(typeof response.errors.middlename !== 'undefined') {
                    $.each(response.errors.middlename, function(key, err_values) {
                        $('.pi_middlename-error').text(err_values);
                    });
                }

                if(typeof response.errors.suffix !== 'undefined') {
                    $.each(response.errors.suffix, function(key, err_values) {
                        $('.pi_suffix-error').text(err_values);
                    });
                }

                if(typeof response.errors.birthdate !== 'undefined') {
                    $.each(response.errors.birthdate, function(key, err_values) {
                        $('.pi_date_of_birth-error').text(err_values);
                    });
                }

                if(typeof response.errors.civil_status !== 'undefined') {
                    $.each(response.errors.civil_status, function(key, err_values) {
                        $('.pi_civil_status-error').text(err_values);
                    });
                }

                if(typeof response.errors.height !== 'undefined') {
                    $.each(response.errors.height, function(key, err_values) {
                        $('.pi_height-error').text(err_values);
                    });
                }

                if(typeof response.errors.religion !== 'undefined') {
                    $.each(response.errors.religion, function(key, err_values) {
                        $('.pi_religion-error').text(err_values);
                    });
                }

                if(typeof response.errors.sex !== 'undefined') {
                    $.each(response.errors.sex, function(key, err_values) {
                        $('.pi_sex-error').text(err_values);
                    });
                }

                if(typeof response.errors.is_actively_looking_for_work !== 'undefined') {
                    $.each(response.errors.is_actively_looking_for_work, function(key, err_values) {
                        $('.pi_looking_for_work-error').text(err_values);
                    });
                }

                if(typeof response.errors.find_job_duration !== 'undefined') {
                    $.each(response.errors.find_job_duration, function(key, err_values) {
                        $('.pi_is_actively_looking_for_work-error').text(err_values);
                    });
                }

                if(typeof response.errors.is_willing_to_work_immidiately !== 'undefined') {
                    $.each(response.errors.is_willing_to_work_immidiately, function(key, err_values) {
                        $('.pi_when_to_work-error').text(err_values);
                    });
                }

                if(typeof response.errors.when_to_start_working !== 'undefined') {
                    $.each(response.errors.when_to_start_working, function(key, err_values) {
                        $('.pi_not_when_to_work-error').text(err_values);
                    });
                }

                if(typeof response.errors.is_4Ps !== 'undefined') {
                    $.each(response.errors.is_4Ps, function(key, err_values) {
                        $('.pi_4ps_beneficiary-error').text(err_values);
                    });
                }

                if(typeof response.errors.household_id_4ps !== 'undefined') {
                    $.each(response.errors.household_id_4ps, function(key, err_values) {
                        $('.pi_4ps_household_id-error').text(err_values);
                    });
                }

                if(typeof response.errors.pob_province !== 'undefined') {
                    $.each(response.errors.pob_province, function(key, err_values) {
                        $('.pob_province-error').text(err_values);
                    });
                }

                if(typeof response.errors.pob_city !== 'undefined') {
                    $.each(response.errors.pob_city, function(key, err_values) {
                        $('.pob_city-error').text(err_values);
                    });
                }

                if(typeof response.errors.pob_barangay !== 'undefined') {
                    $.each(response.errors.pob_barangay, function(key, err_values) {
                        $('.pob_barangay-error').text(err_values);
                    });
                }

                if(typeof response.errors.pop_street !== 'undefined') {
                    $.each(response.errors.pop_street, function(key, err_values) {
                        $('.pop_street-error').text(err_values);
                    });
                }

                if(typeof response.errors.pa_province !== 'undefined') {
                    $.each(response.errors.pa_province, function(key, err_values) {
                        $('.pa_province-error').text(err_values);
                    });
                }

                if(typeof response.errors.pa_city !== 'undefined') {
                    $.each(response.errors.pa_city, function(key, err_values) {
                        $('.pa_city-error').text(err_values);
                    });
                }

                if(typeof response.errors.pa_barangay !== 'undefined') {
                    $.each(response.errors.pa_barangay, function(key, err_values) {
                        $('.pa_barangay-error').text(err_values);
                    });
                }

                if(typeof response.errors.pa_street !== 'undefined') {
                    $.each(response.errors.pa_street, function(key, err_values) {
                        $('.pa_street-error').text(err_values);
                    });
                }

            }
            else {
                count++;
                counter();
            }
        }
    });
}

var validate_step_2 = () => {
    var data = {
        'email_address': $('.pi_email_address').val(),
        'phone_number': $('.pi_celphone_number').val(),
        'landline_number': $('.pi_landine_number').val(),
        'GSIS_SSS_id': $('.pi_sss_number').val(),
        'pag_ibig_number': $('.pi_pag_ibig_number').val(),
        'philhealth_id': $('.pi_philheath_number').val(),
        'disability': $('.pi_disability').val(),
        'employed': $('.pi_employed').val(),
        'employed_status': $('.pi_employed_status').val(),
        'unemployed_status': $('.pi_unemployed_status').val(),
    }

    $.ajax({
        type: 'POST',
        url: "/api/v2/applicant-validator/step-2",
        data: data,
        dataType: 'json',
        success: function(response) {
            console.log(data);
            console.log(response);
            if(response.status == 400) {
                if(typeof response.errors.email_address !== 'undefined') {
                    $.each(response.errors.email_address, function(key, err_values) {
                        $('.pi_email_address-error').text(err_values);
                    });
                }

                if(typeof response.errors.phone_number !== 'undefined') {
                    $.each(response.errors.phone_number, function(key, err_values) {
                        $('.pi_celphone_number-error').text(err_values);
                    });
                }

                if(typeof response.errors.landline_number !== 'undefined') {
                    $.each(response.errors.landline_number, function(key, err_values) {
                        $('.pi_landine_number-error').text(err_values);
                    });
                }

                if(typeof response.errors.GSIS_SSS_id !== 'undefined') {
                    $.each(response.errors.GSIS_SSS_id, function(key, err_values) {
                        $('.pi_sss_number-error').text(err_values);
                    });
                }

                if(typeof response.errors.pag_ibig_number !== 'undefined') {
                    $.each(response.errors.pag_ibig_number, function(key, err_values) {
                        $('.pi_pag_ibig_number-error').text(err_values);
                    });
                }

                if(typeof response.errors.philhealth_id !== 'undefined') {
                    $.each(response.errors.philhealth_id, function(key, err_values) {
                        $('.pi_philheath_number-error').text(err_values);
                    });
                }

                if(typeof response.errors.disability !== 'undefined') {
                    $.each(response.errors.disability, function(key, err_values) {
                        $('.disability-error').text(err_values);
                    });
                }

                if(typeof response.errors.employed !== 'undefined') {
                    $.each(response.errors.employed, function(key, err_values) {
                        $('.pi_employed-error').text(err_values);
                    });
                }

                if(typeof response.errors.employed_status !== 'undefined') {
                    $.each(response.errors.employed_status, function(key, err_values) {
                        $('.pi_employed_status-error').text(err_values);
                    });
                }

                if(typeof response.errors.unemployed_status !== 'undefined') {
                    $.each(response.errors.unemployed_status, function(key, err_values) {
                        $('.pi_unemployed_status-error').text(err_values);
                    });
                }
            }
            else {
                count++;
                counter();
            }
        }
    });
}

var validate_step_3 = () => {
    var data = {
        'occupation1': $('.preferred_occupation')[0].value,
        'occupation2': $('.preferred_occupation')[1].value,
        'occupation3': $('.preferred_occupation')[2].value,
        'occupation4': $('.preferred_occupation')[3].value,
        'islocal_preferred_work_location1': $('.islocal_preferred_work_location')[0].value,
        'islocal_preferred_work_location2': $('.islocal_preferred_work_location')[1].value,
        'islocal_preferred_work_location3': $('.islocal_preferred_work_location')[2].value,
        'isoverseas_preferred_work_location1': $('.isoverseas_preferred_work_location')[0].value,
        'isoverseas_preferred_work_location2': $('.isoverseas_preferred_work_location')[1].value,
        'isoverseas_preferred_work_location3': $('.isoverseas_preferred_work_location')[2].value,
        'expected_salary': $('.expected_salary').val(),
        'passport_number': $('.passport_number').val(),
        'date_expiration': $('.expiry_date').val(),
    }

    console.log(data);
}

var validate_step_4 = () => {
    var data = {
        'is_can_read_english': $('.is_can_read_english').val(),
        'is_can_write_english': $('.is_can_write_english').val(),
        'is_can_speak_english': $('.is_can_speak_english').val(),
        'is_can_understand_english': $('.is_can_understand_english').val(),
        'is_can_read_filipino': $('.is_can_read_filipino').val(),
        'is_can_write_filipino': $('.is_can_write_filipino').val(),
        'is_can_speak_filipino': $('.is_can_speak_filipino').val(),
        'is_can_understand_filipino': $('.is_can_understand_filipino').val(),
        'is_can_read_others': $('.is_can_read_others').val(),
        'is_can_write_others': $('.is_can_write_others').val(),
        'is_can_speak_others': $('.is_can_speak_others').val(),
        'is_can_understand_others': $('.is_can_understand_others').val(),
    }
}

var validate_step_5 = () => {
    var data = {
        'elementary_school': $('.elementary_school'),
        'elementary_course': $('.elementary_course'),
        'elementary_year_graduated': $('.elementary_year_graduated'),
        'elementary_undergraduate_level': $('.elementary_undergraduate_level'),
        'elementary_undergraduate_last_attended': $('.elementary_undergraduate_last_attended'),
        'elementary_awards_recieved': $('.elementary_awards_recieved'),
        'secondary_school': $('.secondary_school'),
        'secondary_course': $('.secondary_course'),
        'secondary_year_graduated': $('.secondary_year_graduated'),
        'secondary_undergraduate_level': $('.secondary_undergraduate_level'),
        'secondary_undergraduate_last_attended': $('.secondary_undergraduate_last_attended'),
        'secondary_awards_recieved': $('.secondary_awards_recieved'),
        'tertiary_school': $('.tertiary_school'),
        'tertiary_course': $('.tertiary_course'),
        'tertiary_year_graduated': $('.tertiary_year_graduated'),
        'tertiary_undergraduate_level': $('.tertiary_undergraduate_level'),
        'tertiary_undergraduate_last_attended': $('.tertiary_undergraduate_last_attended'),
        'tertiary_awards_recieved': $('.tertiary_awards_recieved'),
        'graduate_school': $('.graduate_school'),
        'graduate_course': $('.graduate_course'),
        'graduate_year_graduated': $('.graduate_year_graduated'),
        'graduate_undergraduate_level': $('.graduate_undergraduate_level'),
        'graduate_last_attendend': $('.graduate_last_attendend'),
        'graduate_awards_recieved': $('.graduate_awards_recieved'),
    }
}

var validate_step_6 = () => {
    var data = {
        'technical_course_1' : $('.technical_course_1').val(),
        'technical_course_duration_start_1' : $('.technical_course_duration_start_1').val(),
        'technical_course_duration_end_1' : $('.technical_course_duration_end_1').val(),
        'technical_course_training_instituition_1' : $('.technical_course_training_instituition_1').val(),
        'technical_course_certificates_recieved_1' : $('.technical_course_certificates_recieved_1').val(),
        'technical_course_2' : $('.technical_course_2').val(),
        'technical_course_duration_start_2' : $('.technical_course_duration_start_2').val(),
        'technical_course_duration_end_2' : $('.technical_course_duration_end_2').val(),
        'technical_course_training_instituition_2' : $('.technical_course_training_instituition_2').val(),
        'technical_course_certificates_recieved_2' : $('.technical_course_certificates_recieved_2').val(),
        'technical_course_3' : $('.technical_course_3').val(),
        'technical_course_duration_start_3' : $('.technical_course_duration_start_3').val(),
        'technical_course_duration_end_3' : $('.technical_course_duration_end_3').val(),
        'technical_course_training_instituition_3' : $('.technical_course_training_instituition_3').val(),
        'technical_course_certificates_recieved_3' : $('.technical_course_certificates_recieved_3').val(),
    }
}

var validate_step_7 = () => {
    var data = {
        'eligibility_civil_service__name_1' : $('.eligibility_civil_service__name_1').val(),
        'eligibility_civil_service__rating_1' : $('.eligibility_civil_service__rating_1').val(),
        'eligibility_civil_service__examination_date_1' : $('.eligibility_civil_service__examination_date_1').val(),
        'eligibility_civil_service__name_2' : $('.eligibility_civil_service__name_2').val(),
        'eligibility_civil_service__rating_2' : $('.eligibility_civil_service__rating_2').val(),
        'eligibility_civil_service__examination_date_2' : $('.eligibility_civil_service__examination_date_2').val(),
        'prc_name_1' : $('.prc_name_1').val(),
        'prc_valid_until_1' : $('.prc_valid_until_1').val(),
        'prc_name_2' : $('.prc_name_2').val(),
        'prc_valid_until_2' : $('.prc_valid_until_2').val(),
    }
}

var validate_step_8 = () => {
    var data = {
        'work_experience_company_name_1': $('.work_experience_company_name_1').val(),
        'work_experience_company_address_1': $('.work_experience_company_address_1').val(),
        'work_experience_company_position_1': $('.work_experience_company_position_1').val(),
        'work_experience_company_inclusive_date_1': $('.work_experience_company_inclusive_date_1').val(),
        'work_experience_company_status_1': $('.work_experience_company_status_1').val(),
        'work_experience_company_name_2': $('.work_experience_company_name_2').val(),
        'work_experience_company_address_2': $('.work_experience_company_address_2').val(),
        'work_experience_company_position_2': $('.work_experience_company_position_2').val(),
        'work_experience_company_inclusive_date_2': $('.work_experience_company_inclusive_date_2').val(),
        'work_experience_company_status_2': $('.work_experience_company_status_2').val(),
        'work_experience_company_name_3': $('.work_experience_company_name_3').val(),
        'work_experience_company_address_3': $('.work_experience_company_address_3').val(),
        'work_experience_company_position_3': $('.work_experience_company_position_3').val(),
        'work_experience_company_inclusive_date_3': $('.work_experience_company_inclusive_date_3').val(),
        'work_experience_company_status_3': $('.work_experience_company_status_3').val(),
        'work_experience_company_name_4': $('.work_experience_company_name_4').val(),
        'work_experience_company_address_4': $('.work_experience_company_address_4').val(),
        'work_experience_company_position_4': $('.work_experience_company_position_4').val(),
        'work_experience_company_inclusive_date_4': $('.work_experience_company_inclusive_date_4').val(),
        'work_experience_company_status_4': $('.work_experience_company_status_4').val(),
        'work_experience_company_name_5': $('.work_experience_company_name_5').val(),
        'work_experience_company_address_5': $('.work_experience_company_address_5').val(),
        'work_experience_company_position_5': $('.work_experience_company_position_5').val(),
        'work_experience_company_inclusive_date_5': $('.work_experience_company_inclusive_date_5').val(),
        'work_experience_company_status_5': $('.work_experience_company_status_5').val(),
    }
}

var validate_step_9 = () => {
    // var data = {

    // }

    console.log($('.osawft').val());
}

var validate_step_10 = () => {

}