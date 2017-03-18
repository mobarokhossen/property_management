@extends('admin.home')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-plus"></span> Add User</div>
        <div class="panel-body">

            {!! Form::open(['url' => '/add-users', 'method' => 'put']) !!}
            <div class="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" name="name" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                        <label for="usr">Address:</label>
                        <input type="text" name="address"  class="form-control" id="usr">
                    </div>

                </div>
                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="usr">Username:</label>
                        <input type="text" name="userName"  class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                        <label for="usr">Password:</label>
                        <input type="password" name="password" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Role:</label>
                        <select class="form-control" id="sel1" name="role">
                            <option value="contractor">Contractor</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-success pull-right" value="Save">

                </div>

            </div>


            {!! Form::close() !!}
        </div>
    </div>
@endsection