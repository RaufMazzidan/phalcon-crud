<nav class="navbar navbar-default navs" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost/PhalCRUD/crud">CRUD</a></li>
                <!--                <li><a href="#">Hijklm</a></li>-->
                <li><a href="http://localhost/PhalCRUD/auth">Login</a></li>
                <li><a href="http://localhost/PhalCRUD/auth/logout">Logout</a></li>
                <!--                <li class="dropdown">-->
                <!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>-->
                <!--                    <ul class="dropdown-menu" role="menu">-->
                <!--                        <li><a href="#">Action</a></li>-->
                <!--                        <li><a href="#">Another action</a></li>-->
                <!--                        <li><a href="#">Something else here</a></li>-->
                <!--                        <li class="divider"></li>-->
                <!--                        <li><a href="#">Separated link</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3></h3>
            <table class="table table-bordered table-striped table-view" border="0">
                <thead>
                <tr>
                    <td>NO</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Photo</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>

                <?php $no = 1 ?>
                <?php foreach ($data as $x) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $x->username ?></td>
                        <td><?= $x->password ?></td>
                        <td><img style="width: 60px;height: 60px; border-radius: 100px;" src="img/<?= $x->foto ?>"></td>
                        <td><a class="btn btn-danger" href="<?= $this->url->get('crud/delete/') ?><?= $x->id ?>">
                                <span class="glyphicon glyphicon-trash"></span></a>
                            &nbsp;&nbsp;
                            <a class="btn btn-success" href="<?= $this->url->get('crud/edit/') ?><?= $x->id ?>">
                                <span class="glyphicon glyphicon-pencil"></span></a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6"></div>
        <div class="col-md-2">
            <a href="crud/add" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Create</a>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>