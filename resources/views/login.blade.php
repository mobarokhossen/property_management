<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mockup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
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
                    <li class="active"><a href="#">login</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="#">Logout</a></li> -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="panel panel-default">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
            {!! Form::open(['url' => '/login', 'method' => 'put']) !!}
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">

                    <br /><br />
                    <?php
                    if(Session::get('login_failed'))
                        ?>
                    <p class="alert-warning">{{Session::get('login_failed')}}</p>


                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span> </span>
                        <input type="text" name="userName" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                    </div>
                    <br />
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span> </span>
                        <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-primary btn-block" value="Login"/>
                    <br />
                    <br />
                </div>
                <div class="col-sm-4"></div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>

</div>
</body>
</html>