<?php

if(Session::has('user_email'))
{
    include resource_path("views/box/header.php");
    include resource_path("views/theme/dashboard.php");
    include resource_path("views/box/footer.php");
}
else{
    echo "<script>window.location.replace('/account');
</script>";
}
?>
