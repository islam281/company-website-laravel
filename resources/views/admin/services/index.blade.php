@extends('admin.master')

@section('title', __("keywords.services") )


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

                        <h5 class="card-title">{{ __("keywords.services") }}</h5>

                        <div class="page-title-right">

                            <a href="{{ route("admin.services.create") }}" class="btn btn-sm btn-primary">

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

                        @if(count($services)>0)


                        @foreach ($services as $key=>$service)



                        <tr>
                          <td>{{ $services->firstItem() + $loop->index }}</td>
                          <td>{{ $service->title }}</td>
                          <td>{{ $service->icon }}</td>
       {{--                    <td>
                            <i class="{{ $service->icon }} fa-2x"></i>
                          </td>
 --}}
                          <td>


                           <x-action-button href="{{ route('admin.services.edit',['service'=>$service]) }}" type="edit"></x-action-button>

                            <x-action-button href="{{ route('admin.services.show',['service'=>$service]) }}" type="show"></x-action-button>


                             <x-delete-button href="{{ route('admin.services.destroy',['service'=>$service]) }}"></x-delete-button>

                          </td>


                        </tr>
                        @endforeach
                        @else
<x-empty-alert></x-empty-alert>
                        @endif

                    </tbody>
                  </table>

                  {{ $services->render("pagination::bootstrap-4") }}
                </div>
              </div>
            </div> <!-- simple table -->

              </div>
            </div>
          </div>


    </div>


@endsection
