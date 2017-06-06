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
                <div class="col s12 m4">
                    <a href="#">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?= asset('images/background.jpg')?>">
                            <span class="card-title">Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light materialize-red tooltipped"
                               data-position="bottom" data-delay="50" data-tooltip="Share this with friends"
                            ><i class="material-icons">share</i></a>
                        </div>
                        <div class="card-content">
                            <p>Publisher : </p>

                            <p>Condition : </p>

                            <p>Genre : </p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <ul class="pagination right-align">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
        </div>
    </div>

</main>
