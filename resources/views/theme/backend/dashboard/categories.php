<h3>Categories & Genre</h3>
<hr>
<?php
$categorydetails=\App\phurkey_admins::get();
?>
<a href="#" class="btn btn-warning" role="button" data-toggle="modal" data-target="#addAdminModal">Add Category</a>
<hr>
<table id="table_id" class="display">
    <thead>
    <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Logo</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($categorydetails as $categorydetail)
    {
        ?>
        <tr>
            <td><?=$categorydetail->id;?></td>
            <td><?=$categorydetail->admin_name;?></td>
            <td><a target="_blank" href="<?=asset('images/book_uploads').'/'.$categorydetail->image;?>""><img src="<?=asset('images/book_uploads').'/'.$categorydetail->image;?>" height="40" width="40"/></a></td>
            <td><a href="cat_del/<?=$categorydetail->id;?>" class="btn btn-danger" role="button">Remove</a></td>
        </tr>
    <?php }?>
    </tbody>
</table>
<div class="modal fade" id="addAdminModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Category</h4>
            </div>
            <div class="modal-body">
            <div class="row">
                <form class="form-horizontal" method="post" action="add_category">
                    <input type="hidden" name="_token" value="<?= csrf_token();?>">
                    
                        
                        <div class="form-group">
                            <label for="Category" class="control-label col-sm-2">Category:</label>
                            <div class="col-sm-7">
                                <input id="category" type="text" class="form-control" name ="category" required>
                            </div>
                        </div>
   

                        <div class="form-group">
                            <label for="Title" class="control-label col-sm-2">Category Title:</label>
                            <div class="col-sm-7">
                            <input id="title" type="text" class="form-control" name ="title" class="form-control" required>
                            </div>
                        </div>

                       <div class="btn">
                            <label for="image" class="control-label col-sm-4">Category Icon:</label>
                            <div class="col-sm-8">
                            <input type="file" multiple accept="image/*" name="icon" class="btn btn-default" required>
                            </div>
                        </div>
                        <br><br>

                        <div align="center">
                        <button class="btn waves-effect btn-success" type="submit" name=" action" style="align: right;">
                                 Submit
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
