@extends('admin.master')

@section('title', __("keywords.features") )


@section('content')

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">

          <div class="row">
            <!-- simple table -->
            <div class="col-md-6 my-4">
              <div class="card shadow">
                <div class="card-body">
<x-success-alert></x-success-alert>




                    <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">

                        <h5 class="card-title">{{ __("keywords.features") }}</h5>

                        <div class="page-title-right">

                            <a href="{{ route("admin.features.create") }}" class="btn btn-sm btn-primary">

                                {{ __('keywords.add_new') }}
                            </a>
                        </div>
                    </div>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th width="5%">#</th>
                        <th>{{ __("keywords.title") }}</th>
                        <th width="10%">{{ __("keywords.icon") }}</th>
                        <th width="15%">{{ __("keywords.actions") }}</th>

                      </tr>
                    </thead>
                    <tbody>

                        @if(count($features)>0)


                        @foreach ($features as $key=>$feature)



                        <tr>
                          <td>{{ $features->firstItem() + $loop->index }}</td>
                          <td>{{ $feature->title }}</td>
                          <td>{{ $feature->icon }}</td>
                      {{--     <td>
                            <i class="{{ $features->icon }} fa-2x"></i>
                          </td> --}}

                          <td>


                           <x-action-button href="{{ route('admin.features.edit',['feature'=>$feature]) }}" type="edit"></x-action-button>

                            <x-action-button href="{{ route('admin.features.show',['feature'=>$feature]) }}" type="show"></x-action-button>


                             <x-delete-button href="{{ route('admin.features.destroy',['feature'=>$feature]) }}"></x-delete-button>

                          </td>


                        </tr>
                        @endforeach
                        @else
<x-empty-alert></x-empty-alert>
                        @endif

                    </tbody>
                  </table>

                  {{ $features->render("pagination::bootstrap-4") }}
                </div>
              </div>
            </div> <!-- simple table -->

              </div>
            </div>
          </div>


    </div>


@endsection
