
<h2>&nbsp;&nbsp; User Details</h2>
<hr>
    <?php
$userdetails=\App\phurkey_users::where('id',$id)->get();
    ?>
    <?php foreach($userdetails as $userdetail){ ?>

        <div id="image_area" style="width: 120px;margin: auto">
            <a href="<?php echo asset('images/user_profile/'.$userdetail->profile_image);?>" target="_blank">
                <img src="<?php echo asset('images/user_profile/'.$userdetail->profile_image);?>" width="120" height="150">
            </a>
        </div>
        <hr>

        <?php
        if($userdetail->activated=='1')
        {
            $activated='Activated';
        }elseif($userdetail->activated=='0')
        {
            $activated='Not Activated';
        }else
        {
            $activated='Disabled';
        }
        ?>
        <div id="user_detail_all" style="width: 85%; margin: auto;margin-bottom: 35px">
           <p><b>Full Name: </b><?=$userdetail->full_name;?></p>
           <p><b>Username: </b><?=$userdetail->username;?></p>
           <p><b>Email: </b><a href="mailto:<?=$userdetail->email;?>"><?=$userdetail->email;?></a></p>
           <p><b>Registered IP: </b><a href="http://www.ip-tracker.org/locator/ip-lookup.php?ip=<?=$userdetail->reg_ip_address;?>" target="_blank"><?=$userdetail->reg_ip_address;?></a></p>
           <p><b>Member Since IP: </b><?=$userdetail->reg_date;?></p>
           <p><b>Date of Birth: </b><?=$userdetail->date_ob;?></p>
           <p><b>Sex: </b><?=$userdetail->sex;?></p>
           <p><b>Address: </b><?=$userdetail->address;?></p>
           <p><b>Contact Number: </b><?=$userdetail->contact_num;?></p>
           <p><b>Confirmation Code: </b><?=$userdetail->conf_code;?></p>
           <p><b>Description: </b><?=$userdetail->descriptions;?></p>
           <p><b>Activation Status: </b><?=$activated;?></p>
        </div>


    <?php } ?>

