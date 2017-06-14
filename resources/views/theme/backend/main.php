<?php
if(isset($_GET['action']))
{
    if($_GET['action']=='categories')
    {
        include resource_path('views/theme/backend/dashboard/categories.php');
    }
    if($_GET['action']=='books')
    {
        include resource_path('views/theme/backend/dashboard/categories.php');
    }
    if($_GET['action']=='users')
    {
        include resource_path('views/theme/backend/dashboard/users.php');
    }
    if($_GET['action']=='advertisement')
    {
        include resource_path('views/theme/backend/dashboard/advertisement.php');
    }
    if($_GET['action']=='admin')
    {
        include resource_path('views/theme/backend/dashboard/admins.php');
    }
    if($_GET['action']=='overall_books')
    {
        include resource_path('views/theme/backend/dashboard/overall_books.php');
    }
    if($_GET['action']=='overall_users')
    {
        include resource_path('views/theme/backend/dashboard/overall_users.php');
    }
    if($_GET['action']=='book_request')
    {
        include resource_path('views/theme/backend/dashboard/book_request.php');
    }
    if($_GET['action']=='trade_request')
    {
        include resource_path('views/theme/backend/dashboard/trade_request.php');
    }
    if($_GET['action']=='settings')
    {
        include resource_path('views/theme/backend/dashboard/settings.php');
    }
}
else
{
    echo 'this is home';
}
?>