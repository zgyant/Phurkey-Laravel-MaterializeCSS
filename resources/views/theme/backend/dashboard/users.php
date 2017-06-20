<?php
$userdetails=\App\phurkey_users::get();
?>

<table id="table_id" class="display">
    <thead>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($userdetails as $userdetail)
    {
        ?>
        <tr>
            <td><?=$userdetail->id;?></td>
            <td><a data-toggle="modal"
                   data-target="#user_detail" href="admin/view_user/<?=$userdetail->id?>"><?=$userdetail->full_name;?></a></td>
            <td><?=$userdetail->username;?></td>
            <td><?=$userdetail->email;?></td>
            <td><?=$userdetail->contact_num;?></td>
            <?php
                if($userdetail->activated=='1')
                {
            ?>
            <td><a href="admin/disable_user/<?=$userdetail->id;?>" class="btn btn-danger" role="button">Disable</a>
            </td>
            <?php }
            else
            {
                echo " <td><a href='admin/enable_user/$userdetail->id' class='btn btn-primary' role=\"button\">Activate</a>
            </td>";
            }
            ?>
        </tr>
    <?php }?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="user_detail"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="min-height: 250px;background: black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">User Detail</h4>

            </div>
            <div class="modal-body"><div class="te"></div></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
<script>
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
</script>