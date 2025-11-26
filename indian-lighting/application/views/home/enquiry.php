<style>
.inquiry-form-section {
  background-image: linear-gradient(45deg, rgba(26, 168, 226, 0.6), rgba(26, 168, 226, 0.6)), url(/files/bg-layer.jpg);
  background-size: cover;
  background-position: center;
  z-index: 1;
}

.inquiry-main .field {
  margin-bottom: 1.5rem;
  position: relative;
}

.inquiry-main input.inquiry-input,
.inquiry-main textarea.inquiry-input {
  background: transparent;
  border: 0;
  border-bottom: 2px solid #ccc;
  font-size: 1rem;
  padding: 10px 5px;
  width: 100%;
  outline: none;
  transition: all 0.3s ease;
}

.inquiry-main input.inquiry-input:focus,
.inquiry-main textarea.inquiry-input:focus {
  border-color: #1aa8e2;
  box-shadow: none;
}

.inquiry-main label.inquiry-label span {
  position: absolute;
  top: 10px;
  left: 5px;
  color: #888;
  transition: 0.3s ease;
  pointer-events: none;
}

.inquiry-main input.inquiry-input:focus + label span,
.inquiry-main input.inquiry-input:not(:placeholder-shown) + label span,
.inquiry-main textarea.inquiry-input:focus + label span,
.inquiry-main textarea.inquiry-input:not(:placeholder-shown) + label span {
  top: -18px;
  font-size: 0.85rem;
  color: #1aa8e2;
}

.btn-primary {
  background-color:#60365e;
  border: none;
  font-weight: 600;
  font-size: 1rem;
}

.btn-primary:hover {
  background-color: #1aa8e2;
}
.text-primary-one{
    color: #000;
}
@media screen and (max-width: 767px) {
  .row.p-4 {
    padding: 1.5rem 1rem !important;
  }

  img.img-fluid.mb-4 {
    width: 140px !important;
  }

  h2.text-primary-one {
    font-size: 1.8rem;
    color:#000;
  }

  .btn {
    width: 100%;
  }
}
</style>


<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: url('<?= base_url('static/frontend/images/bg/2.jpg'); ?>') no-repeat center center / cover;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Enquiry Now</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?= base_url(); ?>">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Enquiry Now</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- End Bradcaump area -->
  
  <!--enquiry section -->
<section class="htc__shop__sidebar modern-wave-section bg__white ptb--120">
  <div class="py-5 bg-layer inquiry-form-section">
    <div class="container">
      <div class="row p-4 shadow-lg rounded bg-white">
        <!-- Left Side -->
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center p-4 text-center">
          <h2 class="text-primary-one mb-4">Enquiry Now</h2>
          <img src="<?= base_url('static/frontend/images/logo/ILA Logo_(1).png'); ?>" alt="Logo" title="ILA Logo" style="width: 200px; height: auto;" class="img-fluid mb-4">
          <p class="lead text-muted px-3">Have questions? Fill the form and our team will reach out to you shortly.</p>
        </div>

        <!-- Right Side Form -->
        <div class="col-md-6">
          <h4 class="text-center text-dark mt-4 mb-3">Let's Get in Touch</h4>
          <form id="inquiry" class="inquiry-main" accept-charset="utf-8">
            <div class="field">
              <input class="form-control inquiry-input" name="lead_name" type="text" id="lead_name" placeholder=" ">
              <label class="inquiry-label"><span>Name</span></label>
            </div>
            <div class="field">
              <input class="form-control inquiry-input" name="company_name" type="text" id="company_name" placeholder=" ">
              <label class="inquiry-label"><span>Company Name</span></label>
            </div>
            <div class="field">
              <input class="form-control inquiry-input" name="email" type="email" id="email" placeholder=" ">
              <label class="inquiry-label"><span>Email</span></label>
            </div>
            <div class="field">
              <input class="form-control inquiry-input" name="mobile_no" type="number" id="mobile_no" maxlength="10" placeholder=" ">
              <label class="inquiry-label"><span>Mobile No</span></label>
            </div>
            <div class="field">
              <textarea class="form-control inquiry-input" name="message" id="message" rows="4" placeholder=" "></textarea>
              <label class="inquiry-label"><span>Message</span></label>
            </div>
            <div class="text-center mt-4">
              <button class="btn btn-primary px-5 py-2 rounded-pill" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>