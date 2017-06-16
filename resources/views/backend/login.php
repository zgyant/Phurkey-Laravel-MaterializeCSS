<?php
if(Session::has('email'))
{
    echo "<script>window.location.replace('/yakana/spinal/admin');
</script>";
}
else
{
    include resource_path("views/box/backend/login/header.php");
    include resource_path("views/theme/backend/login/login.php");
    include resource_path("views/box/backend/login/footer.php");
}
?>
