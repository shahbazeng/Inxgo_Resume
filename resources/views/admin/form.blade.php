@extends('admin.layouts.app')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="w-85 text-white text-capitalize ps-3 d-inline-block">Authors table</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <form role="form">
              <div class="container-fluid">
                <div class="mt-2 mx-4 col-md-5 d-inline-flex input-group input-group-outline mb-3 ">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control">
                </div>
                <div class="mt-2 mx-5 input-group input-group-outline mb-3 col-md-5 d-inline-flex">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control">
                </div>
                <div class="mx-4 col-md-5 d-inline-flex input-group input-group-outline mb-3 ">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control">
                </div>
                <div class="text-end">
                  <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-14 mt-4 mb-0">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection