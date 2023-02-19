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