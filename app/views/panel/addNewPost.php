<?php require_once 'panel.includes/panel.header.php' ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <form action="">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Add New Post</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                    <li class="breadcrumb-item active">Add New Post</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="justify-content-between d-flex align-items-center mt-4 mb-3">
                            <h5 class="mb-0 pb-1"></h5>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Headers</h4>
                            </div>
                            <div class="card-body">

                                <div class="mb-3 row" style="height: 60px;">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                    </div>
                                </div> <!-- end Snow-editor-->
                                <div class="mb-3 row" style="height: 60px;">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Heading 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                    </div>
                                </div> <!-- end Snow-editor-->
                                <div class="mb-3 row" style="height: 60px;">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Heading 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                    </div>
                                </div> <!-- end Snow-editor-->
                                <div class="mb-3 row" style="height: 60px;">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Heading 3</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                    </div>
                                </div> <!-- end Snow-editor-->
                                <div class="mb-3 row" style="height: 60px;">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Block Quote</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end Snow-editor-->
                                <!-- end Snow-editor-->
                            </div> <!-- end card-body-->
                        </div><!-- end card-->

                        <!-- end card-->
                    </div>

                    <div class="col-lg-6">
                        <div class="justify-content-between d-flex align-items-center mt-4 mb-3">
                            <h5 class="mb-0 pb-1"></h5>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Post Body</h4>
                            </div>
                            <div class="card-body">

                                <div id="snow-editor" style="height: 300px;">
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
                            </div> <!-- end card-body-->
                        </div><!-- end card-->

                        <!-- end card-->
                    </div><!-- end col -->


                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="justify-content-between d-flex align-items-center mt-4 mb-3">
                            <h5 class="mb-0 pb-1"></h5>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Image 1</h4>
                            </div>
                            <div class="card-body">
                                <div style="height: 200px;">

                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted mdi mdi-cloud-upload"></i>
                                        </div>

                                        <h4>1200 x 800</h4>
                                    </div>

                                </div>
                            </div> <!-- end card-body-->
                        </div><!-- end card-->

                        <!-- end card-->
                    </div><!-- end col -->
                    <div class="col-lg-3">
                        <div class="justify-content-between d-flex align-items-center mt-4 mb-3">
                            <h5 class="mb-0 pb-1"></h5>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Image 2</h4>
                            </div>
                            <div class="card-body">
                                <div style="height: 200px;">

                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted mdi mdi-cloud-upload"></i>
                                        </div>

                                        <h4> 2000 x 1333</h4>
                                    </div>

                                </div>


                            </div> <!-- end card-body-->
                        </div><!-- end card-->

                        <!-- end card-->
                    </div>
                    <div class="col-lg-3">
                        <div class="justify-content-between d-flex align-items-center mt-4 mb-3">
                            <h5 class="mb-0 pb-1"></h5>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Image 3</h4>
                            </div>
                            <div class="card-body">
                                <div style="height: 200px;">

                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted mdi mdi-cloud-upload"></i>
                                        </div>

                                        <h4> 2000 x 1501</h4>
                                    </div>

                                </div>


                            </div> <!-- end card-body-->
                        </div><!-- end card-->

                        <!-- end card-->
                    </div>
                    <div class="col-lg-3">
                        <div class="justify-content-between d-flex align-items-center mt-4 mb-3">
                            <h5 class="mb-0 pb-1"></h5>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Image 4</h4>
                            </div>
                            <div class="card-body">
                                <div style="height: 200px;">

                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted mdi mdi-cloud-upload"></i>
                                        </div>

                                        <h4> 2000 x 1333</h4>
                                    </div>

                                </div>


                            </div> <!-- end card-body-->
                        </div><!-- end card-->

                        <!-- end card-->
                    </div>
                </div>
                <div class="mt-4 text-center" >
                    <button type="submit" class="btn btn-lg btn-primary w-lg">Submit</button>
                </div>
            </form>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Symox.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->

<?php require_once 'panel.includes/panel.footer.php' ?>