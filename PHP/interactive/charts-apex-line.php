<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Apex Line Charts')); ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include 'layouts/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Apexcharts', 'title' => 'Line Charts')); ?>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Basic Line Chart</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_chart_basic" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Zoomable Timeseries</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_chart_zoomable" data-colors='["--vz-info"]' class="apex-charts" dir="ltr"></div>
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
                                    <h4 class="card-title mb-0">Line with Data Labels</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_chart_datalabel" data-colors='["--vz-primary", "--vz-info"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Dashed Line</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_chart_dashed" data-colors='["--vz-primary", "--vz-gray-300", "--vz-info"]' class="apex-charts" dir="ltr"></div>
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
                                    <h4 class="card-title mb-0">Line with Annotations</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_chart_annotations" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Brush Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div>
                                        <div id="brushchart_line2" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                                        <div id="brushchart_line" data-colors='["--vz-info"]' class="apex-charts" dir="ltr"></div>
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
                                    <h4 class="card-title mb-0">Stepline Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_chart_stepline" data-colors='["--vz-info"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Gradient Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_chart_gradient" data-colors='["--vz-info"]' class="apex-charts" dir="ltr"></div>
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
                                    <h4 class="card-title mb-0">Missing Data/ Null Value Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_chart_missing_data" data-colors='["--vz-primary", "--vz-gray-300", "--vz-info"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Realtimes Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_chart_realtime" data-colors='["--vz-info"]' class="apex-charts" dir="ltr"></div>
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
                                    <h4 class="card-title mb-0">Syncing Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div>
                                        <div id="chart-syncing-line" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                                        <div id="chart-syncing-line2" data-colors='["--vz-warning"]' class="apex-charts" dir="ltr"></div>
                                        <div id="chart-syncing-area" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                      </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include 'layouts/footer.php'; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <?php include 'layouts/customizer.php'; ?>

    <?php include 'layouts/vendor-scripts.php'; ?>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="https://img.themesbrand.com/velzon/apexchart-js/stock-prices.js"></script>

    <!-- linecharts init -->
    <script src="assets/js/pages/apexcharts-line.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>