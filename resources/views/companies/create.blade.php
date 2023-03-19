<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lalavel create date</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <h2>
                    add compony
                </h2>
            </div>
            <div>
                <a href="{{route('companies.index')}}" class="btn btn-primary">back</a>
            </div>
            @if(session('status'))
            <div class="aleart aleart-success">
                {{session('status')}}
            </div>
            @endif
            <form action="{{route('companies.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Company name</strong>
                            <input type="text" name="name" class="form-comtrol" placeholder="Company Name">
                            @error('name')
                            <div class="aleart aleart-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Company email</strong>
                            <input type="text" name="email" class="form-comtrol" placeholder="Company Email">
                            @error('email')
                            <div class="aleart aleart-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Company address</strong>
                            <input type="text" name="address" class="form-comtrol" placeholder="Company Address">
                            @error('address')
                            <div class="aleart aleart-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                       <button type="submit" class="btn btn-primary"> Submit</button> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>