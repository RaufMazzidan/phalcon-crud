<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
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
                {% for x in data %}
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td>{{ x.username }}</td>
                        <td>{{ x.password }}</td>
                        <td><img style="width: 60px;height: 60px; border-radius: 100px;" src="img/{{ x.foto }}"></td>
                        <td><a class="btn btn-danger" href="{{ url('crud/delete/') }}{{ x.id }}">
                                <span class="glyphicon glyphicon-trash"></span></a>
                            &nbsp;&nbsp;
                            <a class="btn btn-success" href="{{ url('crud/edit/') }}{{ x.id }}">
                                <span class="glyphicon glyphicon-pencil"></span></a></td>
                    </tr>
                {% endfor %}
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