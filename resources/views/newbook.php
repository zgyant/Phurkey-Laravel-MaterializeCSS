<?php
if(Session::has('user_email'))
{

}
else{
    return redirect('/');
}
include resource_path("views/box/header.php");
include resource_path("views/theme/newbook.php");
include resource_path("views/box/footer.php");
?>
