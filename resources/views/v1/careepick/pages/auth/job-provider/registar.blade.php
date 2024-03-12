@extends('v1.careepick.layouts.master')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="bg-cover primary-bg-dark" style="background:url(assets/img/bg2.png)no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title text-light">Create An Account</h2>
                    <span class="text-light opacity-75">Create an account or signin</span>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Registar Form Start ================================== -->
    <section class="gray-simple">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="vesh-detail-bloc">
                        <div class="vesh-detail-bloc-body pt-3">
                            <div class="row gx-3 gy-4">
                                <div class="modal-login-form">
                                    <form>
                                        {{-- Account Information --}}
                                        <div class="card card-h-100">
                                            <div class="card-header">
                                                <h3>Account Information</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Email <span class="text-danger">*</span></label>
                                                        <input name="company_mail" type="email" class="form-control"
                                                            placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Password <span class="text-danger">*</span></label>
                                                        <input name="company_password" type="password"
                                                            class="form-control company_password" placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Confirm Password <span class="text-danger">*</span></label>
                                                        <input name="" type="password"
                                                            class="form-control confirm_company_password" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- General Information -->
                                        <div class="card card-h-100">
                                            <div class="card-header">
                                                <h3>General Information</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row gx-3 gy-4">
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Company Name <span class="text-danger">*</span></label>
                                                        <input name="company_name" type="text" class="form-control"
                                                            placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>কোম্পানির নাম (বাংলায়)</label>
                                                        <input name="company_bn_name" type="text" class="form-control"
                                                            placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Year of Establishment <span
                                                                class="text-danger">*</span></label>
                                                        <input name="company_year_of_establishment" type="text"
                                                            class="form-control" placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Comapny Type <span class="text-danger">*</span></label>
                                                        <select name="company_type" class="wide form-control" multiple>
                                                            <option data-display="Comapny Type">10 - 50</option>
                                                            <option value="1">50 - 100</option>
                                                            <option value="2">100 - 500</option>
                                                            <option value="3" disabled>500 - 1000</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Comapny Size <span class="text-danger">*</span></label>
                                                        <select name="company_size" class="wide form-control">
                                                            <option data-display="Comapny Size">10 - 50</option>
                                                            <option value="1">50 - 100</option>
                                                            <option value="2">100 - 500</option>
                                                            <option value="3" disabled>500 - 1000</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12 m-clear">
                                                        <label>Working Time <span class="text-danger">*</span></label>
                                                        <select name="working_hour" class="wide form-control">
                                                            <option data-display="Working Time">08:00AM To 5:00PM</option>
                                                            <option value="1">10:00AM To 4:00PM</option>
                                                            <option value="2">10:00AM To 6:00PM</option>
                                                            <option value="3" disabled>11:00AM To 7:00PM</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Company Tagline</label>
                                                        <input name="company_slogan" type="text" class="form-control"
                                                            placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>কোম্পানির স্লোগান (বাংলায়)</label>
                                                        <input name="company_bn_slogan" type="text" class="form-control"
                                                            placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Company Logo <span class="text-danger">*</span></label>
                                                        <div class="custom-file-upload">
                                                            <input name="company_logo" class="mt-3" type="file"
                                                                id="file" name="myfile" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Company Contact Information -->
                                        <div class="card card-h-100">
                                            <div class="card-header">
                                                <h3>Company Contact Information</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row gx-3 gy-4">
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Country <span class="text-danger">*</span></label>
                                                        <select name="company_country" class="wide form-control">
                                                            <option data-display="Country">Afghanistan</option>
                                                            <option value="1">Albania</option>
                                                            <option value="9" disabled>Iceland</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12 m-clear">
                                                        <label>District <span class="text-danger">*</span></label>
                                                        <select name="company_district" class="wide form-control">
                                                            <option data-display="District">Afghanistan</option>
                                                            <option value="1">Albania</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12 m-clear">
                                                        <label>Upazila <span class="text-danger">*</span></label>
                                                        <select name="company_upazila" class="wide form-control">
                                                            <option data-display="Upazila">Afghanistan</option>
                                                            <option value="1">Albania</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Address <span class="text-danger">*</span></label>
                                                        <textarea name="company_address_1" type="text" class="form-control" placeholder=""></textarea>
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Address 2</label>
                                                        <textarea name="company_address_2" type="text" class="form-control" placeholder=""></textarea>
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Address 3</label>
                                                        <textarea name="company_address_3" type="text" class="form-control" placeholder=""></textarea>
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Phone Number <span class="text-danger">*</span></label>
                                                        <input name="company_phone_no_1" type="text"
                                                            class="form-control" placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Phone Number 2</label>
                                                        <input name="company_phone_no_2" type="text"
                                                            class="form-control" placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Phone Number 3</label>
                                                        <input name="company_phone_no_3" type="text"
                                                            class="form-control" placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Google Map Location</label>
                                                        <textarea name="company_google_map_address" type="text" class="form-control" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Social Accounts -->
                                        <div class="card card-h-100">
                                            <div class="card-header">
                                                <h3>Social Accounts</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row gx-3 gy-4">
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Website Link</label>
                                                        <input name="company_website_url" type="text" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>LinkedIn</label>
                                                        <input name="company_linkedin_url" type="text" class="form-control" placeholder="https://www.linkedin.com/">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Facebook</label>
                                                        <input name="company_facebook_url" type="text" class="form-control" placeholder="https://www.facebook.com/">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Glassdoor</label>
                                                        <input name="company_glassdoor_url" type="text" class="form-control" placeholder="https://www.glassdoor.com/">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Company Official Documents -->
                                        <div class="card card-h-100">
                                            <div class="card-header">
                                                <h3>Company Official Documents</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row gx-3 gy-4">
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Trade License No <span class="text-danger">*</span></label>
                                                        <input name="company_trade_license_no" type="text" name="" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>BIN No</label>
                                                        <input name="company_bin_no" type="text" name="" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>TIN No</label>
                                                        <input name="company_tin_no" type="text" name="" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="mb-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label>Trade License <span class="text-danger">*</span></label>
                                                        <input name="company_trade_license_document" type="file" name="" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary full-width font--bold btn-lg">
                                                Create An Account
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Registar Form End ================================== -->
@endsection
