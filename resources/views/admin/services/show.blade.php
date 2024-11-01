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
                    <h5 class="card-title">{{ __("keywords.show_service") }}</h5>
                    <div class="col-md-6">

                          <div class="form-group mb-3">
                            <label for="title">{{ __("keywords.title") }}</label>
                          </div>
                            <p>{{ $service->title }}</p>
                    </div>

                    <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="icon">{{ __("keywords.icon") }}</label>
                            <div><i class="{{ $service->icon }} fa-2x" ></i></div>
                        </div>

                    </div>
                    <div class="col-md-12">
                          <div class="form-group mb-3">
                            <label for="description">{{ __("keywords.description") }}</label>
                             <p>{{ $service->description }}</p>

</div>

                    </div>

                      </div>


                </div>
              </div>
            </div> <!-- simple table -->


          </div>


    </div>


@endsection
