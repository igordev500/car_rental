function back_step7(){
    window.location.href = '/index.php/Create_ads/step7';
}

function create_ads(){
    var price = $('#price').val();
    var deposit = $('#deposit').val();
    var iban = $('#iban').val();
    var bic = $('#bic').val();
    var Name_holder = $('#Name_holder').val();
    var address = $('#address').val();

    if(price==''){
        $('#price').focus();
        toastr_call('error','This field is required.');return;
    }else if(deposit==''){
        $('#deposit').focus();
        toastr_call('error','This field is required.');return;
    }else if(iban==''){
        $('#iban').focus();
        toastr_call('error','This field is required.');return;
    }else if(bic==''){
        $('#bic').focus();
        toastr_call('error','This field is required.');return;
    }else if(Name_holder==''){
        $('#Name_holder').focus();
        toastr_call('error','This field is required.');return;
    }else if(address==''){
        $('#address').focus();
        toastr_call('error','This field is required.');return;
    }

    $.post(
        '/index.php/Create_ads/create_step8',
        {
            deposit:deposit,   
            price:price,  
            iban:iban, 
            bic:bic,
            Name_holder:Name_holder,
            address:address  
        },
        function(data){
            toastr_call('success','Your ads for vehicle has successfully completed!');
            var delayInMilliseconds = 5000;
               
            setTimeout(function() {
                window.location.href = '/';
            }, delayInMilliseconds);
            
        }
    );
}
