@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 4.5rem!important;">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h5>Hello, {{ ucwords(Auth::user()->name)}}</h5></div>
                <div class="card-body">
                    <h3 class="text-info">Tell Us About Your references Details</h3>
                    <hr>
                    <form action="{{route('references_store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row no-gutters">
                                <div class="col-md-3">
                                    <label for="">Name : </label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="">Year start : </label>
                                    <input type="text" class="form-control @error('year') is-invalid @enderror" name="year" placeholder="Work Year" value="{{ old('year') }}">
                                    @error('year')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                 <div class="col-md-3">
                                    <label for="">Year End : </label>
                                    <input type="text" class="form-control @error('year_end') is-invalid @enderror" name="year_end" placeholder="Graduate Year" value="{{ old('year_end') }}">
                                    @error('year_end')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <label for="">About/Phone : </label>
                                    <textarea name="about" id="" cols="30" rows="5"  class="form-control @error('about') is-invalid @enderror" value="{{ old('about') }}"></textarea>
                                    @error('about')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                              
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                               <div class="col-md-6">
                                   <a href="{{route('education_index')}}" class="btn btn-primary">Back</a>
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
