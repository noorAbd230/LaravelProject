@extends('layouts.app')
@section('page-name')
       <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" >update categories</a>
       @stop
@section('content')

  <body style="background-color: #a598ee;">
    
       
        <div class="container" >
        <div class="col-md-12">         
            <form class="form-horizontal templatemo-login-form-2" enctype="multipart/form-data" role="form" action="{{ url('category/update/' . $categories->id) }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row" >
                    <div style=" margin-top: 110px;">
                        <h1 style="color: white;">Update Category</h1>
                    </div>
                </div>
                <div class="row" style="margin-top: -100px;">
                    <div class="templatemo-one-signin col-md-5">
                        <div class="form-group">
                          <div style="">                   
                            <label for="name" >Category Name</label>
                            <div class="templatemo-input-icon-container">
                               
                                <input type="text" class="form-control"  name="cName" id="cName" value="{{ $categories->name }}">

                            </div>                                                          
                          </div>              
                        </div>
                        <div class="form-group">
                          <div >
                            <label for="image">Category Image</label>
                            <div class="templatemo-input-icon-container">
                                
                                <input type="file" class="form-control"  name="cImg" id="cImg">
                               
                            </div>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-md-12">
                            <input type="submit" value="Update" class="btn btn-danger">
                          </div>
                        </div>
                        
                    </div>
                    
                </div>                  
              </form>                         
        </div>
        <img src="/images/bg-1.png" height="300" style="position: absolute; right: 130px; bottom: 15px;" > 
        
        <img src="/images/bg-2.png" height="300" style="position: absolute; right: 80px; bottom: 10px;" >
        <a onMouseOver="this.style.color='#f5365c'" onmouseout="this.style.color='#dfebe9'" style=" font-size: 24px; color: #dfebe9; font-weight: bold; position: absolute; right: 130px; bottom: 130px;"href="{{ url('/category/index') }}">View Categories</a>
    </div>
 
   
</body>

@stop