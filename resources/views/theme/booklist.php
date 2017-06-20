<?php
use App\book;

$booklists=book::paginate(15);

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

            <h5 style="border-bottom: dotted black 1px;margin-bottom:15px;text-transform: capitalize"><?php if(isset($title)){echo $title;}else{echo 'Available Books';} ?></h5>

            <div class="row">
                <?php
                foreach($booklists as  $booklist) {

                    ?>
                    <div class="col s12 m4">
                        <a href="#">
                            <div class="card">
                                <div class="card-image">
                                    <img style="width: 100%;height: 250px;" src="<?= asset('images/book_uploads/').'/'.$booklist->image; ?>">
                                    <span class="card-title"><?=$booklist->book_name;?></span>
                                    <a class="btn-floating halfway-fab waves-effect waves-light materialize-red tooltipped"
                                       data-position="bottom" data-delay="50" data-tooltip="Share this with friends"
                                    ><i class="material-icons">share</i></a>
                                </div>
                                <div class="card-content" style="text-transform: capitalize">
                                    <p>Publisher : <?=$booklist->publisher_name;?></p>

                                    <p>Condition : <?=$booklist->book_condition;?></p>

                                    <p>Genre : <?=$booklist->genre;?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
            <style>
                .pagination li
                {
                    width: 20px;
                }

            </style>
            <ul class="pagination right-align">
<!--                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>-->
<!--                <li class="active"><a href="#!">1</a></li>-->
<!--                <li class="waves-effect"><a href="#!">2</a></li>-->
<!--                <li class="waves-effect"><a href="#!">3</a></li>-->
<!--                <li class="waves-effect"><a href="#!">4</a></li>-->
<!--                <li class="waves-effect"><a href="#!">5</a></li>-->
<!--                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>-->
                <?php
                echo $booklists->links();
                ?>
            </ul>

        </div>
    </div>

</main>
