<h3>Team Members</h3>
<hr>
<?php
$Memberdetails=\App\team_info::get();
?>
<a href="#" class="btn btn-warning" role="button" data-toggle="modal" data-target="#addAdminModal">Add New Member</a>
<hr>
<table id="table_id" class="display">
    <thead>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Position</th>
        <th>Website</th>
        <th>Contact Number</th>
        <th>LinkedIn</th>
        <th>Twitter</th>
        <th>Facebook</th>
        <th>Member Photo</th>
        <th>Active</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($Memberdetails as $Memberdetail)
    {
        ?>
        <tr>
            <td><?=$Memberdetail->id;?></td>
            <td><?=$Memberdetail->Full_Name;?></td>
            <td><?=$Memberdetail->Email;?></td>
            <td><?=$Memberdetail->Position;?></td>
            <td><?=$Memberdetail->Website;?></td>
            <td><?=$Memberdetail->Contact_Number;?></td>
            <td><?=$Memberdetail->LinkedIn;?></td>
            <td><?=$Memberdetail->Twitter;?></td>
            <td><?=$Memberdetail->Facebook;?></td>
            <td><a target="_blank" href="<?=asset('images/member_image').'/'.$memberdetail->member_photo;?>""><img src="<?=asset('images/category_image').'/'.$categorydetail->cat_image;?>" height="40" width="40"/></a></td>
            <td><?=$Memberdetail->active;?></td>
            <td><a href="cat_del/<?=$Memberdetail->id;?>" class="btn btn-danger" role="button">Remove</a></td>
        </tr>
    <?php }?>
    </tbody>
</table>
<div class="modal fade" id="addAdminModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Member</h4>
            </div>
            <div class="modal-body">
            <div class="row">
                <form class="form-horizontal" method="post" action="add_member" enctype="multipart/form-data">
                    

                    <input type="hidden" name="_token" value="<?= csrf_token();?>">
                    
                        

                        <div class="form-group">
                            <label for="name" class="control-label col-sm-2">Full Name:</label>
                            <div class="col-sm-7">
                            <input id="name" type="text" class="form-control" name ="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label col-sm-2">Email:</label>
                            <div class="col-sm-7">
                            <input id="email" type="text" class="form-control" name ="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pos" class="control-label col-sm-2">Position:</label>
                            <div class="col-sm-7">
                            <input id="pos" type="text" class="form-control" name ="pos" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="web" class="control-label col-sm-2">Website:</label>
                            <div class="col-sm-7">
                            <input id="web" type="text" class="form-control" name ="web" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="num" class="control-label col-sm-2">Contact Number:</label>
                            <div class="col-sm-7">
                            <input id="num" type="text" class="form-control" name ="num" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="acc_linkedin" class="control-label col-sm-2">LinkedIn:</label>
                            <div class="col-sm-7">
                            <input id="acc_linkedin" type="text" class="form-control" name ="acc_linkedin" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="twi" class="control-label col-sm-2">Twitter:</label>
                            <div class="col-sm-7">
                            <input id="twi" type="text" class="form-control" name ="twi" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fb" class="control-label col-sm-2">Facebook:</label>
                            <div class="col-sm-7">
                            <input id="fb" type="text" class="form-control" name ="fb" class="form-control" required>
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="image" class="control-label col-sm-2">Profile Pic:</label>
                            <div class="col-sm-7">
                            <input type="file"  multiple accept="image/*" name="pic" class="btn btn-default" required>
                            </div>
                        </div>
                        <br><br>

                        <div align="center">
                        <button class="btn waves-effect btn-success" type="submit" name=" action" style="align: right;">
                                 Add Member
                        <i class="material-icons right"></i>
                        </button>
                        </div>
                         
                
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );

</script>
