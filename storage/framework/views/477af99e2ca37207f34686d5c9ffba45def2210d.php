<?php $__env->startSection('title', 'Create Petugas'); ?>
<?php $__env->startSection('judul', 'Create Petugas'); ?>
<?php $__env->startSection('subjudul', 'Form Petugas'); ?>
<?php $__env->startSection('content'); ?>
<form action="/admin-create-petugas" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
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
    <div class="form-group">
        <label for="exampleInputEmail1">NIK</label>
        <input type="number" class="form-control" id="exampleInputEmail1" min="0" name="nik">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="nama">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="username">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" class="form-control" id="exampleInputEmail1" name="password">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Telepon</label>
        <input type="number" min="0" class="form-control" id="exampleInputEmail1" name="telp">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success">Save</button>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/admin/create-petugas.blade.php ENDPATH**/ ?>