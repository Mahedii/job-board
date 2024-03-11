<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<!-- Start Navigation -->
<div class="header header-transparent change-logo">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand static-logo" href="{{ route('home') }}"><img src="{{ URL::asset('assets/img/logo-light.png') }}" class="logo"
                        alt=""></a>
                <a class="nav-brand fixed-logo" href="{{ route('home') }}"><img src="{{ URL::asset('assets/img/logo.png') }}" class="logo"
                        alt=""></a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li class="list-buttons">
                            <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i
                                    class="fas fa-sign-in-alt me-2"></i>Log In</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper">
                <ul class="nav-menu">

                    <li class="active"><a href="JavaScript:Void(0);">Home<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a class="active" href="{{ route('home') }}">Home Layout 1</a></li>
                            <li><a href="home-2.html">Home Layout 2</a></li>
                            <li><a href="home-3.html">Home Layout 3</a></li>
                            <li><a href="home-4.html">Home Layout 4</a></li>
                            <li><a href="home-5.html">Home Layout 5</a></li>
                            <li><a href="home-6.html">Home Layout 6</a></li>
                            <li><a href="home-7.html">Home Layout 7</a></li>
                            <li><a href="JavaScript:Void(0);">New Homes Layouts<span
                                        class="new-update">New</span><span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="home-8.html">Home Layout 8</a></li>
                                    <li><a href="home-9.html">Home Layout 9</a></li>
                                    <li><a href="home-10.html">Home Layout 10</a></li>
                                    <li><a href="home-11.html">Home Layout 11</a></li>
                                    <li><a href="home-12.html">Home Layout 12</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="JavaScript:Void(0);">For Candidate<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="JavaScript:Void(0);">Browse Jobs<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="grid-style-1.html">Job Grid Style 1</a></li>
                                    <li><a href="grid-style-2.html">Job Grid Stle 2</a></li>
                                    <li><a href="grid-style-3.html">Job Grid Style 3</a></li>
                                    <li><a href="grid-style-4.html">Job Grid Style 4</a></li>
                                    <li><a href="grid-style-5.html">Job Grid Style 5</a></li>
                                    <li><a href="full-job-grid-1.html">Grid Full Style 1</a></li>
                                    <li><a href="full-job-grid-2.html">Grid Full Style 2</a></li>
                                    <li><a href="list-style-1.html">Job List Style 1</a></li>
                                    <li><a href="{{ route('browse-job') }}">Job List Style 2</a></li>
                                    <li><a href="list-style-2.html">Job List Style 3</a></li>
                                    <li><a href="full-job-list-1.html">List Full Style 1</a></li>
                                    <li><a href="full-job-list-2.html">List Full Style 2</a></li>
                                </ul>
                            </li>
                            <li><a href="JavaScript:Void(0);">Browse Map Jobs<span
                                        class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="half-map.html">Job Search on Map 01</a></li>
                                    <li><a href="half-map-2.html">Job Search on Map 02</a></li>
                                    <li><a href="half-map-3.html">Job Search on Map 03</a></li>
                                    <li><a href="half-map-list-1.html">Job Search on Map 04</a></li>
                                    <li><a href="half-map-list-2.html">Job Search on Map 05</a></li>
                                </ul>
                            </li>
                            <li><a href="JavaScript:Void(0);">Browse Candidate<span
                                        class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="candidate-grid-1.html">Candidate Grid 01</a></li>
                                    <li><a href="candidate-grid-2.html">Candidate Grid 02</a></li>
                                    <li><a href="candidate-list-1.html">Candidate List 01</a></li>
                                    <li><a href="candidate-list-2.html">Candidate List 02</a></li>
                                    <li><a href="candidate-half-map.html">Candidate Half Map 01</a></li>
                                    <li><a href="candidate-half-map-list.html">Candidate Half Map 02</a></li>
                                </ul>
                            </li>
                            <li><a href="JavaScript:Void(0);">Single job Detail<span
                                        class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="single-layout-1.html">Single Layout 01</a></li>
                                    <li><a href="single-layout-2.html">Single Layout 02</a></li>
                                    <li><a href="single-layout-3.html">Single Layout 03</a></li>
                                    <li><a href="single-layout-4.html">Single Layout 04</a></li>
                                    <li><a href="single-layout-5.html">Single Layout 05<span
                                                class="new-update">New</span></a></li>
                                    <li><a href="{{ route('job-detail') }}">Single Layout 06<span
                                                class="new-update">New</span></a></li>
                                </ul>
                            </li>
                            <li><a href="JavaScript:Void(0);">Candidate Detail<span
                                        class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="candidate-detail.html">Candidate Detail 01</a></li>
                                    <li><a href="candidate-detail-2.html">Candidate Detail 02</a></li>
                                    <li><a href="candidate-detail-3.html">Candidate Detail 03</a></li>
                                </ul>
                            </li>
                            <li><a href="advance-search.html">Advance Search</a></li>
                            <li>
                                <a href="candidate-dashboard.html">Candidate Dashboard<span
                                        class="new-update">New</span></a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="JavaScript:Void(0);">For Employer<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="JavaScript:Void(0);">Explore Employers<span
                                        class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="employer-grid-1.html">Search Employers 01</a></li>
                                    <li><a href="employer-grid-2.html">Search Employers 02</a></li>
                                    <li><a href="employer-list-1.html">Search List Employers 01</a></li>
                                    <li><a href="employer-half-map.html">Search Employers Map</a></li>
                                    <li><a href="employer-half-map-list.html">Search List Employers Map</a></li>
                                </ul>
                            </li>
                            <li><a href="JavaScript:Void(0);">Employer Detail<span
                                        class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="employer-detail.html">Employer Detail 01</a></li>
                                    <li><a href="employer-detail-2.html">Employer Detail 02</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="employer-dashboard.html">Employer Dashboard<span
                                        class="new-update">New</span></a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="JavaScript:Void(0);">Pages<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="404.html">Error Page</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="blog.html">Blogs Page</a></li>
                            <li><a href="blog-detail.html">Blog Detail</a></li>
                            <li><a href="privacy.html">Terms & Privacy</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="faq.html">FAQ's</a></li>
                            <li><a href="contact.html">Contacts</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Help</a></li>

                </ul>

                <ul class="nav-menu nav-menu-social align-to-right">
                    <li>
                        {{-- <i class="fas fa-sign-in-alt me-2"></i> --}}
                        <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login">Sign In</a>
                    </li>
                    <li>
                        <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#register">Register</a>
                    </li>
                    <li class="list-buttons ms-2">
                        <a href="signup.html"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Upload Resume</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
