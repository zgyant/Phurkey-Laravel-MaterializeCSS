<!-- Modal Structure -->
<?php
if(Session::has('user_email'))
{

}
else {
    ?>
    <div id="loginreg" class="modal">
        <div class="modal-content" style="margin: auto;width: 90%">
            <ul id="tabs-swipe-demo" class="tabs">
                <li class="tab col s3"><a class="active" href="#login">Login</a></li>
                <li class="tab col s3 disabled"><a class="disabled" href="#"></a></li>
                <li class="tab col s3 disabled"><a class="disabled" href="#"></a></li>
                <li class="tab col s3 disabled"><a class="disabled" href="#"></a></li>
                <li class="tab col s3"><a href="#register">Register</a></li>
            </ul>
            <div id="login" class="col s12">
                <form class="col s12" action="login_user" method="post">
                    <input type="hidden" name="_token" value="<?= csrf_token(); ?>">

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input id="icon_prefix" type="email" class="validate" required name="login_email">
                            <label for="icon_prefix" style="font-size: 90%;">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input id="icon_telephone" type="password" class="validate" required name="login_pass">
                            <label for="icon_telephone" style="font-size: 90%;">Password</label>
                        </div>
                        <a href="/forgot">Forgot Password?</a>

                        <p>
                    </div>
                    <button class="btn waves-effect btn-flat" type="submit" name="action" style="float: right">Login
                        <i class="material-icons right">send</i>
                    </button>
                    </br>
                </form>
            </div>
            <div id="register" class="col s12">
                <form class="col s12" action="create_user" method="post">
                    <input type="hidden" name="_token" value="<?= csrf_token(); ?>">

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" name="full_name" type="text" required class="validate">
                            <label for="icon_prefix" style="font-size: 90%;">Full Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">star</i>
                            <input id="user_name_reg" name="user_name" type="text" required class="validate">
                            <label for="icon_prefix" style="font-size: 90%;">Username</label>
                            <span id="name_status"></span>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input id="email_reg" name="email" type="text" required class="validate">
                            <label for="icon_prefix" style="font-size: 90%;">Email</label>
                            <span id="email_status"></span>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input id="icon_telephone" name="password" required type="password" class="validate">
                            <label for="icon_telephone" style="font-size: 90%;">Password</label>
                        </div>
                        </br></br></br>
                        <p>
                        </p>

                        <p>
                    </div>
                    <blockquote>I agree with all the <a href="/terms">terms and conditions</a> of
                        Phurkey.
                    </blockquote>
                    <button class="btn waves-effect btn-flat" type="submit" name="action" style="float: right">
                        Register
                        <i class="material-icons right">send</i>
                    </button>
                    </br>
                </form>
            </div>
        </div>
    </div>
    <?php
}
?>
    <!-- Modal Structure Categories -->
    <div id="categories" class="modal bottom-sheet">
        <div class="modal-content">
            <h4>Categories</h4>
            <a href="/booklist/fictional">
                <div class="chip">
                    <img src="<?= asset('images/fictionalicon.png') ?>" alt="Fictional">
                    Fictional
                </div>
            </a><a href="/booklist/geographical/">
                <div class="chip">
                    <img src="<?= asset('images/geoicon.png') ?>" alt="Geographical">
                    Geographical
                </div>
            </a><a href="/booklist/kids/">
                <div class="chip">
                    <img src="<?= asset('images/kidsicon.png') ?>" alt="Kids">
                    Kids
                </div>
            </a><a href="/booklist/lifestyle/">
                <div class="chip">
                    <img src="<?= asset('images/lifeicon.png') ?>" alt="Lifestyle">
                    Lifestyle
                </div>
            </a><a href="/booklist/technology/">
                <div class="chip">
                    <img src="<?= asset('images/techicon.png') ?>" alt="Technology">
                    Technology
                </div>
            </a><a href="/booklist/textbooks/">
                <div class="chip">

                    <img src="<?= asset('images/txticon.png') ?>" alt="Textbooks">
                    Textbooks
                </div>
            </a>
            <a href="/booklist/drama/">
                <div class="chip">
                    <img src="<?= asset('images/dramaicon.png') ?>" alt="Drama">
                    Drama
                </div>
            </a>
            <a href="/booklist/biography/">
                <div class="chip">
                    <img src="<?= asset('images/bioicon.png') ?>" alt="Biography">
                    Biography
                </div>
            </a>
            <a href="/booklist/religion/">
                <div class="chip">
                    <img src="<?= asset('images/relicon.png') ?>" alt="Religion">
                    Religion
                </div>
            </a> <a href="/booklist/question/">
                <div class="chip">
                    <img src="<?= asset('images/quesicon.png') ?>" alt="Question Bank">
                    Question Bank
                </div>
            </a>

        </div>
    </div>

    <!-- Modal Structure Order-->
    <div id="ordermodal" class="modal">
        <div class="modal-content">
            <h4>Order a new book.</h4>

            <p>
                <form method="post" action="#">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="book_name" type="text" class="validate">
                            <label for="book_name">Book Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="author_name" type="text" class="validate">
                            <label for="author_name">Author Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="publisher_name" type="text" class="validate">
                            <label for="publisher_name">Publisher Name</label>
                        </div>
                    </div>
                    <blockquote class="red-text">
            <p>**Please make sure all the entered details are correct.</p>

            <p>**Please make sure you are logged in to place an order.</p></blockquote>
            <a class="waves-effect waves-teal btn-flat">Order<i class="material-icons right">shopping_basket</i></a>
            </form> </p>
        </div>
    </div>
