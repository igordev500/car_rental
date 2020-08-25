$(document).ready(function(){
    // $('#power_steering').attr('checked',true);
    $.post(
        '/index.php/Create_ads/read_step5', 
        function(data){
            var arr = JSON.parse(data);
            if(arr==null){
                return;
            }
            else{
                Object.keys(arr).forEach((e)=>{
                    if($("#"+e)){
                        $("#"+e).attr("checked", arr[e]==1? 1: false);
                        if($("#"+e).attr("checked")){
                            $("#"+e).siblings().children().first().next().addClass('active');
                        }else{
                            $(e).siblings().children().first().next().removeClass('active');
                        }
                    }
                });
            }
        }
    );

}); 

function ch_box(e){
    var state,id;
    if($(e).is(':checked')){
        $(e).siblings().children().first().next().addClass('active');
        state = 1;
        
    }else{
        $(e).siblings().children().first().next().removeClass('active');
        state = 0
    }

    id = $(e).attr('id');
    
    $.post(
        '/index.php/Create_ads/up_step5',
        {
            state:state,
            id:id
        },
        function(data){
            
        }
    );
}



$('#dining_seats').on('change',function(){
    value = $('#dining_seats').val();
    $.post(
        '/index.php/Create_ads/add_dining_seats_step5',
        {
            value:value
        },
        function(data){

        }
    );
});

function to_step6(){
    $.post(
        '/index.php/Create_ads/update_step',
        {
            step:5
        },
        function(data){
            window.location.href = '/index.php/Create_ads/step6/';
        }
    );
}

function back_step4(){
    window.location.href = '/index.php/Create_ads/step4/';
}

