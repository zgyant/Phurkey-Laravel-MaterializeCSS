<?php
use App\phurkey_website;
$web_sett=phurkey_website::find(1);
if(Session::has('status'))
{
    echo "<div class=\"alert alert-success\">
       Settings updated!
    </div>";
}
?>
<h3>Settings</h3>
<hr>
<div class="row">
    <form  method="post" action="website_setting" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?= csrf_token();?>">
        <fieldset>


            <!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->


            <!-- Form Name -->
            <legend>SEO</legend>

            <div class="form-group">
                <label for="web_title" class="control-label col-sm-2">Website Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="web_title" id="web_title" value="<?=$web_sett->web_title;?>" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="meta_desc">Meta Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="meta_desc" name="meta_desc" rows="4"><?=$web_sett->meta_desc;?></textarea>
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="meta_key">Meta Keywords</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="meta_key" name="meta_key" rows="4"><?=$web_sett->meta_key;?></textarea>
                    <p class="help-block"></p>
                </div>
            </div>


        </fieldset>
        <hr>
        <fieldset>
            <legend>Website Descriptions | Footer</legend>

            <div class="form-group">
                <label class="control-label col-sm-2" for="about">About</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="about" name="about" rows="4"><?=$web_sett->about;?></textarea>
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="form-group">
                <label for="contact_num_web" class="control-label col-sm-2">Contact Number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="contact_num_web" id="contact_num_web"value="<?=$web_sett->contact;?>" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="form-group">
                <label for="location_web" class="control-label col-sm-2">Location</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="location_web" id="location_web" value="<?=$web_sett->location;?>"required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="form-group">
                <label for="email_web" class="control-label col-sm-2">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email_web" id="email_web" value="<?=$web_sett->email;?>" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="form-group">
                <label for="facebook" class="control-label col-sm-2">Facebook</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="facebook" id="facebook" value="<?=$web_sett->facebook;?>"required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="form-group">
                <label for="twitter" class="control-label col-sm-2">Twitter</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="twitter" value="<?=$web_sett->twitter;?>"id="twitter" required>
                    <p class="help-block"></p>
                </div>
            </div>
        </fieldset>
        <hr>
    <div class="form_group"  style="text-align: right">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </form>
    <br>
</div>