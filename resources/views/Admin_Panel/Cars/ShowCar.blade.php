@extends('Admin_Panel.Template.index')
@section('content')


<div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card bg-secondary shadow">
                    <div class="card-body">
                        <div class="pl-lg-4">
                                <p align="right"><a href="{{ route('car.create',$car) }}"><button class="btn btn-primary">BACK</button></p>
                            <div class="row">
                                @foreach($photos as $photo)
                                    <div class="col-md-3 col-sm-6 col-12">
                                        <img src="{{ asset('/photos/'.$photo->image) }}" class="img-thumbnail m-2 w-75">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
      