@extends('v1.careepick.dashboard.layouts.jp-master')
@section('content')
    <div class="upper-title-box">
        <h3>Post a New Job!</h3>
        <div class="text">Ready to jump back in?</div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
                <div class="tabs-box">
                    <div class="widget-title">
                        <h4>Post Job</h4>
                    </div>

                    <div class="widget-content">

                        <div class="post-job-steps">
                            <div class="step">
                                <span class="icon flaticon-briefcase"></span>
                                <h5>Job Detail</h5>
                            </div>

                            <div class="step">
                                <span class="icon flaticon-money"></span>
                                <h5>Package & Payments</h5>
                            </div>

                            <div class="step">
                                <span class="icon flaticon-checked"></span>
                                <h5>Confirmation</h5>
                            </div>
                        </div>

                        <form class="default-form">
                            <div class="row">
                                <!-- Input -->
                                <div class="form-group col-lg-12 col-md-12">
                                    <label>Job Title</label>
                                    <input type="text" name="job_title" placeholder="Title">
                                </div>

                                <!-- Search Select -->
                                <div class="form-group col-lg-6 col-md-12">
                                    <label>Job Category </label>
                                    <select name="job_category_id" class="chosen-select multiple" tabindex="4">
                                        <option value="Banking">Banking</option>
                                        <option value="Digital&Creative">Digital & Creative</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Management">Management</option>
                                    </select>
                                </div>

                                <!-- Input -->
                                <div class="form-group col-lg-6 col-md-12">
                                    <label>Vacancy</label>
                                    <input type="number" name="vacancy" placeholder="">
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <label>Salary Type </label>
                                    <select name="salary_type_id" class="chosen-select multiple">
                                        <option value="Banking">Banking</option>
                                        <option value="Digital&Creative">Digital & Creative</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Management">Management</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <label>Salary</label>
                                    <input type="text" name="salary" placeholder="">
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <label>Select Age </label>
                                    <select name="age_id" class="chosen-select multiple">
                                        <option value="Banking">Banking</option>
                                        <option value="Digital&Creative">Digital & Creative</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Management">Management</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <label>Experience Level </label>
                                    <select name="experience_id" class="chosen-select multiple">
                                        <option value="Banking">Banking</option>
                                        <option value="Digital&Creative">Digital & Creative</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Management">Management</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <label>Application Deadline Date</label>
                                    <input type="datetime" name="deadline" placeholder="">
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <label>Education</label>
                                    <textarea class="form-control input-custom-style" name="education" rows="3"></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <label>Experience Requirments</label>
                                    <textarea class="form-control ckeditor-classic" id="experience-requirments" name="experience_requirments" rows="5"></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <label>Additional Requirments</label>
                                    <textarea class="form-control ckeditor-classic" id="additional-requirments" name="additional_requirments" rows="5"></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <label>Responsibilities</label>
                                    <textarea class="form-control ckeditor-classic" id="responsibilities" name="responsibilities" rows="5"></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <label>Compensation & Benefits</label>
                                    <textarea class="form-control ckeditor-classic" id="compensation-and-benefits" name="compensation_benefits" rows="5"></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <label>Job Highlights</label>
                                    <textarea class="form-control ckeditor-classic" id="job-highlights" name="job_highlights" rows="5"></textarea>
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <label>Job Nature </label>
                                    <select name="job_nature" class="chosen-select multiple">
                                        <option value="Banking">Banking</option>
                                        <option value="Digital&Creative">Digital & Creative</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Management">Management</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <label>Workplace </label>
                                    <select name="job_place" class="chosen-select multiple">
                                        <option value="Banking">Banking</option>
                                        <option value="Digital&Creative">Digital & Creative</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Management">Management</option>
                                    </select>
                                </div>

                                <!-- Input -->
                                <div class="form-group col-lg-12 col-md-12">
                                    <label>Job Location</label>
                                    <input type="text" name="job_location" placeholder="Banani, Dhaka">
                                </div>

                                <!-- Input -->
                                <div class="form-group col-lg-12 col-md-12 text-right">
                                    <button class="theme-btn btn-style-one">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- ckeditor -->
        {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script> --}}
        <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/super-build/ckeditor.js"></script>
        <script src="{{ URL::asset('dashboard/assets/js/ckeditor5-init.js') }}"></script>
        <script>
            document.querySelectorAll('textarea.ckeditor-classic').forEach(textarea => {
                // Get the ID of each textarea
                const textarea_id = textarea.getAttribute('id');
                // console.log(textarea_id);
                // Call ckEditor_Generator function with textarea_id
                ckEditor_Generator(textarea_id);
            });
        </script>

    </div>
@endsection
