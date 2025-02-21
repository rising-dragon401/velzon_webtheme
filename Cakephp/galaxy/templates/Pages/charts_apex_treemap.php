<?= $this->element('main') ?>

<head>

    <?= $this->element('title-meta', array('title' => 'Apex Treemap Charts')) ?>

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

                    <?= $this->element('page-title', array('pagetitle' => 'Apexcharts', 'title' => 'Treemap Charts')) ?>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Basic Treemap Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="basic_treemap" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Multi-Dimensional Treemap Chart</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="multi_treemap" data-colors='["--vz-primary","--vz-success"]' class="apex-charts" dir="ltr"></div>
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
                                    <h4 class="card-title mb-0">Distributed Treemap Chart (Different Color for each Cell)</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="distributed_treemap" data-colors='["--vz-primary", "--vz-secondary", "--vz-success", "--vz-info","--vz-warning", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Treemap Chart with Color Ranges</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="color_range_treemap" data-colors='["--vz-info","--vz-danger"]' class="apex-charts" dir="ltr"></div>
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

            <?= $this->element('footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <?= $this->element('customizer') ?>

    <?= $this->element('vendor-scripts') ?>

    <!-- apexcharts -->
    <script src="/libs/apexcharts/apexcharts.min.js"></script>

    <!-- treecharts init -->
    <script src="/js/pages/apexcharts-treemap.init.js"></script>

    <!-- App js -->
    <script src="/js/app.js"></script>
</body>

</html>
