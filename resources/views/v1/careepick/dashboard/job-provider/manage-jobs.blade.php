@extends('v1.careepick.dashboard.layouts.jp-master')
@section('content')
    <!--datatable css-->
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <link href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" rel="stylesheet" type="text/css"/>

    <div class="upper-title-box">
        <h3>Manage Jobs</h3>
        <div class="text">Ready to jump back in?</div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <!-- Ls widget -->
            <div class="ls-widget">
                <div class="tabs-box">
                    <div class="widget-title">
                        <h4>My Job Listings</h4>

                        {{-- <div class="chosen-outer">
                            <select class="chosen-select">
                                <option>Last 6 Months</option>
                                <option>Last 12 Months</option>
                                <option>Last 16 Months</option>
                                <option>Last 24 Months</option>
                                <option>Last 5 year</option>
                            </select>
                        </div> --}}
                    </div>

                    <div class="widget-content">
                        <div class="table-outer">
                            <table id="buttons-datatables" class="hover table align-middle default-table manage-job-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Position</th>
                                        <th>Salary</th>
                                        <th>Age</th>
                                        <th>Experience</th>
                                        <th>Job Type</th>
                                        <th>Deadline</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jobsData as $key=> $data)
                                        <tr>
                                            <td><h6>{{ $data->job_title }}</h6></td>
                                            <td>{{ ($data->salary != null) ? $data->salary : $data->salary_type_name }}</td>
                                            <td>{{ $data->age_range_name }}</td>
                                            <td>{{ $data->experience_range_name }}</td>
                                            <td>{{ $data->job_nature_name }}</td>
                                            <td>{{ $data->deadline }}</td>
                                            <td class="status">Active</td>
                                            <td>
                                                <div class="option-box">
                                                    <ul class="option-list">
                                                        <li><button data-text="View Aplication"><span
                                                                    class="la la-eye"></span></button></li>
                                                        <li><button data-text="Reject Aplication"><span
                                                                    class="la la-pencil"></span></button></li>
                                                        <li><button data-text="Delete Aplication"><span
                                                                    class="la la-trash"></span></button></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <script>
        $(document).ready(function() {
            new DataTable('#buttons-datatables', {
                pagingType: 'simple_numbers',
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, 'All']
                ]
            });
        });
    </script>
@endsection
