<!-- ================= footer start ========================= -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <a href="{{ route('home') }}">
                    <img class="footer-logo" src="{{ URL::asset('assets/img/logo.png') }}" alt="">
                </a>
                <p>Lorem Ipsum is simply dummy text of printing and type setting industry.
                    Lorem Ipsum been industry standard dummy text ever since.</p>
                <!-- Social Box -->
                <div class="f-social-box">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook facebook-cl"></i></a></li>
                        <li><a href="#"><i class="fa fa-google google-plus-cl"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter twitter-cl"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram instagram-cl"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Job Categories</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Work from Home</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Internship Job</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Freelancer Job</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Part Time Job</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Full Time Job</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4>Job Type</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Create Account</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Career Counseling</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> My Oficiona</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> FAQ</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Report a Problem</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Support</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> How It Works</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Underwriting</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Employers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Jobs Listing</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Term & Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright text-center">
                    <p>
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Mahadi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Signin Code -->
<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="myModalLabel1">
            <div class="modal-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
                    <li class="nav-item active"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab">
                            <i class="ti-user"></i> Job Seeker</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#candidate" role="tab"> <i
                                class="ti-user"></i> Job Provider</a> </li>
                </ul>
                <!-- Nav tabs -->
                <!-- Tab panels -->
                <div class="tab-content">
                    <!-- Employer Panel 1-->
                    <div class="tab-pane fade in show active" id="employer" role="tabpanel">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group"> <span class="custom-checkbox">
                                    <input type="checkbox" id="4">
                                    <label for="4"></label>
                                    Remember Me </span> <a href="#" title="Forget" class="fl-right">Forgot
                                    Password?</a>
                            </div>
                            <div class="form-group text-center">
                                <button type="button" class="btn theme-btn full-width btn-m">LogIn</button>
                            </div>
                        </form>
                        <div class="log-option"><span>OR</span></div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('social.auth.redirectTo','facebook') }}" class="fb-log-btn log-btn">
                                    <i class="fa fa-facebook"></i> Facebook
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('social.auth.redirectTo','google') }}" class="gplus-log-btn log-btn">
                                    <i class="fa fa-google"></i> Google
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--/.Panel 1-->

                    <!-- Candidate Panel 2-->
                    <div class="tab-pane fade" id="candidate" role="tabpanel">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group"> <span class="custom-checkbox">
                                    <input type="checkbox" id="44">
                                    <label for="44"></label>
                                    Remember Me </span> <a href="#" title="Forget" class="fl-right">Forgot
                                    Password?</a>
                            </div>
                            <div class="form-group text-center">
                                <button type="button" class="btn theme-btn full-width btn-m">LogIn</button>
                            </div>
                        </form>
                        <div class="log-option"><span>OR</span></div>
                        <div class="row">
                            <div class="col-md-6"> <a href="#" title="" class="fb-log-btn log-btn"><i
                                        class="fa fa-facebook"></i> Facebook</a> </div>
                            <div class="col-md-6"> <a href="#" title="" class="gplus-log-btn log-btn"><i
                                        class="fa fa-google"></i> Google</a> </div>
                        </div>
                    </div>
                </div>
                <!-- Tab panels -->
            </div>
        </div>
    </div>
</div>
<!-- End Signin -->

<!-- Signup Code -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="myModalLabel2">
            <div class="modal-header">
                <h5 class="modal-title text-center">Register</h5>
              </div>
            <div class="modal-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('signup') }}">
                            <i class="ti-user"></i> Job Seeker
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-company') }}">
                            <i class="ti-user"></i> Job Provider
                        </a>
                    </li>
                </ul>
                <!-- Nav tabs -->
                <!-- Tab panels -->
                <div class="tab-content">
                    <!-- Employer Panel 1-->
                    <div class="tab-pane fade in show active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('social.auth.redirectTo','facebook') }}" class="fb-log-btn log-btn">
                                    <i class="fa fa-facebook"></i> Facebook
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('social.auth.redirectTo','google') }}" class="gplus-log-btn log-btn">
                                    <i class="fa fa-google"></i> Google
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab panels -->
            </div>
        </div>
    </div>
</div>
<!-- End Signup -->

<div><a href="#" class="scrollup">Scroll</a></div>
