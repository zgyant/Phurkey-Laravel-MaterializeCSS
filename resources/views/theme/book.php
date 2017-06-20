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

        <h3 style="border-bottom: dotted black 1px;margin-bottom:15px;text-transform: capitalize">Book Description</h3>

        <div class="row">
        	<div class="card">
                <div class="card-image">
                    <img style="width: 30%;height: 170px;"> src="<?= asset('images/book_uploads/').'/'.$booklists->image; ?>"
            	</div>
            
            <div class="input-field s4">
            	<input id="book_name" type="text" name="book_name" class="validate" disabled>
            	<label>Book Name:
            	<b><?=$booklists->book_name;?></b></label>
            </div> 

               <div class="input-field s4">
            	<input id="authur_name" type="text" name="authur_name" class="validate" disabled>
            	<label>Auther Name:
            	<b><?=$booklists->authur_name;?></b></label>
            </div>

               <div class="input-field s4">
            	<input id="publisher_name" type="text" name="publisher_name" class="validate" disabled>
            	<label>Publisher Name:
            	<b><?=$booklists->publisher_name;?></b></label>
            </div>

               <div class="input-field s4">
            	<input id="genre" type="text" name="genre" class="validate" disabled>
            	<label>Genre:
            	<b><?=$booklists->genre;?></b></label>
            </div>

            <div class="input-field s4">
            	<input id="uploader_email" type="email" name="uploader_email" class="validate" disabled>
            	<label>Uploader Email:
            	<b><?=$booklists->uploader_email;?></b></label>
            </div>

         	<div class="input-field s4">
            	<input id="description" type="text" name="description" class="validate" disabled>
            	<label>Book Description:
            	<b><?=$booklists->description;?></b></label>
            </div>

            <div class="input-field s4">
            	<input id="price" type="text" name="price" class="validate" disabled>
            	<label>Book Price:
            	<b><?=$booklists->price;?></b></label>
            </div>

            <div class="input-field s4">
            	<input id="book_condition" type="text" name="book_condition" class="validate" disabled>
            	<label>Book Condition:
            	<b><?=$booklists->book_condition;?></b></label>
            </div>  

            <div class="input-field s4">
            	<input id="exse" type="text" name="exse" class="validate" disabled>
            	<label>Book For:
            		<b>
            			<?php 
            				if($booklists->exse==1)	
 							{	           		
            					echo "Sell";
            				}else
            				{
            					echo "Exchange";
            				}
   				        ?>
            	</b>
            	</label>
            </div> 
            <div class="input-field s4">
            	<input id="date" type="text" name="date" class="validate" disabled>
            	<label>Uploaded On:
            	<b><?=$booklists->created_at->toFormattedDateString();?></b></label>
            </div>  



           <p>yema chai book ko sab detail
               uploaded by pani ma email aune uploader ko, uploaded date, ani exchange or sell k ho
               price kati cha, contact uploader vanne button banau.
           </p>

           </div>

        </div>


    </div>
</div>

</main>
