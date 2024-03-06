<!-- ======================= Start Navigation ===================== -->
<nav class="navbar navbar-default navbar-mobile navbar-fixed white no-background bootsnav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ URL::asset('assets/img/logo-light.png') }}" class="logo logo-display" alt="">
                <img src="{{ URL::asset('assets/img/logo.png') }}" class="logo logo-scrolled" alt=""> </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="dropdown active"> <a href="{{ route('home') }}">Home</a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employer</a>
                    <ul class="dropdown-menu animated fadeOutUp">
                        <li><a href="{{ route('employer') }}">Employer</a></li>
                        <li><a href="{{ route('employer-detail') }}">Employer Detail</a></li>
                        <li><a href="{{ route('create-company') }}">Create Company</a></li>
                        <li><a href="{{ route('manage-resume') }}">Manage Resume</a></li>
                        <li><a href="{{ route('create-job') }}">Create Job</a></li>
                        <li><a href="{{ route('resume-detail') }}">Resume Detail</a></li>
                    </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Candidate</a>
                    <ul class="dropdown-menu animated fadeOutUp">
                        <li><a href="{{ route('employee') }}">Candidate</a></li>
                        <li><a href="{{ route('browse-job') }}">Browse Jobs</a></li>
                        <li><a href="{{ route('manage-job') }}">Manage Jobs</a></li>
                        <li><a href="{{ route('browse-category') }}">Browse Categories</a></li>
                    </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu animated fadeOutUp">
                        {{-- <li><a href="{{ route('profile-settings') }}">Profile Settings</a></li> --}}
                        <li><a href="{{ route('job-detail') }}">Job Detail</a></li>
                        <li><a href="job-layout-one">Job Layout One</a></li>
                        <li><a href="{{ route('404') }}">404</a></li>
                    </ul>
                </li>
                <li class="dropdown"> <a href="{{ route('contact') }}">Contact</a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="br-right">
                    <a class="btn-signup red-btn" href="javascript:void(0)" data-toggle="modal" data-target="#signin">
                        <i class="login-icon ti-user"></i>Login
                    </a>
                </li>
                <li class="sign-up">
                    {{-- <a class="btn-signup red-btn" href="{{ route('signup') }}"> --}}
                    <a class="btn-signup red-btn" href="javascript:void(0)" data-toggle="modal" data-target="#signup">
                        <span class="ti-briefcase"></span>Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- ======================= End Navigation ===================== -->
