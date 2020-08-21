{{-- Extends layout --}}
@extends('layout.default')

{{-- Styles --}}
@section('styles')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/buttons.dataTables.min.css')}}">
    <style>
        table.blueTable {
            border: 1px solid #1C6EA4;
            background-color: #EEEEEE;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }
        table.blueTable td, table.blueTable th {
            border: 1px solid #AAAAAA;
            padding: 3px 2px;
        }
        table.blueTable tbody td {
            font-size: 13px;
        }
        table.blueTable tr:nth-child(even) {
            background: #D0E4F5;
        }
        table.blueTable thead {
            background: #1C6EA4;
            background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            border-bottom: 2px solid #444444;
        }
        table.blueTable thead th {
            font-size: 15px;
            font-weight: bold;
            color: #FFFFFF !important;
            border-left: 2px solid #D0E4F5;
        }
        table.blueTable thead th:first-child {
            border-left: none;
        }

        table.blueTable tfoot {
            font-size: 14px;
            font-weight: bold;
            color: #FFFFFF;
            background: #D0E4F5;
            background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
            background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
            background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
            border-top: 2px solid #444444;
        }
        table.blueTable tfoot td {
            font-size: 14px;
        }
        table.blueTable tfoot .links {
            text-align: right;
        }
        table.blueTable tfoot .links a{
            display: inline-block;
            background: #1C6EA4;
            color: #FFFFFF;
            padding: 2px 8px;
            border-radius: 5px;
        }
    </style>
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
                <div class="card card-custom card-transparent ">
                    <div class="card-body p-0">
                        <!--begin::Form-->
                        @include('layout._message')
                        <form action="{{route('employeeCategories.update', $category->id )}}" method="POST" >
                            {{method_field('PUT')}}
                            @csrf

                            <div class="row justify-content-center">
                                <div class="form-group col-md-4 col-sm-6 justify-content-center mt-3">
                                    <label for="name"><span class="text-danger">*</span> <strong>Category name</strong></label>
                                    <div class="input-group">
                                        <input type="text"  class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" placeholder="Enter Category Name ..." value="{{$category->name}}"/>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="submit">Update Category</button>
                                        </div>
                                        @if($errors->has('name'))
                                            <div class="invalid-feedback">
                                                <strong>{{$errors->first('name')}}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
        <div class="container">
            <div class="card">
                <div class="card-header"><h3>Employee's Categories</h3></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="blueTable table" id="category_list">
                            <thead style="color: white; font-weight: bold">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Created On</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{\Carbon\Carbon::parse($category->created_at)->toFormattedDateString()}}</td>
                                    <td class="text-center">
                                        <a href="{{url('employeeCategories/'.$category->id.'/edit')}}" role="button" > <i class="fa fa-pen text-success"></i> </a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{route('employeeCategories.destroy', $category->id )}}" method="POST" >
                                            {{method_field('DELETE')}}
                                            @csrf
                                            <button type="submit" role="button" class="btn btn-sm" onclick="return confirm('Are you sure?')" style="color: darkred"> <i class="fa fa-trash text-danger"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content-->


@endsection

{{-- Scripts Section --}}
@section('scripts')

    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
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
        $(document).ready(function() {
            $('#category_list').DataTable( {
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
                ]
            } );
        } );
    </script>
@endsection
