<?php
if(Session::has('user_email'))
{
    echo "<script>window.location.replace('/dashboard');
</script>";
}
?>
<div id="loginandreg">
        <div id="loginbox">
            <?php if(session()->has('flash_message')){
                echo '<div class="flash-box"> ';
                echo '<div style="text-align: center">';
                echo session()->get('flash_message');
                Session::forget('flash_message');
                echo '</div> </div>';
            }?>
            <h5 class="left-align">Already have an account?</h5>
            <p>
                <form method="post" action="login_user">
                <input type="hidden" name="_token" value="<?= csrf_token();?>">

                <div class="row">
                        <div class="input-field col s12">
                            <input id="username" type="text" class="validate" required name="login_email">
                            <label for="username">Username/Email *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" required name="login_pass">
                            <label for="password">Password *</label>
                            <a href="forgot" methods="get">Forgot Password?</a>

        </div>
    </div>

    </p>
            <button class="btn waves-effect btn-flat" type="submit" name="action" style="float: right">Login
                <i class="material-icons right">send</i>
            </button>
    </form>
    </div>
    <div id="regbox">
        <h5 class="left-align">New to Phurkey?</h5>

        <p style="border-top:1px dotted lightgrey ">Lorem ipsum dolor sit amet, vel natum iriure
            iudicabit ut, usu accusamus adolescens at,
            per cu etiam labitur iudicabit. Quodsi albucius consequuntur et eum, vim no dicant perfecto reformidans.
            Qui rebum suscipit nominati cu. Vitae noluisse
            appellantur eos ei, tale denique complectitur eam ut, suavitate maluisset nam ad.</p>
        <a class="waves-effect waves-teal btn-flat btn-large" href="register">Register new account.<i
                class="material-icons right">send</i></a>

    </div>
    </div>
</main>