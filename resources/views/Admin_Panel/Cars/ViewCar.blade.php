@extends('Admin_Panel.Template.index')
@section('content')


<div class="container-fluid">
        <h1 class="mt-4">Add Cars Details</h1>

        <div class="card mb-4">
            <div class="card-header">
                Cars
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Model</th>
                        <th scope="col">Short Description</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Operation</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                      <?php
                        $count=1;
                      ?>
                      @foreach($carsdata as $data)
                        <tr>
                          <th scope="row">{{$count++}}</th>
                          <td>{{$data->c_nm}}</td>
                          <td>{{$data->c_model}}</td>
                          <td>{{$data->c_short_desc}}</td>
                          <td>{{$data->c_type}}</td>
                          <td>{{$data->c_price}}</td>
                          <td>
                          <form action="{{ route('car.destroy',$data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('car.edit',$data->id)}}" class="btn btn-primary" >Edit</a>
                                <a href="{{ route('car.show',$data->id)}}" class="btn btn-success" >View</a>
                                <button role="button" class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>   
          </div>
        </div>
      </div>
    </div>
@endsection
      