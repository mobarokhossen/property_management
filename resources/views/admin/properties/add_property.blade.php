@extends('admin.home')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-plus"></span> Add Property</div>
        <div class="panel-body">
            {!! Form::open(['url' => '/add-property', 'method' => 'put']) !!}
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="usr">Address:</label>
                        <input type="text" name="address" class="form-control" id="usr">
                    </div>
                    <input type="submit" class="btn btn-success pull-right" value="Save"/>
                </div>
                <div class="col-sm-4"></div>

            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection