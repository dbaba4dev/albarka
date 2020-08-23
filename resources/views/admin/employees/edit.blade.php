{{-- Extends layout --}}
@extends('layout.default')

{{-- Styles --}}
@section('styles')
    <link href="{{asset('css/pages/wizard/wizard-4.css')}}" rel="stylesheet" type="text/css"/>
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
                    <!--begin::Card header-->
                    <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                                <!--begin::Item-->
                                <li class="nav-item mr-3">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
                                            <span class="nav-icon"><span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path
            d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
            fill="#000000" fill-rule="nonzero"/>
        <path
            d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
            fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span></span>
                                        <span class="nav-text font-size-lg">Profile</span>
                                    </a>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="nav-item mr-3">
                                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2">
                                            <span class="nav-icon"><span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path
            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path
            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
            fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span></span>
                                        <span class="nav-text font-size-lg">Account</span>
                                    </a>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="nav-item mr-3">
                                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3">
                                            <span class="nav-icon"><span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
            fill="#000000" opacity="0.3"/>
        <path
            d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
            fill="#000000" opacity="0.3"/>
        <path
            d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
            fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span></span>
                                        <span class="nav-text font-size-lg">Address</span>
                                    </a>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_4">--}}
{{--                                            <span class="nav-icon"><span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg--><svg--}}
{{--                                                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"--}}
{{--                                                        height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--        <rect x="0" y="0" width="24" height="24"/>--}}
{{--        <path--}}
{{--            d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"--}}
{{--            fill="#000000" opacity="0.3"/>--}}
{{--        <path--}}
{{--            d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"--}}
{{--            fill="#000000"/>--}}
{{--    </g>--}}
{{--</svg><!--end::Svg Icon--></span></span>--}}
{{--                                        <span class="nav-text font-size-lg">Settings</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                                <!--end::Item-->
                            </ul>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body px-0">
                        <form action="{{route('employees.update', $employee->id)}}" method="POST" class="form" id="kt_form" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="tab-content">
                                <!--begin::Tab-->
                                <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7 my-2">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <label class="col-3"></label>
                                                <div class="col-9">
                                                    <h6 class=" text-dark font-weight-bold mb-10">Customer Info:</h6>
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Avatar</label>
                                                <div class="col-9">
                                                    <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" >
                                                        <div class="image-input-wrapper" style="background-image: url('{{!empty($employee->photo) ? asset($employee->photo->file) : asset('media/users/blank.png')}}');"></div>

                                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow " data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                            <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
                                                            <input type="hidden" name="profile_avatar_remove"/>
                                                        </label>

                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>

                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
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
                                                    <input class="form-control form-control-solid form-control-lg {{$errors->has('firstname') ? 'is-invalid' : ''}}" name="firstname" id="firstname" type="text" value="{{$employee->first_name}}" />
                                                </div>
                                                @if($errors->has('firstname'))
                                                    <div class="invalid-feedback">
                                                        <strong>{{$errors->first('firstname')}}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control form-control-solid form-control-lg {{$errors->has('lastname') ? 'is-invalid' : ''}}" name="lastname" id="lastname" type="text" value="{{$employee->surname}}" />
                                                </div>
                                                @if($errors->has('lastname'))
                                                    <div class="invalid-feedback">
                                                        <strong>{{$errors->first('lastname')}}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label" for="category">Employee Category</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <select class="form-control  form-control-solid form-control-lg {{$errors->has('category_id') ? 'is-invalid' : ''}}" id="category" name="category_id">
                                                        <option value="" selected disabled>Select Employee Category</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}"
                                                            @if($employee->category_id == $category->id)
                                                             selected
                                                            @endif
                                                            >{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @if($errors->has('category_id'))
                                                    <div class="invalid-feedback">
                                                        <strong>{{$errors->first('category_id')}}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="input-group input-group-solid input-group-lg">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                        <input type="text" class="form-control form-control-solid form-control-lg {{$errors->has('phone') ? 'is-invalid' : ''}}" id="phone" name="phone" value="{{$employee->phone}} " placeholder="Phone" />
                                                    </div>
                                                    @if($errors->has('phone'))
                                                        <div class="invalid-feedback">
                                                            <strong>{{$errors->first('phone')}}</strong>
                                                        </div>
                                                    @endif
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
                                                        <input type="text" class="form-control form-control-solid form-control-lg {{$errors->has('email') ? 'is-invalid' : ''}}" id="email" name="email" value="{{$employee->email}}" />
                                                    </div>
                                                    @if($errors->has('email'))
                                                        <div class="invalid-feedback">
                                                            <strong>{{$errors->first('email')}}</strong>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Joined on</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="input-group input-group-solid input-group-lg date"  data-provide="datepicker">
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="joined"  value="{{$employee->joined}}" id="joined"/>
                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">
                                                                                <i class="la la-calendar"></i>
                                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tab-->

                                <!--begin::Tab-->
                                <div class="tab-pane px-7 mx-39" id="kt_user_edit_tab_2" role="tabpanel">

                                    <h5 class="text-dark font-weight-bold mb-10 mt-5">Update Account Details</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label class="col-form-label col-xl-3 col-lg-3">Account Type</label>
                                        <div class="col-xl-9 col-lg-9">
                                            <select class="form-control form-control-lg form-control-solid" id="payment_type" name="payment_type">
                                                <option value="">Select Account Type</option>
                                                <option value="commission" {{$employee->payment_type == 'commission' ? 'selected' : ''}}>Commission</option>
                                                <option value="salary" {{$employee->payment_type == 'salary' ? 'selected' : ''}}>Salary</option>
                                                <option value="both" {{$employee->payment_type == 'both' ? 'selected' : ''}}>Commission & Salary</option>
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
                                                <input type="text" class="form-control form-control-solid form-control-lg" id="salary" name="salary" value="{{$employee->salary}}" />
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
                                                <input type="text" class="form-control form-control-solid form-control-lg" id="factor" name="factor" value="{{$employee->factor}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <div class="form-group row" id="factor_row">
                                        <label class="col-3 col-form-label">Is active</label>
                                        <div class="col-3">
                                            <span class="switch switch-icon">
                                                <label>
                                                    <input type="checkbox" checked="{{$employee->status==1 ? 'checked' : ''}}"  name="status_tmp" id="status_tmp"/>
                                                    <input type="hidden" name="status" id="status">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--end::Tab-->

                                <!--begin::Tab-->
                                <div class="tab-pane px-7" id="kt_user_edit_tab_3" role="tabpanel">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <div class="col-xl-2"></div>
                                            <div class="col-xl-7">
                                                <h5 class="mb-10 font-weight-bold text-dark">Update Address</h5>

                                                <!--begin::Group-->
                                                <div class="form-group">
                                                    <label>Contact Address</label>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" id="address" name="address" placeholder="Contact Address" value="{{$employee->address}}"  />
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
                                                                    <option value="{{$state->id}}"
                                                                     @if($employee->state_id == $state->id)
                                                                        selected
                                                                     @endif
                                                                    >{{$state->name}}</option>
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
                                                                <option value="{{$employee->lga_id}}" selected>{{$employee->lga->name}}</option>

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
                                                            <input type="text" class="form-control form-control-solid form-control-lg" id="name_kin" name="name_kin" placeholder="Enter the Full name of Next of kin" value="{{$employee->next_of_king_name}}" />
                                                            <span class="form-text text-muted">Enter the Full name of Next of kin</span>
                                                        </div>
                                                        <!--end::Group-->
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <!--begin::Group-->
                                                        <div class="form-group">
                                                            <label>Relationship </label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" id="relationship_kin" name="relationship_kin" placeholder="Enter the relationship with the Next of kin" value="{{$employee->next_of_king_relationship}}" />
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
                                                        <input type="text" class="form-control form-control-solid form-control-lg" id="phone_kin" name="phone_kin" value="{{$employee->next_of_king_phone}}" placeholder="Phone" />
                                                    </div>
                                                    <span class="form-text text-muted">Enter valid phone number of the next of kin(e.g: 08022669600).</span>
                                                </div>

                                                <!--begin::Group-->
                                                <div class="form-group">
                                                    <label>Contact Address</label>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" id="address_kin" name="address_kin" placeholder="Contact Address" value="{{$employee->next_of_king_address}}" />
                                                    <span class="form-text text-muted">Please enter full address of the next of kin.</span>
                                                </div>
                                                <!--end::Group-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Body-->

                                    <!--begin::Footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row">
                                            <div class="col-xl-2"></div>
                                            <div class="col-xl-7">
                                                <div class="row">
                                                    <div class="col-3"></div>
                                                    <div class="col-9">
                                                        <button type="submit" class="btn btn-light-primary font-weight-bold">Save changes</button>

                                                        <a href="#" class="btn btn-clean font-weight-bold">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Footer-->
                                </div>
                                <!--end::Tab-->

                            </div>
                        </form>
                    </div>
                    <!--begin::Card body-->
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
    <script src="{{ asset('js/pages/custom/user/edit-user.js') }}" type="text/javascript"></script>

    <script>
        // Class definition
        var KTSelect2 = function () {
            // Private functions
            var select2 = function () {
                // basic
                $('#category').select2({
                    placeholder: "Select Employee Category"
                });
            };

            // Public functions
            return {
                init: function () {
                    select2();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function () {
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
            .on('core.element.validated', function (e) {
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
        jQuery(document).ready(function () {
            jQuery('select[name="state_id"]').on('change', function () {
                var stateID = jQuery(this).val();
                if (stateID) {
                    jQuery.ajax({
                        url: '/state/' + stateID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            jQuery('select[name="lga_id"]').empty();
                            jQuery.each(data, function (key, value) {
                                jQuery('select[name="lga_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="lga_id"]').empty();
                }
            });

            // $('#submit').on('click', function () {
            //     var fd = new FormData($("#kt_form")[0]);
            //     fd.append('SaveAccountChanges', true);
            //
            //     $.ajax({
            //         url: '/employees',
            //         type: 'POST',
            //         data: fd,
            //         contentType: false,
            //         processData: false,
            //
            //     }).done(function () { //
            //         location.reload();
            //     });
            // })

        });

    </script>


    <script>

        var type_selecetd = $('#payment_type').val();
        if (type_selecetd == 'commission') {
            $('#factor_row').show();
            // $('#factor').attr('required', true);

            $('#salary_row').hide();
            // $('#salary').attr('required', false);
        }

        if (type_selecetd == 'salary') {
            $('#factor_row').hide();
            // $('#factor').attr('required', false);

            $('#salary_row').show();
            // $('#salary').attr('required', true);
        }

        if (type_selecetd == 'both') {
            $('#factor_row').show();
            // $('#factor').attr('required', true);

            $('#salary_row').show();
            // $('#salary').attr('required', true);
        }

        $(document).on('change', '#payment_type', function () {
            var type = $(this).val();
            if (type == 'commission') {
                $('#factor_row').show();
                // $('#factor').attr('required', true);

                $('#salary_row').hide();
                // $('#salary').attr('required', false);
            }

            if (type == 'salary') {
                $('#factor_row').hide();
                // $('#factor').attr('required', false);

                $('#salary_row').show();
                // $('#salary').attr('required', true);
            }

            if (type == 'both') {
                $('#factor_row').show();
                // $('#factor').attr('required', true);

                $('#salary_row').show();
                // $('#salary').attr('required', true);
            }
        });

        $(document).on('change', '#status_tmp', function () {
            var value = $(this).prop('checked');
            if(value)
            {
                var result = 1;
            }
            if(!value)
            {
                var result =  0;
            }
            $('#status').val(result);
            // alert(result);
        })
    </script>



@endsection
