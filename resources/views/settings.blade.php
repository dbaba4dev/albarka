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
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <div class="card-header"><h3 class="card-title"><i class="fa la-cog text-success mr-5"></i>  Site Settings</h3></div>
                            @include('layout._message')
                            <form action="{{route('update.settings')}}" method="post" id="setting">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Site Name:</label>
                                        <div class="col-lg-10">
                                            <input type="email" name="site_name" value="{{$setting->site_name}}" class="form-control" placeholder="Enter full name"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Email:</label>
                                        <div class="col-lg-10">
                                            <input type="email"  name="site_name" value="{{$setting->site_name}}" class="form-control" placeholder="Enter email"/>
                                            <span class="form-text text-muted">Enter the site email address here</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Address: </label>
                                        <div class="col-lg-10">
                                            <input type="email"  name="site_name" value="{{$setting->site_name}}" class="form-control" placeholder="Enter Site Address"/>
                                            <span class="form-text text-muted">Enter the site email address here</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Contact</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone text-primary"></i></span></div>
                                                <input type="tel"  name="site_name" value="{{$setting->contact_number}}" class="form-control" placeholder="Phone number"/>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class="row justify-content-center">
                                        <button type="submit" class="btn btn-outline-success mr-2"><i class="la la-check"></i> Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end::Card-->
                    </div>
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <div class="card-header"><h3 class="card-title"><i class="fa la-cog text-success mr-5"></i>  Site Settings</h3></div>
                            @include('layout._message')
                            <form action="" method="post" id="setting">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Site Name:</label>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" placeholder="Enter full name"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Email address:</label>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" placeholder="Enter email"/>
                                            <span class="form-text text-muted">Enter the site email address here</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Address: </label>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" placeholder="Enter Site Address"/>
                                            <span class="form-text text-muted">Enter the site email address here</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Contact</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone text-primary"></i></span></div>
                                                <input type="text" class="form-control" placeholder="Phone number"/>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <button type="reset" class="btn btn-success mr-2">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end::Card-->
                    </div>


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
