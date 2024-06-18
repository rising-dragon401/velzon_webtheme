<?= $this->element('main') ?>

<head>

    <?= $this->element('title-meta', array('title' => 'Apex Timeline Charts')) ?>

    <?= $this->element('head-css') ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->element('menu') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?= $this->element('page-title', array('pagetitle' => 'Apexcharts', 'title' => 'Timeline Charts')) ?>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Basic TimeLine Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="basic_timeline" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Different Color For Each Bar</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="color_timeline" data-colors='["--vz-primary", "--vz-danger", "--vz-success", "--vz-warning", "--vz-info"]' class="apex-charts" dir="ltr"></div>
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
                                    <h4 class="card-title mb-0">Multi Series Timeline</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="multi_series" data-colors='["--vz-primary","--vz-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Advanced Timeline (Multiple Range)</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="advanced_timeline" data-colors='["--vz-primary", "--vz-success", "--vz-warning"]' class="apex-charts" dir="ltr"></div>
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
                                    <h4 class="card-title mb-0">Multiple series � Group rows</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="multi_series_group" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info","--vz-gray","--vz-pink","--vz-purple","--vz-secondary", "--vz-dark"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Dumbbell Chart (Horizontal)</h4>
                                </div><!-- end card header -->
                        
                                <div class="card-body">
                                    <div id="dumbbell_chart" data-colors='["--vz-primary", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?= $this->element('footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <?= $this->element('customizer') ?>

    <?= $this->element('vendor-scripts') ?>

    <!-- apexcharts -->
    <script src="/libs/apexcharts/apexcharts.min.js"></script>

    <script src="/libs/moment/min/moment.min.js"></script>

    <!-- timeline charts init -->
    <script src="/js/pages/apexcharts-timeline.init.js"></script>

    <!-- App js -->
    <script src="/js/app.js"></script>
</body>

</html>