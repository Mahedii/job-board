<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Careepick - Responsive Job Portal Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta content="careepick" name="description" />
    <meta content="Mahadi" name="author" />
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="csrf_token" content="{{ csrf_token() }}" /> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets -->
    <link href="{{ URL::asset('dashboard/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('dashboard/assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('dashboard/assets/css/custom.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ URL::asset('dashboard/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('dashboard/assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Invoice Section -->
        <section class="invoice-section">
            <div class="auto-container">
                <div class="upper-box">
                    <button class="theme-btn btn-style-three">Print</button>
                </div>
            </div>
            <div class="auto-container">
                <div class="invoice-wrap">
                    <div class="invoice-content">
                        <div class="logo-box" style="display: block">
                            {{-- <div class="logo"><a href="index.html"><img src="images/logo.svg" alt=""></a>
                            </div> --}}
                            <div class="invoice-id" style="max-width: 100%; display: block; margin-bottom: 20px;">
                                {{ $jobSeekerData[0]->jobseeker_name }}
                                <span></span>
                                <p>{{ $jobSeekerData[0]->jobseeker_mail }}</p>
                                <p>{{ $jobSeekerData[0]->jobseeker_phone_no_1 }}</p>
                                <p>{{ $jobSeekerData[0]->jobseeker_address }}</p>
                            </div>
                        </div>

                        <div class="logo-box" style="display: block">
                            <div class="invoice-id" style="max-width: 100%; display: block; margin-bottom: 20px;">
                                Career Summary
                                <span></span>
                                <p>{{ $jobSeekerData[0]->jobseeker_career_summary }}</p>
                            </div>
                        </div>

                        <div class="logo-box" style="display: block">
                            <div class="invoice-id" style="max-width: 100%; display: block; margin-bottom: 20px;">
                                Professional Experience
                                <span></span>
                                <p>{{ $jobSeekerData[0]->jobseeker_career_summary }}</p>
                            </div>
                        </div>

                        <div class="info-box">
                            <div class="left-column">
                                <div class="info">
                                    <h6>Invoice date:</h6>
                                    <span>03/10/2021</span>
                                </div>

                                <div class="info">
                                    <h4>Supplier</h4>
                                    <h5>Superio LLC</h5>
                                    <p>2301 Ravenswood Rd Madison, WI 53711</p>
                                </div>
                            </div>

                            <div class="right-column">
                                <div class="info">
                                    <h6>Due date:</h6>
                                    <span>03/10/2021</span>
                                </div>

                                <div class="info">
                                    <h4>Customer</h4>
                                    <h5>John Doe</h5>
                                    <p>329 Queensberry Street, North Melbourne VIC 3051, Australia.</p>
                                </div>
                            </div>
                        </div>


                        <div class="table-outer">
                            <table class="default-table invoice-table">
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>VAT (20%)</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Standard Plan</td>
                                        <td>$443.00 </td>
                                        <td>$921.80</td>
                                        <td>$9243</td>
                                    </tr>
                                    <tr>
                                        <td>Extra Plan</td>
                                        <td>$413.00 </td>
                                        <td>$912.80 </td>
                                        <td>$5943</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Due</strong></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>$9,750</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="invoice-footer">
                        <ul class="bottom-links">
                            <li><a href="https://www.superio.com/" target="_blank" class="link">www.superio.com</a>
                            </li>
                            <li><a href="invoice%40superio.html">invoice@superio.com</a></li>
                            <li><a href="tel:123123456">(123) 123-456</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Invoice Section -->


    </div><!-- End Page Wrapper -->


    <script src="{{ URL::asset('dashboard/assets/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/chosen.min.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/jquery.modal.min.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/mmenu.polyfills.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/mmenu.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/appear.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/ScrollMagic.min.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/rellax.min.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/owl.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/wow.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/script.js') }}"></script>


</body>

</html>
