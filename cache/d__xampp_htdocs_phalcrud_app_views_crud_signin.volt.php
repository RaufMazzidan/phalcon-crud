<div class="container">
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="bg-form">
                <h2 class="text-center">Insert Form</h2>
                <form action="<?= $this->url->get('crud/login') ?>" method="POST" class="form-signin" enctype="multipart/form-data">
                    <input type="text" name="username" class="form-control" required autofocus>
                    <input type="password" name="password" class="form-control" required>
                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Create">
                </form>
            </div>
        </div>
    </div>
</div>