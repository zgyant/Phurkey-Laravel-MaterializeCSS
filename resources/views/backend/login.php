<?php
if(Session::has('email'))
{
    include resource_path("views/box/backend/header.php");
    include resource_path("views/theme/backend/dashboard.php");
    include resource_path("views/box/backend/footer.php");
}
else
{
    include resource_path("views/box/backend/login/header.php");
    include resource_path("views/theme/backend/login/login.php");
    include resource_path("views/box/backend/login/footer.php");
}
?>
