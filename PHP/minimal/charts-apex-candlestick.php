<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Apex Candlestick Charts')); ?>

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

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Apexcharts', 'title' => 'Candlestick Charts')); ?>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Basic Candlestick Chart</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="basic_candlestick" data-colors='["--vz-success", "--vz-primary"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Candlestick Synced with Brush Chart (Combo)</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div>
                                        <div id="combo_candlestick" data-colors='["--vz-info", "--vz-primary"]' class="apex-charts" dir="ltr"></div>
                                        <div id="combo_candlestick_chart" data-colors='["--vz-success", "--vz-primary"]' class="apex-charts" dir="ltr"></div>
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
                                    <h4 class="card-title mb-0">Category X-Axis</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="category_candlestick" data-colors='["--vz-success-rgb, 0.65", "--vz-danger-rgb, 0.65"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Candlestick with line</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="candlestick_with_line" data-colors='["--vz-success", "--vz-danger", "--vz-info", "--vz-warning"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
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

    <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
    <!-- for Category x-axis chart -->
    <script src="https://img.themesbrand.com/velzon/apexchart-js/dayjs.min.js"></script>

    <!-- candlestick charts init -->
    <script src="assets/js/pages/apexcharts-candlestick.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>