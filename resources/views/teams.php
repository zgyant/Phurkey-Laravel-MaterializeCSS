<?php

use App\team_info;

$members = team_info::all();

?>




<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Meet Our Team | Phurkey & Yakana IT</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="<?=asset('css/style_team.css')?>">


</head>

<body>
<div class="container">
    <div class="row">
        <div class="heading-title text-center">
            <img src="<?=asset('images/yakanalogo.png')?>" width="150"/>

            <h3 class="text-uppercase">Our professionals </h3>
            <p class="p-top-30 half-txt">
                Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
            </p>
        </div>
        <?php foreach($members as $member)
           { ?>
            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
                    <img src="<?=asset('images/member_image/').'/'.$member->member_photo; ?>" alt="team member" class="img-responsive">
                    </div>
                <div class="team-hover">
                    <div class="desk">
                        <h4>Hi There !</h4>
                        <p><?=$member->About_Member;?></p>
                    </div>
                    <div class="s-link">
                        <a href="www.facebook.com/<?=$member->Facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="<?=$member->Twitter;?>"><i class="fa fa-twitter"></i></a>
                        <a href="<?=$member->LinkedIn?>"><i class="fa fa-linkedin"></i></a>

                    </div>
                </div>
            </div>
            <div class="team-title">
                <h5><?=$member->Full_Name;?></h5>
                <span><?=$member->Position?></span>
            </div>
        </div>
        <?php
        }
        ?>

    </div>

</div>
<!--
From the PRIVACY FILE:

---------------------------------------------
Copyright (c) 2017 by shamim khan (http://codepen.io/shamim539/pen/VvLLdV)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

-----

Thanks to Mr. Shamim Khan
    - Phurkey & Yakana Team
-->
</body>
</html>
