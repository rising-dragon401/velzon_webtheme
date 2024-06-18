% rebase('partials/base.tpl')


%def extra_css():
    <!-- quill css -->
    <link href="/static/libs/quill/dist/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="/static/libs/quill/dist/quill.bubble.css" rel="stylesheet" type="text/css" />
    <link href="/static/libs/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
%end

%def content():
        <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                                <h4 class="mb-sm-0">Editors</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Editors</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0">Ckeditor Classic Editor</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>ckeditor-classic</code> class to set ckeditor classic editor.</p>
                                    <div class="ckeditor-classic"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row mt-2">
                        <div class="col-lg-12">

                            <div class="justify-content-between d-flex align-items-center mb-3">
                                <h5 class="mb-0 pb-1 text-decoration-underline">Quilljs Editor</h5>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Snow Editor</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>snow-editor</code> class to set snow editor.</p>
                                    <div class="snow-editor" style="height: 300px;">
                                        <h3><span class="ql-size-large">Hello World!</span></h3>
                                        <p><br></p>
                                        <h3>This is an simple editable area.</h3>
                                        <p><br></p>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p><br></p>
                                        <p>
                                            End of simple area
                                        </p>

                                    </div> <!-- end Snow-editor-->
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Bubble Editor</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>bubble-editor</code> class to set bubble editor.</p>
                                    <div class="bubble-editor" style="height: 300px;">
                                        <h3><span class="ql-size-large">Hello World!</span></h3>
                                        <p><br></p>
                                        <h3>This is an simple editable area.</h3>
                                        <p><br></p>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p><br></p>
                                        <p>
                                            End of simple area
                                        </p>

                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

%end

%def extra_content():

%end

%def extra_js():
    <!-- ckeditor -->
    <script src="/static/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <!-- quill js -->
    <script src="/static/libs/quill/dist/quill.min.js"></script>

    <!-- init js -->
    <script src="/static/js/pages/form-editor.init.js"></script>

%end