<!doctype html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark" data-body-image="img-3" data-preloader="disable">

<head>
    @include('v1.careepick.layouts.title-meta')
    @include('v1.careepick.layouts.head-css')
</head>

@section('body')
    @include('v1.careepick.layouts.body')
@show

    <div class="page_preloader"></div>

    <div id="toastr-alerts-container"></div>


    <!-- Begin page -->
    @include('v1.careepick.layouts.menu')
    @yield('content')

    <!-- End Page-content -->
    @include('v1.careepick.layouts.footer')
    {{-- @include('v1.careepick.common.modal.delete')
    @include('v1.careepick.layouts.custom-ajax-script') --}}

    <!-- JAVASCRIPT -->
    @include('v1.careepick.layouts.vendor-scripts')
</body>

</html>
