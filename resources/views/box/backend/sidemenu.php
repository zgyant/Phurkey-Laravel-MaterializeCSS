
<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            <!-- Left column -->
            <a href="?action=settings"><strong><i class="glyphicon glyphicon-wrench"></i> Settings</strong></a>
            <hr>

            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Website Contents <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li class="active"> <a href="admin"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        <li><a href="?action=categories"><i class="glyphicon glyphicon-duplicate"></i> Categories <span class="badge badge-info"><?=\App\phurkey_category::count(); ?></span></a></li>
                        <li><a href="?action=books"><i class="glyphicon glyphicon-book"></i> Books <span class="badge badge-info"><?=\App\book::count(); ?></span></a></li>
                        <li><a href="?action=users"><i class="glyphicon glyphicon-user"></i> Users <span class="badge badge-info"><?=\App\phurkey_users::count(); ?></span></a></li>
                        <li><a href="?action=advertisement"><i class="glyphicon glyphicon-flag"></i> Advertisement </a></li>
                        <li><a href="?action=admin"><i class="glyphicon glyphicon-star"></i> Administrators <span class="badge badge-info"><?=\App\phurkey_admins::count(); ?></span></a></li>
                        <li><a href="logout"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                    </ul>
                </li>
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2"> Overalls <i class="glyphicon glyphicon-chevron-right"></i></a>

                    <ul class="nav nav-stacked collapse" id="menu2">
<!--                        <li><a href="?action=overall_books">Books</a>-->
<!--                        </li>-->
<!--                        <li><a href="?action=overall_users">Users</a>-->
<!--                        </li>-->
                        <li><a href="https://developers.google.com/gmail/api/">Google Developer</a>
                        </li>
                    </ul>
                </li>
<!--                <li class="nav-header">-->
<!--                    <a href="#" data-toggle="collapse" data-target="#menu3"> Social Media <i class="glyphicon glyphicon-chevron-right"></i></a>-->
<!--                    <ul class="nav nav-stacked collapse" id="menu3">-->
<!--                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>-->
<!--                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>

            <hr>

            <a href="?action=book_request"><strong><i class="glyphicon glyphicon-comment"></i> Book Requests</strong></a>


<!--            <ul class="nav nav-pills nav-stacked">-->
<!--                <li class="nav-header"></li>-->
<!--                <li><a href="#"><i class="glyphicon glyphicon-list"></i> Layouts &amp; Templates</a></li>-->
<!--                <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Toolbox</a></li>-->
<!--                <li><a href="#"><i class="glyphicon glyphicon-link"></i> Widgets</a></li>-->
<!--                <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>-->
<!--                <li><a href="#"><i class="glyphicon glyphicon-book"></i> Pages</a></li>-->
<!--                <li><a href="#"><i class="glyphicon glyphicon-star"></i> Social Media</a></li>-->
<!--            </ul>-->

<!--            <hr>-->
<!--            <ul class="nav nav-stacked">-->
<!--                <li class="active"><a href="http://bootply.com" title="The Bootstrap Playground" target="ext">Playground</a></li>-->
<!--                <li><a href="/tagged/bootstrap-3">Bootstrap 3</a></li>-->
<!--                <li><a href="/61518" title="Bootstrap 3 Panel">Panels</a></li>-->
<!--                <li><a href="/61521" title="Bootstrap 3 Icons">Glyphicons</a></li>-->
<!--                <li><a href="/62603">Layout</a></li>-->
<!--            </ul>-->

            <hr>

            <a href="?action=trade_request"><strong><i class="glyphicon glyphicon-euro"></i> Trade Requests</strong></a>

            <hr>

<!--            <ul class="nav nav-stacked">-->
<!--                <li class="active"><a rel="nofollow" href="http://goo.gl/pQoXEh" target="ext">Premium Themes</a></li>-->
<!--                <li><a rel="nofollow" href="https://wrapbootstrap.com/?ref=bootply">Wrap Bootstrap</a></li>-->
<!--                <li><a rel="nofollow" href="http://bootstrapzero.com">BootstrapZero</a></li>-->
<!--            </ul>-->
        </div>

        <div class="col-sm-9">

            <!-- column 2 -->

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <?php
                    include resource_path('views/theme/backend/main.php')
                    ?>

                </div>
            </div>
        </div>
        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->
