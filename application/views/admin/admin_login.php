<div class="admin-login-wrapper">
<!-- <form class="admin-login-form-signin"> -->

<?php if($this->session->flashdata('login_failed')): ?>
    <p class="text-danger"><?php echo $this->session->flashdata('login_failed'); ?></p>
<?php endif; ?>

<?= form_open('Login_controller/login', 'class="admin-login-form-signin"') ?>

    <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
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

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
<?= form_close(); ?>
</div>