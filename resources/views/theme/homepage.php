<div class="parallax-container">
         <div class="nav-wrapper searchbar">
            <form action="#" method="get">
                <div class="input-field searchform">
                    <input id="search" type="search" required placeholder="Enter Title/Publication/Author"
                           style="color: black">
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
                <style>
                    .selectcat span label{
                        color:red;
                    }
                </style>
                <div class="input-field col s2 selectcat">
                    <select>
                        <option value="" disabled selected>Categories</option>
                        <?php
                        $categories=\App\phurkey_category::orderBy('category_name','asc')->get();
                        foreach($categories as $category) {
                            ?>
                            <option value="<?=$category->category_name;?>"><?=$category->category_name;?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <style>
                    .button {
                        background-color:#184887;
                        border: none;
                        color: white;
                        opacity: 0.9;
                        border-radius: 2px;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 4px 2px;
                        cursor: pointer;
                    }
                </style>
                <input type="submit" value="Search" class="button"/>
            </form>
        </div>

        <div class="marquee">
            <!--<p><a href="#">website ko update haru/ quotes haru etc esna dekhaune</a></p>-->
        </div>
        <div class="parallax"><img src="images/background3.jpg"></div>
</div>

</main>
