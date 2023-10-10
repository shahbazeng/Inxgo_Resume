@extends('admin.layouts.app')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="w-85 text-white text-capitalize ps-3 d-inline-block">User</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <form role="form" method="post" action="{{ url('admin/user/store') }}">
              @csrf
              <div class="container-fluid">
                @if(Session::has('message'))
                  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                @if (count($errors) > 0)
                   <div class = "alert alert-danger">
                      <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                         @endforeach
                      </ul>
                   </div>
                @endif
                @if(isset($data))
                   <input type="hidden" value="{{ isset($data->id)?$data->id:null }}" name="id" class="form-control">
                @endif
                <div class="mt-2 mx-4 col-md-5 d-inline-flex input-group input-group-outline mb-3 {{ isset($data->id)?'is-filled':'' }}">
                  <label class="form-label">Name</label>
                  <input type="text" value="{{ isset($data->name)?$data->name:null }}" name="name" class="form-control">
                </div>
                <div class="mt-2 mx-5 input-group input-group-outline mb-3 col-md-5 d-inline-flex {{ isset($data->id)?'is-filled':'' }}">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" value="{{ isset($data->email)?$data->email:null }}" class="form-control">
                </div>
                <div class="mx-4 col-md-5 d-inline-flex input-group input-group-outline mb-3 ">
                  <label class="form-label">Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
                <div class="form-check">
                  <input class="form-check-input" name="is_admin" {{ (isset($data) && $data->is_admin == 1 )? 'checked':null }} value=1 type="checkbox" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Is Admin
                  </label>
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-14 mt-4 mb-0">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection