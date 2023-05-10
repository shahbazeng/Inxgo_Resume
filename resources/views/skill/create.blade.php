@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 4.5rem!important;">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h5>Hello, {{ ucwords(Auth::user()->name)}}</h5></div>
                <div class="card-body">
                    <h3 class="text-info">Tell Us About Your Skills</h3>
                    <hr>
                    <form action="{{route('skills_store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <label for="">Skills : </label>
                                     <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Skills" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Percentage : </label>
                                     <input type="text" class="form-control @error('percentage') is-invalid @enderror" name="percentage" placeholder="Enter Percentage" value="{{ old('percentage') }}">
                                    @error('percentage')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                              
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                               <div class="col-md-6">
                                    <a href="{{route('certificate_index')}}" class="btn  btn-primary">Back</a>
                               </div>
                                <div class="col-md-6 text-right">
                                   <input type="submit" class="btn btn-success" value="Continue">
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
