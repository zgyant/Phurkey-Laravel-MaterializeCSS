<?php
$useremail=Session::get('user_email');
$userdetails=\App\phurkey_users::where('email',$useremail)->get();
?>
<style>
   #scrolltab
   {
       min-height: 200px;
   }
    #mydash
    {
        min-height: 100%;
        overflow: hidden;
    }
</style>
<div id="dash-box">
    <div class="row">
        <div class="col s12">
            <ul class="tabs" style="background: #4db6ac;border-radius: 2px">
                <li class="tab col s3"><a class="active white-text"  href="#mydash">My Dashboard</a></li>
                <li class="tab col s3"><a   href="#accinfo" class="white-text">Account Information</a></li>
                <li class="tab col s3"><a href="#myorders"class="white-text">My Orders</a></li>
                <li class="tab col s3"><a href="#myuploads" class="white-text">My Uploads</a></li>
            </ul>
        </div>
        <div id="blankdash" style="width: 100%;height: 70px"></div>
        <div id="scrolltab">
        <div id="mydash" class="col s12 left-align">

        <h5>My Dashboard</h5><hr/>
           <span class="right-align">
               <p>Welcome,<a class="nav-link ml-auto" href="#"> <?php
                       foreach($userdetails as $userdetail)
                       {
                           echo $userdetail->full_name;
                       }
                       ?> </a></p>
               </span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <div class="left-align" style="width: 25%;padding: 5px">
                Date: <span class="red-text"><?= date('Y-m-d');?></span>
                <p>Current IP: <span class="purple-text"><?=Request::ip();?></span></p>
                <p><a href="logout">Logout</a> </p>
               </div>
            <h5>You have</h5><hr/>
            <div class="center-align" style="width:100%;min-height:55px;padding:10px">
                <div class="vitra-details-dash" style="background: #3d994e;">
                <span class="white-text" style="font-size: 65px">0</span><br/>
                <span class="white-text" style="font-size: 40px"><p>Orders</p></span>
                </div>
                <div class="vitra-details-dash" style="background:#1c4b6d">
                    <span class="white-text" style="font-size: 65px">0</span><br/>
                    <span class="white-text" style="font-size: 40px"><p>Uploads</p></span>
                </div>
                <div class="vitra-details-dash" style="background: #602330">
                    <span class="white-text" style="font-size: 65px">0</span><br/>
                    <span class="white-text" style="font-size: 40px"><p>Alerts</p></span>
                </div>
                <div class="vitra-details-dash" style="background: #e5b149">
                    <span class="white-text" style="font-size: 65px">0</span><br/>
                    <span class="white-text" style="font-size: 40px"><p>Messages</p></span>
                </div>
            </div>
        </div>
        <div id="accinfo" class="col s12 left-align">
            <h5>Account Info</h5>
            <hr/>

            <?php foreach($userdetails as $userdetail){ ?>
                <span style=" float: left;margin-right: 2px;">
               <p><img src="<?= asset("images/user_profile").'/'.$userdetail->profile_image;?>" width="150" height="180" style="border: 1px solid black"/> </p>
               </span>
            <div id="infouser" style="margin-bottom: 25px;float: right">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="full_name" disabled type="text" class="validate">
                        <label for="full_name" class="black-text">Full Name: <b><?= $userdetail->full_name; ?></b></label>
                    </div>
                    <div class="input-field col s6">
                        <input id="disabled" disabled type="text" class="validate">
                        <label for="disabled" class="black-text">Username: <b><?= $userdetail->username; ?></b></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="disabled" disabled type="text" class="validate">
                        <label for="disabled" class="black-text">Email: <b><?= $userdetail->email; ?></b></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="disabled" disabled type="text" class="validate">
                        <label for="disabled" class="black-text">Password: <b>*********</b></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="disabled" disabled type="text" class="validate">
                        <label for="disabled" class="black-text">Member Since: <b><?= $userdetail->reg_date; ?></b></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="disabled" disabled type="text" class="validate">
                        <label for="disabled" class="black-text">Address: <b><?= $userdetail->address; ?></b></label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="bio"disabled class="materialize-textarea black-text" data-length="120">
                            <?=$userdetail->descriptions;?>
                        </textarea>
                    </div>
                    <a class="waves-effect waves-teal btn-flat btn-large right-align" href="profile">Edit<i
                            class="material-icons right">edit</i></a>
                </div>
                </div>
            <?php } ?>
            </div>
        <div id="myorders" class="col s12 left-align">
            <h5>My Orders</h5>
            <hr/>
        </div>
        <div id="myuploads" class="col s12 left-align">
            <h5>My Uploads</h5>
            <hr/>
        </div>
        </div>

    </div>
    </div>

</div>
</main>