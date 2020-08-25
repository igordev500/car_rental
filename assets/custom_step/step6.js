$(document).ready(function(){
    $.post(
        '/index.php/Create_ads/read_intro',
        function(data){
            $('#descript').val(data);
        }
    );
});


function to_step7(){
    var intro=$('#descript').val();
    if(intro==''){
        $('#descript').focus();toastr_call('info','This is a required');return;
    }else{
        $.post(
            '/index.php/Create_ads/create_intro',
            {
                intro:intro
            },
            function(data){
                toastr_call('success','this is putted successfully');
                window.location.href = '/index.php/Create_ads/step7/';

            }
        );
    }
}

function back_step5(){
    window.location.href = '/index.php/Create_ads/step5/';
}