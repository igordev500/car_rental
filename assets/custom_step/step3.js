$(document).ready(function(){
    $('.mtop2').css('display','none');
    $('.mtop3').css('display','none');
    $('.mtop4').css('display','none');
    $('.mtop5').css('display','none');
    $('.mtop6').css('display','none');
    $('.mtop7').css('display','none');
    $('.mtop8').css('display','none');
    $('.mtop9').css('display','none');
    $('.mtop10').css('display','none');
    $('.mtop11').css('display','none');
    $('.mtop12').css('display','none');
    $('.mtop13').css('display','none');
    $('.mtop14').css('display','none');
    $('.mtop15').css('display','none');
})
var cnt=1;
var photo = [];

function addmorephoto(){
    if(cnt<15){
        $('.mtop'+(++cnt)).css('display','block');
    }else{
        cnt=15;
    }
    
}

function to_step4(){
    
    for(var p=0;p<cnt;p++){
        photo[p+1] = $('#photo'+(p+1)).val();
    }
    if(photo[1]==''){
        toastr_call("info","Please put the image of your vehicle at least one!");
    }else{
        for(var q=0;q<cnt;q++){
            if(photo[q+1]==''){
                toastr_call("error","Please put selected images!");
                return;
            }
        }
        
        var formdata = new FormData();
        formdata.append('cnt', cnt);

        for(var e=1;e<=cnt;e++){
            formdata.append('p_'+e, $('#photo'+e)[0].files[0]);
        }

        $.ajax({
            url: '/index.php/Create_ads/create_step3',
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data: formdata,
            success:function (data) {
                window.location.href = '/index.php/Create_ads/step4/';
            }
        });
    }
    
    

}

function back_step2(){
    window.location.href = '/index.php/Create_ads/step2/';
}