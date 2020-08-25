

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
                    <p class="text-center" style="font-size:16px;"><span style="font-weight:100">Reset your password?</span>
                        Forgot your password? Choose a new one!</p>
                </div>
                   
                <div class="sign_up_form">
                
                    <div class="form-group btnHelp">
                        <label for="new_pwd">
                            New password *
                        </label> 
                        <input type="password" id="new_pwd" placeholder="New password" class="form-control">
                        <div class="help-block">
                            <a href="#" class="show-pwd" onclick="ch_ps_new(this)">Show password</a>
                        </div>
                        <br><br>


                        <label for="re_new_pwd">
                            Confirm your nwe password * 
                        </label> 
                        <input type="password" id="re_new_pwd" placeholder="Confirm your nwe password" class="form-control">
                        <div class="help-block">
                            <a href="#" class="show-pwd" onclick="ch_ps_re(this)">Show password</a>
                        </div>
                    </div>
                    <hr><br>
                    <div class="">
                        <button class="btn btn-primary" onclick="reset_pwd()">Reset your password</button>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<script>

    var pwd,repwd;
    function ch_ps_new(e){
        if($('#new_pwd').attr('type')=="password"){
            $('#new_pwd').attr('type','text');
            $(e).text('Hide password');
        }else{
            $('#new_pwd').attr('type','password');
            $(e).text('Show password');
        }
        
    }

    function ch_ps_re(e){
        if($('#re_new_pwd').attr('type')=="password"){
            $('#re_new_pwd').attr('type','text');
            $(e).text('Hide password');
        }else{
            $('#re_new_pwd').attr('type','password');
            $(e).text('Show password');
        }
        
    }

    function reset_pwd(){
        pwd = $('#new_pwd').val();
        repwd = $('#re_new_pwd').val();
        if(pwd==''){
            $('#new_pwd').focus();return;
        }else if(pwd!=repwd){
            $('#re_new_pwd').val('');
            $('#re_new_pwd').focus();return;
        }
        $.post(
            '/index.php/First/reset',
            {
                new_pwd:pwd,
                code:<?=$code;?>
            },
            function(data,status){
                if(data==1){
                    window.location.href = "/index.php/First";
                }else{
                    toastr_call("error","Error in verifying Email.");
                }
            }
        );
    }
</script>
    