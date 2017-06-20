<?php
$bookdetails=\App\book::get();
?>
<a href="#" class="btn btn-warning" role="button" data-toggle="modal" data-target="#addAdminModal">Add New Book</a>
<hr>
<table id="table_id" class="display">
    <thead>
    <tr>
        <th>ID</th>
        <th>Book Name</th>
        <th>Author Name</th>
        <th>Publisher Name</th>
        <th>Image</th>
        <th>Uploader</th>
        <th>Price</th>
        <th>Condition</th>
        <th>Exchange/Sell</th>
        <th>Uploaded Date</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($bookdetails as $bookdetail)
    {
        if($bookdetail->exse=='0')
        {
            $exse='<span style="color:red">Exchange</span>';
        }else{
            $exse='<span style="color:Blue">Sell</span>';
        }
        ?>
        <tr style="text-transform: capitalize">
            <td><?=$bookdetail->id;?></td>
            <td><?=$bookdetail->book_name;?></td>
            <td><a href="https://en.wikipedia.org/wiki/Special:Search?search=<?=$bookdetail->authur_name;?>" target="_blank"><?=$bookdetail->authur_name;?></a></td>
            <td><a href="https://www.google.com.np/search?q=<?=$bookdetail->publisher_name;?>" target="_blank"><?=$bookdetail->publisher_name;?></a></td>
            <td><a target="_blank" href="<?=asset('images/book_uploads').'/'.$bookdetail->image;?>""><img src="<?=asset('images/book_uploads').'/'.$bookdetail->image;?>" height="40" width="40"/></a></td>
            <td><a href="mailto:<?=$bookdetail->uploader_email;?>"><?=$bookdetail->uploader_email;?></a></td>
            <td><?=$bookdetail->price;?> NRs</td>
            <td><?=$bookdetail->book_condition;?></td>
            <td><?=$exse;?></td>
            <td><?=$bookdetail->created_at;?></td>
            <?php if($bookdetail->activated=='1')
            {
                ?>
            <td><a href="book_delete/<?=$bookdetail->id;?>" class="btn btn-danger" role="button">Remove</a>
                <?php
            }else
                {?>
            <td><a href="book_enable/<?=$bookdetail->id;?>" class="btn btn-primary" role="button">Enable</a>

                <?php }?>
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
                <h4 class="modal-title">Add New Book</h4>
            </div>
            <div class="modal-body">
                <p>Form banaune yeta.</p>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable(
            {//"scrollX": true
             }
        );

    } );

</script>
