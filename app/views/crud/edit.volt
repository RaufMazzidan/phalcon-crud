<div class="container">
    <br><br><br>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h2 class="text-center">Update Form</h2>
            <div class="bg-form">
                <form action="{{ url('crud/update') }}" method="POST" class="form-signin" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ data.id }}">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" required autofocus
                               value="{{ data.username }}">
                        <input type="password" name="password" class="form-control" required
                               value="{{ data.password }}">
                        <input type="file" name="foto">
                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>