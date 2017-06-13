<style>
    body.login-page {
        background: url(/images/login_background.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover; }
</style>
<body class="flat-blue login-page">
<div class="container">
    <div class="login-box">
        <div>
            <div class="login-form row">
                <div class="col-sm-12 text-center login-header">
                    <i class="login-logo" ><img style="width: 50%" src="<?= asset("images/yakanalogo.PNG")?>" /></i>
                </div>
                <div class="col-sm-12">
                    <div class="login-body">
                        <div class="progress hidden" id="login-progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped active"
                                 role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                 style="width: 100%">
                                Log In...
                            </div>
                        </div>
                        <div class="bar" style="background:red;height:100%;color:white">
                        </div>
                        <form action="login_admin" method="post">
                            <input type="hidden" name="_token" value="<?= csrf_token();?>">
                            <div class="control">
                                <input type="email" id="username" name="login_email" value="" required="required"
                                       placeholder="Email" class="form-control" required/>
                            </div>
                            <div class="control">
                                <input type="password" placeholder="Password" id="password" name="login_pass" required class="form-control" required="required"/>
                            </div>
                            <span style="color:darkred"><?php if(isset($msg)) echo $msg; ?></span>
                            <div class="login-button text-center">

                                <input type="submit" id="_submit" name="login_admin" class="btn btn-primary" value="Enter"/>
                                <div id="loginLoader" type="button" class="text-center hidden"><i class="fa fa-spinner fa-spin"></i></div>
                            </div>
                        </form>
                    </div>
                    <div class="login-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>