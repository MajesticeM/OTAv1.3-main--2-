<!-- app/Views/auth/forgot_password.php -->

<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Forgot Password</h2>
            <?php if (session()->has('error')) : ?>
                <div class="alert alert-danger"><?= session('error') ?></div>
            <?php endif; ?>
            <form action="<?= base_url('/forgot-password') ?>" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Send Reset Link</button>
                <a href="<?= base_url('/') ?>" class="text-center">I remember my password</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
