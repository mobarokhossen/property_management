@extends('admin.home')
@section('content')
    <div class="panel panel-default">
    <div class="panel-heading">Properties List</div>
    <div class="panel-body">

        <div class="row">
            <div class="col-sm-12">
                <a type="button" href="{{URL::to('/add-property')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add Property</a>
                <br /><br />
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Property ID #</th>
                        <th>Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($listProperties as $value)
                    {
                    ?>
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->address}}</td>

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