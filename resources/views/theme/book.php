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

        <h5 style="border-bottom: dotted black 1px;margin-bottom:15px;text-transform: capitalize"><?=$booklists->book_name;?></h5>

        <div class="row">

            yaa template banau hai
           <p>yema chai book ko sab detail
               uploaded by pani ma email aune uploader ko, uploaded date, ani exchange or sell k ho
               price kati cha, contact uploader vanne button banau.
           </p>



        </div>


    </div>
</div>

</main>
