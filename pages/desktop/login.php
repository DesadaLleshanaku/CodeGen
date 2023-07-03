<script>
    $(document).ready(function(){
        $('#login').click(function(){
            var username=$("#username").val();
            var password=$("#password").val();
            var dataString = 'username='+username+'&password='+password;
            $.ajax({
                type: 'POST',
                url: '<?php echo $GLOBALS['baseurl']; ?>api/login',
                data: dataString,
                dataType: 'json',
                cache: false,
                beforeSend: function(){ $("#login").html('<i class="notched circle loading icon"></i>Authenticating...');},
                success: function(data){
                    if(data.response == 'authenticated')
                    {
                        window.location.replace("<?php echo $GLOBALS['baseurl']; ?>dashboard");
                    }
                    else if(data.response == 'failed') {
                        $(".ui.negative.message").removeClass("hidden");
                        $("#login").html('<i class="lock icon"></i>Login');
                    }
                },
                error:function(){
                    alert("failure");
                }
            });
            return false;
        });
        $('#password').bind("keyup", function(e) {
            if (e.keyCode == 13) {
                $("#login").click();
            }
        });
    });

</script>

<form autocomplete="off" class="ui fluid form" method="post">
    <h1 class="ui header">Login</h1>
    <div class="ui negative message hidden">
        <i class="close icon"></i>
        <div class="header">
            Invalid Username/Password/Both.
        </div>
    </div>
<div class="ui fluid form segment">
    <div class="two fields">
        <div class="field">
            <label>Email/Username</label>
            <input placeholder="Email/Username" name="username" id="username" type="text">
        </div>
        <div class="field">
            <label>Password</label>
            <input placeholder="Password" name="password" id="password" type="password" on>
        </div>
    </div>
    <div class="ui fluid submit button" id="login"><i class="lock icon"></i>Login</div>
</div>
</form>
