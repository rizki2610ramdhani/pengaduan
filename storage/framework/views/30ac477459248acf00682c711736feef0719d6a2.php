<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
<div class="login-box" >
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/login" class="h1"><b>Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"></p>

      <form action="/login" method="post">
        <?php echo csrf_field(); ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div><div class="social-auth-links text-center mt-2 mb-3">
            <button type="submit" class="btn btn-block btn-primary">
                Login
            </button>
            <a href="/register" class="btn btn-block btn-danger">
                Daftar
            </a>
          </div>
      </form>


    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/auth/login.blade.php ENDPATH**/ ?>