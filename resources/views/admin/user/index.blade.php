@extends('admin.layouts.app')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="w-85 text-white text-capitalize ps-3 d-inline-block">User</h6>
            @if(Auth::user()->is_admin)
              <div class="text-right d-inline-block ">
                <a type="button" href="{{ url('admin/user/create') }}" class="float-right btn btn-success">ADD</a>
              </div>
            @endif
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                @if(Session::has('message'))
                  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Info</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Is Admin</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created Date</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $key=>$value)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $value->name }}</h6>
                          <p class="text-xs text-secondary mb-0">{{ $value->email }}</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">{{ $value->is_admin?'Yes':'No' }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">
                        {{\Carbon\Carbon::parse($value->created_at)->format('d-M-Y')}}
                      </span>
                    </td>
                    <td class="align-middle">
                      <a href="{{ url('admin/user/edit/'.$value->id) }}" class="btn btn-info font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                      <a href="{{ url('admin/user/delete/'.$value->id) }}"class="btn btn-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete user">
                        Delete
                      </a>
                    </td>
                  </tr>
                 @endforeach()
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection