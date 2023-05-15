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
                    <h3 class="text-info" style="display:inline-block">Your Career Summery</h3>
                    <div class="text-right" style="display:inline-block;float:right">
                    </div>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <h6>Your Carrer Object</h6>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td><p class="lead">{{ $d->career_object}}</p></td>  
                            </tr>
                           
                            <tr>
                                <td>
                                    <a href="{{url('ca_update/'.base64_encode($d->id))}}" class="btn btn-warning btn-block">Update</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{url('pdf_display')}}" class="btn btn-primary btn-block">Preview Your Resume 1</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{url('pdf_display2')}}" class="btn btn-primary btn-block">Preview Your Resume 2</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{url('pdf_display3')}}" class="btn btn-primary btn-block">Preview Your Resume 3</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
