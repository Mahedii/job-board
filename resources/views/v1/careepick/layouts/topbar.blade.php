<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<!-- Start Navigation -->
<div class="header change-logo">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand static-logo" href="{{ route('home') }}"><img src="{{ URL::asset('assets/img/logo.png') }}" class="logo"
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

                    <li class="active"><a href="{{ route('home') }}">Home</span></a>
                    </li>

                    <li><a href="JavaScript:Void(0);">For Candidate<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="{{ route('browse-job') }}">Browse Jobs</a>
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
                            <li><a href="#">job Detail</a></li>
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
                            <li><a href="{{ route('employer-list') }}">Browse Employers</a></li>
                            <li><a href="{{ route('employer-detail') }}">Employer Detail</a> </li>
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
