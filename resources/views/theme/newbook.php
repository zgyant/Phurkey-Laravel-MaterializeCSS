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
<div id="booklist" style="text-align: left">

    <div class="top-bigyapan">
        <!-- width:800 height: 120-->
        <img src="images/adtop.jpg" width="100%" height="100%"/>
    </div>
    <div id="uploadnewbookdiv" style="margin-top: 10px">
        <span class="flow-text">Add a new book</span>

        <p><span>Fill out the form below to add a book to Phurkey collection.</span></p>

        <div class="row">

            <form class="col s12" method="post" action="add_book" enctype="multipart/form-data">

               <input type="hidden" name="_token" value="<?= csrf_token();?>">

                <div class="row">
                    <div class="input-field col s6">
                        <input id="book_name" name="book_name" type="text" class="validate" required>
                        <label for="book_name">Book Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="author_name" name="author_name" type="text" class="validate"required>
                        <label for="author_name">Author Name</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="publisher_name" name="publisher_name" type="text" class="validate" required>
                        <label for="publisher_name">Publisher Name</label>
                    </div>

                </div>
                <div class="input-field col s12 left-align row">
                    <select id="condition" name="genre" required>
                        <option value="" disabled selected>Choose the genre/category of the book</option>
                        <option value="1">Fictional</option>
                        <option value="2">Science</option>
                        <option value="3">Novel</option>
                        <option value="3">Horror</option>
                        <option value="3">Romantic</option>
                        <option value="3">Religion</option>
                    </select>
                    <label>Genre & Category</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="bio" class="materialize-textarea" data-length="120" name="description" required></textarea>
                    <label for="bio">Detail of the book & if exchange; condition for exchange</label>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="price_book" type="text" name="price_book" class="validate" required>
                        <label for="price_book">Book Price *In NRS</label>
                    </div>
                    <div class="file-field input-field col s6 tooltipped" data-position="bottom" data-delay="50"
                         data-tooltip="Upload one or more snaps of the book">
                        <div class="btn">
                            <span>Image</span>
                            <input type="file" multiple accept="image/*" name="book_image" required>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" id="book_image" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select id="condition" name="book_condition" required>
                            <option value="" disabled selected>Choose the condition of the book</option>
                            <option value="old">Old</option>
                            <option value="new">New</option>
                            <option value="slightly used">Slightly Used</option>
                            <option value="poor">Poor</option>
                            <option value="average">Average</option>
                            <option value="missing pages">Missing Pages</option>
                        </select>
                        <label>Condition</label>
                    </div>
                    <div class="input-field col s6">
                        <!-- Switch -->
                        <div class="switch">
                            <label>
                                Exchange
                                <input type="checkbox" value="1" name="sellobuy">
                                <span class="lever"></span>
                                Sell
                            </label>
                        </div>
                    </div>
                </div>
                <blockquote>
                    Note: Please confirm that the entered details are all correct. Donot upload the printed/xerox
                    materials.
                    <p>Want to boost your product? Contact our ads team at <span
                            class="blue-text">ads@phurkey.com</span></p>
                </blockquote>
                <button class="waves-effect waves-teal btn-flat btn-large right" type="submit">Upload
                    <i class="material-icons right">file_upload</i>
                </button>
            </form>
        </div>
    </div>
</div>
</main>