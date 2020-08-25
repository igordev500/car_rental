$(document).ready(function(){
    $.post(
        '/index.php/My_ads/read_myads',
        function(data){
            if(data=='none'){
                $('#ads_1_tb').html('<p>There is no any registered campers in your account.</p>')
            }else{
                $('#ads_1_tb').html(data);
            }
        }
    );

});

function get_ads_id(e){
    var ads_id=$(e).attr('id');
    var v_type=$(e).attr('v_type');
    window.location.href = '/index.php/My_ads/show_myads_details/'+ads_id+'/'+v_type;
}