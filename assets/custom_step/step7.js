$(document).ready(function(){
    $.post(
        '/index.php/Create_ads/read',
        function(data){
           var park_val = JSON.parse(data);
           if(park_val == null){return;}
           $('#Street').val(park_val.Street);     
           $('#Number').val(park_val.Number);     
           $('#Flat_house').val(park_val.Flat_house);     
           $('#Zip_code').val(park_val.Zip_code);     
           $('#District').val(park_val.District);     
           $('#City').val(park_val.City);     
           $('#Country').val(park_val.Country);     
        
        }
    );
});

function to_step8(){
    var Street = $('#Street').val();
    var Number = $('#Number').val();
    var Flat_house = $('#Flat_house').val();
    var Zip_code = $('#Zip_code').val();
    var District = $('#District').val();
    var City = $('#City').val();
    var Country = $('#Country').val();

    if(Street==''){
        $('#Street').focus();
        toastr_call('error','This field is required.');return;
    }else if(Number==''){
        $('#Number').focus();
        toastr_call('error','This field is required.');return;
    }else if(Flat_house==''){
        $('#Flat_house').focus();
        toastr_call('error','This field is required.');return;
    }else if(Zip_code==''){
        $('#Zip_code').focus();
        toastr_call('error','This field is required.');return;
    }else if(City==''){
        $('#City').focus();
        toastr_call('error','This field is required.');return;
    }
    else if(District==''){
        $('#District').focus();
        toastr_call('error','This field is required.');return;
    }
    else if(Country==''){
        $('#Country').focus();
        toastr_call('error','This field is required.');return;
    }

    $.post(
        '/index.php/Create_ads/create_step7',
        {
            Street:Street,   
            Number:Number,  
            Flat_house:Flat_house,  
            Zip_code:Zip_code,  
            City:City,
            District:District,
            Country:Country  
        },
        function(data){
            window.location.href = '/index.php/Create_ads/step8/';
        }
    );
}

function back_step6(){
    window.location.href = '/index.php/Create_ads/step6/';
}