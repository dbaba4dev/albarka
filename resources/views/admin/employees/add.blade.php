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
            <div class=" container ">
                <!--begin::Card-->
                <div class="card card-custom card-transparent">
                    <div class="card-body p-0">
                        <!--begin::Wizard-->
                        <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
                            <!--begin::Wizard Nav-->
                            <div class="wizard-nav">
                                <div class="wizard-steps">
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-number">
                                                1
                                            </div>
                                            <div class="wizard-label">
                                                <div class="wizard-title">
                                                    Profile
                                                </div>
                                                <div class="wizard-desc">
                                                    Employee's Personal Infor.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-number">
                                                2
                                            </div>
                                            <div class="wizard-label">
                                                <div class="wizard-title">
                                                    Account
                                                </div>
                                                <div class="wizard-desc">
                                                    Employee's Account & Settings
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-number">
                                                3
                                            </div>
                                            <div class="wizard-label">
                                                <div class="wizard-title">
                                                    Address
                                                </div>
                                                <div class="wizard-desc">
                                                    Employee's Address
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-number">
                                                4
                                            </div>
                                            <div class="wizard-label">
                                                <div class="wizard-title">
                                                    Submission
                                                </div>
                                                <div class="wizard-desc">
                                                    Review and Submit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Nav-->

                            <!--begin::Card-->
                            <div class="card card-custom card-shadowless rounded-top-0">
                                <!--begin::Body-->
                                <div class="card-body p-0">
                                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                        <div class="col-xl-12 col-xxl-10">
                                            <!--begin::Wizard Form-->
                                            <form class="form" id="kt_form" enctype="multipart/form-data">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-9">
                                                        <!--begin::Wizard Step 1-->
                                                        <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
                                                            <h5 class="text-dark font-weight-bold mb-10">Employee's Profile Details:</h5>
                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label text-left">Avatar</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <div class="image-input image-input-outline" id="kt_user_add_avatar">
                                                                        <div class="image-input-wrapper" style="background-image: url({{asset('media/users/blank.png')}})"></div>

                                                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                                            <input type="file" name="profile_avatar" id="avatar" accept=".png, .jpg, .jpeg"/>
                                                                            <input type="hidden" name="profile_avatar_remove"/>
                                                                        </label>

                                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
        						                            <i class="ki ki-bold-close icon-xs text-muted"></i>
        						                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->
                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control form-control-solid form-control-lg" name="firstname" id="firstname" type="text" value="" />
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->
                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control form-control-solid form-control-lg" name="lastname" id="lastname" type="text" value="" />
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->
                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label" for="category">Employee Category</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <select class="form-control  form-control-solid form-control-lg" id="category" name="category_id">
                                                                        <option value="" selected disabled>Select Employee Category</option>
                                                                        @foreach($categories as $category)
                                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->
                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <div class="input-group input-group-solid input-group-lg">
                                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                                        <input type="text" class="form-control form-control-solid form-control-lg" id="phone" name="phone" value="" placeholder="Phone" />
                                                                    </div>
                                                                    <span class="form-text text-muted">Enter valid phone number(e.g: 08022669600).</span>
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->
                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <div class="input-group input-group-solid input-group-lg">
                                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                                        <input type="text" class="form-control form-control-solid form-control-lg" id="email" name="email" value="" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->
                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">Joined on</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <div class="input-group input-group-solid input-group-lg date"  data-provide="datepicker">
                                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="joined"  value="" id="joined"/>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">
                                                                                <i class="la la-calendar"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
{{--                                                                    <div class="input-group date" data-provide="datepicker">--}}
{{--                                                                        <input type="text" class="form-control">--}}
{{--                                                                        <div class="input-group-addon">--}}
{{--                                                                            <span class="glyphicon glyphicon-th"></span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->
                                                        </div>
                                                        <!--end::Wizard Step 1-->

                                                        <!--begin::Wizard Step 2-->
                                                        <div class="my-5 step" data-wizard-type="step-content">
                                                            <h5 class="text-dark font-weight-bold mb-10 mt-5">Employee's Account Details</h5>
                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-form-label col-xl-3 col-lg-3">Account Type</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <select class="form-control form-control-lg form-control-solid" id="payment_type" name="payment_type">
                                                                        <option value="">Select Account Type</option>
                                                                        <option value="commission">Commission</option>
                                                                        <option value="salary">Salary</option>
                                                                        <option value="both">Commission & Salary</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->
                                                            <!--begin::Group-->
                                                            <div class="form-group row" id="salary_row">
                                                                <label class="col-form-label col-xl-3 col-lg-3">Salary Amount (&#8358)</label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <div class="input-group input-group-solid input-group-lg">
                                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-money-bill"></i></span></div>
                                                                        <input type="text" class="form-control form-control-solid form-control-lg" id="salary" name="salary" value="" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->
                                                            <!--begin::Group-->
                                                            <div class="form-group row" id="factor_row">
                                                                <label class="col-form-label col-xl-3 col-lg-3">Factor </label>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <div class="input-group input-group-solid input-group-lg">
                                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-balance-scale"></i></span></div>
                                                                        <input type="text" class="form-control form-control-solid form-control-lg" id="factor" name="factor" value="" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->

                                                        </div>
                                                        <!--end::Wizard Step 2-->

                                                        <!--begin::Wizard Step 3-->
                                                        <div class="my-5 step" data-wizard-type="step-content">
                                                            <h5 class="mb-10 font-weight-bold text-dark">Setup Your Address</h5>

                                                            <!--begin::Group-->
                                                            <div class="form-group">
                                                                <label>Contact Address</label>
                                                                <input type="text" class="form-control form-control-solid form-control-lg" id="address" name="address" placeholder="Contact Address"  />
                                                                <span class="form-text text-muted">Please enter your Address.</span>
                                                            </div>
                                                            <!--end::Group-->

                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <!--begin::Group-->
                                                                    <div class="form-group">
                                                                        <label>State</label>
                                                                        <select name="state_id" id="state" class="form-control form-control-solid form-control-lg" >
                                                                            <option value="">Select State of Origin</option>
                                                                            @foreach($states as $state)
                                                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Group-->
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!--begin::Group-->
                                                                    <div class="form-group">
                                                                        <label>LGA</label>
                                                                        <select name="lga_id" id="lga" class="form-control form-control-solid form-control-lg" >
                                                                            <option value="">Select LGA</option>
{{--                                                                            @foreach($lgas as $lga)--}}
{{--                                                                                <option value="{{$lga->id}}">{{$lga->name}}</option>--}}
{{--                                                                            @endforeach--}}
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Group-->
                                                                </div>

                                                            </div>
                                                            <!--end::Row-->
                                                            <div class="separator separator-dashed my-10"></div>
                                                            <h5 class="mb-10 font-weight-bold text-dark">Next of Kin (Details)</h5>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <!--begin::Group-->
                                                                    <div class="form-group">
                                                                        <label>Full Name </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-lg" id="name_kin" name="name_kin" placeholder="Enter the Full name of Next of kin" value="" />
                                                                        <span class="form-text text-muted">Enter the Full name of Next of kin</span>
                                                                    </div>
                                                                    <!--end::Group-->
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!--begin::Group-->
                                                                    <div class="form-group">
                                                                        <label>Relationship </label>
                                                                        <input type="text" class="form-control form-control-solid form-control-lg" id="relationship_kin" name="relationship_kin" placeholder="Enter the relationship with the Next of kin" value="" />
                                                                        <span class="form-text text-muted">Enter the relationship with the Next of kin</span>
                                                                    </div>
                                                                    <!--end::Group-->
                                                                </div>

                                                            </div>
                                                            <!--begin::Group-->
                                                            <div class="form-group">
                                                                <label>Contact phone</label>
                                                                <div class="input-group input-group-solid input-group-lg">
                                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" id="phone_kin" name="phone_kin" value="" placeholder="Phone" />
                                                                </div>
                                                                <span class="form-text text-muted">Enter valid phone number of the next of kin(e.g: 08022669600).</span>
                                                            </div>

                                                            <!--begin::Group-->
                                                            <div class="form-group">
                                                                <label>Contact Address</label>
                                                                <input type="text" class="form-control form-control-solid form-control-lg" id="address_kin" name="address_kin" placeholder="Contact Address" />
                                                                <span class="form-text text-muted">Please enter full address of the next of kin.</span>
                                                            </div>
                                                            <!--end::Group-->


                                                        </div>
                                                        <!--end::Wizard Step 3-->

                                                        <!--begin::Wizard Step 4-->
                                                        <div class="my-5 step" data-wizard-type="step-content">
                                                            <h5 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h5>

                                                            <!--begin::Item-->
                                                           <p>You may review your Details by clicking on each of the Tap before submitting the form.</p>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
{{--                                                            <div>--}}
{{--                                                                <div class="font-weight-bolder ">--}}
{{--                                                                    Payment Details:--}}
{{--                                                                </div>--}}
{{--                                                                <div class="line-height-xl">--}}
{{--                                                                    Card Number: xxxx xxxx xxxx 1111--}}
{{--                                                                    <br/> Card Name: John Wick--}}
{{--                                                                    <br/> Card Expiry: 01/21--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Wizard Step 4-->

                                                        <!--begin::Wizard Actions-->
                                                        <div class="d-flex justify-content-between border-top pt-10 mt-15">
                                                            <div class="mr-2">
                                                                <button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-9 py-4" data-wizard-type="action-prev">
                                                                    Previous
                                                                </button>
                                                            </div>
                                                            <div>
                                                                <button type="button" class="btn btn-success font-weight-bolder px-9 py-4" id="submit" data-wizard-type="action-submit">
                                                                    Submit
                                                                </button>

                                                                <button type="button" onsubmit="return validateForm()" id="next-step" class="btn btn-primary font-weight-bolder px-9 py-4" data-wizard-type="action-next">
                                                                    Next
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Actions-->
                                                    </div>
                                                </div>
                                            </form>
                                            <!--end::Wizard Form-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Wizard-->
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
{{--    <script src="assets/js/pages/custom/user/add-user.js?v=7.0.6"></script>--}}
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/custom/user/add-user.js') }}" type="text/javascript"></script>

<script>
    // Class definition
    var KTSelect2 = function() {
        // Private functions
        var select2 = function() {
            // basic
            $('#category').select2({
                placeholder: "Select Employee Category"
            });
        };

        // Public functions
        return {
            init: function() {
                select2();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        KTSelect2.init();
    });

    $('.datepicker').datepicker();

    FormValidation
        .formValidation(
            form,
            {
                fields: {
                    ...
                },
                plugins: {
                    ...
                },
            }
        )
        .on('core.element.validated', function(e) {
            // e.element presents the field element
            // e.valid indicates the field is valid or not
            if (e.valid) {
                // Remove has-success from the container
                const groupEle = FormValidation.utils.closest(e.element, '.form-group');
                if (groupEle) {
                    FormValidation.utils.classSet(groupEle, {
                        'has-success': false,
                    });
                }

                // Remove is-valid from the element
                FormValidation.utils.classSet(e.element, {
                    'is-valid': false,
                });
            }
        });
</script>
<script>
    jQuery(document).ready(function ()
    {
        jQuery('select[name="state_id"]').on('change',function(){
            var stateID = jQuery(this).val();
            if(stateID)
            {
                jQuery.ajax({
                    url : 'state/' +stateID,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                        console.log(data);
                        jQuery('select[name="lga_id"]').empty();
                        jQuery.each(data, function(key,value){
                            jQuery('select[name="lga_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }
            else
            {
                $('select[name="lga_id"]').empty();
            }
        });

        $('#submit').on('click', function (e) {
            var fd = new FormData($("#kt_form")[0]);
            fd.append('SaveAccountChanges', true);

            // var $image = $('#avatar').val();
            // var $firstname = $('#firstname').val();
            // var $lastname = $('#lastname').val();
            // var $category_id = $('#category').val();
            // var $phone = $('#phone').val();
            // var $email = $('#email').val();
            // var $joined = $('#joined').val();
            // var $payment_type = $('#payment_type').val();
            // var $factor = $('#factor').val();
            // var $address = $('#address').val();
            // var $state_id = $('#state').val();
            // var $lga_id = $('#lga').val();
            // var $name_kin = $('#name_kin').val();
            // var $relation_kin = $('#relationship_kin').val();
            // var $phone_kin = $('#phone_kin').val();
            // var $address_kin = $('#address_kin').val();

            $.ajax({
                url : '/employees',
                type: 'POST',
                data: fd,
                contentType: false,
                processData: false,
                // data: {firstname:$firstname, lastname:$lastname, category_id:$category_id, phone:$phone, email:$email,
                //     joined:$joined, payment_type:$payment_type, factor:$factor, address:$address, state_id:$state_id,
                //     lga_id:$lga_id, name_kin:$name_kin, relation_kin:$relation_kin, phone_kin:$phone_kin, address_kin:$address_kin, image:$image},
            }).done(function(response){ //
                console.log(response)
            });
        })

    });

</script>


<script>
    $('#factor_row').hide();
    $('#salary_row').hide();
    $(document).on('change', '#payment_type', function () {
        var type = $(this).val();
        if(type == 'commission')
        {
            $('#factor_row').show();
            // $('#factor').attr('required', true);

            $('#salary_row').hide();
            // $('#salary').attr('required', false);
        }

        if(type == 'salary')
        {
            $('#factor_row').hide();
            // $('#factor').attr('required', false);

            $('#salary_row').show();
            // $('#salary').attr('required', true);
        }

        if(type == 'both')
        {
            $('#factor_row').show();
            // $('#factor').attr('required', true);

            $('#salary_row').show();
            // $('#salary').attr('required', true);
        }
    })
</script>


@endsection
