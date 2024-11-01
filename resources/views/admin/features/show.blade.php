@extends('admin.master')

@section('title', __("keywords.add_new_feature") )


@section('content')

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">

          <div class="row">
            <!-- simple table -->
            <div class="col-md-6 my-4">
              <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">{{ __("keywords.show_feature") }}</h5>
                    <div class="col-md-6">

                          <div class="form-group mb-3">
                            <label for="title">{{ __("keywords.title") }}</label>
                          </div>
                            <p>{{ $feature->title }}</p>
                    </div>

                    <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="icon">{{ __("keywords.icon") }}</label>
                            <div><i class="{{ $feature->icon }} fa-2x" ></i></div>
                        </div>

                    </div>
                    <div class="col-md-12">
                          <div class="form-group mb-3">
                            <label for="description">{{ __("keywords.description") }}</label>
                             <p>{{ $feature->description }}</p>

</div>

                    </div>

                      </div>


                </div>
              </div>
            </div> <!-- simple table -->


          </div>


    </div>


@endsection
