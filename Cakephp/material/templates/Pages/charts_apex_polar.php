<?= $this->element('main') ?>

<head>

    <?= $this->element('title-meta', array('title' => 'Apex Polararea Charts')) ?>

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

                    <?= $this->element('page-title', array('pagetitle' => 'Apexcharts', 'title' => 'Polararea Charts')) ?>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Basic Polararea Chart</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="basic_polar_area" data-colors='["--vz-primary", "--vz-success", "--vz-warning","--vz-danger", "--vz-info", "--vz-success", "--vz-primary", "--vz-dark", "--vz-secondary"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">PolarArea Monochrome</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="monochrome_polar_area" class="apex-charts" dir="ltr"></div>
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

    <!-- polarareacharts init -->
    <script src="/js/pages/apexcharts-polararea.init.js"></script>

    <!-- App js -->
    <script src="/js/app.js"></script>
</body>

</html>