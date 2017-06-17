    <div id="loginandreg">
       <?php if(session()->has('flash_message')){
           echo '<div class="flash-box"> ';
            echo '<div style="text-align: center">';
            echo session()->get('flash_message');
           Session::forget('flash_message');
           echo '</div> </div>';
        }?>

        <h5 class="left-align">Register New User.</h5>
        <h6 class="left-align">Fll out the form below to create a new account.</h6>
        <div class="row">
            <form class="col s12" action="create_user" method="post">
               <input type="hidden" name="_token" value="<?= csrf_token();?>">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="full_name" type="text" required class="validate">
                        <label for="full_name">Full Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="user_name" type="text" class="validate">
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" type="email" class="validate"required>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="password" type="password" class="validate"required>
                        <label for="password">Password</label>
                    </div>
                </div>
                <p>
                <blockquote>I agree with all the <a href="/terms">terms and conditions</a> of
                    Phurkey.
                </blockquote>
                </p>
                <button class="btn waves-effect btn-flat" type="submit" name="action" style="float: right">
                    Register
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>

    </div>
</main>