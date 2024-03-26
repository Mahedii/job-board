@extends('v1.careepick.dashboard.layouts.js-master')
@section('content')
    <style>
        .uploading-outer img.uploaded-image {
            position: absolute;
            top: 0;
            left: 0;
            max-width: 100%;
            max-height: 120px;
            /* Adjust height as needed */
            border-radius: 5px;
        }

        .uploadButton .uploadButton-button {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: pointer;
            height: 120px;
            width: 104px;
            border-radius: 5px;
            transition: 0.3s;
            margin: 0;
            color: #1b2032;
            font-size: 16px;
            border: 2px dashed #ced4e1;
        }
    </style>

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
                        <div class="d-flex justify-content-sm-end">
                            <a href="{{ route('show-resume') }}" class="btn btn-primary m-3" target="_blank">
                                <i class="ri-add-line align-bottom me-1"></i>
                                View Resume
                            </a>
                        </div>
                    </div>

                    <div class="widget-content">
                        <form class="default-form" method="POST" action="{{ route('js-add-general-info') }}"
                            enctype="multipart/form-data">
                            @csrf
                            @foreach ($jobSeekerData as $key => $jsData)
                                <div class="row">
                                    {{-- <div class="form-group col-lg-12 col-md-12">
                                        <div class="uploading-outer">
                                            <!-- Display the image here -->
                                            <img src="{{ asset($jsData->jobseeker_image) }}" class="uploaded-image"
                                                alt="Jobseeker Image">
                                            <div class="uploadButton">
                                                <input class="uploadButton-input" type="file" name="jobseeker_image"
                                                    accept="image/*" id="upload" />
                                                <label class="uploadButton-button ripple-effect" for="upload">Update
                                                    Image</label>
                                                <span class="uploadButton-file-name"></span>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Full Name <span class="text-danger">*</span></label>
                                        <input type="text" name="jobseeker_name" value="{{ $jsData->jobseeker_name }}"
                                            placeholder="Mr. X" />
                                        <input type="hidden" name="jobseeker_id" value="{{ $jsData->id }}" />
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" name="jobseeker_mail" value="{{ $jsData->jobseeker_mail }}"
                                            placeholder="xx@xx.xx" />
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Date of Birth <span class="text-danger">*</span></label>
                                        <input type="date" name="jobseeker_dob" value="{{ $jsData->jobseeker_dob }}"
                                            class="form-control input-custom-style" placeholder="YYYY-MM-DD">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Religion <span class="text-danger">*</span></label>
                                        <select id="" name="jobseeker_religion" class="form-control chosen-select">
                                            <option value="-1">Select Religion</option>
                                            <option value="Islam"
                                                {{ $jsData->jobseeker_religion == 'Islam' ? 'selected' : '' }}>Islam
                                            </option>
                                            <option value="Buddhism"
                                                {{ $jsData->jobseeker_religion == 'Buddhism' ? 'selected' : '' }}>Buddhism
                                            </option>
                                            <option value="Christianity"
                                                {{ $jsData->jobseeker_religion == 'Christianity' ? 'selected' : '' }}>
                                                Christianity</option>
                                            <option value="Hinduism"
                                                {{ $jsData->jobseeker_religion == 'Hinduism' ? 'selected' : '' }}>Hinduism
                                            </option>
                                            <option value="Jainism"
                                                {{ $jsData->jobseeker_religion == 'Jainism' ? 'selected' : '' }}>Jainism
                                            </option>
                                            <option value="Judaism"
                                                {{ $jsData->jobseeker_religion == 'Judaism' ? 'selected' : '' }}>Judaism
                                            </option>
                                            <option value="Sikhism"
                                                {{ $jsData->jobseeker_religion == 'Sikhism' ? 'selected' : '' }}>Sikhism
                                            </option>
                                            <option value="Others"
                                                {{ $jsData->jobseeker_religion == 'Others' ? 'selected' : '' }}>Others
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Gender <span class="text-danger">*</span></label>
                                        <select id="" name="jobseeker_gender" class="form-control chosen-select">
                                            <option value="-1">Select Gender</option>
                                            <option value="Male"
                                                {{ $jsData->jobseeker_gender == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female"
                                                {{ $jsData->jobseeker_gender == 'Female' ? 'selected' : '' }}>Female
                                            </option>
                                            <option value="Others"
                                                {{ $jsData->jobseeker_gender == 'Others' ? 'selected' : '' }}>Others
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Marital Status <span class="text-danger">*</span></label>
                                        <select id="" name="jobseeker_marital_status"
                                            class="form-control chosen-select">
                                            <option value="-1">Select Status</option>
                                            <option value="Married"
                                                {{ $jsData->jobseeker_marital_status == 'Married' ? 'selected' : '' }}>
                                                Married</option>
                                            <option value="Unmarried"
                                                {{ $jsData->jobseeker_marital_status == 'Unmarried' ? 'selected' : '' }}>
                                                Unmarried</option>
                                            <option value="Single"
                                                {{ $jsData->jobseeker_marital_status == 'Single' ? 'selected' : '' }}>
                                                Single</option>
                                            <option value="Divorced"
                                                {{ $jsData->jobseeker_marital_status == 'Divorced' ? 'selected' : '' }}>
                                                Divorced</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Primary Mobile <span class="text-danger">*</span></label>
                                        <input type="text" name="jobseeker_phone_no_1"
                                            value="{{ $jsData->jobseeker_phone_no_1 }}" placeholder="01*********" />
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Secondary Mobile</label>
                                        <input type="text" name="jobseeker_phone_no_2"
                                            value="{{ $jsData->jobseeker_phone_no_2 }}" placeholder="01*********" />
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>National Id</label>
                                        <input type="text" name="jobseeker_nid_no"
                                            value="{{ $jsData->jobseeker_nid_no }}" placeholder="" />
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input type="text" name="jobseeker_address"
                                            value="{{ $jsData->jobseeker_address }}"
                                            placeholder="Ex: Dhaka, Bangladesh" />
                                    </div>

                                    {{-- About Yourself --}}
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Career Summary <span class="text-danger">*</span></label>
                                        <textarea name="jobseeker_career_summary">
                                            {{ $jsData->jobseeker_career_summary }}
                                        </textarea>
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="theme-btn btn-style-one">Save</button>
                                    </div>
                                </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
                <div class="tabs-box">
                    <div class="widget-title">
                        <h4></h4>
                    </div>

                    <div class="widget-content">
                        <div class="row">
                            <!-- Resume / Work & Experience -->
                            <div class="form-group col-lg-12 col-md-12">
                                @if (session('add-education-message'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>{{ session('add-education-message') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="resume-outer theme-blue">
                                    @if (session('add-work-xp-message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ session('add-work-xp-message') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="upper-title">
                                        <h4>Work & Experience</h4>
                                        <a href="JavaScript:Void(0);" class="add-info-btn" data-bs-toggle="modal"
                                            data-bs-target="#addWorkExperience"><span class="icon flaticon-plus"></span>
                                            Add
                                            Work</a>
                                    </div>
                                    <!-- Resume BLock -->
                                    @foreach ($jobSeekerExperiencesData as $key => $workXpData)
                                        <div class="resume-block">
                                            <div class="inner">
                                                <span class="name">{{ ++$key }}</span>
                                                <div class="title-box">
                                                    <div class="info-box">
                                                        <h3>{{ $workXpData->designation }}</h3>
                                                        <span>{{ $workXpData->organization_name }}</span>
                                                    </div>
                                                    <div class="edit-box">
                                                        <span class="year">{{ $workXpData->workingTime }}</span>
                                                        <div class="edit-btns">
                                                            {{-- <button><span class="la la-pencil"></span></button> --}}
                                                            <button><span class="la la-trash"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    {{ $workXpData->responsibilities }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Resume / Education -->
                            <div class="form-group col-lg-12 col-md-12">
                                @if (session('add-education-message'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>{{ session('add-education-message') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="resume-outer">
                                    <div class="upper-title">
                                        <h4>Education</h4>
                                        <a href="JavaScript:Void(0);" class="add-info-btn" data-bs-toggle="modal"
                                            data-bs-target="#addEducation"><span class="icon flaticon-plus"></span> Add
                                            Education</a>
                                    </div>
                                    <!-- Resume BLock -->
                                    @foreach ($jobSeekerEducationsData as $key => $educationsData)
                                        <div class="resume-block">
                                            <div class="inner" style="padding-bottom: 0px">
                                                <span
                                                    class="name">{{ $educationsData->educationLevel->level_icon }}</span>
                                                <div class="title-box">
                                                    <div class="info-box">
                                                        <h3>{{ $educationsData->educationLevel->level_name }} in
                                                            {{ $educationsData->educationSubject->subject_name }}</h3>
                                                        <p style="margin-bottom: 0px">
                                                            {{ $educationsData->institute_name }},
                                                            {{ $educationsData->educationDegreeTitle->degree_initial_form }}
                                                        </p>
                                                        @if ($educationsData->cgpa != null && $educationsData->education_institute_type_id == 4)
                                                            <p>CGPA:
                                                                {{ $educationsData->cgpa }}/{{ $educationsData->scale }}
                                                            </p>
                                                        @elseif($educationsData->cgpa != null)
                                                            <p>GPA:
                                                                {{ $educationsData->cgpa }}/{{ $educationsData->scale }}
                                                            </p>
                                                        @elseif($educationsData->marks != null)
                                                            <p>Marks: {{ $educationsData->marks }}%</p>
                                                        @endif
                                                    </div>
                                                    <div class="edit-box">
                                                        <span class="year">
                                                            @if ($educationsData->duration != null)
                                                                {{ $educationsData->year_of_passing - $educationsData->duration }}
                                                                -
                                                            @endif
                                                            {{ $educationsData->year_of_passing }}
                                                        </span>
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
                                </div>
                            </div>

                            {{-- <div class="form-group col-lg-6 col-md-12">
                                <div class="uploading-outer">
                                    <div class="uploadButton">
                                        <input class="uploadButton-input" type="file" name="attachments[]"
                                            accept="image/*, application/pdf" id="upload" multiple />
                                        <label class="uploadButton-button ripple-effect" for="upload">Add
                                            Portfolio</label>
                                        <span class="uploadButton-file-name"></span>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Resume / Certifications -->
                            <div class="form-group col-lg-12 col-md-12">
                                <!-- Resume / Certifications -->
                                <div class="resume-outer theme-yellow">
                                    @if (session('add-certification-message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ session('add-certification-message') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="upper-title">
                                        <h4>Certifications</h4>
                                        <a href="JavaScript:Void(0);" class="add-info-btn" data-bs-toggle="modal"
                                            data-bs-target="#addCertification"><span class="icon flaticon-plus"></span>
                                            Certifications</a>
                                    </div>
                                    <!-- Resume BLock -->
                                    @foreach ($jobSeekerCertificationData as $key => $certificationData)
                                        <div class="resume-block">
                                            <div class="inner">
                                                <span class="name">{{ ++$key }}</span>
                                                <div class="title-box">
                                                    <div class="info-box">
                                                        <h3>{{ $certificationData->certification_name }}</h3>
                                                        <span>{{ $certificationData->certification_institution }}</span>
                                                        <span></span>
                                                    </div>
                                                    <div class="edit-box">
                                                        <span class="year">{{ $certificationData->certified_month }} ,
                                                            {{ $certificationData->certified_year }}</span>
                                                        <div class="edit-btns">
                                                            {{-- <button><span class="la la-pencil"></span></button> --}}
                                                            <button><span class="la la-trash"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Resume / Research Papers -->
                            <div class="form-group col-lg-12 col-md-12">
                                <div class="resume-outer theme-yellow">
                                    @if (session('add-publications-message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ session('add-publications-message') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="upper-title">
                                        <h4>Research paper/Publications</h4>
                                        <a href="JavaScript:Void(0);" class="add-info-btn" data-bs-toggle="modal"
                                            data-bs-target="#addResearchPapers"><span class="icon flaticon-plus"></span>
                                            Research paper/Publications</a>
                                    </div>
                                    <!-- Resume BLock -->
                                    @foreach ($jobSeekerResearchPapersData as $key => $publicationData)
                                        <div class="resume-block">
                                            <div class="inner">
                                                <span class="name">{{ ++$key }}</span>
                                                <div class="title-box">
                                                    <div class="info-box">
                                                        <h3>{{ $publicationData->research_paper_subject }}</h3>
                                                        @if ($publicationData->research_paper_url != null)
                                                            <span>Publication link:
                                                                {{ $publicationData->certification_institution }}</span>
                                                        @endif
                                                        <span></span>
                                                    </div>
                                                    <div class="edit-box">
                                                        <span class="year">{{ $publicationData->certified_month }} ,
                                                            {{ $certificationData->certified_year }}</span>
                                                        <div class="edit-btns">
                                                            {{-- <button><span class="la la-pencil"></span></button> --}}
                                                            <button><span class="la la-trash"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    {{ $publicationData->research_paper_summary }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Resume / Language Proficiency -->
                            <div class="form-group col-lg-12 col-md-12">
                                <div class="resume-outer theme-yellow">
                                    @if (session('add-languages-message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ session('add-languages-message') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="upper-title">
                                        <h4>Language Proficiency</h4>
                                        <a href="JavaScript:Void(0);" class="add-info-btn" data-bs-toggle="modal"
                                            data-bs-target="#addLanguage"><span class="icon flaticon-plus"></span>
                                            Language Proficiency</a>
                                    </div>
                                    <!-- Resume BLock -->
                                    @foreach ($jobSeekerLanguagesData as $key => $languageData)
                                        <div class="resume-block">
                                            <div class="inner" style="padding-bottom: 0px; padding-left: 20px;">
                                                {{-- <span class="name">{{ ++$key }}</span> --}}
                                                <div class="title-box" style="margin-bottom: 0px">
                                                    <div class="info-box">
                                                        <h3>{{ $languageData->language->language_name }} -
                                                            {{ $languageData->proficiency }}</h3>
                                                    </div>
                                                    <div class="edit-box">
                                                        <div class="edit-btns">
                                                            {{-- <button><span class="la la-pencil"></span></button> --}}
                                                            <button><span class="la la-trash"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Resume / Language Proficiency -->
                            <div class="form-group col-lg-12 col-md-12">
                                <div class="resume-outer theme-yellow">
                                    @if (session('add-languages-message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ session('add-languages-message') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="upper-title">
                                        <h4>Skills</h4>
                                        <a href="JavaScript:Void(0);" class="add-info-btn" data-bs-toggle="modal"
                                            data-bs-target="#addSkills"><span class="icon flaticon-plus"></span>
                                            Skills</a>
                                    </div>
                                    <!-- Resume BLock -->

                                        <div class="resume-block">
                                            <div class="inner" style="padding-bottom: 0px; padding-left: 20px;">
                                                <div class="title-box" style="margin-bottom: 0px">
                                                    <div class="info-box">
                                                        <h3></h3>
                                                        @foreach ($jobSeekerSkillsData as $key => $skilldata)
                                                            <span class="badge rounded-pill bg-primary" style="color: white;">
                                                                {{ $skilldata->skills->skill_name }}
                                                            </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Education Modal -->
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
                                            <label class="py-2">Level of Education <span
                                                    class="text-danger">*</span></label>
                                            <select id="education-level-select" name="education_level"
                                                data-placeholder="Education Level" class="form-control chosen-select">
                                                <option value="">Select Level</option>
                                                @foreach ($educationLevelsData as $key => $educationLevel)
                                                    <option value="{{ $educationLevel->id }}">
                                                        {{ $educationLevel->level_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 mb-4"
                                            id="education-degree-title-select-wrapper">
                                            <label class="py-2">Exam/Degree Title <span
                                                    class="text-danger">*</span></label>
                                            <select id="education-degree-title-select" name="exam_degree_title"
                                                data-placeholder="Degree Title" class="form-control chosen-select">
                                                <option value="">Select Degree</option>
                                                @foreach ($educationDegreeTitleData as $key => $educationDegreeTitle)
                                                    <option value="{{ $educationDegreeTitle->id }}">
                                                        {{ $educationDegreeTitle->degree_full_form }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 mb-4"
                                            id="education-degree-title-input-wrapper" style="display: none;">
                                            <label class="py-2">Exam/Degree Title <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="education-degree-title-input"
                                                name="exam_degree_title_1" class="form-control"
                                                placeholder="Enter Degree Title">
                                        </div>

                                        <div id="major-subject-dropdown" class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Concentration/Major/Group <span
                                                    class="text-danger">*</span></label>
                                            <select name="major_subject" data-placeholder="Major Subject"
                                                class="form-control chosen-select">
                                                <option value="">Select Subject</option>
                                                @foreach ($educationSubjectsData as $key => $educationSubject)
                                                    <option value="{{ $educationSubject->id }}">
                                                        {{ $educationSubject->subject_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="education-board-dropdown"
                                            class="form-group col-lg-6 col-md-12 mb-4 hide">
                                            <label class="py-2">Board <span class="text-danger">*</span></label>
                                            <select name="education_board" data-placeholder="Education Board"
                                                class="form-control chosen-select">
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
                                            <label class="py-2">Institute Type <span
                                                    class="text-danger">*</span></label>
                                            <select id="institution-type" name="institution_type"
                                                data-placeholder="Institute Type" class="form-control chosen-select">
                                                <option value="">Select Institute Type</option>
                                                <option value="1">School</option>
                                                <option value="2">College</option>
                                                <option value="3">Madrasha</option>
                                                <option value="4">University</option>
                                            </select>
                                        </div>

                                        <div id="institute-name" class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Institute Name <span
                                                    class="text-danger">*</span></label>
                                            {{-- <select data-placeholder="Institute Name" class="chosen-select">
                                                <option>Select Institute</option>
                                                <option value="-1">Others</option>
                                                @foreach ($educationLevelsData as $key => $educationLevel)
                                                    <option value="{{ $educationLevel->id }}">
                                                        {{ $educationLevel->level_name }}</option>
                                                @endforeach
                                            </select> --}}
                                            <input type="text" id="institute-name-input" name="institution_name"
                                                class="form-control input-custom-style" placeholder="Type Institute Name">
                                            <div id="institute-name-dropdown" class="autocomplete-items"></div>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Result <span class="text-danger">*</span></label>
                                            <select id="result-type-select" name="result_type"
                                                data-placeholder="Result Type" class="form-control chosen-select">
                                                <option value="">Select Result Type</option>
                                                @foreach ($educationResultTypeData as $key => $educationResultType)
                                                    <option value="{{ $educationResultType->id }}">
                                                        {{ $educationResultType->result_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="marks-input" class="form-group col-lg-6 col-md-12 mb-4 hide">
                                            <label class="py-2">Marks (%) <span class="text-danger">*</span></label>
                                            <input name="exam_marks" type="text" class="form-control" placeholder="">
                                        </div>

                                        <div id="cgpa-input" class="form-group col-lg-6 col-md-12 mb-4 hide">
                                            <label class="py-2">CGPA <span class="text-danger">*</span></label>
                                            <input name="exam_cgpa" type="text" class="form-control" placeholder="">
                                        </div>

                                        <div id="scale-input" class="form-group col-lg-6 col-md-12 mb-4 hide">
                                            <label class="py-2">Scale <span class="text-danger">*</span></label>
                                            <input name="grade_scale" type="text" class="form-control"
                                                placeholder="">
                                        </div>

                                        <div id="graduation-duration-input"
                                            class="hide form-group col-lg-6 col-md-12 mb-4 hide">
                                            <label class="py-2">Duration <span class="text-danger">*</span></label>
                                            <input name="graduation_duration" type="number" class="form-control"
                                                placeholder="">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Year of Passing <span
                                                    class="text-danger">*</span></label>
                                            <select name="exam_passing_year" data-placeholder="Passing Year"
                                                class="form-control chosen-select">
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
        <!-- End Education Modal -->

        <!-- Work Experience Modal -->
        <div class="modal fade" id="addWorkExperience" tabindex="-1" role="dialog"
            aria-labelledby="addWorkExperienceModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Work Experience</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('js-add-work-experience') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gx-3 gy-4">
                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Company Name <span class="text-danger">*</span></label>
                                            <input type="text" name="organization_name"
                                                class="form-control input-custom-style" />
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Designation <span class="text-danger">*</span></label>
                                            <input type="text" name="designation"
                                                class="form-control input-custom-style" />
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 mb-4">
                                            <label class="py-2">Responsibilities </label>
                                            <textarea name="working_responsibilities" class="form-control input-custom-style"
                                                placeholder="Spent several years working on sheep on Wall Street..."></textarea>
                                        </div>

                                        <div id="major-subject-dropdown" class="form-group col-lg-3 col-md-3 mb-4">
                                            <label class="py-2">From Month <span class="text-danger">*</span></label>
                                            <select name="from_month" class="form-control chosen-select">
                                                <option value="">Select Month</option>
                                                @foreach ($monthsData as $key => $month)
                                                    <option value="{{ $month->month_name }}">
                                                        {{ $month->month_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="" class="form-group col-lg-3 col-md-3 mb-4">
                                            <label class="py-2">From Year <span class="text-danger">*</span></label>
                                            <select name="from_year" class="form-control chosen-select">
                                                <option value="">Select Year</option>
                                                @foreach ($yearsData as $key => $year)
                                                    <option value="{{ $year->year }}">
                                                        {{ $year->year }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="" class="form-group col-lg-3 col-md-3 mb-4">
                                            <label class="py-2">To Month <span class="text-danger">*</span></label>
                                            <select id="to-month" name="to_month" class="form-control chosen-select">
                                                <option value="">Select Month</option>
                                                @foreach ($monthsData as $key => $month)
                                                    <option value="{{ $month->month_name }}">
                                                        {{ $month->month_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-3 col-md-3 mb-4">
                                            <label class="py-2">To Year <span class="text-danger">*</span></label>
                                            <select id="to-year" name="to_year" class="form-control chosen-select">
                                                <option value="">Select Year</option>
                                                @foreach ($yearsData as $key => $year)
                                                    <option value="{{ $year->year }}">
                                                        {{ $year->year }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-3 col-md-3 mb-4">
                                            <input name="currently_working" type="checkbox" id="currently-working"
                                                value="0" class="form-check-input">
                                            <label class="form-check-label" for="formCheck1">
                                                Currently Working
                                            </label>
                                        </div>

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
        <!-- End Work Experience Modal -->

        <!-- Certification Modal -->
        <div class="modal fade" id="addCertification" tabindex="-1" role="dialog"
            aria-labelledby="addCertificationModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Certification</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('js-add-certification') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gx-3 gy-4">
                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Certification <span class="text-danger">*</span></label>
                                            <input type="text" name="certification_name"
                                                class="form-control input-custom-style" />
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Institute <span class="text-danger">*</span></label>
                                            <input type="text" name="certification_institution"
                                                class="form-control input-custom-style" />
                                        </div>

                                        <div id="major-subject-dropdown" class="form-group col-lg-3 col-md-3 mb-4">
                                            <label class="py-2">Certified Month <span
                                                    class="text-danger">*</span></label>
                                            <select name="certified_month" class="form-control chosen-select">
                                                <option value="">Select Month</option>
                                                @foreach ($monthsData as $key => $month)
                                                    <option value="{{ $month->month_name }}">
                                                        {{ $month->month_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="" class="form-group col-lg-3 col-md-3 mb-4">
                                            <label class="py-2">Certified Year <span
                                                    class="text-danger">*</span></label>
                                            <select name="certified_year" class="form-control chosen-select">
                                                <option value="">Select Year</option>
                                                @foreach ($yearsData as $key => $year)
                                                    <option value="{{ $year->year }}">
                                                        {{ $year->year }}</option>
                                                @endforeach
                                            </select>
                                        </div>

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
        <!-- End Certification Modal -->

        <!-- Research Papers Modal -->
        <div class="modal fade" id="addResearchPapers" tabindex="-1" role="dialog"
            aria-labelledby="addResearchPapersModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Research paper/Publications</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('js-add-publications') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gx-3 gy-4">
                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Subject <span class="text-danger">*</span></label>
                                            <input type="text" name="research_paper_subject"
                                                class="form-control input-custom-style" />
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Publication Link </label>
                                            <input type="text" name="research_paper_url"
                                                class="form-control input-custom-style" />
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 mb-4">
                                            <label class="py-2">Description <span class="text-danger">*</span></label>
                                            <textarea name="research_paper_summary" class="form-control input-custom-style"></textarea>
                                        </div>

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
        <!-- End Research Papers Modal -->

        <!-- Langugae Modal -->
        <div class="modal fade" id="addLanguage" tabindex="-1" role="dialog" aria-labelledby="addLanguageModal"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Language Proficiency</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('js-add-langugaes') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gx-3 gy-4">
                                        <div class="form-group col-lg-6 col-md-12 mb-4">
                                            <label class="py-2">Langugae <span class="text-danger">*</span></label>
                                            <select name="language_id" class="form-control chosen-select">
                                                <option value="">Select Language</option>
                                                @foreach ($languagesData as $key => $language)
                                                    <option value="{{ $language->id }}">
                                                        {{ $language->language_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 mb-4">
                                            <label class="py-2">Proficiency <span class="text-danger">*</span></label>
                                            <select name="proficiency" class="form-control chosen-select">
                                                <option value="">Select Language Proficiency</option>
                                                <option value="Fluent">Fluent</option>
                                                <option value="Native">Native</option>
                                                <option value="Highly Skilled">Highly Skilled</option>
                                            </select>
                                        </div>

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
        <!-- End Language Modal -->

        <!-- Skills Modal -->
        <div class="modal fade" id="addSkills" tabindex="-1" role="dialog" aria-labelledby="addSkillsModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Skills</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('js-add-skills') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gx-3 gy-4">
                                        <div class="form-group col-lg-12 col-md-12 mb-4">
                                            <label class="py-2">Skill <span class="text-danger">*</span></label>
                                            <select name="skill_id[]" data-placeholder="Skills" class="chosen-select multiple" multiple tabindex="4">
                                                @foreach ($skillsData as $data)
                                                    @php
                                                        $selected = $jobSeekerSkillsData->contains('skill_id', $data['id']) ? 'selected' : '';
                                                    @endphp
                                                    <option value="{{ $data['id'] }}" {{ $selected }}>{{ $data['skill_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>

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
        <!-- End Skills Modal -->

        {{-- // var schoolAndCollegeData = {!! json_encode($schoolAndCollegeData) !!}; --}}

    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('change', '#currently-working', function() {
                var isChecked = this.checked;
                // var value = isChecked ? this.value : '';
                const toMonth = document.getElementById('to-month');
                const toYear = document.getElementById('to-year');
                if (isChecked) {
                    $("#currently-working").val(1);
                    toMonth.disabled = isChecked;
                    toYear.disabled = isChecked;
                } else {
                    toMonth.disabled = false;
                    toYear.disabled = false;
                }
            });

            function showImagePreview(event) {
                var input = event.target;
                var reader = new FileReader();

                reader.onload = function() {
                    var img = document.getElementById('imagePreview');
                    img.src = reader.result;
                    img.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            }

        });
    </script>
    @include('v1.careepick.dashboard.job-seeker.ajax.resume-builder.education')
@endsection
