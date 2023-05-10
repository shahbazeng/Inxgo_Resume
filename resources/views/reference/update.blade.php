@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 4.5rem!important;">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h5>Hello, {{ ucwords(Auth::user()->name)}}</h5></div>
                <div class="card-body">
                    <h3 class="text-info">Update Your Work Details</h3>
                    <hr>
                    <form action="{{url('references_update/'.base64_encode($data->id))}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row no-gutters">
                                <div class="col-md-3">
                                    <label for="">Name : </label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name" value="{{ $data->name }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="">Year start : </label>
                                    <input type="text" class="form-control @error('year') is-invalid @enderror" name="year" placeholder="Work Year" value="{{ $data->year  }}">
                                    @error('year')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                 <div class="col-md-3">
                                    <label for="">Year End : </label>
                                    <input type="text" class="form-control @error('year_end') is-invalid @enderror" name="year_end" placeholder="Graduate Year" value="{{ $data->year_end }}">
                                    @error('year_end')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="">About/Phone : </label>
                                    <textarea name="about" id="" cols="30" rows="5"  class="form-control @error('about') is-invalid @enderror" value="{{ $data->about}}">{{ $data->about}}</textarea>
                                    @error('about')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                               <div class="col-md-6">
                                   <a href="{{route('references_index')}}" class="btn btn-primary">Back</a>
                               </div>
                                <div class="col-md-6 text-right">
                                   <input type="submit" class="btn btn-success" value="Update">
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 align-self-center">
            <h5 class="text-info">This is a Demo Resume.</h5>
            <img src="{{asset('images/cv.jpg')}}" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection
