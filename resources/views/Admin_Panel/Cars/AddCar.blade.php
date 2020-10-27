@extends('Admin_Panel.Template.index')
@section('content')

<div class="container-fluid">
        <h1 class="mt-4">Add Cars Details</h1>

        @if(Session::has('success'))
              <div class="alert alert-success">
                   <font face="Arial" size="6">{{ Session::get('success') }}</font>
              </div>
         @endif 

        <div class="card mb-4">
            <div class="card-header">
                Cars
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <form action="{{ route('car.store') }}"  method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Car Name</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="name" name="c_nm" placeholder="Enter Car Name" />
                          </div>
                          @if($errors->has('c_nm'))
                            <strong style="color: red;">{{ $errors->first('c_nm') }}</strong>
                            <br/>
                          @endif
                      </div>

                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Car Model</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="model" name="c_model" placeholder="Enter Car Model" />
                          </div>
                          @if($errors->has('c_model'))
                            <strong style="color: red;">{{ $errors->first('c_model') }}</strong>
                            <br/>
                          @endif
                      </div>

                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Car Lonch Date</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="c_lonch_date" placeholder="Select Car Lonch Date" />
                          </div>
                          @if($errors->has('c_lonch_date'))
                            <strong style="color: red;">{{ $errors->first('c_lonch_date') }}</strong>
                            <br/>
                          @endif
                      </div>

                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Car Short Description</label>
                          <div class="col-sm-10">
                              <textarea class="form-control" id="Title" name="c_short_desc" placeholder="Enter Car Short Description"></textarea>
                          </div>
                          @if($errors->has('c_short_desc'))
                            <strong style="color: red;">{{ $errors->first('c_short_desc') }}</strong>
                            <br/>
                          @endif
                      </div>

                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Car Long Description</label>
                          <div class="col-sm-10">
                              <textarea class="form-control" id="Title" name="c_long_desc" placeholder="Enter Car Long Description"></textarea>
                          </div>
                          @if($errors->has('c_long_desc'))
                            <strong style="color: red;">{{ $errors->first('c_long_desc') }}</strong>
                            <br/>
                          @endif
                      </div>

                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Select Car Type</label>
                          <div class="col-sm-10">
                            <select class="form-control" name="c_type" id="type">
                                <option value="">Select Car Type..</option>
                                <option value="Petrol">Petrol</option>
                                <option value="Diesel">Diesel</option>
                            </select>
                          </div>
                          @if($errors->has('c_type'))
                            <strong style="color: red;">{{ $errors->first('c_type') }}</strong>
                            <br/>
                          @endif
                      </div>

                      <div class="form-group row">
                          <label for="uploadpicture">UUpload Car Images</label><br />
                          <!-- <p style="color:red;">Maximum File Size 2 MB</p> -->
                          <div class="col-sm-10">
                                <input type="file" class="form-control form-control-alternative" name="image[]" multiple>
                          </div>
                          @if($errors->has('image'))
                            <strong style="color: red;">{{ $errors->first('image') }}</strong>
                            <br/>
                        @endif
                      </div>

                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Car Price</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="price" name="c_price" placeholder="Enter Car Price" />
                          </div>
                          @if($errors->has('c_price'))
                            <strong style="color: red;">{{ $errors->first('c_price') }}</strong>
                            <br/>
                          @endif
                      </div>
                      
                    <p align="center"><button role="button" class="btn btn-success ">+ Add Car</button></p>     
                  </form>

                </div>
            </div>
        </div>
    </div>
@endsection