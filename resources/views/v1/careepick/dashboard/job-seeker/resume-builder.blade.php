@extends('v1.careepick.dashboard.layouts.js-master')
@section('content')
    <div class="upper-title-box">
        <h3>My Resume</h3>
        <div class="text">Ready to jump back in?</div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
                <div class="tabs-box">
                    <div class="widget-title">
                        <h4>My Profile</h4>
                    </div>

                    <div class="widget-content">
                        <form class="default-form">
                            <div class="row">
                                {{-- <div class="form-group col-lg-6 col-md-12">
                                    <label>Select Your CV</label>
                                    <select class="chosen-select">
                                        <option>My CV</option>
                                    </select>
                                </div> --}}
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Full Name</label>
                                    <input type="text" name="name" placeholder="Mr. X" />
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="xx@xx.xx" />
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Phone</label>
                                    <input type="text" name="phone_no" placeholder="01*********" />
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Ex: Dhaka, Bangladesh" />
                                </div>

                                {{-- About Yourself --}}
                                <div class="form-group col-lg-12 col-md-12">
                                    <label>Career Summary</label>
                                    <textarea name="career_summary"
                                        placeholder="Spent several years working on sheep on Wall Street. Had moderate success investing in Yugo's on Wall Street. Managed a small team buying and selling Pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working it banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present"></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <!-- Resume / Education -->
                                    <div class="resume-outer">
                                        <div class="upper-title">
                                            <h4>Education</h4>
                                            <a href="JavaScript:Void(0);" class="add-info-btn" data-bs-toggle="modal"
                                                data-bs-target="#addEducation"><span class="icon flaticon-plus"></span> Add
                                                Education</a>
                                        </div>
                                        <!-- Resume BLock -->
                                        <div class="resume-block">
                                            <div class="inner">
                                                <span class="name">M</span>
                                                <div class="title-box">
                                                    <div class="info-box">
                                                        <h3>Bachlors in Fine Arts</h3>
                                                        <span>Modern College</span>
                                                    </div>
                                                    <div class="edit-box">
                                                        <span class="year">2012 - 2014</span>
                                                        <div class="edit-btns">
                                                            <button><span class="la la-pencil"></span></button>
                                                            <button><span class="la la-trash"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin a ipsum tellus. Interdum et
                                                    malesuada fames ac ante<br> ipsum primis in faucibus.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Resume BLock -->
                                        <div class="resume-block">
                                            <div class="inner">
                                                <span class="name">H</span>
                                                <div class="title-box">
                                                    <div class="info-box">
                                                        <h3>Computer Science</h3>
                                                        <span>Harvard University</span>
                                                    </div>
                                                    <div class="edit-box">
                                                        <span class="year">2008 - 2012</span>
                                                        <div class="edit-btns">
                                                            <button><span class="la la-pencil"></span></button>
                                                            <button><span class="la la-trash"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin a ipsum tellus. Interdum et
                                                    malesuada fames ac ante<br> ipsum primis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Resume / Work & Experience -->
                                    <div class="resume-outer theme-blue">
                                        <div class="upper-title">
                                            <h4>Work & Experience</h4>
                                            <button class="add-info-btn"><span class="icon flaticon-plus"></span> Add
                                                Work</button>
                                        </div>
                                        <!-- Resume BLock -->
                                        <div class="resume-block">
                                            <div class="inner">
                                                <span class="name">S</span>
                                                <div class="title-box">
                                                    <div class="info-box">
                                                        <h3>Product Designer</h3>
                                                        <span>Spotify Inc.</span>
                                                    </div>
                                                    <div class="edit-box">
                                                        <span class="year">2012 - 2014</span>
                                                        <div class="edit-btns">
                                                            <button><span class="la la-pencil"></span></button>
                                                            <button><span class="la la-trash"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin a ipsum tellus. Interdum et
                                                    malesuada fames ac ante<br> ipsum primis in faucibus.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Resume BLock -->
                                        <div class="resume-block">
                                            <div class="inner">
                                                <span class="name">D</span>
                                                <div class="title-box">
                                                    <div class="info-box">
                                                        <h3>Sr UX Engineer</h3>
                                                        <span>Dropbox Inc.</span>
                                                    </div>
                                                    <div class="edit-box">
                                                        <span class="year">2012 - 2014</span>
                                                        <div class="edit-btns">
                                                            <button><span class="la la-pencil"></span></button>
                                                            <button><span class="la la-trash"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin a ipsum tellus. Interdum et
                                                    malesuada fames ac ante<br> ipsum primis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <div class="uploading-outer">
                                        <div class="uploadButton">
                                            <input class="uploadButton-input" type="file" name="attachments[]"
                                                accept="image/*, application/pdf" id="upload" multiple />
                                            <label class="uploadButton-button ripple-effect" for="upload">Add
                                                Portfolio</label>
                                            <span class="uploadButton-file-name"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <!-- Resume / Awards -->
                                    <div class="resume-outer theme-yellow">
                                        <div class="upper-title">
                                            <h4>Awards</h4>
                                            <button class="add-info-btn"><span class="icon flaticon-plus"></span>
                                                Awards</button>
                                        </div>
                                        <!-- Resume BLock -->
                                        <div class="resume-block">
                                            <div class="inner">
                                                <span class="name"></span>
                                                <div class="title-box">
                                                    <div class="info-box">
                                                        <h3>Perfect Attendance Programs</h3>
                                                        <span></span>
                                                    </div>
                                                    <div class="edit-box">
                                                        <span class="year">2012 - 2014</span>
                                                        <div class="edit-btns">
                                                            <button><span class="la la-pencil"></span></button>
                                                            <button><span class="la la-trash"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin a ipsum tellus. Interdum et
                                                    malesuada fames ac ante<br> ipsum primis in faucibus.
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Resume BLock -->
                                        <div class="resume-block">
                                            <div class="inner">
                                                <span class="name"></span>
                                                <div class="title-box">
                                                    <div class="info-box">
                                                        <h3>Top Performer Recognition</h3>
                                                        <span></span>
                                                    </div>
                                                    <div class="edit-box">
                                                        <span class="year">2012 - 2014</span>
                                                        <div class="edit-btns">
                                                            <button><span class="la la-pencil"></span></button>
                                                            <button><span class="la la-trash"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin a ipsum tellus. Interdum et
                                                    malesuada fames ac ante<br> ipsum primis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Search Select -->
                                <div class="form-group col-lg-6 col-md-12">
                                    <label>Skills </label>
                                    <select data-placeholder="Categories" class="chosen-select multiple" multiple
                                        tabindex="4">
                                        <option value="Banking">Banking</option>
                                        <option value="Digital&Creative">Digital & Creative</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Management">Management</option>
                                    </select>
                                </div>

                                <!-- Input -->
                                <div class="form-group col-lg-12 col-md-12">
                                    <button class="theme-btn btn-style-one">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Log In Modal -->
        <div class="modal fade" id="addEducation" tabindex="-1" role="dialog" aria-labelledby="addEducationModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Education</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center gx-3 gy-4">
                            <form method="POST" action="{{ route('js-register.post') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-lg-6 col-md-12 mb-4">
                                    <label class="py-2">Skills </label>
                                    <select data-placeholder="Categories" class="chosen-select multiple" multiple
                                        tabindex="4">
                                        <option value="Banking">Banking</option>
                                        <option value="Digital&Creative">Digital & Creative</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Management">Management</option>
                                    </select>
                                    <select class="js-example-basic-single" name="state">
                                        <option value="AL">Alabama</option>
                                          ...
                                        <option value="WY">Wyoming</option>
                                      </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-primary full-width font--bold btn-lg">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        {{-- <script src="{{ URL::asset('/dashboard/assets/js/select2.init.js') }}"></script> --}}

        <script type="text/javascript">
            $(document).ready(function() {
                // alert("YI");
                $('.js-example-basic-single').select2();
            });
        </script>


    </div>
@endsection
