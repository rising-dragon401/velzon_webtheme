@extends('layouts.master')
@section('title')
    @lang('translation.chartjs')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Charts
        @endslot
        @slot('title')
            Chartjs
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Line Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="lineChart" class="chartjs-chart" data-colors='["--vz-primary-rgb, 0.2", "--vz-primary", "--vz-info-rgb, 0.2", "--vz-info"]'></canvas>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Bar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="bar" class="chartjs-chart" data-colors='["--vz-primary"]'></canvas>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Pie Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="pieChart" class="chartjs-chart" data-colors='["--vz-primary", "--vz-light"]'></canvas>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Donut Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="doughnut" class="chartjs-chart" data-colors='["--vz-primary", "--vz-light"]'></canvas>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Polar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="polarArea" class="chartjs-chart" data-colors='["--vz-info", "--vz-success", "--vz-light", "--vz-primary"]'> </canvas>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Radar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="radar" class="chartjs-chart" data-colors='["--vz-info-rgb, 0.2", "--vz-info", "--vz-primary-rgb, 0.2", "--vz-primary"]'></canvas>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/chart.js/chart.umd.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/chartjs.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
