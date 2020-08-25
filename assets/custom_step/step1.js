var select_type;

$('input[name="type"]').click(function(){
    select_type=$('input[name="type"]:checked').val();
    $('input[name="type"]').parent().parent().parent().css('display','none');
    $('input[name="type"]:checked').parent().parent().parent().css('display','block');

    $('.change_before').css('display','block');
});

$('#back_step1').click(function(){
    $('input[name="type"]').parent().parent().parent().css('display','block');
    $('.change_before').css('display','none');
});

function to_step2(){
    if(select_type){
        var chassis_brand = $('#id_chassis_brand').val();
        var chassis_model = $('#id_chassis_model').val();
        var model_brand = $('#id_model_brand').val();
        var conversion_model = $('#id_conversion_model').val();
        var numbers_seats = $('#id_numbers_seats').val();
        var number_seatbelts = $('#id_number_seatbelts').val();
        var number_berth = $('#id_number_berth').val();

        if(chassis_brand==''){
            $('#id_chassis_brand').focus();
            toastr_call('error','This field is required.');return;
        }else if(model_brand==''){
            $('#id_model_brand').focus();
            toastr_call('error','This field is required.');return;
        }else if(numbers_seats=='Select'){
            $('#id_numbers_seats').focus();
            toastr_call('error','This field is required.');return;
        }else if(number_seatbelts=='Select'){
            $('#id_number_seatbelts').focus();
            toastr_call('error','This field is required.');return;
        }else if(number_berth=='Select'){
            $('#id_number_berth').focus();
            toastr_call('error','This field is required.');return;
        }

        $.post(
            '/index.php/Create_ads/create_step1',
            {
                vehicle_type:select_type,
                chassis_brand:chassis_brand,
                chassis_model:chassis_model,
                model_brand:model_brand,
                conversion_model:conversion_model,
                seats:numbers_seats,
                seatbelts:number_seatbelts,
                berth:number_berth
            },
            function(data){
                window.location.href = '/index.php/Create_ads/step2';
            }
        );

    }else{
        toastr_call('info','Please select the type of vehicle.');return;
    }
}