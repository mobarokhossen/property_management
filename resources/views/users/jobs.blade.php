<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mockup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PM</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{URL::to('/manage-jobs')}}">Jobs</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="panel panel-default">
        <div class="panel-heading">Jobs List</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-sm-12">
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

</div>
</body>
</html>