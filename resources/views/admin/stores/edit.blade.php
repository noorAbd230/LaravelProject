@extends('layouts.app')
@section('page-name')
       <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">update stores</a>
       @stop
@section('content')

  <body style="background-color: #a598ee;">
    
       
        <div class="container" >
        <div class="col-md-12">         
            <form class="form-horizontal templatemo-login-form-2" enctype="multipart/form-data" role="form" action="{{ url('stores/update/' . $store->id) }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row" >
                    <div style=" margin-top: 90px;">
                        <h1 style="color: white;">Update Store</h1>
                    </div>
                </div>
                <div class="row" style="margin-top: -140px;">
                    <div class="templatemo-one-signin col-md-5">
                        <div class="form-group">
                          <div>                   
                            <label for="name" >Store Name</label>
                            <div class="templatemo-input-icon-container">
                               
                                <input type="text" class="form-control"  name="sName" id="sName" placeholder="" value="{{ $store->name }}">

                            </div>                                                          
                          </div>              
                        </div>

                        
                        <div class="form-group">
                            <label for="category">Category Name</label>
                            <select name="category" id="category" class="form-control">
                                <option value="-1"></option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if($category->id==$store->category_id)selected @endif>{{ $category->name }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                             <div class="form-group">
                              <div>                   
                                <label for="name" >Store Address</label>
                                <div class="templatemo-input-icon-container">
                                   
                                    <input type="text" class="form-control"  name="address" id="address" placeholder="" value="{{ $store->address }}">

                                </div>                                                          
                              </div>              
                            </div>

                        <div class="form-group">
                          <div >
                            <label for="image">Store Image</label>
                            <div class="templatemo-input-icon-container">
                    
                                <input type="file" class="form-control"  name="sImg" id="sImg" placeholder="">

                               
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

        
            <img src="/images/bg-1.png" height="300" style="position: absolute; right: 130px; top: 200px;" > 
        
        <img src="/images/bg-2.png" height="300" style="position: absolute; right: 80px; top: 190px;" >
        <a onMouseOver="this.style.color='#f5365c'" onmouseout="this.style.color='#dfebe9'" style=" font-size: 24px; color: #dfebe9; font-weight: bold; position: absolute; right: 150px; bottom: 95px;"href="{{ url('stores/index') }}">View Stores</a>
       
    </div>
 
   
</body>

@stop