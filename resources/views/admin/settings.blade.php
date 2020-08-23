{{-- Extends layout --}}
@extends('layout.default')

{{-- Styles --}}
@section('styles')
    <link href="{{asset('css/pages/wizard/wizard-4.css')}}" rel="stylesheet" type="text/css" />
@endsection

{{-- Content --}}
@section('content')

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="row">
                    <!--begin::Card-->
                    <div class="col-md-2"></div>
                    <div class="card card-custom col-md-8">
                        <div class="card-header"><h3 class="card-title"><i class="fa la-user-lock text-success mr-5"></i>  Update Password</h3></div>
                        <div class="card-body p-0">
                            @include('layout._message')
                            <form action="{{route('update.password')}}" method="post" class="form" id="kt_form">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row ">
                                        <label class="col-form-label col-lg-3" for="current_password" >Current Password <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="password" name="current_password" id="current_password" class="form-control" />

                                            <div  id="cur_password_feedback"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-form-label col-lg-3">New Password <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="password" name="password" id="password" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-form-label col-lg-3" >Confirm Password <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="password" name="confirm_password" id="confirm_password" class="form-control " />
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-9 ml-lg-auto">
                                            <button type="submit" class="btn btn-primary font-weight-bold mr-2"><i class="la la-check"></i> Update Password</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end::Card-->

                    <div class="col-md-2"></div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->


@endsection

@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/additional-methods.min.js') }}" type="text/javascript"></script>

    <script>
        $().ready(function () {

           $('#current_password').keyup(function () {
               var current_pass = $('#current_password').val();
               $.ajax({
                  type: 'get',
                  url: '/admin/check-pwd',
                  data:{current_pass:current_pass},
                  success:function (resp) {
                      if(resp == 'false'){
                          $('#current_password').addClass('is-invalid');
                          $('#cur_password_feedback').html("<font color='red'>Current Password is Incorrect</font>");
                          $('#current_password-error').addClass('text-danger')
                      }else if(resp == 'true'){
                          $('#cur_password_feedback').html('');
                          $('#current_password').removeClass('is-invalid');
                          $('#current_password-error').removeClass('text-danger')
                      }
                  },error:function () {
                       alert('error');
                   }
               });
           });

            $('#kt_form').validate({
                rules:{
                    current_password: "required",
                    password: {
                        required: true,
                        minlength: 6,
                    },
                    confirm_password: {
                        required: true,
                        equalTo: "#password",
                    }
                },
                messages:{
                    current_password: "Please enter your old password",
                    password: {
                        required: "Please enter your new password",
                        minlength: "Your new password must be at least 6 characters long."
                    },
                    confirm_password: {
                        required: "Please enter your new password again to confirm it.",
                        equalTo: "Please enter the same password as above.",
                    }
                },
                highlight:function (element) {
                    $(element).addClass('is-invalid');
                    $('.error').addClass('text-danger');
                },
                unhighlight:function (element) {
                    $(element).removeClass('is-invalid');
                    $('div.help-inline').removeClass('text-danger');
                    $(element).addClass('is-valid');
                }
            });
        });

    </script>

@endsection
