@extends('admin.home')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Jobs List</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-sm-12">
                    <a type="button" href="{{URL::to('/add-jobs')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add Jobs</a>
                    <br /><br />
                    <br /><br />
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID #</th>
                            <th>Date Created</th>
                            <th>Property Address</th>
                            <th>Contractor Name</th>
                            <th>Job Description</th>
                            <th>Deadline</th>
                            <th>Budget</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($listJobs as $key=>$value)
                        {
                            ?>
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$value->created_at}}</td>
                            <td>{{$value->propertyAddress}}</td>
                            <td>{{$value->contractorName}}</td>
                            <td>{{$value->jobDescription}}</td>
                            <td>{{$value->jobDescription}}</td>
                            <td>{{$value->dateline}}</td>
                            <td>{{$value->status}}</td>
                            <td><button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></button></td>
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