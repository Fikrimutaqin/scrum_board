@extends('layouts.dashboard.index')
@push('add-css')
@endpush
@section('content')
    <!--Main-->
    <div class="col-lg-7 dashboard-padding-none d-none d-sm-none d-lg-block">
        <section class="dashboard-main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-title-main-content">
                        <h2 class="my-5">Recent Project</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="dashboard-slider-main-content">
                        @include('includes.dashboard.__recent_project.index')
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-title-main-content">
                        <h2 class="my-5">Statistic</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    @include('includes.dashboard.__statistic_project.index')
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-title-main-content">
                        <h2 class="my-5">My Tasks</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="dashboard-tabs-status-task mb-5">
                        @include('includes.dashboard.__my_task.index')
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--EndMain-->
    <!--Right Content-->
    <div class="col-lg-3 dashboard-padding-none d-none d-sm-none d-lg-block">
        <section class="dashboard-main-content">
            <div class="row position-fixed">
                <div class="col-lg-12">
                    <div class="dashboard-title-main-content">
                        <h2 class="my-5">Log Activity</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="dashboard-title-main-content">
                        @include('includes.logs_activity.index')
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--EndRightContent-->
@endsection
@push('add-js')
    <script src="{{ URL::to('assets/dashboard/js/main.js') }}"></script>
    <div class="dashboard-button-floating">
        <a href="#" type="button" class="btn btn-danger dashboard-btn-rounded" title="Add Project">
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>
@endpush
