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
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">
                                Employees List
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Dropdown-->
                          {{--  <div class="dropdown dropdown-inline mr-2">
                                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"/>
        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>		Export
                                </button>

                                <!--begin::Dropdown Menu-->
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi flex-column navi-hover py-2">
                                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                            Choose an option:
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="la la-print"></i></span>
                                                <span class="navi-text">Print</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="la la-copy"></i></span>
                                                <span class="navi-text">Copy</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                <span class="navi-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                <span class="navi-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                <span class="navi-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                                <!--end::Dropdown Menu-->
                            </div>--}}
                            <!--end::Dropdown-->

                            <!--begin::Button-->
                          {{--  <a href="#" class="btn btn-primary font-weight-bolder">
	<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" cx="9" cy="15" r="6"/>
        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>	New Record
                            </a>--}}
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-separate table-striped table-head-custom table-checkable" id="employee_list">
                            <thead >
                            <tr>
                                <th>ID</th>
{{--                                <th>Photo</th>--}}
                                <th>Name</th>
                                <th>Account Type</th>
                                <th>Balance</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($employees as $employee)
                                <tr >
                                    <td class="text-center">{{$employee->id}}</td>
                                    <td>
                                        <img height="40px" width="40px" style="border-radius: 8px; padding-left: 3px" src="{{asset(!empty($employee->photo) ? $employee->photo->file : '/images/employees/default.jpg')}}" alt="">
                                        {{$employee->first_name .' '.  $employee->surname }}
                                    </td>
                                    <td >{{$employee->payment_type}}</td>
                                    <td class="text-center">{{$employee->balance}}</td>
                                    <td class="text-center">{{$employee->phone}}</td>
                                    <td>{{$employee->address}}</td>
                                    <td class="text-center">
                                        @if($employee->status == 1)
                                            <span class="label label-inline label-light-success font-weight-bold text-danger">
                                                Active
                                            </span>
                                        @else
                                            <span class="label label-inline label-light-danger font-weight-bold">
                                                Deactivated
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                    <div class="row justify-content-center " style="margin: 0">
                                        <a href="{{url('employees/'.$employee->id.'/edit')}}" role="button" style="margin-top: 8px; "> <i class="fa fa-pen text-success"></i> |</a>
                                        <form action="{{route('employees.destroy', $employee->id )}}" method="POST" >
                                            {{method_field('DELETE')}}
                                            @csrf
                                            <button rel="{{$employee->id}}" type="submit" role="button" class="btn btn-sm delete" style="color: darkred"> <i class="fa fa-trash text-danger"></i> </button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                                </tr>
                            @endforeach
{{--                            <tr>--}}
{{--                                <td>1</td>--}}
{{--                                <td>1</td>--}}
{{--                                <td>1</td>--}}
{{--                                <td>hboule0@hp.com</td>--}}
{{--                                <td>Hayes Boule</td>--}}
{{--                                <td>Casper-Kerluke</td>--}}
{{--                                <td>5</td>--}}
{{--                                <td>1</td>--}}
{{--                                <td nowrap></td>--}}
{{--                            </tr>--}}

                            </tbody>

                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/pages/crud/datatables/advanced/column-rendering.js')}}"></script>
    <script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('js/jszip.min.js')}}"></script>
    <script src="{{asset('js/pdfmake.min.js')}}"></script>
    <script src="{{asset('js/vfs_fonts.js')}}"></script>
    <script src="{{asset('js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('js/buttons.print.min.js')}}"></script>

    <script>
        $('#employee_list').dataTable({
            "responsive": true,
            "autoWidth": false,
            "footer": true,
            "aaSorting": [ [0,'desc'], [1,'desc'] ],
            dom: 'Bfrtip',
            lengthMenu: [[10,25,50,100, -1], [10, 25, 50,100, "All"]],
            buttons: [
                'excel',
                {
                    extend: "pdfHtml5",

                    customize: function(doc) {
                        doc['footer'] = (function(page, pages) {
                            return {
                                columns: [
                                    {
                                        alignment: 'center',
                                        text: [
                                            { text: page.toString(), italics: true },
                                            ' of ',
                                            { text: pages.toString(), italics: true }
                                        ]
                                    }],
                                margin: [10, 0]
                            }
                        });
                    }
                },
                'print',
                'pageLength'
            ],

        });
    </script>

    <script>
        $(document).on('click', '.delete', function (e) {
            e.preventDefault();
            var id = $(this).attr('rel');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    Swal.fire(
                        "Deleted!",
                        "Your file has been deleted.",
                        "success",

                    );
                    $.ajax({
                        url: '/employees/'+id,
                        method: 'DELETE',
                        success: function(response) {
                            console.log(response)
                        }
                    });
                    location.reload()
                    // window.location.href = '/employeeCategories/'+id;
                    // result.dismiss can be "cancel", "overlay",
                    // "close", and "timer"
                } else if (result.dismiss === "cancel") {
                    Swal.fire(
                        "Cancelled",
                        "Your imaginary file is safe :)",
                        "error"
                    )
                }
            });


        });
    </script>
@endsection
