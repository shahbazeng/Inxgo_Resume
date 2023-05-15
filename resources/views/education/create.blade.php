@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 4.5rem!important;">
    <div class="row justify-content-center">
        <div class="col-md-9">
              <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                  
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!--Left Side Of Navbar -->

                       <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ route('home') }}">Basic Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('education_summery') ? 'active' : '' }} {{ request()->is('education_information') ? 'active' : '' }}" href="{{ route('education_create') }}">Education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('work_information_create') ? 'active' : '' }} {{ request()->is('work_summery_display') ? 'active' : '' }}" href="{{ route('work_create') }}">Work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('certificate_information_create') ? 'active' : '' }} {{ request()->is('certificate_summery_display') ? 'active' : '' }}" href="{{ route('certificate_create') }}">Cetrifiction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('ca_information_create') ? 'active' : '' }} {{ request()->is('ca_summery_display') ? 'active' : '' }}" href="{{ route('ca_create') }}">Career Object</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <div class="card">
                <div class="card-header"><h5>Hello, {{ ucwords(Auth::user()->name)}}</h5></div>
                <div class="card-body">
                    <h3 class="text-info">Tell Us About Your Educational Details</h3>
                    <hr>
                    <form action="{{route('education_store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row no-gutters">
                                <div class="col-md-3">
                                    <label for="">Degree : </label>
                                    <input type="text" class="form-control @error('degree') is-invalid @enderror" name="degree" placeholder="Enter Degree" value="{{ old('degree') }}">
                                    @error('degree')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="">Institute Name : </label>
                                    <input type="text" class="form-control @error('institute') is-invalid @enderror" name="institute" placeholder="Enter Institute Name" value="{{ old('institute') }}">
                                    @error('institute')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="">Year Start : </label>
                                    <input type="text" class="form-control @error('year') is-invalid @enderror" name="year" placeholder="Graduate Year" value="{{ old('year') }}">
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
                             <div class="col-md-12">
                                    <label for="">About : </label>
                                    <textarea name="about" id="" cols="30" rows="5"  class="form-control @error('about') is-invalid @enderror" value="{{ old('about') }}"></textarea>
                                    @error('about')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 text-right">
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
