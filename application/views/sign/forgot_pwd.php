

<div class="splitPage">
    <div class="splitPage_content">
        <nav class="mainNav mainNav--minTransparent">
            <div class="mainNav_gutter">
                <div class="mainNav_logo">
                    <a href="/" class="mainNav_logo_link" aria-label="Back to homepage">
                        <img src="/assets/img/sign.png" style="width:130px;height:75px;padding:5px;" alt="Monkey">
                    </a>
                </div>
                
            </div>
        </nav>
        <div class="container">
            <div class="formSign">
                <div class="socialSign" style="margin-top:80px;">
                    <p class="text-center" style="font-size:16px;"><span style="font-weight:100">Forgotten your password?</span>
                    Enter your email address,we will send you an e-mail allowing you to reset
                    your password</p>
                </div>
                   
                <div class="sign_up_form">
                
                    <div class="form-group btnHelp">
                    <label for="id_email">
                        Email address *
                    </label> 
                        <input type="text" id="id_email" placeholder="Email address" class="form-control">
                    </div>
                    <hr>
                    <div class="">
                        <button class="btn btn-primary" onclick="forgot()">Change your password</button>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
                

    


<script>
    var email;
    function forgot(){
        email=$('#id_email').val();
        if(email==''){
            toastr_call("warning","Please input your email");
            $('#id_email').focus();return;
        }
        $.post(
            '/index.php/First/send_pwd',
            {
                email:email
            },
            function(data,status){
                if(data=="no"){
                    $('#id_email').val('');
                    toastr_call("error","Invalid email");
                }else if(data=='send_err'){
                    toastr_call("error","Error in sending Email.");
                }else if(data=='send_ok'){
                    toastr_call("success","Please check in your email box");
                }
            }
        );
    }
</script>
    