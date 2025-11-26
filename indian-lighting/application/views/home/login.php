<style>
    .login-form {
    width: 100%;
    max-width: 360px;
    margin: 80px auto;
    border: 1px solid #ccc;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px #aaa;
    background: #fff;
}

        .login-form h2 {
            text-align: center;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
        }
        .login-form button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            color: white;
            cursor: pointer;
        }
        .error, .alert {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
</style>

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: url('<?= base_url('static/frontend/images/bg/2.jpg'); ?>') no-repeat center center / cover;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Login</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?= base_url(); ?>">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Login</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

<!-- login.php -->
<section class="py-5" style="background-color: #f9f9f9; min-height: 80vh;">
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>

            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert"><?= $this->session->flashdata('error'); ?></div>
            <?php endif; ?>

            <?= validation_errors('<div class="error">', '</div>'); ?>

            <form action="<?= base_url('home/do_login'); ?>" method="post">
                <input type="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</section>

