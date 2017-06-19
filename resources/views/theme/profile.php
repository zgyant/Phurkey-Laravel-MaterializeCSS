<?php
$useremail=Session::get('user_email');
$userdetails=\App\phurkey_users::where('email',$useremail)->get();
?>
<div id="left-bigyapan">
    <!-- width 205 height 279-->
    <img src="images/ad1.jpg" width="100%" height="100%"/>
    <img src="images/ad3.jpg" width="100%" height="100%" style="margin-top: 15px"/>
</div>
<div id="right-bigyapan">
    <div id="top-search">
        <form action="#" method="get">
            <div class="input-field searchform">
                <input id="searchtop" type="search" required placeholder="Enter Query......"
                       style="color: black">
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
            <input type="submit" value="Search" class="hide"/>
        </form>
    </div>
    <!--        size 250px width 600px height-->
    <img src="images/ad2.jpg" width="100%" height="100%"/>
</div>

<div id="profilemain">
    <h4>Profile</h4>
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header tooltipped active" data-position="bottom" data-delay="50"
                 data-tooltip="Click to collapse">
                <i class="material-icons">account_box</i><span
                    style="margin-bottom: 25px;border-bottom: 1px dotted #e1dfd8;color: #5a5a5a">Basic Info</span></div>
           <?php
           foreach($userdetails as $userdetail)
           {
           ?>
            <div class="collapsible-body">
                <div class="row">
<!--                    <form class="col s12" name="_method" action="update_profile/--><!--" method="POST">-->
                    <form class="col s12" action="update_profile/<?=$userdetail->id;?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
                        <div id="profilepic" style="width: 140px;float: left;margin-right: 20%">
                            <div class="image-upload file-field ">
                                <label for="file-input">
                                    <img src="<?=asset('images/user_profile/').'/'.$userdetail->profile_image;?>" width="140" style="cursor: pointer"
                                         class="tooltipped" data-position="top" data-delay="50"
                                         data-tooltip="Click to change"/>
                                </label>
                                <input id="file-input" type="file" accept="image/*" name="profile_img"/>

                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" name="profile_img" value="<?=$userdetail->profile_image;?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="full_name" type="text" class="validate" name ="fullname"required value="<?=$userdetail->full_name;?>">
                                <label for="full_name"></label>
                            </div>
                            <div class="input-field col s6">
                                <input id="disabled" disabled type="text" class="validate">
                                <label for="disabled">z9yant</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" disabled type="email" class="validate" value="<?=$userdetail->email;?>">
                                <label for="email">Email Address</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate" name="password" disabled>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12" id="locationField">
                                <input id="autocomplete" type="text" onFocus="geolocate()" name="address" value="<?=$userdetail->address;?>" required>
                                <label for="autocomplete="" ">Address</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <p>
                                    <label for="dateob" class="">Date of Birth</label>
                                    <input type="date" id="dateob" class="datepicker" name="dateob" required>
                                </p>

                                <p>
                                    <input name="group1" type="radio" id="male" value="male" required />
                                    <label for="male">Male</label>
                                </p>

                                <p>
                                    <input name="group1" type="radio" id="female" value="female" required />
                                    <label for="female">Female</label>
                                </p>

                                <p>
                                    <input name="group1" type="radio" id="other" value="other" required/>
                                    <label for="other">Other</label>
                                </p>
                            </div>
                        </div>
                        <br/>

<!--                        <div class="row">-->
<!--                            <div class="input-field col s12">-->
<!--                                <input type="text" list="cars" name="iam" required/>-->
<!--                                <datalist id="cars">-->
<!--                                    <option value="Student">Student</option>-->
<!--                                    <option value="Teacher">Teacher</option>-->
<!--                                    <option value="Casual">Casual Reader</option>-->
<!--                                </datalist>-->
<!--                                <label>I'm a</label>-->
<!--                            </div>-->
<!--                        </div>-->

                        <div class="input-field col s12">
                            <textarea class="materialize-textarea" data-length="120" name="aboutuser" placeholder="Something about yourself"><?=$userdetail->descriptions;?></textarea>
                        </div>

                        <button class="btn waves-effect btn-flat" type="submit" name="action" style="float: right">Update Profile
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
            </div>
            <?php
           }
            ?>
        </li>

        <!-- Preferences -->


    </ul>
</div>
</main>