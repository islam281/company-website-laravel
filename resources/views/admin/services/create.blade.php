@extends('admin.master')

@section('title', __("keywords.add_new_service") )


@section('content')

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">

          <div class="row">
            <!-- simple table -->
            <div class="col-md-6 my-4">
              <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">{{ __("keywords.add_new_service") }}</h5>

                      <form action="{{ route("admin.services.store") }}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="col-md-6">

                          <div class="form-group mb-3">
                            <x-form-label field='title'></x-form-label>

                            <input type="text"  name="title" class="form-control" placeholder="{{ __('keywords.title') }}">
                          </div>
                          <x-validation-error field="title"></x-validation-error>

                    </div>

                    <div class="col-md-6">
                          <div class="form-group mb-3">
                            <x-form-label field='icon'></x-form-label>
                            <input type="text"  name="icon" class="form-control" placeholder="{{ __('keywords.icon') }}">
                          </div>
                          <x-validation-error field="icon"></x-validation-error>

                    </div>
                    <div class="col-md-12">
                          <div class="form-group mb-3">
                            <x-form-label field='description'></x-form-label>
                            <textarea  name="description" class="form-control" placeholder="{{ __('keywords.description') }}"></textarea>
                          </div>

                          <x-validation-error field="description"></x-validation-error>

                    </div>
                    <x-submit-button></x-submit-button>

                      </div>


                    </form>

                </div>
              </div>
            </div> <!-- simple table -->


          </div>


    </div>


@endsection
