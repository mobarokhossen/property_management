@extends('admin.home')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-plus"></span> Add Contractor</div>
        <div class="panel-body">

            {!! Form::open(['url' => '/add-contractor', 'method' => 'put']) !!}
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="usr">Contractor Name:</label>
                        <input type="text" name="contractorName" class="form-control" id="usr">
                    </div>
                    <input type="submit" class="btn btn-success pull-right" value="Save"/>
                </div>
                <div class="col-sm-4"></div>

            </div>

            {!! Form::close() !!}


        </div>
    </div>
@endsection