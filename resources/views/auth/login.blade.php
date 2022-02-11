

<!DOCTYPE html>
<head>
  
    <title>Admin Login</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.LoginStyle')
</head>
<body class="templatemo-bg-image-1">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($errors->all() as $message)
                    <div class="alert alert-danger">{{$message}}</div>
                @endforeach
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-12">         
            <form class="form-horizontal templatemo-login-form-2" role="form" action="{{ route('login') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Admin Login</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="templatemo-one-signin col-md-7">
                        <div class="form-group">
                          <div class="col-md-12">                   
                            <label for="name" class="control-label">Email</label>
                            <div class="templatemo-input-icon-container">
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="" value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                                                          
                          </div>              
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label for="password" class="control-label">Password</label>
                            <div class="templatemo-input-icon-container">
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-md-12">
                            <input type="submit" value="LOG IN" class="btn btn-warning">
                          </div>
                        </div>
                        
                    </div>
                    
                </div>                  
              </form>                         
        </div>
    </div>
</body>
</html>

