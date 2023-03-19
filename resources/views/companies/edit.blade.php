<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lalavel edit date</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    {{-- mt => margin top --}}
    <div class="container mt-2">
        <div class="row">
            {{--
                col => column
                lg => ใช้กับ container ที่มีขนาดความกว้าง ≥1200px (12 หมายถึงกว้างเต็มพื้นที่ทั้งหมด)
            --}}
            <div class="col-lg-12">
                <h2>
                    edit compony
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
            <form action="{{route('companies.update', $company->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    {{--
                        col => column
                        md => ใช้กับ container ที่มีขนาดความกว้าง ≥768px (12 หมายถึงกว้างเต็มพื้นที่ทั้งหมด)
                    --}}
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Company name</strong>
                            <input type="text" name="name" value="{{$company->name}}" class="form-comtrol" placeholder="Company Name">
                            @error('name')
                            <div class="aleart aleart-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Company email</strong>
                            <input type="text" name="email" value="{{$company->email}}" class="form-comtrol" placeholder="Company Email">
                            @error('email')
                            <div class="aleart aleart-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Company address</strong>
                            <input type="text" name="address" value="{{$company->address}}" class="form-comtrol" placeholder="Company Address">
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