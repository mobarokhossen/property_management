@extends('admin.home')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Users List</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-sm-12">
                    <a type="button" href="{{URL::to('/add-users')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add User</a>
                    <br /><br />
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID #</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>username</th>
                            <th>Role</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($listUsers as $value)
                        {
                        ?>
                        <tr>
                            <td>{{$value->userId}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->address}}</td>
                            <td>{{$value->userName}}</td>
                            <td>{{$value->role}}</td>

                        </tr>
                        <?php
                        }
                        ?>

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection