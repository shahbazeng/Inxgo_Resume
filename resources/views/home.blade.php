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
                                <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ url('free-online-resume-builder/home') }}">Basic Info</a>
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

                <div class="card-header"><h5>Hello, {{ isset(Auth::user()->name)?ucwords(Auth::user()->name):''}}</h5></div>
                <div class="card-body">

                    <h3 class="text-info">Tell Us About Yourself</h3>

                    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">First Name : </label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="Enter First Name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Last Name : </label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Enter Last Name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Image : </label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" placeholder="Enter Image" value="{{ old('image') }}">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Profession : </label>
                                    <input type="text" class="form-control @error('profession') is-invalid @enderror" name="profession" placeholder="Enter Your profession" value ="{{old('profession')}}">
                                    @error('profession')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email : </label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Your Email" value ="{{old('email')}}">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Phone : </label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Your Phone Number" value ="{{old('phone')}}">
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Website : </label>
                                    <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" placeholder="Enter Your Website" value ="{{old('website')}}">
                                    @error('website')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="">Address : </label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter Your Address" value ="{{old('address')}}">
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                 <div class="col-md-3">
                                    <label for="">City : </label>
                                    <input type="text" class="form-control @error('division') is-invalid @enderror" name="division" placeholder="Enter Your Division" value ="{{old('division')}}">
                                    @error('division')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="">Post Code : </label>
                                    <input type="text" class="form-control @error('post_code') is-invalid @enderror" name="post_code" placeholder="Enter Your Post Code" value ="{{old('post_code')}}">
                                    @error('post_code')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-6">
                                    <a href="{{route('main_index')}}" class="btn btn-info">Back</a>
                                  
                                </div>
                                <div class="col-md-6 text-right">
                                    <input type="submit"class="btn btn-success" value="Continue">
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
