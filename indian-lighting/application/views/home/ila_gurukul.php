

<style>
    @media (max-width: 768px) {
    .ht__bradcaump__wrap {
        height: 80px!important;
    }
}
</style>


     <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url('<?= base_url('static/frontend/images/bg/ILA Gurukul Main Banner.webp'); ?>') no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <!--<div class="row">-->
                    <!--    <div class="col-12">-->
                    <!--        <div class="bradcaump__inner text-center">-->
                    <!--            <h2 class="bradcaump-title">ILA Gurukul</h2>-->
                    <!--            <nav class="bradcaump-inner">-->
                    <!--              <a class="breadcrumb-item" href="<?//= base_url(); ?>">Home</a>-->
                    <!--              <span class="brd-separetor">/</span>-->
                    <!--              <span class="breadcrumb-item active">ILA Gurukul</span>-->
                    <!--            </nav>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
 
		
<!--<section class="coming_soon">-->
<!--            <div class="htc__blog__area ptb--120">-->

     <!--<div class="container">-->
                
<!--                <div class="row">-->
                    
<!--                        <div class="col-lg-3 col-xl-3 col-md-4 col-xs-12">-->
<!--                        <div class="categories-menu mrg-xs">-->
<!--                            <div class="category-heading">-->
<!--                               <h3>Suppliers Search</h3>-->
<!--                            </div>-->
<!--                            <div class="category-menu-list p-4 bg-light shadow-sm rounded">-->
<!--                               <form action="<?//= base_url('home/supplier_search') ?>" method="GET">-->
<!--                       <div class="mb-3">-->
<!--                            <label for="company" class="form-label fw-semibold">🔍 Company</label>-->
<!--                            <input type="text" class="form-control rounded-pill" name="company" id="company" placeholder="Search by company name" autocomplete="off">-->
<!--                            <div id="companyList"></div>-->
<!--                        </div>-->

<!--                        <div class="mb-3">-->
<!--                            <label for="product" class="form-label fw-semibold">📦 Product</label>  -->
<!--                            <select class="form-control rounded-pill" name="product">-->
<!--                            <?php// foreach ($category as $cat): ?>-->
<!--                                    <option value="<?//= htmlspecialchars($cat->category_name); ?>"><?//= htmlspecialchars($cat->category_name); ?></option>-->
<!--                                     <?php// endforeach; ?>-->
<!--                                     </select>-->
                            <!--<input type="text" class="form-control rounded-pill" name="product" id="product" placeholder="Search by product" autocomplete="off">-->
                            <!--<div id="productList"></div>-->
<!--                        </div>-->

<!--                        <div class="mb-4">-->
<!--                            <label for="location" class="form-label fw-semibold">📍 Location</label>-->
<!--                            <input type="text" class="form-control rounded-pill" name="location" id="location" placeholder="Search by location" autocomplete="off">-->
<!--                            <div id="locationList"></div>-->
<!--                        </div>-->

<!--                        <button type="submit" class="btn btn-primary w-100 rounded-pill fw-bold" style="background-color:#1f99a4">🔎 Search</button>-->
<!--                    </form>-->

<!--                            </div>-->


<!--                        </div>-->
<!--                    </div>-->
                    
                    
<!--                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<!--<script>-->
<!--$(document).ready(function(){-->

     <!--Company autocomplete-->
<!--    $('#company').keyup(function(){-->
<!--        var query = $(this).val();-->
<!--        if(query != '') {-->
<!--            $.ajax({-->
<!--                url: "<?//= base_url('home/fetch_company') ?>",-->
<!--                method: "POST",-->
<!--                data: {query: query},-->
<!--                success: function(data){-->
<!--                    $('#companyList').fadeIn();-->
<!--                    $('#companyList').html(data);-->
<!--                }-->
<!--            });-->
<!--        } else {-->
<!--            $('#companyList').fadeOut();-->
<!--        }-->
<!--    });-->

<!--    $(document).on('click', '.company_item', function(){-->
<!--        $('#company').val($(this).text());-->
<!--        $('#companyList').fadeOut();-->
<!--    });-->

    <!--// Same logic for product-->
<!--    $('#product').keyup(function(){-->
<!--        var query = $(this).val();-->
<!--        if(query != '') {-->
<!--            $.ajax({-->
<!--                url: "<?//= base_url('home/fetch_product') ?>",-->
<!--                method: "POST",-->
<!--                data: {query: query},-->
<!--                success: function(data){-->
<!--                    $('#productList').fadeIn();-->
<!--                    $('#productList').html(data);-->
<!--                }-->
<!--            });-->
<!--        } else {-->
<!--            $('#productList').fadeOut();-->
<!--        }-->
<!--    });-->

<!--    $(document).on('click', '.product_item', function(){-->
<!--        $('#product').val($(this).text());-->
<!--        $('#productList').fadeOut();-->
<!--    });-->

    <!--// Same logic for location-->
<!--    $('#location').keyup(function(){-->
<!--        var query = $(this).val();-->
<!--        if(query != '') {-->
<!--            $.ajax({-->
<!--                url: "<?//= base_url('home/fetch_location') ?>",-->
<!--                method: "POST",-->
<!--                data: {query: query},-->
<!--                success: function(data){-->
<!--                    $('#locationList').fadeIn();-->
<!--                    $('#locationList').html(data);-->
<!--                }-->
<!--            });-->
<!--        } else {-->
<!--            $('#locationList').fadeOut();-->
<!--        }-->
<!--    });-->

<!--    $(document).on('click', '.location_item', function(){-->
<!--        $('#location').val($(this).text());-->
<!--        $('#locationList').fadeOut();-->
<!--    });-->

<!--});-->
<!--</script>-->

<!--      <div class="col-lg-9 col-xl-9 col-md-8 col-xs-12">-->

 <section class="coming_soon">
            <div class="htc__blog__area ptb--120">

     <div class="container">
     
  <div class="coming-soon-container" style="min-height: 100vh; display: flex; align-items: center; justify-content: center; background: #f8f8f8; text-align: center; padding: 40px;">
  <div>
    <h1 style="font-size: 48px; margin-bottom: 20px; color: #333;">Coming Soon</h1>
    <p style="font-size: 18px; color: #555;">We're working hard to bring something amazing! Stay tuned.</p>
  </div>
</div>
</div>
</div>
</section>
