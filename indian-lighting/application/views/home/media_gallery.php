<style>
    .htc__shop__sidebar {
background: linear-gradient(135deg, #fff0f5 0%, #fefefe 100%);
  background-size: cover;
  position: relative;
  /*padding-top: 80px;*/
  padding-bottom: 80px;
    
}

/* Sidebar box */
.htc__shop__left__sidebar {
  background: #fff;
  padding: 25px 20px;
  border-radius: 8px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.06);
}
@media (max-width: 768px) {
    .ht__bradcaump__wrap {
        height: 80px!important;
    }
}
.text-weight{
    font-weight: 600;
}
</style>

 <!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: url('<?= base_url('static/frontend/images/bg/Media Gallery Main Banner.webp'); ?>') no-repeat center center / cover;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <!--<div class="row">-->
                    <!--    <div class="col-12">-->
                    <!--        <div class="bradcaump__inner text-center">-->
                    <!--            <h2 class="bradcaump-title">Media gallery</h2>-->
                    <!--            <nav class="bradcaump-inner">-->
                    <!--              <a class="breadcrumb-item" href="<?//= base_url(); ?>">Home</a>-->
                    <!--              <span class="brd-separetor">/</span>-->
                    <!--              <span class="breadcrumb-item active">Media Gallery</span>-->
                    <!--            </nav>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        
<!--      <div class="container mt-4">-->
<!--    <h2 class="text-center mb-4">Gallery</h2>-->
<!--    <div class="row">-->
<!--        <?php// if (!empty($images)): ?>-->
<!--            <?php //foreach ($images as $img): ?>-->
<!--                <div class="premium-img-wrap me-3 mb-2 col-md-3 col-6">-->
<!--                    <img src="<?//= base_url($img->image); ?>" class="img-fluid" style="max-height: 150px;">-->
<!--                </div>-->
<!--            <?php// endforeach; ?>-->
<!--        <?php //else: ?>-->
<!--            <p>No images found.</p>-->
<!--        <?php// endif; ?>-->
<!--    </div>-->
<!--</div>-->



        
        
        <!-- Start BLog Area -->
<section class="htc__shop__sidebar py-5">
  <div class="container">
    <div class="row g-4">
      <?php if (!empty($media_gallery)) : ?>
        <?php foreach ($media_gallery as $media) : ?>
          <?php
            $pdf_url   = base_url('admin/uploads/' . $media->file_name);
            $pdf_title = !empty($media->title) ? $media->title : 'Untitled PDF';
            $image_url = base_url('admin/uploads/' . $media->media_image);
          ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
              
              <!-- Image Section -->
             <div class="card-img-top bg-light-media d-flex align-items-center justify-content-center" 
                 style="min-height:220px; max-height:350px;">
              <?php if (!empty($media->media_image)) : ?>
                <img src="<?= $image_url; ?>" 
                     alt="<?= htmlspecialchars($pdf_title, ENT_QUOTES, 'UTF-8'); ?>" 
                     class="img-fluid" 
                     style="object-fit:contain; max-height:100%; max-width:100%;">
              <?php else : ?>
                <span class="text-muted">No Image</span>
              <?php endif; ?>
            </div>

              
              <!-- Body Section -->
              <div class="card-body text-center d-flex flex-column">
                <h6 class="card-title text-truncate text-weight mb-3">
                  <?= htmlspecialchars($pdf_title, ENT_QUOTES, 'UTF-8'); ?>
                </h6>
                <div class="mt-auto d-flex justify-content-center gap-2">
                  <a href="<?= $pdf_url; ?>" target="_blank" class="enquiry-btn btn btn-outline-primary btn-sm px-3">
                    🔍 Preview
                  </a>
                  <a href="<?= $pdf_url; ?>" download class="enquiry-btn btn btn-primary btn-sm px-3">
                    ⬇ Download
                  </a>
                </div>
              </div>
            
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <div class="col-12">
          <div class="alert alert-info text-center">No PDFs found.</div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
