<?php
use App\phurkey_website;
$webdetails=\App\about_website::find(1);
if(Session::has('status'))
{
    echo "<div class=\"alert alert-success\">
       Pages updated!
    </div>";
}
?>
<h3>Website Pages</h3>
<hr>
<div class="row">
    <form  method="post" action="website_details" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?= csrf_token();?>">
        <fieldset>


            <!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->


            <!-- Form Name -->
            <legend>Privacy & Conditions</legend>

            <div class="form-group">
                <label class="control-label col-sm-2" for="user_pri">Privacy</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="user_pri" name="user_pri" rows="4" required><?=$webdetails->privacy;?></textarea>
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="terms_con">Terms & Conditions</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="terms_con" name="terms_con" rows="4" required><?=$webdetails->terms_conditions;?></textarea>
                    <p class="help-block"></p>
                </div>
            </div>


        </fieldset>
        <hr>
        <fieldset>
            <legend>Ads Info</legend>

            <div class="form-group">
                <label class="control-label col-sm-2" for="adpolicy">Advertisement Policy</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="adpolicy" name="adpolicy" rows="4" required><?=$webdetails->ad_policy;?></textarea>
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="refund">Refund Policy</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="refund" name="refund" rows="4"required><?=$webdetails->refund_policy;?></textarea>
                    <p class="help-block"></p>
                </div>
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