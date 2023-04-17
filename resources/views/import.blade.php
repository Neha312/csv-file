{{-- <!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 Import Export Excel to database Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>

    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                Laravel 8 Import Export Excel to database Example - ItSolutionStuff.com
            </div>
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html> --}}

<!DOCTYPE html>
<html>

<head>
    <title>How to validate excel sheet data in Laravel - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>

    <div class="container">
        <div class="card bg-light mt-3">

            <div class="card-header">
                How to validate excel sheet data in Laravel
            </div>
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if (count($errors) > 0)
                        <div class="row">
                            <div class="col-md-8 col-md-offset-1">
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-ban"></i> Error!</h4>
                                    @foreach ($errors->all() as $error)
                                        {{ $error }} <br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                    @if (Session::has('success'))
                        <div class="row">
                            <div class="col-md-8 col-md-offset-1">
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <h5>{!! Session::get('success') !!}</h5>
                                </div>
                            </div>
                        </div>
                    @endif

                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
