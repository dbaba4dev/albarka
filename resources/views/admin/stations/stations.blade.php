{{-- Extends layout --}}
@extends('layout.default')

{{-- Styles --}}
@section('styles')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/buttons.dataTables.min.css')}}">
@endsection

{{-- Content --}}
@section('content')

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class=" container ">
                        <!--begin::Teachers-->
                        <div class="d-flex flex-row">
                            <!--begin::Aside-->
                            <div class="flex-md-row-auto w-md-275px w-xl-325px">
                                <!--begin::List Widget 17-->
                                <div class="card card-custom gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">Fuels</span>
                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Patronized Fuels</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <button class="btn font-weight-bolder font-size-sm btn-outline-success" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#modal_fuel">New Fuel</button>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    @include('admin.stations.fuel_modal')
                                    <!--begin::Body-->
                                    <div class="card-body pt-4">
                                        <!--begin::Container-->
                                        <div>
                                            <!--begin::Item-->
                                            @foreach($fuels as $fuel)
                                            <div class="d-flex align-items-center mb-8">

                                                <!--begin::Symbol-->
                                                <div class="symbol mr-5 pt-1">
                                                    <div class="symbol-label min-w-65px min-h-100px" style="background-image: url('{{asset("images/oil.jfif")}}')"></div>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Info-->
                                                <div class="d-flex flex-column">
                                                    <!--begin::Title-->
                                                    <a href="" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{$fuel->name}}</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <div class="d-flex flex-column">
                                                    <!--begin::Title-->
{{--                                                    <form action="{{route('fuel.delete', $fuel->id )}}" method="POST" >--}}
{{--                                                        {{method_field('DELETE')}}--}}
{{--                                                        @csrf--}}
{{--                                                        <a  class="text-danger ml-20 font-weight-bolder text-hover-primary"><i class="fa fa-trash text-danger mr-5"></i></a>--}}
{{--                                                    </form>--}}
                                                    <a href="{{route('fuel.delete',$fuel->id)}}" class="text-danger ml-20 font-weight-bolder text-hover-primary"><i class="fa fa-trash text-danger mr-5"></i></a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->

                                            </div>
                                            <!--end::Item-->
                                            @endforeach
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::List Widget 17-->

                                <!--end::List Widget 8-->
                            </div>
                            <!--end::Aside-->
                            <!--begin::Content-->
                            <div class="flex-row-fluid ml-lg-8">
                                <!--begin::Card-->
                                <div class="card card-custom">
                                    <!--begin::Header-->
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">Filling Stations</span>
                                            <span class="text-muted mt-1 font-weight-bold font-size-sm">Filling stations data</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                <!--begin::Trigger Modal-->
                                                <a href="#" class="btn btn-success font-weight-bolder font-size-sm" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#modal_station">
                                                    New Filling Station
                                                </a>
                                                <!--end::Trigger Modal-->

                                            </div>
                                            @include('admin.stations.station_modal')
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body">
                                      <div class="table-responsive">
                                          <table class="table" id="filling_table">
                                              <thead class="thead-light text-light">
                                              <tr>
                                                  <th>ID</th>
                                                  <th>Name</th>
                                                  <th>Address</th>
                                                  <th>Fuel</th>
                                                  <th>Price</th>
{{--                                                  <th></th>--}}
                                              </tr>
                                              </thead>
                                              <tbody>
                                              @foreach($stations as $station)
                                                <tr>
                                                    <td>{{$station->id}}</td>
                                                    <td>{{$station->name}}</td>
                                                    <td>{{$station->address}}</td>
                                                    <td>{{$station->fuel}}</td>
                                                    <td >{{number_format($station->price, 2)}}</td>
{{--                                                    <th></th>--}}
                                                </tr>
                                              @endforeach
                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Teachers-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{asset('js/pages/custom/education/school/teachers.js')}}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/additional-methods.min.js') }}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/pages/crud/datatables/advanced/column-rendering.js')}}"></script>
    <script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/jquery.tabledit.min.js')}}"></script>
{{--    <script src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>--}}
{{--    <script src="{{asset('js/dataTables.buttons.min.js')}}"></script>--}}
{{--    <script src="{{asset('js/buttons.flash.min.js')}}"></script>--}}
{{--    <script src="{{asset('js/jszip.min.js')}}"></script>--}}
{{--    <script src="{{asset('js/pdfmake.min.js')}}"></script>--}}
{{--    <script src="{{asset('js/vfs_fonts.js')}}"></script>--}}
{{--    <script src="{{asset('js/buttons.html5.min.js')}}"></script>--}}
{{--    <script src="{{asset('js/buttons.print.min.js')}}"></script>--}}

<script>
    $().ready(function () {

        $('#filling_table').dataTable();

        $('#fuelForm').on('submit',function (e) {
            e.preventDefault();
            // $(this).html('Sending..');

            $.ajax({
                data: $('#fuelForm').serialize(),
                url: "/fuel",
                type: "POST",
                success: function (data) {
                    $('#fuelForm').trigger("reset");
                    $('#modal_fuel').modal('toggle');
                    // table.draw();
                    location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#add_fuel').html('Save');

                }
            });

        });

        $('#stationForm').on('submit',function (e) {
            e.preventDefault();
            // $(this).html('Sending..');add_fillingStn

            $.ajax({
                data: $('#stationForm').serialize(),
                url: "/station",
                type: "POST",
                success: function (data) {
                    $('#stationForm').trigger("reset");
                    $('#modal_station').modal('toggle');
                    location.reload();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#add_fillingStn').html('Save');
                }
            });

        });
    })
</script>

    <script>
        $('#filling_table').Tabledit({
            editButton: true,
            removeButton: true,
            buttons: {
                edit: {
                    class: 'btn btn-sm btn-success',
                    html: '<span class="fas fa-pencil-alt"></span>',
                    action: 'edit'
                },
                delete: {
                    class: 'btn btn-sm btn-danger',
                    html: '<span class="far fa-trash-alt"></span>',
                    action: 'delete'
                },
                save: {
                    class: 'btn btn-sm btn-primary',
                    html: 'Save'
                },
                confirm: {
                    class: 'btn btn-sm btn-danger',
                    html: 'Confirm'
                }
            },
            url: '/stations/edit',
            columns: {
                identifier: [0, 'id'],
                editable: [[1, 'name'], [2, 'address'], [3, 'fuel'],  [4, 'price']],

            },
            restoreButton: false,
            onSuccess: function (data, textStatus, jqXHR) {
                if (data.action == 'delete'){
                    $('#'+data.id).remove();
                    location.reload();
                }
            },

        });
    </script>

@endsection
