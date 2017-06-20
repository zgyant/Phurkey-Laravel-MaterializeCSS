<?php
use App\book;

$booklists=book::findOrFail($id);
?>

<div id="left-bigyapan">
    <!-- width 205 height 279-->
    <img src="<?= asset('images/ad1.jpg')?>" width="100%" height="100%"/>
    <img src="<?= asset('images/ad3.jpg')?>" width="100%" height="100%" style="margin-top: 15px"/>
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
    <img src="<?= asset('images/ad2.jpg')?>" width="100%" height="100%"/>
</div>


<div id="booklist" style="text-align: left">

    <div class="top-bigyapan">
        <!-- width:800 height: 120-->
        <img src="<?= asset('images/adtop.jpg')?>" width="100%" height="100%"/>
    </div>
    <div id="booklist-vitra">

        <h3 style="border-bottom: dotted black 1px;margin-bottom:15px;text-transform: capitalize;"><?=$booklists->book_name;?> | <?=$booklists->genre;?></h3>

        <div class="row">
                    <img style="width: 30%;float:left;height: 250px;margin-right: 15px;" src="<?= asset('images/book_uploads/').'/'.$booklists->image; ?>"/>
            <div style="min-height: 250px;"><p><?=$booklists->description;?></p>
         <p><b>Author: </b><?=$booklists->authur_name;?></p>
         <p><b>Publisher: </b><?=$booklists->publisher_name;?></p>
            </div><hr>
            <p><b>Uploader By: </b><?php
                    $email= $booklists->uploader_email;
                    $uploadername=\App\phurkey_users::where('email',$email)->get();

                    foreach($uploadername as $un)
                    {
                        echo $un->full_name;
                    }

                ?>
            </p>
            <p><b>Book Price: </b><?=$booklists->price;?> NRs</p>
            <p><b>Book Condition: </b><?=$booklists->book_condition;?></p>
            <p><b>Uploaded On: </b><?=$booklists->created_at->toFormattedDateString();?></p>
            <p><b>Available For: </b>
                <?php
                if($booklists->exse==1)
                {
                    echo "Buy";
                }else
                {
                    echo "Exchange";
                }
                ?></p>
<hr>
            <a class="waves-effect waves-light btn right blue" href="#contactuploader"><?php
                if($booklists->exse==1)
                {
                    echo "Buy";
                }else
                {
                    echo "Exchange";
                }
                ?></a>
            <!-- Modal Structure -->
            <div id="contactuploader" class="modal">
                <div class="modal-content" style="min-height: 50px;">  <?php
                    if(Session::has('user_email'))
                    {
                        $email=Session::get('useremail');

                        echo" <h4>Message the Uploader</h4>
                    <div class=\"input-field col s12\">
                        <textarea id=\"message_book\" class=\"materialize-textarea\" data-length=\"120\" name=\"message_book\" required></textarea>
                        <label for=\"message_book\">Write your query!</label>
                    </div>
                        <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-light btn green right\">Send</a>
                    <br>

";
                        echo '<h5>or</h5><p>Contact him directly: <b>';
                        foreach($uploadername as $un)
                        {
                            echo $un->contact_num.'</b></p>';
                        }
                    }
                    else
                    {
                        echo 'Please <a href="/account">Login/Register</a> !';
                    }
                    ?>

                </div>

            </div>
           </div>

        </div>
    </div>

</div>

</main>
