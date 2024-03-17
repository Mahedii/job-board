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
                                    @if(session('add-education-message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ session('add-education-message') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <!-- Resume / Education -->
                                    <div class="resume-outer">
                                        <div class="upper-title">
                                            <h4>Education</h4>
                                            <a href="JavaScript:Void(0);" class="add-info-btn" data-bs-toggle="modal"
                                                data-bs-target="#addEducation"><span class="icon flaticon-plus"></span> Add
                                                Education</a>
                                        </div>
                                        <!-- Resume BLock -->
                                        @foreach($jobSeekerEducationsData as $key => $educationsData)
                                            <div class="resume-block">
                                                <div class="inner" style="padding-bottom: 0px">
                                                    <span class="name">{{ $educationsData->educationLevel->level_icon }}</span>
                                                    <div class="title-box">
                                                        <div class="info-box">
                                                            <h3>{{ $educationsData->educationLevel->level_name }} in {{ $educationsData->educationSubject->subject_name }}</h3>
                                                            <p style="margin-bottom: 0px">{{ $educationsData->institute_name }}, {{ $educationsData->educationDegreeTitle->degree_initial_form }}</p>
                                                            @if($educationsData->cgpa != null && $educationsData->education_institute_type_id == 4)
                                                                <p>CGPA: {{ $educationsData->cgpa }}/{{ $educationsData->scale }}</p>
                                                            @elseif($educationsData->cgpa != null)
                                                                <p>GPA: {{ $educationsData->cgpa }}/{{ $educationsData->scale }}</p>
                                                            @elseif($educationsData->marks != null)
                                                                <p>Marks: {{ $educationsData->marks }}%</p>
                                                            @endif
                                                        </div>
                                                        <div class="edit-box">
                                                            <span class="year">@if($educationsData->duration != null) {{ $educationsData->year_of_passing - $educationsData->duration}} -@endif {{ $educationsData->year_of_passing }}</span>
                                                            <div class="edit-btns">
                                                                {{-- <button><span class="la la-pencil"></span></button> --}}
                                                                <button><span class="la la-trash"></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="text">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Proin a ipsum tellus. Interdum et
                                                        malesuada fames ac ante<br> ipsum primis in faucibus.
                                                    </div> --}}
                                                </div>
                                            </div>
                                        @endforeach

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
            <div class="modal-dialog modal-lg modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Education</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('js-add-education') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gx-3 gy-4">
                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Level of Education </label>
                                            <select id="education-level-select" name="education_level" data-placeholder="Education Level" class="form-control chosen-select">
                                                <option value="">Select Level</option>
                                                @foreach ($educationLevelsData as $key => $educationLevel)
                                                    <option value="{{ $educationLevel->id }}">{{ $educationLevel->level_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 mb-4" id="education-degree-title-select-wrapper">
                                            <label class="py-2">Exam/Degree Title </label>
                                            <select id="education-degree-title-select" name="exam_degree_title" data-placeholder="Degree Title" class="form-control chosen-select">
                                                <option value="">Select Degree</option>
                                                @foreach ($educationDegreeTitleData as $key => $educationDegreeTitle)
                                                    <option value="{{ $educationDegreeTitle->id }}">{{ $educationDegreeTitle->degree_full_form }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 mb-4" id="education-degree-title-input-wrapper" style="display: none;">
                                            <label class="py-2">Exam/Degree Title</label>
                                            <input type="text" id="education-degree-title-input" name="exam_degree_title_1" class="form-control" placeholder="Enter Degree Title">
                                        </div>

                                        <div id="major-subject-dropdown" class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Concentration/Major/Group </label>
                                            <select name="major_subject" data-placeholder="Major Subject" class="form-control chosen-select">
                                                <option value="">Select Subject</option>
                                                @foreach ($educationSubjectsData as $key => $educationSubject)
                                                    <option value="{{ $educationSubject->id }}">{{ $educationSubject->subject_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="education-board-dropdown" class="form-group col-lg-6 col-md-12 mb-4 hide">
                                            <label class="py-2">Board </label>
                                            <select name="education_board" data-placeholder="Education Board" class="form-control chosen-select">
                                                <option value="">Select Education Board</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Barishal">Barishal</option>
                                                <option value="Chattogram">Chattogram</option>
                                                <option value="Cumilla">Cumilla</option>
                                                <option value="Dinajpur">Dinajpur</option>
                                                <option value="Jashore">Jashore</option>
                                                <option value="Mymensingh">Mymensingh</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Sylhet">Sylhet</option>
                                                <option value="Madrasah">Madrasah</option>
                                                <option value="Technical">Technical</option>
                                                <option value="BOU">BOU</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Institute Type </label>
                                            <select id="institution-type" name="institution_type" data-placeholder="Institute Type" class="form-control chosen-select">
                                                <option value="">Select Institute Type</option>
                                                <option value="1">School</option>
                                                <option value="2">College</option>
                                                <option value="3">Madrasha</option>
                                                <option value="4">University</option>
                                            </select>
                                        </div>

                                        <div id="institute-name" class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Institute Name </label>
                                            {{-- <select data-placeholder="Institute Name" class="chosen-select">
                                                <option>Select Institute</option>
                                                <option value="-1">Others</option>
                                                @foreach ($educationLevelsData as $key => $educationLevel)
                                                    <option value="{{ $educationLevel->id }}">
                                                        {{ $educationLevel->level_name }}</option>
                                                @endforeach
                                            </select> --}}
                                            <input type="text" id="institute-name-input" name="institution_name" class="form-control" placeholder="Type Institute Name">
                                            <div id="institute-name-dropdown" class="autocomplete-items"></div>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Result </label>
                                            <select id="result-type-select" name="result_type" data-placeholder="Result Type" class="form-control chosen-select">
                                                <option value="">Select Result Type</option>
                                                @foreach ($educationResultTypeData as $key => $educationResultType)
                                                    <option value="{{ $educationResultType->id }}">
                                                        {{ $educationResultType->result_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="marks-input" class="form-group col-lg-6 col-md-12 mb-4 hide">
                                            <label class="py-2">Marks (%)</label>
                                            <input name="exam_marks" type="text" class="form-control" placeholder="">
                                        </div>

                                        <div id="cgpa-input" class="form-group col-lg-6 col-md-12 mb-4 hide">
                                            <label class="py-2">CGPA </label>
                                            <input name="exam_cgpa" type="text" class="form-control" placeholder="">
                                        </div>

                                        <div id="scale-input" class="form-group col-lg-6 col-md-12 mb-4 hide">
                                            <label class="py-2">Scale </label>
                                            <input name="grade_scale" type="text" class="form-control" placeholder="">
                                        </div>

                                        <div id="graduation-duration-input" class="hide form-group col-lg-6 col-md-12 mb-4 hide">
                                            <label class="py-2">Duration </label>
                                            <input name="graduation_duration" type="number" class="form-control" placeholder="">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Year of Passing </label>
                                            <select name="exam_passing_year" data-placeholder="Passing Year" class="form-control chosen-select">
                                                <option value="">Select Year</option>
                                                @foreach ($yearsData as $key => $year)
                                                    <option value="{{ $year->year }}">
                                                        {{ $year->year }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        {{-- <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Achievement </label>
                                            <input name="exam_achievement" type="text" class="form-control" placeholder="">
                                        </div> --}}

                                        <div class="form-group mt-3">
                                            <button type="submit"
                                                class="btn btn-primary full-width font--bold btn-md">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        {{-- // var schoolAndCollegeData = {!! json_encode($schoolAndCollegeData) !!}; --}}

    </div>
    @include('v1.careepick.dashboard.job-seeker.ajax.resume-builder.education')
@endsection
