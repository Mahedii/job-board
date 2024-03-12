@extends('v1.careepick.layouts.master')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title primary-bg-dark" style="background:url(assets/img/bg2.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title">Grid Style Job 05</h2>
                    <div class="breadcrumbs light">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="JavaScript:Void(0);">Home</a></li>
                                <li class="breadcrumb-item"><a href="JavaScript:Void(0);">Candidate</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Job Grid 05</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ All List Wrap ================================== -->
    <section class="gray-simple">
        <div class="container">
            <div class="row">

                <!-- Search Sidebar -->
                <div class="col-lg-4 col-md-12 col-sm-12">

                    <div class="bg-white rounded mb-3">

                        <div class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
                            <h4 class="fs-bold fs-5 mb-0">Search Filter</h4>
                            <div class="ssh-header">
                                <a href="javascript:void(0);" class="clear_all ft-medium text-muted">Clear All</a>
                                <a href="#search_open" data-bs-toggle="collapse" aria-expanded="false" role="button"
                                    class="collapsed _filter-ico ml-2"><i class="fa-solid fa-filter"></i></a>
                            </div>
                        </div>

                        <!-- Find New Property -->
                        <div class="sidebar-widgets collapse miz_show" id="search_open" data-bs-parent="#search_open">

                            <div class="search-inner">

                                <div class="filter-search-box px-4 pt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search by keywords...">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Location, Zip..">
                                    </div>
                                </div>

                                <div class="filter_wraps">

                                    <!-- Job categories Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#categories" class="ft-medium fs-md" data-bs-toggle="collapse"
                                                    aria-expanded="true" role="button">Job Categories</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse show" id="categories"
                                            data-bs-parent="#categories">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="a1" class="form-check-input"
                                                                        name="ADA" type="checkbox" checked="">
                                                                    <label for="a1" class="form-check-label">IT
                                                                        Computers (62)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="aa1" class="form-check-input"
                                                                        name="ADA" type="checkbox">
                                                                    <label for="aa1" class="form-check-label">Web
                                                                        Design (31)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="aa2" class="form-check-input"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="aa2" class="form-check-label">Web
                                                                        development (20)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="aa3" class="form-check-input"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="aa3" class="form-check-label">SEO
                                                                        Services (43)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a2" class="form-check-input"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="a2" class="form-check-label">Financial
                                                                        Service (16)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a3" class="form-check-input"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="a3" class="form-check-label">Art,
                                                                        Design, Media (22)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a4" class="form-check-input"
                                                                        name="Mother" type="checkbox">
                                                                    <label for="a4" class="form-check-label">Coach &
                                                                        Education (21)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a5" class="form-check-input"
                                                                        name="Outdoor" type="checkbox">
                                                                    <label for="a5" class="form-check-label">Apps
                                                                        Developements (17)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="ab1" class="form-check-input"
                                                                        name="ADA" type="checkbox">
                                                                    <label for="ab1" class="form-check-label">IOS
                                                                        Development (12)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="ab2" class="form-check-input"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="ab2" class="form-check-label">Android
                                                                        Development (04)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a6" class="form-check-input"
                                                                        name="Pet" type="checkbox">
                                                                    <label for="a6" class="form-check-label">Writing
                                                                        & Translation (04)</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Job Locations Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#locations" data-bs-toggle="collapse" aria-expanded="false"
                                                    role="button" class="ft-medium fs-md collapsed">Job Locations</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="locations"
                                            data-bs-parent="#locations">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="b1" class="form-check-input"
                                                                        name="ADA" type="checkbox" checked="">
                                                                    <label for="b1"
                                                                        class="form-check-label">Australia (21)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="b2" class="form-check-input"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="b2" class="form-check-label">New
                                                                        Zeland (12)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="b3" class="form-check-input"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="b3" class="form-check-label">United
                                                                        Kingdom (21)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="ac1" class="form-check-input"
                                                                        name="ADA" type="checkbox">
                                                                    <label for="ac1" class="form-check-label">London
                                                                        (06)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="ac2" class="form-check-input"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="ac2"
                                                                        class="form-check-label">Manchester (07)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="ac3" class="form-check-input"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="ac3"
                                                                        class="form-check-label">Birmingham (08)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="b4" class="form-check-input"
                                                                        name="Mother" type="checkbox">
                                                                    <label for="b4" class="form-check-label">United
                                                                        State (04)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="ad1" class="form-check-input"
                                                                        name="ADA" type="checkbox">
                                                                    <label for="ad1" class="form-check-label">New
                                                                        York (32)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="ad2" class="form-check-input"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="ad2"
                                                                        class="form-check-label">Washington (42)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="ad3" class="form-check-input"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="ad3" class="form-check-label">Los
                                                                        Angeles (22)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="b5" class="form-check-input"
                                                                        name="Outdoor" type="checkbox">
                                                                    <label for="b5" class="form-check-label">India
                                                                        (15)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="b6" class="form-check-input"
                                                                        name="Pet" type="checkbox">
                                                                    <label for="b6"
                                                                        class="form-check-label">Singapore (09)</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Job Skills Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#skills" data-bs-toggle="collapse" aria-expanded="false"
                                                    role="button" class="ft-medium fs-md collapsed">Skills</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="skills" data-bs-parent="#skills">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="c1" class="form-check-input"
                                                                        name="ADA" type="checkbox" checked="">
                                                                    <label for="c1"
                                                                        class="form-check-label">Administrative
                                                                        (15)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c2" class="form-check-input"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="c2" class="form-check-label">iPhone
                                                                        & Android (33)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c3" class="form-check-input"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="c3" class="form-check-label">Java &
                                                                        AJAX (32)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c4" class="form-check-input"
                                                                        name="Mother" type="checkbox">
                                                                    <label for="c4" class="form-check-label">Account
                                                                        Manager (21)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c5" class="form-check-input"
                                                                        name="Outdoor" type="checkbox">
                                                                    <label for="c5"
                                                                        class="form-check-label">WordPress (32)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c6" class="form-check-input"
                                                                        name="Pet" type="checkbox">
                                                                    <label for="c6" class="form-check-label">Magento
                                                                        (42)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c7" class="form-check-input"
                                                                        name="Beauty" type="checkbox">
                                                                    <label for="c7" class="form-check-label">Shopify
                                                                        (12)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c8" class="form-check-input"
                                                                        name="Bike" type="checkbox">
                                                                    <label for="c8" class="form-check-label">PHP
                                                                        Script (08)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c9" class="form-check-input"
                                                                        name="Phone" type="checkbox">
                                                                    <label for="c9" class="form-check-label">Drupal
                                                                        (32)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c11" class="form-check-input"
                                                                        name="Private" type="checkbox">
                                                                    <label for="c11" class="form-check-label">Joomla
                                                                        (50)</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Expected Salary Search -->
                                    <div class="single_search_boxed px-4 pt-0">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#radiusmiles" data-bs-toggle="collapse" aria-expanded="false"
                                                    role="button" class="ft-medium fs-md collapsed">Radius in Miles</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse show" id="radiusmiles"
                                            data-bs-parent="#radiusmiles">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="rg-slider">
                                                            <input type="text" class="js-range-slider" name="my_range"
                                                                value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Experience Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#experience" data-bs-toggle="collapse" aria-expanded="false"
                                                    role="button" class="ft-medium fs-md collapsed">Experience</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="experience"
                                            data-bs-parent="#experience">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="d1" class="form-check-input"
                                                                        name="ADA" type="checkbox" checked="">
                                                                    <label for="d1"
                                                                        class="form-check-label">Beginner (54)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="d2" class="form-check-input"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="d2" class="form-check-label">1+ Year
                                                                        (32)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="d3" class="form-check-input"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="d3" class="form-check-label">2 Year
                                                                        (09)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="d4" class="form-check-input"
                                                                        name="Mother" type="checkbox">
                                                                    <label for="d4" class="form-check-label">3+ Year
                                                                        (16)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="d5" class="form-check-input"
                                                                        name="Outdoor" type="checkbox">
                                                                    <label for="d5" class="form-check-label">4+ Year
                                                                        (17)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="d6" class="form-check-input"
                                                                        name="Pet" type="checkbox">
                                                                    <label for="d6" class="form-check-label">5+ Year
                                                                        (22)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="d7" class="form-check-input"
                                                                        name="Beauty" type="checkbox">
                                                                    <label for="d7" class="form-check-label">10+
                                                                        Year (32)</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Job types Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#jbtypes" data-bs-toggle="collapse" aria-expanded="false"
                                                    role="button" class="ft-medium fs-md collapsed">Job Type</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="jbtypes" data-bs-parent="#jbtypes">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="e2" class="form-check-input"
                                                                        name="jtype" type="radio">
                                                                    <label for="e2" class="form-check-label">Full
                                                                        time</label>
                                                                </li>
                                                                <li>
                                                                    <input id="e3" class="form-check-input"
                                                                        name="jtype" type="radio">
                                                                    <label for="e3" class="form-check-label">Part
                                                                        Time</label>
                                                                </li>
                                                                <li>
                                                                    <input id="e4" class="form-check-input"
                                                                        name="jtype" type="radio" checked="">
                                                                    <label for="e4"
                                                                        class="form-check-label">Contract Base</label>
                                                                </li>
                                                                <li>
                                                                    <input id="e5" class="form-check-input"
                                                                        name="jtype" type="radio">
                                                                    <label for="e5"
                                                                        class="form-check-label">Internship</label>
                                                                </li>
                                                                <li>
                                                                    <input id="e6" class="form-check-input"
                                                                        name="jtype" type="radio">
                                                                    <label for="e6"
                                                                        class="form-check-label">Regular</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Job Level Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#jblevel" data-bs-toggle="collapse" aria-expanded="false"
                                                    role="button" class="ft-medium fs-md collapsed">Job Level</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="jblevel" data-bs-parent="#jblevel">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="f1" class="form-check-input"
                                                                        name="ADA" type="checkbox" checked="">
                                                                    <label for="f1" class="form-check-label">Team
                                                                        Leader</label>
                                                                </li>
                                                                <li>
                                                                    <input id="f2" class="form-check-input"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="f2"
                                                                        class="form-check-label">Manager</label>
                                                                </li>
                                                                <li>
                                                                    <input id="f3" class="form-check-input"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="f3"
                                                                        class="form-check-label">Junior</label>
                                                                </li>
                                                                <li>
                                                                    <input id="f4" class="form-check-input"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="f4"
                                                                        class="form-check-label">Senior</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group filter_button pt-3 pb-3 px-4">
                                    <button type="submit" class="btn btn-primary full-width">Search job</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alert Box -->
                    <div class="alert-jbemail-box bg-cover"
                        style="background:#016551 url(assets/img/alert-bg.png)no-repeat;" overlay="0">
                        <div class="alert-bxr-wrap">
                            <div class="alert-bxr-captions mb-3">
                                <h3 class="text-light">Get The Latest Jobs Right Into Your Inbox!</h3>
                                <p class="text-light opacity-75">We just want your email address!</p>
                            </div>
                            <div class="alert-bxr-forms">
                                <form>
                                    <div class="newsltr-form">
                                        <input type="text" class="form-control" placeholder="Enter Your email">
                                        <button type="button" class="btn btn-subscribe bg-dark">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Sidebar End -->

                <div class="col-lg-8 col-md-12 col-sm-12">

                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-12 col-md-12">
                            <div class="item-shorting-box">
                                <div class="item-shorting clearfix">
                                    <div class="left-column">
                                        <h4 class="m-sm-0 mb-2">Showing 1 - 10 of 20 Results</h4>
                                    </div>
                                </div>
                                <div class="item-shorting-box-right">
                                    <div class="shorting-by me-2 small">
                                        <select>
                                            <option value="0">Short by (Default)</option>
                                            <option value="1">Short by (Featured)</option>
                                            <option value="2">Short by (Urgent)</option>
                                            <option value="3">Short by (Post Date)</option>
                                        </select>
                                    </div>
                                    <div class="shorting-by small">
                                        <select>
                                            <option value="0">10 Per Page</option>
                                            <option value="1">20 Per Page</option>
                                            <option value="2">50 Per Page</option>
                                            <option value="3">10 Per Page</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start All List -->
                    <div class="row justify-content-center gx-3 gy-4">

                        <!-- Single Item -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="jbs-grid-layout border">
                                <div class="right-tags-capt">
                                    <span class="featured-text">Featured</span>
                                    <span class="urgent">Urgent</span>
                                </div>
                                <div class="jbs-grid-emp-head">
                                    <div class="jbs-grid-emp-thumb"><a href="job-detail.html">
                                            <figure><img src="{{ URL::asset('assets/img/l-1.png') }}" class="img-fluid" alt="">
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="jbs-grid-job-caption">
                                    <div class="jbs-job-employer-wrap"><span>Google Inc.</span></div>
                                    <div class="jbs-job-title-wrap">
                                        <h4><a href="job-detail.html" class="jbs-job-title">Sr. Front-end Developer</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-info-wrap">
                                    <div class="jbs-grid-job-info">
                                        <div class="jbs-grid-single-info"><span><i class="fa-solid fa-user-group"></i>1-2
                                                Year</span></div>
                                        <div class="jbs-grid-single-info"><span><i class="fa-regular fa-clock"></i>Full
                                                Time</span></div>
                                        <div class="jbs-grid-single-info"><span><i
                                                    class="fa-solid fa-location-dot"></i>London</span></div>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-description">
                                    <p>Consistently create well-designed, tested code using best practices for website
                                        development, including mobile...</p>
                                </div>
                                <div class="jbs-grid-job-edrs">
                                    <div class="jbs-grid-job-edrs-group">
                                        <span>HTML</span>
                                        <span>CSS3</span>
                                        <span>Bootstrap</span>
                                        <span>Redux</span>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-package-info">
                                    <div class="jbs-grid-package-title">
                                        <h5>$370<span>\Year</span></h5>
                                    </div>
                                    <div class="jbs-grid-posted"><span>26 March 2023</span></div>
                                </div>
                                <div class="jbs-grid-job-apply-btns">
                                    <div class="jbs-btn-groups">
                                        <a href="job-detail.html" class="btn btn-md btn-light-primary px-4">View
                                            Detail</a>
                                        <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4">Quick Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="jbs-grid-layout border">
                                <div class="right-tags-capt">
                                    <span class="featured-text">Featured</span>
                                    <span class="urgent">Urgent</span>
                                </div>
                                <div class="jbs-grid-emp-head">
                                    <div class="jbs-grid-emp-thumb"><a href="job-detail.html">
                                            <figure><img src="{{ URL::asset('assets/img/l-2.png') }}" class="img-fluid" alt="">
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="jbs-grid-job-caption">
                                    <div class="jbs-job-employer-wrap"><span>Google Inc.</span></div>
                                    <div class="jbs-job-title-wrap">
                                        <h4><a href="job-detail.html" class="jbs-job-title">Sr. Front-end Developer</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-info-wrap">
                                    <div class="jbs-grid-job-info">
                                        <div class="jbs-grid-single-info"><span><i class="fa-solid fa-user-group"></i>1-2
                                                Year</span></div>
                                        <div class="jbs-grid-single-info"><span><i class="fa-regular fa-clock"></i>Full
                                                Time</span></div>
                                        <div class="jbs-grid-single-info"><span><i
                                                    class="fa-solid fa-location-dot"></i>London</span></div>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-description">
                                    <p>Consistently create well-designed, tested code using best practices for website
                                        development, including mobile...</p>
                                </div>
                                <div class="jbs-grid-job-edrs">
                                    <div class="jbs-grid-job-edrs-group">
                                        <span>HTML</span>
                                        <span>CSS3</span>
                                        <span>Bootstrap</span>
                                        <span>Redux</span>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-package-info">
                                    <div class="jbs-grid-package-title">
                                        <h5>$370<span>\Year</span></h5>
                                    </div>
                                    <div class="jbs-grid-posted"><span>26 March 2023</span></div>
                                </div>
                                <div class="jbs-grid-job-apply-btns">
                                    <div class="jbs-btn-groups">
                                        <a href="job-detail.html" class="btn btn-md btn-light-primary px-4">View
                                            Detail</a>
                                        <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4">Quick Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="jbs-grid-layout border">
                                <div class="right-tags-capt">
                                    <span class="featured-text">Featured</span>
                                    <span class="urgent">Urgent</span>
                                </div>
                                <div class="jbs-grid-emp-head">
                                    <div class="jbs-grid-emp-thumb"><a href="job-detail.html">
                                            <figure><img src="{{ URL::asset('assets/img/l-3.png') }}" class="img-fluid" alt="">
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="jbs-grid-job-caption">
                                    <div class="jbs-job-employer-wrap"><span>Google Inc.</span></div>
                                    <div class="jbs-job-title-wrap">
                                        <h4><a href="job-detail.html" class="jbs-job-title">Sr. Front-end Developer</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-info-wrap">
                                    <div class="jbs-grid-job-info">
                                        <div class="jbs-grid-single-info"><span><i class="fa-solid fa-user-group"></i>1-2
                                                Year</span></div>
                                        <div class="jbs-grid-single-info"><span><i class="fa-regular fa-clock"></i>Full
                                                Time</span></div>
                                        <div class="jbs-grid-single-info"><span><i
                                                    class="fa-solid fa-location-dot"></i>London</span></div>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-description">
                                    <p>Consistently create well-designed, tested code using best practices for website
                                        development, including mobile...</p>
                                </div>
                                <div class="jbs-grid-job-edrs">
                                    <div class="jbs-grid-job-edrs-group">
                                        <span>HTML</span>
                                        <span>CSS3</span>
                                        <span>Bootstrap</span>
                                        <span>Redux</span>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-package-info">
                                    <div class="jbs-grid-package-title">
                                        <h5>$370<span>\Year</span></h5>
                                    </div>
                                    <div class="jbs-grid-posted"><span>26 March 2023</span></div>
                                </div>
                                <div class="jbs-grid-job-apply-btns">
                                    <div class="jbs-btn-groups">
                                        <a href="job-detail.html" class="btn btn-md btn-light-primary px-4">View
                                            Detail</a>
                                        <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4">Quick Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="jbs-grid-layout border">
                                <div class="right-tags-capt">
                                    <span class="featured-text">Featured</span>
                                    <span class="urgent">Urgent</span>
                                </div>
                                <div class="jbs-grid-emp-head">
                                    <div class="jbs-grid-emp-thumb"><a href="job-detail.html">
                                            <figure><img src="{{ URL::asset('assets/img/l-4.png') }}" class="img-fluid" alt="">
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="jbs-grid-job-caption">
                                    <div class="jbs-job-employer-wrap"><span>Google Inc.</span></div>
                                    <div class="jbs-job-title-wrap">
                                        <h4><a href="job-detail.html" class="jbs-job-title">Sr. Front-end Developer</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-info-wrap">
                                    <div class="jbs-grid-job-info">
                                        <div class="jbs-grid-single-info"><span><i class="fa-solid fa-user-group"></i>1-2
                                                Year</span></div>
                                        <div class="jbs-grid-single-info"><span><i class="fa-regular fa-clock"></i>Full
                                                Time</span></div>
                                        <div class="jbs-grid-single-info"><span><i
                                                    class="fa-solid fa-location-dot"></i>London</span></div>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-description">
                                    <p>Consistently create well-designed, tested code using best practices for website
                                        development, including mobile...</p>
                                </div>
                                <div class="jbs-grid-job-edrs">
                                    <div class="jbs-grid-job-edrs-group">
                                        <span>HTML</span>
                                        <span>CSS3</span>
                                        <span>Bootstrap</span>
                                        <span>Redux</span>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-package-info">
                                    <div class="jbs-grid-package-title">
                                        <h5>$370<span>\Year</span></h5>
                                    </div>
                                    <div class="jbs-grid-posted"><span>26 March 2023</span></div>
                                </div>
                                <div class="jbs-grid-job-apply-btns">
                                    <div class="jbs-btn-groups">
                                        <a href="job-detail.html" class="btn btn-md btn-light-primary px-4">View
                                            Detail</a>
                                        <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4">Quick Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="jbs-grid-layout border">
                                <div class="right-tags-capt">
                                    <span class="featured-text">Featured</span>
                                    <span class="urgent">Urgent</span>
                                </div>
                                <div class="jbs-grid-emp-head">
                                    <div class="jbs-grid-emp-thumb"><a href="job-detail.html">
                                            <figure><img src="{{ URL::asset('assets/img/l-5.png') }}" class="img-fluid" alt="">
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="jbs-grid-job-caption">
                                    <div class="jbs-job-employer-wrap"><span>Google Inc.</span></div>
                                    <div class="jbs-job-title-wrap">
                                        <h4><a href="job-detail.html" class="jbs-job-title">Sr. Front-end Developer</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-info-wrap">
                                    <div class="jbs-grid-job-info">
                                        <div class="jbs-grid-single-info"><span><i class="fa-solid fa-user-group"></i>1-2
                                                Year</span></div>
                                        <div class="jbs-grid-single-info"><span><i class="fa-regular fa-clock"></i>Full
                                                Time</span></div>
                                        <div class="jbs-grid-single-info"><span><i
                                                    class="fa-solid fa-location-dot"></i>London</span></div>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-description">
                                    <p>Consistently create well-designed, tested code using best practices for website
                                        development, including mobile...</p>
                                </div>
                                <div class="jbs-grid-job-edrs">
                                    <div class="jbs-grid-job-edrs-group">
                                        <span>HTML</span>
                                        <span>CSS3</span>
                                        <span>Bootstrap</span>
                                        <span>Redux</span>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-package-info">
                                    <div class="jbs-grid-package-title">
                                        <h5>$370<span>\Year</span></h5>
                                    </div>
                                    <div class="jbs-grid-posted"><span>26 March 2023</span></div>
                                </div>
                                <div class="jbs-grid-job-apply-btns">
                                    <div class="jbs-btn-groups">
                                        <a href="job-detail.html" class="btn btn-md btn-light-primary px-4">View
                                            Detail</a>
                                        <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4">Quick Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="jbs-grid-layout border">
                                <div class="right-tags-capt">
                                    <span class="featured-text">Featured</span>
                                    <span class="urgent">Urgent</span>
                                </div>
                                <div class="jbs-grid-emp-head">
                                    <div class="jbs-grid-emp-thumb"><a href="job-detail.html">
                                            <figure><img src="{{ URL::asset('assets/img/l-6.png') }}" class="img-fluid" alt="">
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="jbs-grid-job-caption">
                                    <div class="jbs-job-employer-wrap"><span>Google Inc.</span></div>
                                    <div class="jbs-job-title-wrap">
                                        <h4><a href="job-detail.html" class="jbs-job-title">Sr. Front-end Developer</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-info-wrap">
                                    <div class="jbs-grid-job-info">
                                        <div class="jbs-grid-single-info"><span><i class="fa-solid fa-user-group"></i>1-2
                                                Year</span></div>
                                        <div class="jbs-grid-single-info"><span><i class="fa-regular fa-clock"></i>Full
                                                Time</span></div>
                                        <div class="jbs-grid-single-info"><span><i
                                                    class="fa-solid fa-location-dot"></i>London</span></div>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-description">
                                    <p>Consistently create well-designed, tested code using best practices for website
                                        development, including mobile...</p>
                                </div>
                                <div class="jbs-grid-job-edrs">
                                    <div class="jbs-grid-job-edrs-group">
                                        <span>HTML</span>
                                        <span>CSS3</span>
                                        <span>Bootstrap</span>
                                        <span>Redux</span>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-package-info">
                                    <div class="jbs-grid-package-title">
                                        <h5>$370<span>\Year</span></h5>
                                    </div>
                                    <div class="jbs-grid-posted"><span>26 March 2023</span></div>
                                </div>
                                <div class="jbs-grid-job-apply-btns">
                                    <div class="jbs-btn-groups">
                                        <a href="job-detail.html" class="btn btn-md btn-light-primary px-4">View
                                            Detail</a>
                                        <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4">Quick Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="jbs-grid-layout border">
                                <div class="right-tags-capt">
                                    <span class="featured-text">Featured</span>
                                    <span class="urgent">Urgent</span>
                                </div>
                                <div class="jbs-grid-emp-head">
                                    <div class="jbs-grid-emp-thumb"><a href="job-detail.html">
                                            <figure><img src="{{ URL::asset('assets/img/l-7.png') }}" class="img-fluid" alt="">
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="jbs-grid-job-caption">
                                    <div class="jbs-job-employer-wrap"><span>Google Inc.</span></div>
                                    <div class="jbs-job-title-wrap">
                                        <h4><a href="job-detail.html" class="jbs-job-title">Sr. Front-end Developer</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-info-wrap">
                                    <div class="jbs-grid-job-info">
                                        <div class="jbs-grid-single-info"><span><i class="fa-solid fa-user-group"></i>1-2
                                                Year</span></div>
                                        <div class="jbs-grid-single-info"><span><i class="fa-regular fa-clock"></i>Full
                                                Time</span></div>
                                        <div class="jbs-grid-single-info"><span><i
                                                    class="fa-solid fa-location-dot"></i>London</span></div>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-description">
                                    <p>Consistently create well-designed, tested code using best practices for website
                                        development, including mobile...</p>
                                </div>
                                <div class="jbs-grid-job-edrs">
                                    <div class="jbs-grid-job-edrs-group">
                                        <span>HTML</span>
                                        <span>CSS3</span>
                                        <span>Bootstrap</span>
                                        <span>Redux</span>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-package-info">
                                    <div class="jbs-grid-package-title">
                                        <h5>$370<span>\Year</span></h5>
                                    </div>
                                    <div class="jbs-grid-posted"><span>26 March 2023</span></div>
                                </div>
                                <div class="jbs-grid-job-apply-btns">
                                    <div class="jbs-btn-groups">
                                        <a href="job-detail.html" class="btn btn-md btn-light-primary px-4">View
                                            Detail</a>
                                        <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4">Quick Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="jbs-grid-layout border">
                                <div class="right-tags-capt">
                                    <span class="featured-text">Featured</span>
                                    <span class="urgent">Urgent</span>
                                </div>
                                <div class="jbs-grid-emp-head">
                                    <div class="jbs-grid-emp-thumb"><a href="job-detail.html">
                                            <figure><img src="{{ URL::asset('assets/img/l-8.png') }}" class="img-fluid" alt="">
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="jbs-grid-job-caption">
                                    <div class="jbs-job-employer-wrap"><span>Google Inc.</span></div>
                                    <div class="jbs-job-title-wrap">
                                        <h4><a href="job-detail.html" class="jbs-job-title">Sr. Front-end Developer</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-info-wrap">
                                    <div class="jbs-grid-job-info">
                                        <div class="jbs-grid-single-info"><span><i class="fa-solid fa-user-group"></i>1-2
                                                Year</span></div>
                                        <div class="jbs-grid-single-info"><span><i class="fa-regular fa-clock"></i>Full
                                                Time</span></div>
                                        <div class="jbs-grid-single-info"><span><i
                                                    class="fa-solid fa-location-dot"></i>London</span></div>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-description">
                                    <p>Consistently create well-designed, tested code using best practices for website
                                        development, including mobile...</p>
                                </div>
                                <div class="jbs-grid-job-edrs">
                                    <div class="jbs-grid-job-edrs-group">
                                        <span>HTML</span>
                                        <span>CSS3</span>
                                        <span>Bootstrap</span>
                                        <span>Redux</span>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-package-info">
                                    <div class="jbs-grid-package-title">
                                        <h5>$370<span>\Year</span></h5>
                                    </div>
                                    <div class="jbs-grid-posted"><span>26 March 2023</span></div>
                                </div>
                                <div class="jbs-grid-job-apply-btns">
                                    <div class="jbs-btn-groups">
                                        <a href="job-detail.html" class="btn btn-md btn-light-primary px-4">View
                                            Detail</a>
                                        <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4">Quick Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="jbs-grid-layout border">
                                <div class="right-tags-capt">
                                    <span class="featured-text">Featured</span>
                                    <span class="urgent">Urgent</span>
                                </div>
                                <div class="jbs-grid-emp-head">
                                    <div class="jbs-grid-emp-thumb"><a href="job-detail.html">
                                            <figure><img src="{{ URL::asset('assets/img/l-9.png') }}" class="img-fluid" alt="">
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="jbs-grid-job-caption">
                                    <div class="jbs-job-employer-wrap"><span>Google Inc.</span></div>
                                    <div class="jbs-job-title-wrap">
                                        <h4><a href="job-detail.html" class="jbs-job-title">Sr. Front-end Developer</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-info-wrap">
                                    <div class="jbs-grid-job-info">
                                        <div class="jbs-grid-single-info"><span><i class="fa-solid fa-user-group"></i>1-2
                                                Year</span></div>
                                        <div class="jbs-grid-single-info"><span><i class="fa-regular fa-clock"></i>Full
                                                Time</span></div>
                                        <div class="jbs-grid-single-info"><span><i
                                                    class="fa-solid fa-location-dot"></i>London</span></div>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-description">
                                    <p>Consistently create well-designed, tested code using best practices for website
                                        development, including mobile...</p>
                                </div>
                                <div class="jbs-grid-job-edrs">
                                    <div class="jbs-grid-job-edrs-group">
                                        <span>HTML</span>
                                        <span>CSS3</span>
                                        <span>Bootstrap</span>
                                        <span>Redux</span>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-package-info">
                                    <div class="jbs-grid-package-title">
                                        <h5>$370<span>\Year</span></h5>
                                    </div>
                                    <div class="jbs-grid-posted"><span>26 March 2023</span></div>
                                </div>
                                <div class="jbs-grid-job-apply-btns">
                                    <div class="jbs-btn-groups">
                                        <a href="job-detail.html" class="btn btn-md btn-light-primary px-4">View
                                            Detail</a>
                                        <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4">Quick Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="jbs-grid-layout border">
                                <div class="right-tags-capt">
                                    <span class="featured-text">Featured</span>
                                    <span class="urgent">Urgent</span>
                                </div>
                                <div class="jbs-grid-emp-head">
                                    <div class="jbs-grid-emp-thumb"><a href="job-detail.html">
                                            <figure><img src="{{ URL::asset('assets/img/l-10.png') }}" class="img-fluid" alt="">
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="jbs-grid-job-caption">
                                    <div class="jbs-job-employer-wrap"><span>Google Inc.</span></div>
                                    <div class="jbs-job-title-wrap">
                                        <h4><a href="job-detail.html" class="jbs-job-title">Sr. Front-end Developer</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-info-wrap">
                                    <div class="jbs-grid-job-info">
                                        <div class="jbs-grid-single-info"><span><i class="fa-solid fa-user-group"></i>1-2
                                                Year</span></div>
                                        <div class="jbs-grid-single-info"><span><i class="fa-regular fa-clock"></i>Full
                                                Time</span></div>
                                        <div class="jbs-grid-single-info"><span><i
                                                    class="fa-solid fa-location-dot"></i>London</span></div>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-description">
                                    <p>Consistently create well-designed, tested code using best practices for website
                                        development, including mobile...</p>
                                </div>
                                <div class="jbs-grid-job-edrs">
                                    <div class="jbs-grid-job-edrs-group">
                                        <span>HTML</span>
                                        <span>CSS3</span>
                                        <span>Bootstrap</span>
                                        <span>Redux</span>
                                    </div>
                                </div>
                                <div class="jbs-grid-job-package-info">
                                    <div class="jbs-grid-package-title">
                                        <h5>$370<span>\Year</span></h5>
                                    </div>
                                    <div class="jbs-grid-posted"><span>26 March 2023</span></div>
                                </div>
                                <div class="jbs-grid-job-apply-btns">
                                    <div class="jbs-btn-groups">
                                        <a href="job-detail.html" class="btn btn-md btn-light-primary px-4">View
                                            Detail</a>
                                        <a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-4">Quick Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="JavaScript:Void(0);" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">2</a></li>
                                    <li class="page-item active"><a class="page-link" href="JavaScript:Void(0);">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">5</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="JavaScript:Void(0);" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- ============================ All List Wrap ================================== -->
@endsection
