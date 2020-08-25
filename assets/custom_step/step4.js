var nodata;
$(document).ready(function(){
    $.post(
        '/index.php/Create_ads/read_step4',
        function(data){
            if(data==''){
                nodata = true;
                $('#berth_tb').css('display','none');
            }else{
                $('#berth_tb').html(data);
            }
        }
    ); 
});


function add_berth(){
    var type_berth = $('#type_berth').val();
    var width_berth = $('#width_berth').val();
    var length_berth = $('#length_berth').val();
    if(type_berth=='Select'){
        $('#type_berth').focus();
        toastr_call('info','please select type of berth!');
        return;
    }else if(width_berth==''){
        $('#width_berth').focus();
        toastr_call('info','Please input the width of berth!');return;
    }else if(length_berth==''){
        $('#length_berth').focus();
        toastr_call('info','Please input the length of berth!');return;
    }
    $.post(
        '/index.php/Create_ads/create_step4',
        {
            type_berth:type_berth,
            width_berth:width_berth,
            length_berth:length_berth
        },
        function(data){
            location.reload('/');
        }
    );
}

function del_berth(e){
    var del_tr = $(e).parent().parent();
    var del_id = $(del_tr).attr('id');
    $.post(
        '/index.php/Create_ads/del_berth',
        {
            del_id:del_id
        },
        function(data){
            $(del_tr).remove();
            location.reload();
        }
    );
}


function to_step5(){
    
    if(nodata){
        toastr_call('error','please input the type of berths!');
    }else{
        $.post(
            '/index.php/Create_ads/update_step',
            {
                step:4
            },
            function(data){
                window.location.href = '/index.php/Create_ads/step5/';
            }
        );
    }
}

function back_step3(){
    window.location.href = '/index.php/Create_ads/step3/';
}