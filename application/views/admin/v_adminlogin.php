<div class="col-md-4 col-md-offset-4 form-login" id="loginform">
    <form action="<?= base_url() ?>index.php/admin/post_login" class="inner-login" method="post">
        <h3 class="text-center title-login">Login Admin</h3>
        <?php 
            if ($this->session->flashdata('errors')) {
        ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('errors')?>
        </div>
        <?php  
            }
        ?>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        
        <input type="submit" class="btn btn-block btn-custom" value="LOGIN" />
    </form>
</div>