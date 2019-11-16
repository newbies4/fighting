<div class="animation-area">
    <ul class="box-area">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div> <!-- animation-area -->
<section class = "container-fluid">
    <section class="row justify-content-center">
        <section class="col 12 col-sm-6 col-lg-3">
            <?= form_open('Login_controller/admin_login', 'class="admin-login-form-signin"') ?>

            <img src=<?php echo base_url('assets/Content-filter/img/logo.png')?> class="logo">  
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control <?= (form_error('username') == '' ? '':'is-invalid') ?>" name="username" placeholder="Username" required autofocus>
                <?= form_error('firstname'); ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control <?= (form_error('password') == '' ? '':'is-invalid') ?>" name="password" placeholder="Password" required>
                <?= form_error('password'); ?>
            </div>

            <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div>

            <button class="btn btn-lg btn-primary-login btn-block" type="submit">Sign In</button>
            <p><center> Don't have an account? <a href="<?php echo base_url('admin_controller/user_signup');?>"><font color="#0000FF"> Sign In </font> </a> </center></p>
            <?= form_close(); ?>
        </section> <!-- col 12 col-sm-6 col-lg-3 -->
    </section> <!-- row justify-content-center -->
</section> <!-- container-fluid -->