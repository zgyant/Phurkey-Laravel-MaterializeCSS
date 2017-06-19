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
                <p>Form banaune yeta.</p>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );

</script>
