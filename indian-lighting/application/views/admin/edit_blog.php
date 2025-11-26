<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit BLog</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('blog/manage'); ?>">List Blog</a></li>
            <li class="breadcrumb-item active">Add Blog</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

   <div class="card card-warning" style="width: 80%;margin:auto;">
              <div class="card-header">
                <h3 class="card-title">Edit Blog</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			   <?php foreach($blog as $value){ ?>
                 <form id="add-blog" method="post" enctype="multipart/form-data" >

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Blog Name</label>
                        <input type="text" name="title"  id="title" class="form-control" placeholder="Enter ..." value="<?= $value->title; ?>" required>
                      </div>
                    </div>
					 <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="blog_date"  id="blog_date" class="form-control" placeholder="Enter ..." value="<?= $value->blog_date; ?>" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Url_slug</label>
                        <input type="text" name="slug_url" id="slug_url" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                 
                  
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="Enter ..." value="<?= $value->description; ?>"required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>meta_title</label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title" laceholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>meta_description</label>
                         <input type="text" class="form-control" placeholder="Enter ..." name="meta_description" id="meta_description">
                      </div>
                    </div>
                   
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>canonical</label>
                         <input type="text" class="form-control" placeholder="Enter ..."name="canonical" id="canonical">
                      </div>
                    </div>
					 </div>
					  <div class="form-group">
                    <label for="img" class="form-label">Upload Image</label>
                     <input type="hidden" name="existing_img" value="<?= $value->img; ?>">
					<input class="form-control" type="file" name="img" id="img" required>
					<?php if ($value->img): ?>
		                <img src="<?= base_url('uploads/' . $value->img); ?>" alt="image" style="max-width: 100px; margin-top: 10px;">
            
                        <?php endif; ?>
                  </div>
                  </div>

                  <!-- input states -->
                

                  
                 
                <div class="card-footer">
                  <button type="submit" onclick="add_blog()" class="btn btn-primary">Submit</button>
                </div>
                </form>
				<?php } ?>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
</div>
</div>

</div>
</div>
<script>
  document.querySelector('#selector').addEventListener("focus", () => {

    document.querySelector('#dropdownbox').setAttribute("style", "");
  });

  function onclickdropitem(id) {
    console.log(id);
    document.querySelector('#selector').value = document.querySelector("#" + id + " p").innerHTML;

    document.querySelector('#dropdownbox').setAttribute("style", "display:none");
  }
</script>