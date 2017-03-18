@extends('admin.home')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-plus"></span> Add Job</div>
        <div class="panel-body">

            {!! Form::open(['url' => '/add-jobs', 'method' => 'put']) !!}
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sel1">Property:</label>
                        <select class="form-control" id="sel1" name="propertyAddress">
                            <?php
                            foreach ($property as $value)
                            {
                            ?>
                            <option value="{{$value->address}}">{{$value->address}}</option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Contractor:</label>
                        <select class="form-control" id="sel1" name="contractorName">
                            <?php
                            foreach ($contractor as $value)
                            {
                            ?>
                            <option value="{{$value->contractorName}}">{{$value->contractorName}}</option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comment">Description:</label>
                        <textarea class="form-control" rows="2" id="comment" name="jobDescription"></textarea>
                    </div>

                </div>
                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="usr">Deadline Date:</label>
                        <input type="date" name="dateline" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                        <label for="usr">Budget:</label>
                        <input type="text" name="budget" class="form-control" id="usr">
                    </div>
                    <input type="submit" class="btn btn-success pull-right" value="Save">

                </div>

            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection