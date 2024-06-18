@extends('layouts.master')
@section('title')
    @lang('translation.Apex_Bar_Chart')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Apexcharts
        @endslot
        @slot('title')
            Apex Bar Charts
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Bar Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="bar_chart" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Custom DataLabels Bar</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="custom_datalabels_bar"
                        data-colors='["--vz-primary", "--vz-secondary", "--vz-success", "--vz-info", "--vz-primary-rgb, 0.5", "--vz-gray-300", "--vz-danger-rgb, 0.7", "--vz-warning-rgb, 0.5", "--vz-primary", "--vz-info"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Stacked Bar Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="stacked_bar"
                        data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Stacked Bars 100</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="stacked_bar_100"
                        data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Bar with Negative Values</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="negative_bars" data-colors='["--vz-primary", "--vz-info"]' class="apex-charts" dir="ltr">
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Bar with Markers</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="bar_markers" data-colors='["--vz-primary", "--vz-info"]' class="apex-charts" dir="ltr">
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Reversed Bar Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="reversed_bars" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Patterned Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="patterned_bars" data-colors='["--vz-primary", "--vz-info", "--vz-success", "--vz-gray-300"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Grouped Bar Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="grouped_bar" data-colors='["--vz-primary", "--vz-info"]' class="apex-charts" dir="ltr">
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Bar with Images</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="live-preview">
                        <div id="bar_images" class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/apexcharts-bar.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
