<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
    .register-form {
        max-width: 900px;
        margin: 40px auto;
        background: #fdfdfd;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', sans-serif;
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group {
        flex: 1;
        position: relative;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 12px 40px 12px 40px;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        transition: border-color 0.3s, box-shadow 0.3s;
        background:#fff;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #4e89ff;
        box-shadow: 0 0 0 3px rgba(78, 137, 255, 0.2);
    }

    .form-group i {
        position: absolute;
        top: 12px;
        left: 12px;
        color: #999;
        font-size: 16px;
    }

    .form-group label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
    }

    textarea {
        resize: vertical;
        min-height: 80px;
    }

    #file-name {
        margin-top: 5px;
        font-size: 13px;
        color: #333;
    }

    @media (max-width: 768px) {
        .form-row {
            flex-direction: column;
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
                                <h2 class="bradcaump-title">Registration</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?= base_url(); ?>">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Registration</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

<section class="py-5" style="background-color: #f9f9f9; min-height: 80vh;">
<div class="register-form">
    <h2>Register</h2>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert-success"><?= $this->session->flashdata('success'); ?></div>
    <?php endif; ?>

    <?= validation_errors('<div class="error">', '</div>'); ?>

<form class="register-form" action="<?= base_url('home/my_register'); ?>" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group">
            <i class="fas fa-building"></i>
            <input type="text" name="company_name" placeholder="Company Name" required>
        </div>
        <div class="form-group">
            <i class="fas fa-user"></i>
            <input type="text" name="contact_person" placeholder="Contact Person" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required>
        </div>
       <div class="form-group">
            <i class="fas fa-phone"></i>
            <input type="tel" id="phone" name="phone" placeholder="Phone" maxlength="10" required>
            <small id="phone-error" style="color: red; display: none;">Only 10 digits allowed!</small>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <i class="fas fa-map-marker-alt"></i>
            <input type="text" name="address" placeholder="Address" required>
        </div>
        <div class="form-group">
            <i class="fas fa-city"></i>
            <input type="text" name="city" placeholder="City" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <i class="fas fa-flag"></i>
            <input type="text" name="state" placeholder="State" required>
        </div>
        <div class="form-group">
            <i class="fas fa-mail-bulk"></i>
            <input type="text" name="pincode" placeholder="Pincode" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <i class="fas fa-globe"></i>
            <input type="text" name="country" placeholder="Country" required>
        </div>
        <div class="form-group">
            <i class="fas fa-link"></i>
            <input type="url" name="website" placeholder="Website">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <i class="fas fa-list"></i>
            <select name="category" required>
                <option value="">Select Category</option>
                <option value="Manufacturer">Manufacturer</option>
                <option value="Trader">Trader</option>
                <option value="Service Provider">Service Provider</option>
            </select>
        </div>

        <div class="form-group">
            <i class="fas fa-city"></i>
            <input type="text" name="ila_id" placeholder="ILA ID" required>
            <input type="hidden" name="created_at" value="<?= date('Y-m-d H:i:s'); ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <textarea name="description" placeholder="Company Description..."></textarea>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        </div>
    </div>

    <div style="text-align: center; margin-top: 20px;">
        <button type="submit" class="submit-btn enquiry-btn">Register</button>
    </div>
</form>


</div>
</section>

<!--logo file -->
<script>
    function showFileName(input) {
        const fileName = input.files[0]?.name || "No file chosen";
        document.getElementById("file-name").textContent = "Selected File: " + fileName;
    }
</script>


<!--contact validation-->
<script>
    const phoneInput = document.getElementById("phone");
    const errorMsg = document.getElementById("phone-error");

    phoneInput.addEventListener("input", function () {
        // Remove any non-digit characters
        this.value = this.value.replace(/\D/g, '');

        // Show error if more than 10 digits
        if (this.value.length > 10) {
            errorMsg.style.display = "block";
        } else {
            errorMsg.style.display = "none";
        }
    });
</script>
