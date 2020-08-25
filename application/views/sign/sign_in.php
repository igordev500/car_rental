

<div class="splitPage">
    <div class="splitPage_content">
        <nav class="mainNav mainNav--minTransparent">
            <div class="mainNav_gutter">
                <div class="mainNav_logo">
                    <a href="/" class="mainNav_logo_link" aria-label="Back to homepage">
                        <img src="/assets/img/sign.png" style="width:130px;height:75px;padding:5px;" alt="Monkey">
                    </a>
                </div>
                <div class="mainNav_secondaryAction hidden-xs">
                <span>
                    You don't have an account yet?
                </span>
                <a href="/index.php/First/sign_up" class="btn btn-sm btn-outline-dark">
                    Sign up
                </a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="formSign">
                <div class="socialSign">
                    <p class="text-center"><span>Sign in</span>Good to see you again!</p>
                </div>
                    
                <div class="sign_up_form">
                    <div class="form-group btnHelp">
                        <input type="text" id="id_email" placeholder="Email address" class="form-control">
                    </div>
                    <div class="form-group btnHelp">
                        <input type="password" placeholder="Password" class="form-control" id="id_password">
                        <div class="help-block">
                            <a href="/index.php/First/forgot_pwd" class="show-pwd">Forgotten your password ?</a>
                        </div>
                    </div>
                    <br><hr>
                    <div class="">
                        <button class="btn btn-primary" id="sign_in_btn" onclick="login()">Sign in</button>
                    </div>
                </div>
                
                <p class="text-center" style="margin-top: 30px;">
                    You don't have an account?
                    <br>
                    <a href="/index.php/First/sign_up">
                        Sign up
                    </a>
                </p>
            </div>                
        </div>
    </div>
</div>

<script>
    var email,password;
    function login(){
        email=$('#id_email').val();
        password=$('#id_password').val();
        if(email==''){
            $('#id_email').focus();return;
        }else if(password==''){
            $('#id_password').focus();return;
        }
        $.post(
            '/index.php/First/login',
            {
                email:email,
                password:password
            },
            function(data,status){
                if(data=='success'){
                    $('#id_email').val('');
                    $('#id_password').val('');
                    window.location.href = "/index.php/First";
                }else if(data=='email_err'){
                    toastr_call("error","Unregistered email");
                    $('#id_email').val('');
                    $('#id_password').val('');
                    $('#id_email').focus();
                }else if(data=='pwd_err'){
                    toastr_call("error","Invalid password");
                    $('#id_password').val('');
                    $('#id_password').focus();
                }
                
            }
        );
    }
</script>
    