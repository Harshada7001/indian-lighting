<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('category/manage'); ?>">Manage Category</a></li>
                        <li class="breadcrumb-item active">Edit Category</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="card card-warning" style="width: 80%;margin:auto;">
        <div class="card-header" style="background:#f18223">
            <h3 class="card-title">Edit Category</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php foreach ($category as $value) { ?>
                <form id="edit-category" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="category_name" id="category_name" class="form-control" value="<?= $category->category_name; ?>" placeholder="Enter ..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Url_slug</label>
                                <input type="text" name="slug_url" id="slug_url" class="form-control" value="<?=$category->slug_url; ?>" placeholder="Enter ..." >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="category_description" id="category_description" value="<?=$category->category_description; ?>" placeholder="Enter ..." required>
                            </div>
                        </div>
                        <!--<div class="col-sm-6">-->
                        <!--    <div class="form-group">-->
                        <!--        <label>meta_title</label>-->
                        <!--        <input type="text" class="form-control" name="meta_title" id="meta_title" value="<?//= $value->meta_title; ?>" placeholder="Enter ..." >-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6">-->
                        <!--    <div class="form-group">-->
                        <!--        <label>meta_description</label>-->
                        <!--        <input type="text" class="form-control" placeholder="Enter ..." name="meta_description" id="meta_description" value="<?//= $value->meta_description; ?>">-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6">-->
                        <!--    <div class="form-group">-->
                        <!--        <label>canonical</label>-->
                        <!--        <input type="text" class="form-control" placeholder="Enter ..." name="canonical" id="canonical" value="<?//= $value->canonical; ?>">-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="service_img" class="form-label">Upload Image *</label>
                                <input type="hidden" name="old_service_img" value="<?=$category->category_img; ?>">
                                <input class="form-control" type="file" name="service_img" id="service_img" required>
                                <?php if ($category->category_img): ?>
                                    <img src="<?= base_url('uploads/' . $category->category_img); ?>" alt="image" style="max-width: 100px; margin-top: 10px;">
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            <?php } ?>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<!-- /.content -->
</div>