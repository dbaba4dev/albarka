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

    <!--begin::Card-->
    <div class="card card-custom col-md-12">
        <!--begin::Header-->
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">Tickets History</span>
            </h3>
            <div class="card-toolbar">
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                    <!--begin::Trigger Modal-->
                    <a href="#" class="btn btn-success font-weight-bolder font-size-sm" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#modal_ticket">
                        New Ticket
                    </a>
                    <!--end::Trigger Modal-->

                </div>
                @include('admin.tickets.ticket_modal')
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
                        <th>Date</th>
                        <th>Time</th>
                        <th>Employee</th>
                        <th>User</th>
                        <th>Plate_No</th>
                        <th>Store</th>
                        <th>F. Station</th>
                        <th>Fuel</th>
                        <th>Qty</th>
                        <th>U. Price</th>
                        <th>Total Amount</th>
                        <th>S.Assist</th>
                        <th>Serial</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $ticket)
                            <tr>
                                <td>{{$ticket->id}}</td>
                                <td>{{\Carbon\Carbon::parse($ticket->created_at)->format('Y-m-d')}}</td>
                                <td>{{\Carbon\Carbon::parse($ticket->created_at)->format('H:i A')}}</td>
                                <?php $employee = $ticket->employee; ?>
                                <td>{{$employee->first_name .' '.$employee->surname}}</td>
                                <?php $employee = $ticket->user->admin->employee; ?>
                                <td>{{$employee->first_name .' '.$employee->surname}}</td>
                                <td>{{$ticket->plate_no}}</td>
                                <td>{{$ticket->store}}</td>
                                <td>{{$ticket->station->name}}</td>
                                <td>{{$ticket->fuel->name}}</td>
                                <td>{{$ticket->qty}}</td>
                                <td >{{number_format($ticket->unit_price, 2)}}</td>
                                <td >{{number_format($ticket->tot_price, 2)}}</td>
                                <td>{{$ticket->sales_assist}}</td>
                                <td>{{$ticket->serial}}</td>
                                <td>
                                    @if($ticket->status != 1)
                                        <a class="btn btn-outline-success btn-sm" href="{{route('admin.viewTicket',['id'=>$ticket->id])}}">Ticket</a>
                                    @endif
{{--                                    <a class="btn btn-outline-success btn-sm" href="{{route('admin.viewOrderInvoice',['id'=>$ViewsPages->id])}}">View Order Invoice</a>--}}
                                </td>

{{--                                                                                    <th></th>--}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->



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
        <script src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('js/buttons.flash.min.js')}}"></script>
        <script src="{{asset('js/jszip.min.js')}}"></script>
        <script src="{{asset('js/pdfmake.min.js')}}"></script>
        <script src="{{asset('js/vfs_fonts.js')}}"></script>
        <script src="{{asset('js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('js/buttons.print.min.js')}}"></script>

    <script>
        $().ready(function () {


            $('#filling_table').dataTable({
                "responsive": true,
                "autoWidth": false,
                "footer": true,
                "aaSorting": [ [0,'desc'], [1,'desc'] ],
                dom: 'Bfrtip',
                lengthMenu: [[10,25,50,100, -1], [10, 25, 50,100, "All"]],
                buttons: [
                    {
                        extend: "pdfHtml5",
                        // orientation: 'landscape',
                        exportOptions: {
                            columns: ':visible'
                        },
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
                    'excel',
                    'pageLength'
                ]
            });

            $('#ticketForm').on('submit',function (e) {
                e.preventDefault();
                // $(this).html('Sending..');

                $.ajax({
                    data: $('#ticketForm').serialize(),
                    url: "/ticket",
                    type: "POST",
                    success: function (data) {
                        $('#ticketForm').trigger("reset");
                        $('#modal_ticket').modal('toggle');
                        // table.draw();
                        location.reload();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#add_ticket').html('Save');

                    }
                });

            });

         /*   $('#stationForm').on('submit',function (e) {
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

            });*/

            $('#chkstore').click(function () {
                var status = $(this);
                if($(this). is(":checked")){
                    $('#store').val('Store');
                }
                else if($(this). is(":not(:checked)")){
                    $('#store').val('');
                }
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
            url: '/ticket/update',
            columns: {
                identifier: [0, 'id'],
                editable: [[9, 'qty'], [10, 'unit_price'], [12, 'sales_assist']],

            },
            restoreButton: false,
            onSuccess: function (data, textStatus, jqXHR) {
                if (data.action == 'delete'){
                    $('#'+data.id).remove();
                }
                console.log(data);

            },
            onFail(jqXHR, textStatus, errorThrown){
                console.log(data);
            }


        });
        // location.reload();
    </script>

@endsection
