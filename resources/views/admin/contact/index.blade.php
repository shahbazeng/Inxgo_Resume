@extends('admin.layouts.app')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="w-85 text-white text-capitalize ps-3 d-inline-block">Contact</h6>
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
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subject</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
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
                    <td class="align-middle text-center text-sm">{{ $value->subject }}
                    </td>
                    <td class="align-middle text-center text-sm">{{ $value->message }}
                    </td>
                    <td class="align-middle">
                      <a href="{{ url('admin/contact/delete/'.$value->id) }}"class="btn btn-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete user">
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