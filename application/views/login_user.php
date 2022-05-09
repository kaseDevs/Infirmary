<div class="form-main" style="background-image: linear-gradient(to top, rgba(0,0,0,0.2)50%,rgba(0,0,0,0.2)50%), url('<?php echo base_url();?>assets/images/thankdoctors.jpg');">
<div class="auth-content">
    <!--<div class="form">-->
<?php echo form_open('user_controller/login_user');  ?>


    <!--<div class="form">-->
    <!--Flashmessage user registered-->
        <?php if($this->session->flashdata('login_failed')): ?>
                <?php echo "<div class='alert alert-dismissible alert-danger'>
                                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                <strong>".$this->session->flashdata('login_failed')."</strong></a>
                            </div>"; ?>
                <?php endif; ?>
                <!--<div>-->
        <h2 class="form-title"><?= $title; ?></h2>
            <div>
                <input type="text" name="username" class="text-input" placeholder="Enter Username" autofocus>
                <div class="text-danger"><?php echo form_error('username');?></div>
            </div>

            <div>
                <input type="password" name="password" class="text-input" placeholder="Enter Password" autofocus>
                <div class="text-danger"><?php echo form_error('password');?></div>
            </div>
            <div>
                <button type="submit" class="btn btn-big">Log In</button>
            </div>
             <!--<p>Or <a href="<?php// echo base_url(); ?>user_controller/register_user">Sign Up</a></p>-->
             <!--</div>-->
<?php echo form_close(); ?>
</div>
</div>