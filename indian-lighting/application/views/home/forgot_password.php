<section>
        <div class="login">
            <div class="container">
                <div class="row">

                    <div class="inn" style=" width:765px;">
                        
                        <div class="rhs" style="margin-left:22%;">
                        
                                <div class="form-login">
                                    <?php if ($this->session->flashdata('message')): ?>
        <?php echo $this->session->flashdata('message'); ?>
    <?php endif; ?>
                                  <form action="<?php echo base_url('home/forgot'); ?>" method="post">
                                        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                        <div class="form-group">
                                            <label for="email" class="lb">Email:</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
     
    </section>