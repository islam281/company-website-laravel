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
                    <h5 class="card-title">{{ __("keywords.edit_service") }}</h5>

                      <form action="{{ route("admin.services.update",["service"=>$service]) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">

                          <div class="form-group mb-3">
                            <label for="title">{{ __("keywords.title") }}</label>
                            <input type="text"  name="title" class="form-control" value="{{ $service->title }}">
                          </div>
                          @error('title')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                    </div>

                    <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="icon">{{ __("keywords.icon") }}</label>
                            <input type="text"  name="icon" class="form-control" value="{{ $service->icon }}">
                          </div>
                          @error('icon')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="col-md-12">
                          <div class="form-group mb-3">
                            <label for="description">{{ __("keywords.description") }}</label>
                            <textarea  name="description" class="form-control" >{{ $service->description }}</textarea>
                          </div>
                          @error('description')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <input type="submit" class="btn btn-primary" value="{{ __("keywords.submit") }}">
                      </div>

                    </form>

                </div>
              </div>
            </div> <!-- simple table -->


          </div>


    </div>


@endsection
