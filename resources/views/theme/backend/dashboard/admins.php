<?php
$admindetails=\App\phurkey_admins::get();
?>
<a href="#" class="btn btn-warning" role="button" data-toggle="modal" data-target="#addAdminModal">Add Admin</a>
<hr>
<table id="table_id" class="display">
    <thead>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Username</th>
        <th>Type</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach($admindetails as $admindetail)
        {
    ?>
    <tr>
        <td><?=$admindetail->id;?></td>
        <td><?=$admindetail->admin_name;?></td>
        <td><?=$admindetail->admin_username;?></td>
        <td><?=$admindetail->admin_type;?></td>
        <td><?=$admindetail->admin_email;?></td>
        <td><?=$admindetail->admin_contact;?></td>
        <td><a href="remove_admin/<?=$admindetail->id;?>" class="btn btn-danger" role="button">Remove</a>
        </td>
    </tr>
    <?php }?>
    </tbody>
</table>
<div class="modal fade" id="addAdminModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Admin</h4>
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
