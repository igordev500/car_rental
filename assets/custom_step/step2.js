function to_step3(){
    var id_license_plate = $('#id_license_plate').val();
    var id_registered_country = $('#id_registered_country').val();
    var id_license_plate_year = $('#id_license_plate_year').val();
    var id_total_weight = $('#id_total_weight').val();
    var id_fuel = $('#id_fuel').val();
    var id_vehicle_consumption = $('#id_vehicle_consumption').val();
    var id_vehicle_length = $('#id_vehicle_length').val();
    var id_vehicle_width = $('#id_vehicle_width').val();
    var id_vehicle_height = $('#id_vehicle_height').val();
    var id_acquisition_value = $('#id_acquisition_value').val();
    var id_cell_phone = $('#id_cell_phone').val();
    
    // console.log(id_vehicle_height);return;

    if(id_license_plate==''){
        $('#id_license_plate').focus();
        toastr_call('error','This field is required.');return;
    }else if(id_registered_country==''){
        $('#id_registered_country').focus();
        toastr_call('error','This field is required.');return;
    }else if(id_license_plate_year==''){
        $('#id_license_plate_year').focus();
        toastr_call('error','This field is required.');return;
    }else if(id_total_weight==''){
        $('#id_total_weight').focus();
        toastr_call('error','This field is required.');return;
    }else if(id_fuel=='Select'){
        $('#id_fuel').focus();
        toastr_call('error','This field is required.');return;
    }
    else if(id_vehicle_consumption=='Select'){
        $('#id_vehicle_consumption').focus();
        toastr_call('error','This field is required.');return;
    }
    else if(id_vehicle_length==''){
        $('#id_vehicle_length').focus();
        toastr_call('error','This field is required.');return;
    }
    else if(id_vehicle_width==''){
        $('#id_vehicle_width').focus();
        toastr_call('error','This field is required.');return;
    }
    else if(id_vehicle_height==''){
        $('#id_vehicle_height').focus();
        toastr_call('error','This field is required.');return;
    }
    else if(id_acquisition_value==''){
        $('#id_acquisition_value').focus();
        toastr_call('error','This field is required.');return;
    }
    else if(id_cell_phone==''){
        $('#id_cell_phone').focus();
        toastr_call('error','This field is required.');return;
    }

    $.post(
        '/index.php/Create_ads/create_step2',
        {
            license_p:id_license_plate,
            reg_country:id_registered_country,
            license_p_year:id_license_plate_year,
            total_weight:id_total_weight,
            fuel:id_fuel,
            consumption:id_vehicle_consumption,
            length:id_vehicle_length,
            width:id_vehicle_width,
            height:id_vehicle_height,
            acquisition_v:id_acquisition_value,
            cell_phone:id_cell_phone
        },
        function(data){
            window.location.href = '/index.php/Create_ads/step3/';
        }
    );

}

function back_step1(){
    window.location.href = '/index.php/Create_ads/step1';
}