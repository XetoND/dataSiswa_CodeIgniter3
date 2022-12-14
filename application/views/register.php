<section class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="row rounded-4 shadow p-3 mb-5" style="width: 360px;">
        <div class="h6 pb-2 mb-3 text-primary border-bottom border-primary">
        <?php if($this->session->flashdata('flash') ): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Register Telah <strong><?= $this->session->flashdata('flash'); ?></strong>.
            </div>
        <?php endif; ?>
            <h1>
                Register
            </h1>
        </div>
        <form action="" method="POST">
            
            <div class="mb-2">
                <label for="username" class="form-label text-primary">Username</label>
                <input type="text" class="form-control text-primary" id="username" name="username" placeholder="Username">
                <?= form_error('username',"<small class='text-danger'>", "</small>")?>
            </div>
            <div class="mb-2">
                <label for="password" class="form-label text-primary">Password</label>
                <input type="password" class="form-control text-primary" id="password" name="password" placeholder="Password">
                <?= form_error('password',"<small class='text-danger'>", "</small>")?>
            </div>
            <div class="mb-2">
                <label for="password1" class="form-label text-primary">Confirm Password</label>
                <input type="password" class="form-control text-primary" id="password1" name="password1" placeholder="Confirm Password">
                <?= form_error('password1',"<small class='text-danger'>", "</small>")?>
            </div>
            <div >
                <button class="btn btn-primary float-start" type="submit" name="register">Register</button>
            </div>
        </form>
        <small class="text-center">Sudah Punya Akun? <a href="<?=base_url()?>auth/login">Login</a></small>
    </div>
</section>