@extends('admin.home')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Contractor List</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-sm-12">
                    <a type="button" href="{{URL::to('/add-contractor')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add Contractor</a>
                    <br /><br />
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Contractor ID #</th>
                            <th>Contractor Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
            foreach ($listContractors as $value)
                {
                    ?>
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->contractorName}}</td>

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