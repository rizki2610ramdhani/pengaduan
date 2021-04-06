<?php $__env->startSection('title', 'Daftar'); ?>
<?php $__env->startSection('content'); ?>
<div class="login-box" >
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/register" class="h1"><b>Daftar</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"></p>

      <form action="/register" method="post">
        <?php echo csrf_field(); ?>
        <div class="input-group mb-3">
        <?php if($errors->any()): ?>
									<div class="alert alert-danger">
										<ul>
											<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li><?php echo e($error); ?></li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>
									</div>
							    <?php endif; ?>
                                </div>
        <div class="input-group mb-3">
          <input type="number" min="0" class="form-control" placeholder="NIK" name="nik">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama" name="nama">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="number" min="0" class="form-control" placeholder="Telepon" name="telp">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
        <div class="social-auth-links text-center mt-2 mb-3">
            <button type="submit" class="btn btn-block btn-primary">
                Daftar
            </button>
            <a href="/login" class="btn btn-block btn-danger">
                Login
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

<?php echo $__env->make('template.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/auth/register.blade.php ENDPATH**/ ?>